<?php
    session_start();
    
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
  
    $_SESSION['saioa'] = 0;
    $txarto = 0;

    $stmt2 = $conn -> prepare("UPDATE erabiltzaileak SET blokeatuta=? WHERE izen_abizenak=?");
    $stmt2 -> bind_param('is',$txarto,$_SESSION['izen_abizenak']);
    $stmt2 -> execute(); 
    
    session_destroy();
    header("location: ../index.php");

?>