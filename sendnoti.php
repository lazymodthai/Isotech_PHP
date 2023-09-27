<?php
    include_once('conf.php');
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
         $pdo = new \PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }


    $message = $name = $company = $tel = $email = $message = "";

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $company = $_POST['company'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $line = $_POST['line'];
        $message= $_POST['message'];

        // Isotech
        $sToken = $linetoken;

        // Test
        // $sToken = "";

    // Insert SQL
    $sql = "INSERT INTO line_message(name,company,tel,email,line,message) VALUES(:name,:company,:tel,:email,:line,:message)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':company',$company,PDO::PARAM_STR);
    $query->bindParam(':tel',$tel,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':line',$line,PDO::PARAM_STR);
    $query->bindParam(':message',$message,PDO::PARAM_STR);
    $query->execute();

    //  Send Line Notify
    $sMessage = "\nจากคุณ: ".$name."\n";
    $sMessage .= "หน่วยงาน: ".$company."\n";
    $sMessage .= "โทร: ".$tel."\n";
    $sMessage .= "Email: ".$email."\n";
    $sMessage .= "Line: ".$line."\n";
    $sMessage .= "ข้อความ: ".$message."\n";
    date_default_timezone_set('asia/bangkok');
    $sMessage .= "วันที่: ".DateThai(date("d-m-Y"))." เวลา: ".date("H:i")."น.";


	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $chOne, CURLOPT_POST, 1);
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );

	//Result error
	if(curl_error($chOne))
	{
		echo 'error:' . curl_error($chOne);
	}
	else {
		$result_ = json_decode($result, true);
        echo "<script>
            alert('ส่งข้อความแล้ว ขอบคุณค่ะ');
            window.history.back();
            </script>";
	}
	curl_close( $chOne );
}

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}
?>