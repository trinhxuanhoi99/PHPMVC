<?php

require_once './mvc/models/SinhVienModel.php';

class Home extends Controller
{
    public function SayHi()
    {
        $sinhvien = new SinhVienModel();
        $data =  $sinhvien->GetSV();
        // return response($data);
        echo $data;
    }

    public static function show()
    {
        echo "home-show";
    }
}
