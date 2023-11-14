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
}