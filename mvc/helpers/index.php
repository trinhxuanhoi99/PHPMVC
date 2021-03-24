<?php
if (!function_exists('view')) {
    function view($path, $data = [])
    {
        $file = file_get_contents('./mvc/views/' . $path . '.html');
        $html = replace($file, $data);
        echo $html;
    }
}

if (!function_exists('response')) {
    function response($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

if (!function_exists('replace')) {
    function replace($html, $data = [])
    {
        $contents = strtr($html, $data);
        return $contents;
    }
}
