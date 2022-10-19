<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    public function jenis(){
        echo 'jenis coba coba';
    }
    public function tahun($berapa){
        echo 'TAHUN TERBIT '. $berapa;
    }

    public function penerbit(){
        return view('pt');
    }
}
