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
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>JOKO DATUAK</title>
    <link rel='stylesheet' href='CSS/datuakAldatu.css' type="text/css">
    <script type="text/javascript">
      function datuakaldatu(){
        document.datuakbidaliformulario.submit();
      }
    </script>
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
        $id = $_POST['id'];
        $result= $conn->query("SELECT * FROM `jokoak` WHERE `id` = '$id'");
        echo '<form action="php/jokoakAldatu.php" method="post" style="text-align:center" name="datuakbidaliformulario">';
        echo '<div class="laukia">
              <div class="erregistroa"><h1>Joko datuak</h1> ';
        while($row = mysqli_fetch_array($result)){
          echo' <input class="bete" hidden type="text"  name="id" Value='.$id.'>
                <input class="bete" type="text"  name="izenJokoa" Value='.$row['izena'].'>
                <input class="bete" type="text"  name="balorazioa" Value='.$row['Balorazioa'].'>
                <input class="bete" type="text"  name="prezioa" value='.$row['prezioa'].'>
                <input class="bete" type="text"  name="adinminimoa" value='.$row['adin_minimoa'].'>
                <input class="bete" type="text"  name="deskribapena" value='.$row['deskribapena'].'>
                ';
        }   
        echo' <input class="botoia" type="button" value="ALDATU" onclick="datuakaldatu()"> <br>
         <p><a href="jokoakAldatu.php">jokoen aldaketa menura bueltatu</a></p>
         </div> </div> 
        </form> ';       
        mysqli_close($conn);
        
      ?> 
   
        
    </div> 
  </body>
</html>