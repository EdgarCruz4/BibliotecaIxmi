<?php
    class consultas
    {
        public function session_star_menu(){
            @session_start();
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

        public function getSurveyDate($id_biblioteca){
            include_once 'assets/conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            $query = "SELECT id_encuesta, MONTH(Fecha) AS mes, YEAR(Fecha) AS año
            FROM encuesta WHERE fk_id_biblioteca = '$id_biblioteca'
            GROUP BY YEAR(Fecha), MONTH(Fecha);";
            
            $resultado = $conexion->prepare($query);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function testResults($mes, $año,$library,$ruta,$idEncuesta){
            include_once $ruta.'conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();
            
            if($library == 1){
            $query= "SELECT * FROM encuesta, respuestas, preguntas 
                WHERE id_encuesta = fk_encuesta and id = fk_pregunta and MONTH(fecha) = '$mes' and YEAR(fecha) = '$año' and id_encuesta = $idEncuesta;";
            }else{
                $query= "SELECT * FROM encuesta, respuestas, preguntas 
                WHERE id_encuesta = fk_encuesta and id = fk_pregunta and fk_id_biblioteca = '$library' AND MONTH(fecha) = '$mes' and YEAR(fecha) = '$año' and id_encuesta = '$idEncuesta';";
            }
            $resultado = $conexion->prepare($query);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getLibrary(){
            include_once 'assets/conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            $consulta = "SELECT * FROM bibliotecas WHERE id_biblioteca BETWEEN 2 AND 11;";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function getSuggestions($mes, $año, $library,$ruta){
            include_once $ruta.'conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            $consulta = "SELECT * FROM sugerencias 
            WHERE fk_id_biblioteca = '$library' AND MONTH(fecha) = '$mes' and YEAR(fecha) = '$año';";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        public function lastMonthSurvey($biblioteca,$ruta){
            include_once $ruta.'conexion.php';
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();

            $consulta = "SELECT * FROM encuesta where fk_id_biblioteca = '$biblioteca'
            ORDER BY fecha DESC LIMIT 1;";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetch(PDO::FETCH_ASSOC);
            if(empty($data)){
                $result = 0;
            }else{
                $result = $data['id_encuesta'];
            }
            return $result;
        }
    }
?>