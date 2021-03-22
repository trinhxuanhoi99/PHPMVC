<?php
function autoload($class)
{
    $director = ['models', 'controller', 'core'];
}
spl_autoload_register('autoload');
