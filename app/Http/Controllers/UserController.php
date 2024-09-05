<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
        return view(view:'login');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)){
            return redirect('/dshboard');
        }
        return redirect()->back()->with('pesan','Login anda gagal');

    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    
    // public function index(){
    //     return view('home');
    // }

    public function beranda(){
        return view('home');
    }

    public function masuk(){
        return view('login');
    }
    public function loginmasuk(){
        return view('halaman');
    }
    // public function createproduk(){
    //     return view('dashboard');
    // }
    public function dshboard(){
        return view('dashboard');
    }
    public function create(){
        return view('produkcreate');
    }
    public function admin(){
        return view('admin');
    }
    public function detailproduk(){
        return view('detail');
    }
    public function beliproduk(){
        return view('beli');
    }
    public function home(){
        return view('dshboardhome');
    }
    public function account(){
        return view('akun');
    }
    public function tentangkami(){
        return view('about');
    }
    public function editprof(){
        return view('editprofile');
    }
    public function belilagi(){
        return view('detailtwo');
    }
    public function checkout(){
        return view('belitwo');
    }
    public function keranjangku(){
        return view('keranjang');
    }

    public function buy(){
        return view('detailtri');
    }
    public function buye(){
        return view('belitri');
    }
    public function bel(){
        return view('belifor');
    }
    public function beli5(){
        return view('beli5');
    }
    public function beli6(){
        return view('beli6');
    }
    public function buyes(){
        return view('detailfor');
    }
    public function det5(){
        return view('detail5');
    }
    public function det6(){
        return view('detail6');
    }
    public function trans(){
        return view('transaksi');
    }
    public function trans2(){
        return view('transaksi2');
    }
    public function trans3(){
        return view('transaksi3');
    }
    public function trans4(){
        return view('transaksi4');
    }
    public function trans5(){
        return view('transaksi5');
    }
    public function trans6(){
        return view('transaksi6');
    }
    public function ker(){
        return view('keranjang2');
    }
    public function keranjangnai(){
        return view('keranjangku');
    }
    public function ker3(){
        return view('keranjang3');
    }
    public function ker4(){
        return view('keranjang4');
    }
    public function ker5(){
        return view('keranjang5');
    }
    public function ker6(){
        return view('keranjang6');
    }

}
