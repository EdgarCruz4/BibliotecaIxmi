<?php
    include_once 'post.php';
    include 'conexion.php';
    error_reporting(0);
    session_start();

    if(isset($_POST['login'])){
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
    
        $user = $_POST['user'];
        $password = $_POST['password'];
    
        $query="SELECT * FROM bibliotecas WHERE usuario = '$user' AND contraseña = '$password';";
        $result = $conexion->prepare($query);
        $result->execute();
        if($result->rowCount() >0){
            $data=$result->fetch(PDO::FETCH_ASSOC);
            $user = $data['usuario'];
            $password = $data['contraseña'];
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header("location:../index.php");
        }else{
            header("location:../auth-signin.php?error=1");
        }
    }
    if(isset($_POST['exit'])){
        session_destroy();
        header("location:../index.php");
        exit();
    }else{
        echo"ocurrio un error";
    }
?>