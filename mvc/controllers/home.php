<?php

require_once './mvc/models/SinhVienModel.php';

class Home extends Controller
{
    public function SayHi()
    {
        $sinhvien = new SinhVienModel();
        $data =  $sinhvien->GetSV();
        // return $this->response($data);
        return view('emails');
    }

    public static function show()
    {
        echo "home-show";
    }
}
