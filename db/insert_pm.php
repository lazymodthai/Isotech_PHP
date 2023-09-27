<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>บริษัท ไอโซเทค อินสตรูเมนท์ (ไทยแลนด์) จำกัด</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/isologo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <center>
        <?php
        // Connect-------------
        include_once("conf.php");
        include_once("func.php");
        $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //---------------------
        $hosp_code = $_REQUEST['hosp_code'];

        $LKG = $_REQUEST['LKG'];
        $GROUND = $_REQUEST['GROUND'];
        $Comments = $_REQUEST['Comments'];
        //---------------------
        $PM_V_Checked1 = isset($_REQUEST['pm_check__v1']) ? $_REQUEST['pm_check__v1'] : "-";
        $PM_V_Checked2 = isset($_REQUEST['pm_check__v2']) ? $_REQUEST['pm_check__v2'] : "-";
        $PM_V_Checked3 = isset($_REQUEST['pm_check__v3']) ? $_REQUEST['pm_check__v3'] : "-";
        $PM_V_Checked4 = isset($_REQUEST['pm_check__v4']) ? $_REQUEST['pm_check__v4'] : "-";
        $PM_V_Checked5 = isset($_REQUEST['pm_check__v5']) ? $_REQUEST['pm_check__v5'] : "-";
        $PM_V_Checked6 = isset($_REQUEST['pm_check__v6']) ? $_REQUEST['pm_check__v6'] : "-";
        $PM_V_Checked7 = isset($_REQUEST['pm_check__v7']) ? $_REQUEST['pm_check__v7'] : "-";
        $PM_V_Checked8 = isset($_REQUEST['pm_check__v8']) ? $_REQUEST['pm_check__v8'] : "-";
        $PM_V_Checked9 = isset($_REQUEST['pm_check__v9']) ? $_REQUEST['pm_check__v9'] : "-";
        $PM_V_Checked10 = isset($_REQUEST['pm_check__v10']) ? $_REQUEST['pm_check__v10'] : "-";
        $PM_V_Checked11 = isset($_REQUEST['pm_check__v11']) ? $_REQUEST['pm_check__v11'] : "-";
        $PM_V_Checked12 = isset($_REQUEST['pm_check__v12']) ? $_REQUEST['pm_check__v12'] : "-";
        $PM_V_Checked13 = isset($_REQUEST['pm_check__v13']) ? $_REQUEST['pm_check__v13'] : "-";
        $PM_V_Checked14 = isset($_REQUEST['pm_check__v14']) ? $_REQUEST['pm_check__v14'] : "-";
        $PM_V_Checked15 = isset($_REQUEST['pm_check__v15']) ? $_REQUEST['pm_check__v15'] : "-";

        $PM_P_Checked1 = isset($_REQUEST['pm_check__p1']) ? $_REQUEST['pm_check__p1'] : "-";
        $PM_P_Checked2 = isset($_REQUEST['pm_check__p2']) ? $_REQUEST['pm_check__p2'] : "-";
        $PM_P_Checked3 = isset($_REQUEST['pm_check__p3']) ? $_REQUEST['pm_check__p3'] : "-";
        $PM_P_Checked4 = isset($_REQUEST['pm_check__p4']) ? $_REQUEST['pm_check__p4'] : "-";
        $PM_P_Checked5 = isset($_REQUEST['pm_check__p5']) ? $_REQUEST['pm_check__p5'] : "-";
        $PM_P_Checked6 = isset($_REQUEST['pm_check__p6']) ? $_REQUEST['pm_check__p6'] : "-";
        $PM_P_Checked7 = isset($_REQUEST['pm_check__p7']) ? $_REQUEST['pm_check__p7'] : "-";
        $PM_P_Checked8 = isset($_REQUEST['pm_check__p8']) ? $_REQUEST['pm_check__p8'] : "-";
        $PM_P_Checked9 = isset($_REQUEST['pm_check__p9']) ? $_REQUEST['pm_check__p9'] : "-";
        $PM_P_Checked10 = isset($_REQUEST['pm_check__p10']) ? $_REQUEST['pm_check__p10'] : "-";
        $PM_P_Checked11 = isset($_REQUEST['pm_check__p11']) ? $_REQUEST['pm_check__p11'] : "-";
        $PM_P_Checked12 = isset($_REQUEST['pm_check__p12']) ? $_REQUEST['pm_check__p12'] : "-";
        $PM_P_Checked13 = isset($_REQUEST['pm_check__p13']) ? $_REQUEST['pm_check__p13'] : "-";
        $PM_P_Checked14 = isset($_REQUEST['pm_check__p14']) ? $_REQUEST['pm_check__p14'] : "-";
        $PM_P_Checked15 = isset($_REQUEST['pm_check__p15']) ? $_REQUEST['pm_check__p15'] : "-";




        $PMdate = date("Y-m-d");
        $sql = "INSERT INTO pm_checked (
            PMdate,
            Code,
            LKG,GROUND,Comments,
            PM_V_Checked1,PM_V_Checked2,PM_V_Checked3,PM_V_Checked4,PM_V_Checked5,PM_V_Checked6,PM_V_Checked7,PM_V_Checked8,PM_V_Checked9,PM_V_Checked10,
            PM_V_Checked11,PM_V_Checked12,PM_V_Checked13,PM_V_Checked14,PM_V_Checked15,
            PM_P_Checked1,PM_P_Checked2,PM_P_Checked3,PM_P_Checked4,PM_P_Checked5,PM_P_Checked6,PM_P_Checked7,PM_P_Checked8,PM_P_Checked9,PM_P_Checked10,
            PM_P_Checked11,PM_P_Checked12,PM_P_Checked13,PM_P_Checked14,PM_P_Checked15

            ) VALUES (
            '$PMdate',
            '$hosp_code',
            '$LKG','$GROUND','$Comments',
            '$PM_V_Checked1','$PM_V_Checked2','$PM_V_Checked3','$PM_V_Checked4','$PM_V_Checked5','$PM_V_Checked6','$PM_V_Checked7','$PM_V_Checked8','$PM_V_Checked9','$PM_V_Checked10',
            '$PM_V_Checked11','$PM_V_Checked12','$PM_V_Checked13','$PM_V_Checked14','$PM_V_Checked15',
            '$PM_P_Checked1','$PM_P_Checked2','$PM_P_Checked3','$PM_P_Checked4','$PM_P_Checked5','$PM_P_Checked6','$PM_P_Checked7','$PM_P_Checked8','$PM_P_Checked9','$PM_P_Checked10',
            '$PM_P_Checked11','$PM_P_Checked12','$PM_P_Checked13','$PM_P_Checked14','$PM_P_Checked15'
            )";


        $upPMdate = "UPDATE cpy SET PMdate = '$PMdate' WHERE Code = '$hosp_code'";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $upPMdate)) {
            echo "<button type='button' class='btn btn-success'>เพิ่มข้อมูลเรียบร้อยแล้ว</button>
            <script type='text/javascript'>setTimeout('window.close();', 3000);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>



</body>

</html>