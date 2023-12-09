<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LienHe;

class ContactAdminController extends Controller
{   public function homthugopy(){
      $lienhe= LienHe::get();
    return view('admin/homthugopy',['lienhe'=>$lienhe]);
}
    public function deletehomthugopy($id){
       LienHe::where('id_lien_he',$id)->delete();
    return redirect('admin/homthugopy');
}
 public function lienhe(){
    return view('lienhe');
 }
 public function lienhepost(Request $request)
 {
     $request->validate([
         'ten' => 'required|string|max:255',
         'email' => 'required|email|max:255',
         'sdt' => 'required|string|max:20', // Điều chỉnh max length phù hợp với số điện thoại
         'noi_dung' => 'required|string',
     ]);
 
     $ten = $request->input('ten');
     $email = $request->input('email');
     $sdt = $request->input('sdt');
     $noi_dung = $request->input('noi_dung');
//  dd($ten);
     LienHe::create([
         'ten' => $ten,
         'email' => $email,
         'sdt' => $sdt,
         'noi_dung' => $noi_dung,
     ]);
 
     return view('lienhe');
 }
 
}