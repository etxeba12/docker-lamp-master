<?php session_start();
  if($_SESSION['saioa']!=1){
    header("Location:http://localhost:81/index.php");
  }
  $inactivo = 480;
 
  if(isset($_SESSION['denbora']) ) {
  $vida_session = time() - $_SESSION['denbora'];
      if($vida_session > $inactivo)
      {
        session_destroy();
        
        echo'
          <script> 
            window.alert("Saioa berrabiarazi behar duzu")
            window.location= "index.php"
          </script>
        ';
        
        
      }
  }
 
  $_SESSION['denbora'] = time();
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Foroa</title>
    <meta http-equil="Content-Security-Policy" content=" 'self'  'unsafe-inline'">
    <link rel='stylesheet' href='CSS/webOrrialde.css' type="text/css">
    <script type="text/javascript">
      function datuakbidali(){
        document.datuakbidaliformulario.submit();
      }
    </script>
    <header class="header" id="hasiera">
            <br>
            <h1>JOKOEN FOROA </h1>
            <h4 id="erabiltzaile">Erabiltzailea: <?php echo $_SESSION['izen_abizenak'] ?></h4>
            <img src="imagenes/menu.svg" alt="" class="menu">
            <nav class="nabegazio-menua">
              <a href="webOrrialde2.php">JOKOEN FOROA</a>
              <a href="jokoakAldatu.php">JOKOAK ALDATU</a>
              <a href="nireJokoak.php">NIRE PRODUKTUAK</a>
              <a href="datuakAldatu.php">AJUSTEAK</a>
              <a href="php/saioaitxi.php">SAIOA ITXI</a> 
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
        $result= $conn->query("SELECT * FROM `jokoak`");
        echo '<form action="php/nireJokoak.php" method="post" style="text-align:center" name="datuakbidaliformulario">';
        echo '<div class="produktuKatalogoa">';
        while($row = mysqli_fetch_array($result)){
          echo' <div class="produktua">
                  <input class="botoia" type="radio" value='.$row['id'].' name="id"">
                  <h2>'.$row['izena'].'</h2>
                  <img src="'.$row['irudia'].'"width="100" height="100"/>
                  <h3>Balorazioa: '.$row['Balorazioa'].'</h3>
                  <h4>'.$row['prezioa'].'€</h4>
                </div>';
        }   
        echo'</div> <br> <input class="botoia" type="button" value="GORDE" onclick="datuakbidali()"> 
        </form>';       

        mysqli_close($conn);
        
      ?> 
      <script src="JS/webOrrialde.js"></script> 
  </body>
</html>
