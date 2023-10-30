<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profile($id) {
        $t = User::find($id);

        if($t == null) {
            return redirect('/thongbao');
        }

        return view('profile.profile', ['tin' => $t]);
    }
}
