<?php session_start();
  if($_SESSION['saioa']!=1){
    header("Location:http://localhost:81/index.php");
  }
  $inactivo = 60;
 
  if(isset($_SESSION['denbora']) ) {
  $vida_session = time() - $_SESSION['tiempo'];
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
    <title>Zure datuak</title>
    <link rel='stylesheet' href='CSS/datuakAldatu.css' type="text/css">
    <script type="text/javascript">
      function datuakEgiaztatu(){
        if(izenaEgiaztatu() && telefonoaEgiaztatu() && emailEgiaztatu()){
          document.formularioregistro.submit();
        }else{
          window.alert("datuak txarto sartu dituzu");
          window.location="registro.html";
        }
      }
      function izenaEgiaztatu(){
        let izenaAbizen = document.formularioregistro.izen_abizenak.value;
        let regex = /^[a-zA-Z]+$/;
        if(regex.test(izenaAbizen)){
          return true;
        }else{  
          return false;
        }
      }
      function telefonoaEgiaztatu(){
        let telefono = document.formularioregistro.telefonoa.value;
        if(telefono.length == 9 && isNaN(telefono) == false){
          return true;
        }else{
          return false;
        }
      }
      function emailEgiaztatu(){
        let emaila = document.formularioregistro.email.value;
        if (/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(emaila)){
          return true;
        } else {
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="laukia">
        <form action="php/datuakAldatu.php" method="post" style="text-align:center" name="formularioregistro">
            <div class="erregistroa"><h1>Zure datuak</h1></div>
            <input class="bete" type="text"  name="izen_abizenak" Value='<?php echo $_SESSION['izen_abizenak'] ?>'>
            <input class="bete" type="text" readonly  name="nan" value='<?php echo $_SESSION['nan'] ?>'>
            <input class="bete" type="text" name="telefonoa" value='<?php echo $_SESSION['telefonoa'] ?>'> <br>
            <input class="bete" type="text" readonly name="jaiotze_data" value='<?php echo $_SESSION['jaiotzeData'] ?>'><br>
            <input class="bete" type="text" name="email" value='<?php echo $_SESSION['email'] ?>'>
            <input class="bete" type="password" name="pasahitza" value='<?php echo $_SESSION['pasahitza'] ?>'> <br>
            <input class="botoia" type="button" value="Gorde" onclick="datuakEgiaztatu()"> 
            <p><a  href="webOrrialde2.php">Datuak aldatu nahi ez badituzu, dendara bueltatu</a></p>
            </div>
        </form>
    </div> 
  </body>
</html>
