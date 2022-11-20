<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Erregistroa</title>
    <meta http-equil="Content-Security-Policy" content=" 'self'  'unsafe-inline'">
    <link rel='stylesheet' href='CSS/registro.css'>
    <script type="text/javascript">
      function datuakEgiaztatu(){
        if(izenaEgiaztatu() && nanEgiaztatu() && telefonoaEgiaztatu() && emailEgiaztatu() && pasahitzaEgiaztatu()){
          document.formularioregistro.submit();
        }else{
          window.alert("datuak txarto sartu dituzu");
          window.location="registro.php";
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
      function nanEgiaztatu(){
        let nan = document.formularioregistro.nan.value;
        let zenb
        let letr
        let letra
        let nanExpresioRegularra
      
        nanExpresioRegularra = /^\d{8}[a-zA-Z]$/;
      
        if(nanExpresioRegularra.test (nan) == true){
          zenb = nan.substr(0,nan.length-1);
          letr = nan.substr(nan.length-1,1);
          zenb = zenb % 23;
          letra='TRWAGMYFPDXBNJZSQVHLCKET';
          letra=letra.substring(zenb,zenb+1); 
          if (letra!=letr.toUpperCase()) { 
            return false;
          }else{
            return true;
          }
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
      function pasahitzaEgiaztatu(){
        let pasahitza = document.formularioregistro.pasahitza.value;
        if(pasahitza.length >= 8){
          

          if(pasahitza.match(/([a-zA-Z])/) && pasahitza.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/) && pasahitza.match(/([0-9])/) && pasahitza.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){
            return true;
          }
          else{
            window.alert("8 karaktere edo gehiago izan behar ditu, letra larriak, zenbakiak eta karaktere espezialak erabili behar dira");
            return false;
          }
        }
        else{
          window.alert("Pasahitza hau oso motza da (8 karaktere edo gehiago izan behar ditu, gainera letra larriak , zenbakiak eta karaktere espezialak erabili behar dira)");
          return false;
        }


      }

    </script>
  </head>
  <body>
    <?php session_start();
     $_SESSION['token'] = bin2hex(random_bytes(24));
      echo '<div class="laukia">
        <form action="php/registro.php" method="post" style="text-align:center" name="formularioregistro">
          <div class="erregistroa"><h1>Erregistroa</h1></div>
            <input type="hidden" name="token" value="'.$_SESSION['token'].'" />
            <input class="bete" type="text" placeholder="Izen abizenak" name="izen_abizenak">
            <input class="bete" type="text" placeholder="NAN" name="nan">
            <input class="bete" type="text" placeholder="Telefonoa" name="telefonoa"> <br>
            <input class="bete" type="date" placeholder="Jaiotze_data" name="jaiotze_data"><br>
            <input class="bete" type="text" placeholder="Email" name="email">
            <input class="bete" type="password" placeholder="Pasahitza" name="pasahitza"> <br>
            <input class="botoia" type="button" value="Gorde" onclick="datuakEgiaztatu()"> 
            <input class="botoia" type="reset" value="Ezabatu">
            <p><a  href="index.html">Jadanik erregistratuta zaude?</a></p>
        </div>
      </form>
    </div> '
    ?>
  </body>
</html>
