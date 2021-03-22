<?php
namespace App\Core;

abstract class Controller
{
    protected function response($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
