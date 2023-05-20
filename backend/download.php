<?php
if (isset($_POST) && !empty($_POST))
{
    $file = dirname(__DIR__) . "\\src\\archivos\\" . $_POST['filename'];

    // Define header information
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: 0");
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    header('Pragma: public');

    // Clear system output buffer
    flush();
    // Read the size of the file
    @readfile($file);
}
?>