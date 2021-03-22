<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\SinhVienModel;

class Home extends Controller
{
    public function SayHi()
    {
        $sinhvien = new SinhVienModel();
        $data =  $sinhvien->GetSV();
        return $this->response(['hoingao' => $data]);
    }

    public static function show()
    {
        echo "home-show";
    }
}
