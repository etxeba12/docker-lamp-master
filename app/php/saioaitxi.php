<?php
    session_start();
    session_destroy();
    $_SESSION['saioa'] = 0;
    header("location: ../index.php");

?>