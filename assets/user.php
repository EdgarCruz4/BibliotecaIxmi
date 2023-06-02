<?php
    // Sets the global variable for root path
    define('ROOT_PATH', dirname(dirname(__FILE__)));
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
            // almacena el id de la biblioteca actual 
            $id_biblioteca = $data['id_biblioteca'];
            $nameUser = $data['nombre'];
            $_SESSION['id_biblioteca'] = $id_biblioteca;
            $_SESSION['biblioteca'] = $nameUser;
            $_SESSION['foto_miniatura'] = $data['foto_miniatura'];
            $_SESSION['user'] = $data['usuario'];
            $_SESSION['nameUser'] = $nameUser; 
            if($id_biblioteca == 1) {
                header("location:../bibliotecas.php");
            }else{
                header("location:../index.php");
            }
        }else{
            header("location:../auth-signin.php?error=1");
        }
    }
    if(isset($_POST['exit'])){
        session_destroy();
        header('location: ../index.php');
        exit();
    }else{
        echo"ocurrio un error";
    }
?>