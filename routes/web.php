<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\AuthController;

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
    Route::get('create-qlkhachhang',function(){
        return view('admin/create-qlkhachhang');
    }); 
    Route::get('create-qlnoibo',function(){
        return view('admin/create-qlnoibo');
    });  
    Route::get('create-qlsanpham',function(){
        return view('admin/create-qlsanpham');
    });  
    Route::get('lichcongtac',function(){
        return view('admin/lichcongtac');
    });  
    Route::get('qldonhang',function(){
        return view('admin/qldonhang');
    });  
    Route::get('qlnhanvien',function(){
        return view('admin/qlnhanvien');
    });
    Route::get('qlkhachhang',function(){
        return view('admin/qlkhachhang');
    });  
    Route::get('qlnoibo',function(){
        return view('admin/qlnoibo');
    });  
    Route::get('qlsanpham',function(){
        return view('admin/qlsanpham');
    });  
    Route::get('posbanhang',function(){
        return view('admin/posbanhang');
    });
    Route::get('edit-qlkhachhang',function(){
        return view('admin/edit-qlkhachhang');
    });
    Route::get('edit-qlnhanvien',function(){
        return view('admin/edit-qlnhanvien');
    });
    Route::get('edit-qlsanpham',function(){
        return view('admin/edit-qlsanpham');
    });
    Route::get('qlchitietsanpham',function(){
        return view('admin/qlchitietsanpham');
    });
    Route::get('create-qlchitietsanpham',function(){
        return view('admin/create-qlchitietsanpham');
    });
    Route::get('edit-qlchitietsanpham',function(){
        return view('admin/edit-qlchitietsanpham');
    });
});