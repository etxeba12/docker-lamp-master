<?php
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";
    
    $conn = mysqli_connect($hostname,$username,$password,$db);
    
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
      }
      ob_end_flush();

    //parametroak lortu
    $izen_abizenak=$_POST['izen_abizenak'];
    $nan = $_POST['nan'];
    $telefonoa = $_POST['telefonoa'];
    $pasahitza = $_POST['pasahitza'];
    $jaiotze_data = $_POST['jaiotze_data'];
    $email= $_POST['email'];
    
    if (!hash_equals($_SESSION['token'], $_POST['token'])) {
      //prepare and bind
      $stmt = $conn->prepare("INSERT INTO erabiltzaileak(izen_abizenak,nan,telefonoa,email,jaiotze_data,pasahitza) VALUES (?,?,?,?,?,?)");
      $stmt -> bind_param("ssisss",$izen_abizenak,$nan,$telefonoa,$email,$jaiotze_data,$pasahitza);

      //execute
      $ejecutar = $stmt->execute();

      if ($ejecutar) {
          echo'
              <script> 
                  window.location = "../index.php";
              </script>
          ';
        } else{
          printf("Errormessage: %s\n", $conn->error);
        }
    } else {
      echo'
      <script> 
          window.location = "../registro.php";
      </script>
      ';
    }
    
    
    mysqli_close($conn);
?>