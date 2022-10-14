<?php session_start();
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>JOKO DATUAK</title>
    <link rel='stylesheet' href='CSS/datuakAldatu.css' type="text/css">
  </head>
  <body>
  <?php 
        
        $hostname = "db";
        $username = "admin";
        $password = "test";
        $db = "database";

        $conn = mysqli_connect($hostname,$username,$password,$db);

        if ($conn->connect_error) {
          die("Database connection failed: " . $conn->connect_error);
        }
        $result= $conn->query("SELECT * FROM `jokoak`");
        echo '<form action="php/jokoakAldatu.php" method="post" style="text-align:center" name="datuakbidaliformulario">';
        echo '<div class="laukia">';
        while($row = mysqli_fetch_array($result)){
          echo'';
        }   
        echo'</div> <br> <input class="botoia" type="button" value="ALDATU" onclick="datuakbidali()"> 
        </form>';       
        mysqli_close($conn);
        
      ?> 
    <div class="laukia">
        <form action="php/datuakAldatu.php" method="post" style="text-align:center" name="formularioregistro">
            <div class="erregistroa"><h1>Zure datuak</h1></div>
            <input class="bete" type="text"  name="izenJokoa" Value='<?php echo $_POST['izena'] ?>'>
            <input class="bete" type="text"  name="prezioa" value='<?php echo $_POST['prezioa'] ?>'>
            <input class="botoia" type="button" value="Gorde" onclick="datuakEgiaztatu()"> 
            <p><a  href="jokoakAldatu.php">Datuak honen datuak aldatu nahi ez badituzu, jokoen aldaketa menura bueltatu</a></p>
            </div>
        </form>
    </div> 
  </body>
</html>