<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
// Make sure the captured data exists
if (isset($_FILES['files']) && !empty($_FILES['files']))
{
    // Upload destination directory
    $upload_destination = ROOT_PATH . '/src/archivos/';
    $status = array();

    if (is_array($_FILES))
    {
        // Iterate all the files and move the temporary file to the new directory
        for ($i = 0; $i < count($_FILES['files']['tmp_name']); $i++)
        {
            // Add your validation here
            $tmp_name = $_FILES['files']['tmp_name'][$i];
            $name = $_FILES['files']['name'][$i];
            $file = $upload_destination . str_replace(' ', '_', $name);
            // Move temporary files to new specified location
            if (move_uploaded_file($tmp_name, $file))
                array_push($status, array("status" => "ok", "file" => $name));
            else
                array_push($status, array("status" => "failed", "file" => $name));
        }
        echo (json_encode($status));
    }
}
?>