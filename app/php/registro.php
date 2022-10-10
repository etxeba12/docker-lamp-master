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
    $jaiotze_data = $_POST['jaiotze_data'];
    $email= $_POST['email'];
    
    $query = "INSERT INTO `erabiltzaileak`(`izen_abizenak`,`nan`,`telefonoa`,`email`,`jaiotze_data`,`pasahitza`) 
            VALUES ('$izen_abizenak','$nan','$telefonoa', '$email','$jaiotze_data','$pasahitza')";

    $ejecutar = mysqli_query($conn,$query);

    if ($ejecutar) {
        echo'
            <script> 
                window.location = "../index.html";
            </script>
        ';
      } else{
        printf("Errormessage: %s\n", $conn->error);
      }
    
    mysqli_close($conn);
?>