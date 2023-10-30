<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomerData($id) {
        $customer = User::find($id);
        return response()->json($customer);
    }
}
