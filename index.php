<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("location: auditoria.php");
    }
    else{
        header("location: auth-signin.php");
    }
?>