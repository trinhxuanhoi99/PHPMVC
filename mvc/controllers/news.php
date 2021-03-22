<?php

namespace App\Controller;

class News
{

    public static function Sayhi()
    {
        echo "New-Sayhi";
    }
    public static function Show()
    {
        echo "New-Show";
    }

    public static function abc($ho, $ten)
    {
        echo $ho . "-" . $ten;
    }
}
