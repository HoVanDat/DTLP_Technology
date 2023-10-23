<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function index(){
        $sp= \DB::table('sanpham')->limit(10)->get();
        $sp2= \DB::table('sanpham')->where('id_san_pham','>=',100)->limit(20)->get();
        $sp3= \DB::table('sanpham')->where('id_san_pham','>=',30)->limit(20)->get();
        $sp4= \DB::table('sanpham')->where('id_san_pham','>=',130)->limit(20)->get();
        return view('home',['sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3,'sp4'=>$sp4]);
    }
    public function dt(){
        $dt= \DB::table('sanpham')->where('id_loai','1')->get();
        return view('shop',['dt'=>$dt]);
    }
}
