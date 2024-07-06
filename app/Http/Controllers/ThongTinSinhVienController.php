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
                'noiSinh'=> 'hà nội',
            ],
            [
                'id' => 2,
                'name' => 'pham van B',
                'masv' => 'ph1235',
                'birth' => 2003,
                'noiSinh'=> 'hải dương',
            ],
            [
                'id' => 3,
                'name' => 'pham van c',
                'masv' => 'ph4321',
                'birth' => 2003,
                'noiSinh'=> 'nam định',
            ],
            [
                'id' => 2,
                'name' => 'pham van D',
                'masv' => 'ph3451',
                'birth' => 2003,
                'noiSinh'=> 'hải phòng',
            ],
        ];
        return view('thong-tin-sv')->with(['sv' => $sv]);
    }
}
