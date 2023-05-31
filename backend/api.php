<?php
require_once("./functions.php");

if (isset($_POST) && !empty($_POST))
{
    switch ($_POST['function'])
    {
        case 'commit':
            echo (json_encode(array('status' => commit() == true ? 'ok' : 'failed')));
            break;
        case 'create':
            unset($_POST['function']);
            $table = $_POST['table'];
            unset($_POST['table']);
            echo (json_encode(array('status' => insert($table, $_POST) == true ? 'ok' : 'failed')));
            break;
        case 'update':
            unset($_POST['update']);
            # code...
            break;
        case 'delete':
            unset($_POST['delete']);
            $filename = str_replace(' ', '_', $_POST['filename']);
            echo (json_encode(array('status' => @unlink(ROOT_PATH . '/src/archivos/' . $filename) && deleteByID("archivos", 'id', $_POST["id_archivo"]) == true ? 'ok' : 'failed')));
            break;
        case 'deleteById':
            unset($_POST['function']);
            $id_sugerencia = intval($_POST['id_sugerencia']);
            if (deleteByID('sugerencias','id_sugerencia', $id_sugerencia))
                echo (json_encode(['status' => 'ok']));
            else
                echo (json_encode(['status' => 'fail']));
            break;
        case 'read':
            unset($_POST['function']);
            $rows = array();
            $result = db_query("SELECT archivos.id AS i, archivos.nombre AS n, archivos.fecha AS f, bibliotecas.nombre AS b FROM archivos INNER JOIN bibliotecas ON archivos.id_biblioteca = bibliotecas.id_biblioteca");
            while ($row = mysqli_fetch_object($result))
                array_push($rows, $row);
            echo (json_encode($rows));
            break;
        case 'search':
            unset($_POST['search']);
            $text = $_POST['text'];
            $rows = array();
            $result = db_query("SELECT archivos.id AS i, archivos.nombre AS n, archivos.fecha AS f, bibliotecas.nombre AS b FROM archivos INNER JOIN bibliotecas ON archivos.id_biblioteca = bibliotecas.id_biblioteca WHERE archivos.nombre LIKE '%" . $text . "%'");
            while ($row = mysqli_fetch_object($result))
                array_push($rows, $row);
            echo (json_encode($rows));
            break;
        case 'answers':
            unset($_POST['function']);
            $id_biblioteca = intval($_POST['id_biblioteca']);
            $answers = json_decode(($_POST['respuestas']));
            insert('encuesta', array('fk_id_biblioteca' => $id_biblioteca));
            $id_encuesta = mysqli_insert_id($conn);
            $sql_array = array();

            foreach ($answers as $key) {
                array_push($sql_array, array('fk_encuesta' => $id_encuesta, 'fk_pregunta' => intval($key->fk_pregunta), 'respuesta' => intval($key->respuesta)));
            }
            if (multi_insert('respuestas', $sql_array)) echo (json_encode(['status' => 'ok']));
            else echo (json_encode(['status' => 'failed']));
            break;
        case 'sugerencia':
            unset($_POST['function']);
            $_POST['fk_id_biblioteca'] = intval($_POST['fk_id_biblioteca']);
            @unlink('../src/archivos/' . $_POST['archivo']);
            if (insert('sugerencias', $_POST))
                echo (json_encode(array('status' => 'ok')));
            else echo (json_encode(array('status' => 'failed')));
            break;
        default:
            # code...
            break;
    }

}
?>