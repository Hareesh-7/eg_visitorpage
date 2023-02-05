<?php
    session_start();
    // unset($_SESSION["uid"]);
    unset($_SESSION["registration"]);
    header("Location:../index.php");
?>