<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    function show()
    {
        $data['produks'] = Produk::all();
        $data['cari'] = "";
        return view('produk', $data);
    }
    function add(){
        $data = [
            'action'=> url('/produk/create'),
            'tombol'=> 'SIMPAN',
            'produks'=> (object)[
                'nama_produk' => '',
                'harga_produk' => '',  
                'deskripsi' => ''
            ]
        ];
            return view('form_produk',$data);
    }
    function create(Request $request){
        $filename= $request->nama_produk.'.'. $request->file('foto')->getClientOriginalExtension();
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'foto' => $request->file('foto')->storeAs('foto', $filename),
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('produk');
    }
    function hapus($id){
        Produk::where('id_produk',$id)->delete();
        return redirect('produk');
    }
    function edit($id){
        $data['produks'] = Produk::find($id);
        $data['action'] = url('/produk/update').'/'.$data['produks']->id_produk;
        $data['tombol'] = "update";

        return view('form_produk', $data);
    }
    function update(Request $request){
        Produk::where('id_produk', $request->id)->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'foto' => $request->file('foto')->store('foto'),
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('produk');
    }
    function search(Request $request)
    {
        $data['produks'] = Produk::where('nama_produk', $request->cari)->orwhere('id_produk', $request->cari)->paginate();
        $data['cari'] = $request->cari;
        return view('produk', $data);
    }
}
