<?php
    require 'class/consultas.php';
    $consultas = new consultas();


    if($_POST['flag'] == "true"){
        $tyme = $_POST['tyme'];
        $partes = explode("-", $tyme);
        $data = $consultas->testResults($partes[0], $partes[1],$_POST['user']);
        
    }elseif($_POST['flag'] == "false"){
        $currentMonth = $_POST['currentMonth'];
        $currentYear = $_POST['currentYear'];
        $data = $consultas->testResults($currentMonth, $currentYear,$_POST['user']);
    }

    $excellent = 0;
    $good = 0;
    $regular = 0;
    $nonExistent = 0;

    foreach($data as $result){
        $score = $result['respuesta'];
        if($score == 1){
            $excellent ++;
        }
        elseif($score == 2){
            $good ++;
        }
        elseif($score == 3){
            $regular ++;
        }
        elseif($score == 4){
            $nonExistent;
        }else{
            echo "ocurrio un error";
        }
    }
    
    echo $jsonData = $excellent."-".$good."-".$regular."-".$nonExistent;
    

?>