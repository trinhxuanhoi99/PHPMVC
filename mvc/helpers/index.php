<?php
if (!function_exists('view')) {
    function view($path, $data = [])
    {
        $file = file_get_contents('./mvc/views/' . $path . '.html');
        echo $file;
    }
}
