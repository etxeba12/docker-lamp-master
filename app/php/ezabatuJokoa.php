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
  
  $id = $_POST['id'];
  $result= "DELETE FROM `erosketa` WHERE `jokoId` = '$id'";
  $ejecutar = mysqli_query($conn,$result);
  
  
  echo'
      <script> 
          window.alert("jokoa ezabatu egin da");
          window.location = "../nireJokoak.php";
      </script>
  ';
  

  mysqli_close($conn);
?>