<?php
if (!function_exists('view')) {
    function view($path, $data = [])
    {
        $file = file_get_contents('./mvc/views/' . $path . '.html');
        echo $file;
    }
}

if (!function_exists('response')) {
    header('Content-Type: application/json');
    echo json_encode($data);
}
