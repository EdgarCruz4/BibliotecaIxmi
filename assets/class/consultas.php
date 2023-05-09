<?php
    class consultas
    {
        public function session_star_menu(){
            session_start();
            $name = $_SESSION['user'];
            if(isset($name)){
                return $name;
            }
            else{
                header("location:index.php");
            }
        }

        public function getForm(){
            include_once 'assets/conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            $consulta = "SELECT * FROM preguntas";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>