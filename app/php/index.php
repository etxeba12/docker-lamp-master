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
  
  $izen_abizenak = $_POST['izen_abizenak'];
  $izen_abizena2 = $_POST['izen_abizenak'];
  $pasahitza = $_POST['pasahitza'];
  $gatza = md5("4hJUd5sPP97hT");
  $pasahitzaZifratuta = md5($pasahitza.$gatza);
  
 
  if (!hash_equals($_SESSION['token'], $_POST['token'])) {
    //prepare and bind
    $_SESSION['saioa'] = 1;
    $stmt = $conn->prepare("SELECT * FROM erabiltzaileak WHERE izen_abizenak=? AND pasahitza=?");
    $stmt -> bind_param("ss",$izen_abizenak,$pasahitzaZifratuta);

    //execute
    $stmt->execute();
    
    
    //emaitzatik aldagaiak hartu
    $result = $stmt->get_result();
    $row = $result->fetch_assoc(); 
    $izen_abizenak = $row["izen_abizenak"];
    $nan = $row["nan"];
    $telefonoa = $row["telefonoa"];
    $jaiotzeData = $row["jaiotze-data"];
    $timestamp = strtotime($jaiotzeData); 
    $newDate = date("d/m/Y", $timestamp );
    $email = $row["email"];
    $pasahitza = $row["pasahitza"];
    $balorazioa = $row["Balorazioa"];
    
    
    $_SESSION['izen_abizenak'] = $izen_abizenak;
    $_SESSION['nan'] = $nan;
    $_SESSION['telefonoa'] = $telefonoa;
    $_SESSION['jaiotzeData'] = $newDate;
    $_SESSION['email'] = $email;
    $_SESSION['pasahitza'] = $pasahitza;
    $_SESSION['balorazioa'] = $balorazioa;


    $konprobatu_Erabiltzaile= $conn->prepare( "SELECT * FROM  erabiltzaileak WHERE izen_abizenak=? ");
    $konprobatu_Erabiltzaile -> bind_param("s", $izen_abizena2);
    $konprobatu_Erabiltzaile -> execute();

    $result = $konprobatu_Erabiltzaile->get_result();
    $row = $result->fetch_assoc(); 
    $blokeatuta = $row["blokeatuta"];

    if($blokeatuta >= 5){
      echo'
      <script> 
           window.alert(" Bloqueatuta ")
          window.location = "../index.php";
      </script>
        ';
    }
    
    if (is_null($izen_abizenak) ) {
      
      
      
      if(!(is_null($konprobatu_Erabiltzaile))){
      
        $_SESSION['pasahitzaTxarto'] = $_SESSION['pasahitzaTxarto'] + 1;
        $txarto = $_SESSION['pasahitzaTxarto'];

        $stmt2 = $conn -> prepare("UPDATE erabiltzaileak SET blokeatuta=? WHERE izen_abizenak=?");
        $stmt2 -> bind_param('is',$txarto,$izen_abizena2);
        $stmt2 -> execute(); 
        

      }
      echo'
          <script> 
              window.alert("izen edo pasahitza txarto sartu duzu")
              window.location = "../index.php";
          </script>
      ';
      
      
    } else{
      echo'
          <script> 
              window.location = "../webOrrialde2.php";
          </script>
      ';
    }    
  } else {
    echo'
    <script> 
        window.location = "../index.php";
    </script>
    ';
  }

  mysqli_close($conn);
?>
