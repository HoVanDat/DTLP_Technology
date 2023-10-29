<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [SanphamController::class, 'index'])->name('home');

Route::get('/layout',function(){
    return view('layout');
});
Route::get('/shop',[SanphamController::class, 'dt']);
Route::get('/tintuc',function(){
    return view('tintuc');
});
Route::get('/khuyenmai',function(){
    return view('khuyenmai');
});
Route::get('/lienhe',function(){
    return view('lienhe');
});
Route::get('/dangnhap',[AuthController::class,'login'])->name('login');
Route::post('/dangnhap',[AuthController::class,'loginPost'])->name('login.post');
Route::get('/dangky',[AuthController::class,'register'])->name('register');
Route::post('/dangky',[AuthController::class,'registerPost'])->name('register.post');
Route::get('/dangxuat',[AuthController::class,'logout'])->name('logout');
// Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget.password');
// Route::post('/forget-password',[AuthController::class,'forgetPasswordPost'])->name('forget.password.post');
// Route::get('/reset-password/{token}',[AuthController::class,'resetPassword'])->name('reset.password');
// Route::post('/reset-password',[AuthController::class,'resetPasswordPost'])->name('reset.password.post');
Route::get('/chitiet',function(){
    return view('chitiet');
});
Route::get('/giohang',function(){
    return view('giohang');
});
Route::get('/thanhtoan',function(){
    return view('thanhtoan');
});
// route admin
Route::group(['prefix'=>'admin'],function(){
    // Route::get('custommer',function(){
    //     return view('admin/custommer');
    // });  
    Route::get('login',function(){
        return view('admin/login');
    });  
    Route::get('forgot',function(){
        return view('admin/forgot');
    });  
    Route::get('trangchu',function(){
        return view('admin/home');
    })->name('admin-trang-chu');
    Route::get('bangkeluong',function(){
        return view('admin/bangkeluong');
    });  
    Route::get('bcdoanhthu',function(){
        return view('admin/bcdoanhthu');
    });  
    Route::get('create-bangkeluong',function(){
        return view('admin/create-bangkeluong');
    });  
    Route::get('create-qldonhang',function(){
        return view('admin/create-qldonhang');
    });  
    Route::get('create-qlnhanvien',function(){
        return view('admin/create-qlnhanvien');
    });
    Route::get('edit-qlkhachhang{id}',[UserAdminController::class,'edit'])->name('admin-edit-qlkhachhang');
    Route::post('edit-qlkhachhang',[UserAdminController::class,'update'])->name('admin-update-qlkhachhang');
    Route::get('create-qlnoibo',function(){
        return view('admin/create-qlnoibo');
    });  
    Route::get('create-qlsanpham',[SanphamController::class,'create'])->name('admin-create-qlsanpham');
    Route::post('create-qlsanpham',[SanphamController::class,'store'])->name('admin-store-qlsanpham');
    Route::get('lichcongtac',function(){
        return view('admin/lichcongtac');
    });  
    Route::get('qldonhang',function(){
        return view('admin/qldonhang');
    });  
    Route::get('qlnhanvien',function(){
        return view('admin/qlnhanvien');
    });
    Route::get('qlnoibo',function(){
        return view('admin/qlnoibo');
    });  
    Route::get('qlsanpham',[SanphamController::class,'qlsanpham'])->name('admin-qlsanpham');
    Route::get('posbanhang',function(){
        return view('admin/posbanhang');
    });
    Route::get('qlkhachhang',[UserAdminController::class,'index'])->name('admin-qlkhachhang');
    Route::get('create-qlkhachhang',function(){
        return view('admin/create-qlkhachhang');
    });
    Route::post('create-qlkhachhang',[UserAdminController::class,'store'])->name('admin-store-qlkhachhang');
    Route::get('edit-qlnhanvien',function(){
        return view('admin/edit-qlnhanvien');
    });
    Route::get('edit-qlsanpham{id}',[SanphamController::class,'edit'])->name('admin-edit-qlsanpham');
    Route::post('edit-qlsanpham',[SanphamController::class,'update'])->name('admin-update-qlsanpham');
    Route::get('delete-qlsanpham{id}',[SanphamController::class,'destroy'])->name('admin-delete-qlsanpham');
    Route::get('qlchitietsanpham{id}',[SanphamController::class,'qlchitietsanpham'])->name('admin-qlchitietsanpham');
    Route::get('create-qlchitietsanpham{id}',[SanphamController::class,'createchitietsanpham'])->name('admin-create-qlchitietsanpham');
    Route::post('create-qlchitietsanpham',[SanphamController::class,'storechitietsanpham'])->name('admin-store-qlchitietsanpham');
    Route::get('edit-qlchitietsanpham',[SanphamController::class,'editchitietsanpham'])->name('admin-edit-qlchitietsanpham');
    Route::post('edit-qlchitietsanpham',[SanphamController::class,'updatechitietsanpham'])->name('admin-update-qlchitietsanpham');
    Route::get('delete-qlkhachhang{id}',[UserAdminController::class,'destroy'])->name('admin-delete-qlkhachhang');
});
Route::get('/get-customer-data/{id}', 'CustomerController@getCustomerData');
