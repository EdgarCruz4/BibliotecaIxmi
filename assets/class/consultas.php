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

        public function getSurveyDate(){
            include_once 'assets/conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            session_start();
            $idBiblioteca = $_SESSION['id_biblioteca'];

            $query = "SELECT MONTH(Fecha) AS mes, YEAR(Fecha) AS año
                FROM encuesta WHERE fk_id_biblioteca = '$idBiblioteca'
                GROUP BY YEAR(Fecha), MONTH(Fecha);";
            $resultado = $conexion->prepare($query);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>