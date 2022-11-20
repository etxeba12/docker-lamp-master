<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equil="Content-Security-Policy" content=" 'self'  'unsafe-inline'">
    <link rel='stylesheet' href='CSS/login.css'>
    <script type="text/javascript">
      function datuakKonprobatu(){
        document.formulariologin.submit();
      }
    </script>
  </head>
  <body>
    <?php session_start();
      $_SESSION['token'] = bin2hex(random_bytes(24));
      $_SESSION['saioa'] = 0;
      $_SESSION['pasahitzaTxarto'] = 0;
      echo '<div class="laukia">
          <form action="php/index.php" method="post" style="text-align:center" name="formulariologin">
            <div class="login"><h1>LOGIN</h1></div>
                <input type="hidden" name="token" value="'.$_SESSION['token'].'" />
                <input class="bete" type="text" placeholder="izena" name="izen_abizenak">
                <input class="bete" type="password" placeholder="Pasahitza" name="pasahitza">
                <input class="botoia" type="button" value="Sartu" onclick="datuakKonprobatu()">
                <p><a  href="registro.php">bOraindik ez zaude erregistratua?</a></p>
            </div>
          </form>
        </div> ';
      ?> 
  </body>
</html>
