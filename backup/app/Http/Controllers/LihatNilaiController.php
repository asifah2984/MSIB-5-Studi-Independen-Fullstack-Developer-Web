<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{
    //
    public function dataMahasiswa(){
        $mhs1 = 'Abi'; $asal1 = 'Jakarta';
        $mhs2 = 'Adi'; $asal2 = 'Magelang';
        return view('coba.data ', compact('mhs1', 'mhs2', 'asal1', 'asal2'));
    }
}
