<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Faisal Gunawan";
        $kerja = ["bersih bersih", "Bantu bantu", "masak"];
        return view ('nama', ['nama' => $nama , 'kerja' => $kerja]);
    }
}
