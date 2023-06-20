<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class PcController extends Controller
{
    //
    function show(){
        $data['produks'] = Produk::all();
        return view('beranda',$data);
    }
    function detail($id){
        $data['produks'] = Produk::find($id);
        return view('detail',$data);
    }
}
