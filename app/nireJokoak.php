<?php session_start();
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel='stylesheet' href='CSS/webOrrialde.css' type="text/css">
    <script type="text/javascript">
      function datuakbidali(){
        document.datuakbidaliformulario.submit();
      }
    </script>
    <header class="header" id="hasiera">
            <br>
            <h1> NIRE JOKOAK </h1>
            <h4 id="erabiltzaile">Erabiltzailea: <?php echo $_SESSION['izen_abizenak'] ?></h4>
            <img src="imagenes/menu.svg" alt="" class="menu">
            <nav class="nabegazio-menua">
              <a href="webOrrialde2.php">DENDA</a>
              <a href="nireJokoak.php">NIRE PRODUKTUAK</a>
              <a href="datuakAldatu.php">AJUSTEAK</a> 
            </nav>
    </header>
    <br>
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
        $result= $conn->query("SELECT irudia,prezioa,izena,id FROM `erosketa`,`jokoak` WHERE `erabiltzaileNan` = '78995188D' AND `jokoId` = `id`");
        echo '<form action="php/ezabatuJokoa.php" method="post" style="text-align:center" name="datuakbidaliformulario">';
        echo '<div class="produktuKatalogoa">';
        while($row = mysqli_fetch_array($result)){
          echo' <div class="produktua">
                  <input class="botoia" type="radio" value='.$row['id'].' name="id"">
                  <h2>'.$row['izena'].'</h2>
                  <img src="'.$row['irudia'].'"width="100" height="100"/>
                  <h3>'.$row['prezioa'].'€</h3>
                </div>';
        }   
        echo'</div> <br> <input class="botoia" type="button" value="Ezabatu" onclick="datuakbidali()"> 
        </form>';       
        mysqli_close($conn);
        
      ?> 
      <script src="JS/webOrrialde.js"></script> 
  </body>
</html>

