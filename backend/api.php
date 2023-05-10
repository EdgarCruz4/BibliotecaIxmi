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
            echo (json_encode(array('status' => @unlink(ROOT_PATH . '/src/archivos/' . $filename) && deleteByID("archivos", $_POST["id_archivo"]) == true ? 'ok' : 'failed')));
            break;
        case 'read':
            unset($_POST['read']);
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
        default:
            # code...
            break;
    }

}
?>