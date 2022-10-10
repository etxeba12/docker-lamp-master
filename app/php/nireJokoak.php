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
  
  
  $nan = $_SESSION['nan'];
  $id = $_POST['id'];
  $result= "INSERT INTO `erosketa`(`erabiltzaileNan`,`jokoId`) VALUES ('$nan','$id')";
  $ejecutar = mysqli_query($conn,$result);
  
  
  echo'
      <script> 
          window.alert("erosketa ondo egin da");
          window.location = "../webOrrialde2.php";
      </script>
  ';
  

  mysqli_close($conn);
?>
