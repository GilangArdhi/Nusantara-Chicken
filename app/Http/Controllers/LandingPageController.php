<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LandingPageController extends Controller
{
    function home2(){
        return view('landingpage.home2');
    }
    function home(){
        $ulasan = DB::table('users')->join('feedback', 'feedback.idUser', '=', 'users.id')->get();
        return view('landingpage.welcome', ['ulasan' => $ulasan]);
    }
    function produk(){
        $ayam = Produk::all();
        return view('landingpage.produk', ['ayam' => $ayam]);
    }
    function ulasan(){
        $ayam = Produk::all();
        return view('landingpage.ulasan', ['ayam' => $ayam]);
    }
    function details(Request $request){
        $idProduk = $request->query('id');
        // dd($idProduk);
        $session = Auth::id();
        $user = DB::table('users')->where('id', '=', $session)->get();
        $allAyam = Produk::all();
        $ayam = Produk::where('id', $idProduk)->get();
        // dd($ayam);
        return view('landingpage.detail', ['ayam' => $ayam, 'allAyam' => $allAyam, 'user' => $user]);
    }

    function buatKomen(Request $request){
        $idUser = $request -> idUser;
        $feedback = $request -> feedback;

        $insert = UserFeedback::create([
            'id' => $idUser,
            'feedback' => $feedback,
        ]);

        return back()->with('sukses', 'Barang berhasil ditambahkan');
    }


}
