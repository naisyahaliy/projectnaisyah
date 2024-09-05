<?php

namespace App\Http\Controllers;

use App\Models\Produk;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    public function show(){
        // $data['produk'] = Produk::all();
        $data['produk'] = Produk::orderby('nama','asc')->get();
        $data['total'] = Produk::count();

        return view('dashboard',$data);
    }
    public function search(Request $request){
        $data['produk'] = Produk::where('id','LIKE','%'.$request->cari.'%')
        ->orWhere('nama','LIKE','%'.$request->cari,'%')
        ->orWhere('kategori','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = $data['produk']->count();

        return view('dashboard',$data);
    }

    public function create(){
        return View('produk-create');
    }

    public function add(Request $request){
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        Produk::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'stok' => $request->stok,
            'foto' => $fileName
        ]);
        
        return redirect('dshboard');
    }

    public function edit(Request $request){
        $data['produk'] = Produk::all();
        $data['produk'] = Produk::find($request->id);
        return view('produk-edit',$data);
    }

    public function delete(Request $request)
    {
        $produk = Produk::find($request->id);
        $delete = Produk::where('id', $request->id)->delete();
        if ($delete) {
            if($produk->foto) {
                Storage::delete('foto/' .$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('/dshboard');
    }

    public function update(Request $request){
        $produk = Produk::find($request->id);

        // Storage::delete($produk->foto);
        
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update = 
        $update = Produk::where('id',$request->id)->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'stok' => $request->stok,
            'foto' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/dshboard');
    }
}
