<?php

abstract class Controller
{

    function __construct()
    {
    }

    protected function response($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    protected function view()
    {
        
    }
}
