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

    public function show($a, $b)
    {
        $sv = new SinhVienModel();
        $sum = $sv->Tong($a, $b);
        $sum = "Hội";
        $content_parser = [
            '{$hoi}' => $sum,
            '{$s}' => $sv->GetSV(),
        ];
        // echo $sum;
        return view('emails', $content_parser);
    }
}
