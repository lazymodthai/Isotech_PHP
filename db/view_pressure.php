<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="css/main.css">
</head>

<body style="background-color: black;">

  <div class="row g-0">
    <div class="col-10">
      <input id="inSearch" value="" class="form-control" placeholder="Enter Code or Ref">
    </div>
    <div class="col-2">
      <button type='button' id="btnSearch" onclick="goSearch()" class="btn btn-dark w-100"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>


  <script>
    var input = document.getElementById("inSearch");
    input.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("btnSearch").click();
      }
    });

    function goSearch() {
      let q = document.getElementById("inSearch").value;
      window.open('?code=' + q, '_self')
    }

  </script>

  <?php
  include_once("conf.php");
  include_once("func.php");

  $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $code = isset($_GET['code']) ? $_GET['code'] : "";



  $sql = "SELECT * FROM cal_pressure WHERE Code LIKE '%$code%'";
  $result = mysqli_query($conn, $sql);

  echo "<table class='table table-striped table-dark'>
            <tr href='#' class='header'>
            <th>Code</th>
            <th>Temp <span style='opacity:0.4'>(°C)</span></th>
            <th>Humi <span style='opacity:0.4'>(%RH)</span></th>
            <th class='lTd'>Pressure Set</th>
            <th class='lTd'>Pressure Read</th>
            </tr>
            ";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Code'] . "</td>";
    echo "<td>" . $row['Room_T'] . "</td>";
    echo "<td>" . $row['Room_H'] . "</td>";
    echo "<td class='lTd'>" . P0($row['Press1']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press1_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    // Caldate
    echo "<td><span style='color:#0CFF00'>" . $row['Caldate'] . "</span></td>";
    // $c = $row['Code'];
    // $sql2 = "SELECT * FROM cpy WHERE Code = '$c'";
    // $result2 = mysqli_query($conn, $sql2);
    // if ($row2 = mysqli_fetch_array($result2)) {
    //   echo "<td><span style='color:#0CFF00'>" . $row2['Caldate'] . "</span></td>";
    // }
    // -------
    echo "<td colspan='2'>Unit = ".$row['Press_Unit']."</td>";
    echo "<td class='lTd'>" . P0($row['Press2']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press2_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press3']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press3_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press4']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press4_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press5']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press5_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press6']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press6_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press7']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press7_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press8']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press8_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press9']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press9_Cal']) . "</td>";
    echo "</tr>";
    // -------------------
    echo "<tr class='bTd'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P0($row['Press10']) . "</td>";
    echo "<td class='lTd'>" . P1($row['Press10_Cal']) . "</td>";
    echo "</tr>";
  }
  echo "</table>";


  mysqli_close($conn);

  ?>


</body>

</html>