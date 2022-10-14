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
  
  $id=$_POST['id'];
  $izena = $_POST['izenJokoa'];
  $balorazioa = $_POST['balorazioa'];
  $prezioa = $_POST['prezioa'];
  $adina = $_POST['adinminimoa'];
  $deskrib = $_POST['deskribapena'];
  $result= "UPDATE `jokoak` SET `izena`='$izena',`prezioa`='$prezioa',`adin_minimoa`='$adina',`deskribapena`='$deskrib',`Balorazioa`='$balorazioa' WHERE `id`='$id'";
  $ejecutar = mysqli_query($conn,$result);


  echo'
      <script> 
          window.alert("aldaketak ondo egin da");
          window.location = "../webOrrialde2.php";
      </script>
  ';
  

  mysqli_close($conn);
?>