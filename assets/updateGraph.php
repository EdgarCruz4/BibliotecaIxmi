<?php
    require 'class/consultas.php';
    $consultas = new consultas();
    // Script intermediario que permite procesar los datos de la vista de graficas
    $ruta = '';
    if ($_POST['suggestion'] == "false") {
        // Se habilita la ruta para procesamiento de información para la grafica 
        if ($_POST['flag'] == "true") {
            $tyme = $_POST['tyme'];
            $partes = explode("-", $tyme);
            $data = $consultas->testResults($partes[0], $partes[1], $_POST['user'],$ruta,$partes[2]);
        } elseif ($_POST['flag'] == "false") {
            $today = $_POST['today'];
            $partes = explode("-", $today);
            $data = $consultas->testResults($partes[0], $partes[1], $_POST['user'],$ruta,$partes[2]);
        }

        $excellent = 0;
        $good = 0;
        $regular = 0;
        $nonExistent = 0;

        foreach ($data as $result) {
            $score = $result['respuesta'];
            if ($score == 1) {
                $excellent++;
            } elseif ($score == 2) {
                $good++;
            } elseif ($score == 3) {
                $regular++;
            } elseif ($score == 4) {
                $nonExistent++;
            } else {
                echo "ocurrio un error";
            }
        }

        echo $jsonData = $excellent . "-" . $good . "-" . $regular . "-" . $nonExistent;
    } else {
        // Se habilita la ruta para el procesamiento de información para los comentarios
        if ($_POST['flag'] == "true") {
            $tyme = $_POST['tyme'];
            $partes = explode("-", $tyme);
            $data = $consultas->getSuggestions($partes[0], $partes[1], $_POST['user'],$ruta);
        } elseif ($_POST['flag'] == "false") {
            $today = $_POST['today'];
            $partes = explode("-", $today);
            $data = $consultas->getSuggestions($partes[0], $partes[1], $_POST['user'],$ruta);
        }

        foreach ($data as $result) {
        ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="suggestions" value="<?php echo $result['sugerencia']; ?>">
                        <?php echo $result['sugerencia']; ?>
                    </div>
                </div>
            </div>
        <?php
            }
    }


?>