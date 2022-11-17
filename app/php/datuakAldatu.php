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

    $izen_abizenak=$_POST['izen_abizenak'];
    $nan = $_POST['nan'];
    $telefonoa = $_POST['telefonoa'];
    $pasahitza = $_POST['pasahitza'];
    $email= $_POST['email'];
    
    $query = "UPDATE erabiltzaileak SET izen_abizenak = '$izen_abizenak', pasahitza = '$pasahitza', telefonoa = '$telefonoa', email = '$email' WHERE nan = '$nan'";

    $ejecutar = mysqli_query($conn,$query);

    if ($ejecutar) {
        echo'
            <script> 
                window.location = "../index.php";
            </script>
        '; 
        session_destroy();
      } else{
        printf("Errormessage: %s\n", $conn->error);
      }
    
    mysqli_close($conn);
?>