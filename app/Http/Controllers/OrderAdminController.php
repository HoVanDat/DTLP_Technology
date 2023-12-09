<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonHang;

class OrderAdminController extends Controller
{
    public function index(){
        $donhang= DonHang::get();
        return view('admin/qldonhang',['donhang'=>$donhang]);
    }
    public function duyet($id){
            $donHang = DonHang::find($id);
            if (!$donHang) {
                return response()->json(['error' => 'DonHang not found'], 404);
            }
            $donHang->update(['trang_thai' => 1]);
            return redirect()->back();
    }
    public function huy($id){
        $donHang = DonHang::find($id);
        if (!$donHang) {
            return response()->json(['error' => 'DonHang not found'], 404);
        }
        $donHang->update(['trang_thai' => 2]);
        return redirect()->back(); 
    }
    public function delete(Request $request,string $id){
        DonHang::find($id)->delete();
        return redirect()->back();
    }
}
