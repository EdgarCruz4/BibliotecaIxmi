<?php
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'] != "admin")
    {
        header("location: archivos.php");
    }
    elseif (isset($_SESSION['user']) && $_SESSION['user'] == "admin") {
        header("location: bibliotecas.php");
    }
    else {
        header("location: auth-signin.php");
    }
?>