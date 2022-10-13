<?php session_start();
  // phpinfo();
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";

  $conn = mysqli_connect($hostname,$username,$password,$db);

  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }
  
  $izen_abizenak = $_POST['izen_abizenak'];
  $pasahitza = $_POST['pasahitza'];
  

  $result= $conn->query("SELECT * FROM `erabiltzaileak` WHERE `izen_abizenak`= '$izen_abizenak' AND `pasahitza`='$pasahitza'");
  $row = mysqli_fetch_array($result);
  $izen_abizenak = $row["izen_abizenak"];
  $nan = $row["nan"];
  $telefonoa = $row["telefonoa"];
  $jaiotzeData = $row["jaiotze-data"];
  $timestamp = strtotime($jaiotzeData); 
  $newDate = date("d/m/Y", $timestamp );
  $email = $row["email"];
  $pasahitza = $row["pasahitza"];
  $balorazioa = $row["Balorazioa"];
  $_SESSION['izen_abizenak'] = $izen_abizenak;
  $_SESSION['nan'] = $nan;
  $_SESSION['telefonoa'] = $telefonoa;
  $_SESSION['jaiotzeData'] = $newDate;
  $_SESSION['email'] = $email;
  $_SESSION['pasahitza'] = $pasahitza;
  $_SESSION['balorazioa'] = $balorazioa;
  
  
  if (is_null($izen_abizenak) ) {
    echo'
        <script> 
            window.alert("izen edo pasahitza txarto sartu duzu")
            window.location = "../index.html";
        </script>
    ';
  } else{
    echo'
        <script> 
            window.location = "../webOrrialde2.php";
        </script>
    ';
  }

  mysqli_close($conn);
?>
