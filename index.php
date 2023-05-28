<?php
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'] != "admin")
    {
        header("location: auditoria.php");
    }
    elseif (isset($_SESSION['user']) && $_SESSION['user'] == "admin") {
        header("location: archivos.php");
    }
    else {
        header("location: auth-signin.php");
    }
?>