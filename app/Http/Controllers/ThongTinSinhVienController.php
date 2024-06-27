<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongTinSinhVienController extends Controller
{
    public function thongTinSV()
    {
        $sv = [
            [
                'id' => 1,
                'name' => 'pham van A',
                'masv' => 'ph1234',
                'birth' => 2003,
            ],
            [
                'id' => 2,
                'name' => 'pham van B',
                'masv' => 'ph1235',
                'birth' => 2003,
            ],
        ];
        return view('thong-tin-sv')->with(['sv' => $sv]);
    }
}
