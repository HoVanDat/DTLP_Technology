    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SanphamController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\EmployeeAdminController;
    use App\Http\Controllers\NewsAdminController;
    use App\Http\Controllers\CategoryAdminController;

 // tài khoản
 Route::get('thongtin',[AuthController::class,'thongtin']);
 Route::post('thongtin',[AuthController::class,'thongtinpost'])->name('thongtin.post');
 Route::get('/dangnhap',[AuthController::class,'login'])->name('login');
 Route::post('/dangnhap',[AuthController::class,'loginPost'])->name('login.post');
 Route::get('/dangky',[AuthController::class,'register'])->name('register');
 Route::post('/dangky',[AuthController::class,'registerPost'])->name('register.post');
 Route::get('/dangxuat',[AuthController::class,'logout'])->name('logout');
 // Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget.password');
 // Route::post('/forget-password',[AuthController::class,'forgetPasswordPost'])->name('forget.password.post');
 // Route::get('/reset-password/{token}',[AuthController::class,'resetPassword'])->name('reset.password');
 // Route::post('/reset-password',[AuthController::class,'resetPasswordPost'])->name('reset.password.post');
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
//    route trang danh mục tin tức
Route::get('qldanhmuctintuc',[CategoryAdminController::class,'qldanhmuctintuc'])->name('ql.danhmuc.tintuc');
Route::get('create-qldanhmuctintuc',[CategoryAdminController::class,'createqldanhmuctintuc'])->name('create.qldanhmuctintuc');
    Route::post('create-qldanhmuctintuc',[CategoryAdminController::class,'createqldanhmuctintucpost'])->name('create.qldanhmuctintuc.post');
    Route::get('edit-qldanhmuctintuc{id}',[CategoryAdminController::class,'editqldanhmuctintuc'])->name('edit.qldanhmuctintuc');
    Route::post('edit-qldanhmuctintuc',[CategoryAdminController::class,'editqldanhmuctintucpost'])->name('edit.qldanhmuctintuc.post');
    Route::get('delete-qldanhmuctintuc/{id}',[CategoryAdminController::class,'deleteqldanhmuctintuc'])->name('delete.qldanhmuctintuc');
//    route trang danh mục sản phẩm
Route::get('qldanhmucsanpham',[CategoryAdminController::class,'qldanhmucsanpham'])->name('qlqldanhmucsanpham');
Route::get('create-qldanhmucsanpham',[CategoryAdminController::class,'createqldanhmucsanpham'])->name('create.qldanhmucsanpham');
    Route::post('create-qldanhmucsanpham',[CategoryAdminController::class,'createqldanhmucsanphampost'])->name('create.qldanhmucsanpham.post');
    Route::get('edit-qldanhmucsanpham{id}',[CategoryAdminController::class,'editqldanhmucsanpham'])->name('edit.qldanhmucsanpham');
    Route::post('edit-qldanhmucsanpham',[CategoryAdminController::class,'editqldanhmucsanphampost'])->name('edit.qldanhmucsanpham.post');
    Route::get('delete-qldanhmucsanpham/{id}',[CategoryAdminController::class,'deleteqldanhmucsanpham'])->name('delete.qldanhmucsanpham');
    // route trang nhân viên
    Route::get('qlnhanvien',[EmployeeAdminController::class,'index'])->name('qlnhanvien');
    Route::get('create-qlnhanvien',[EmployeeAdminController::class,'createqlnhanvien'])->name('create.qlnhanvien');
    Route::post('create-qlnhanvien',[EmployeeAdminController::class,'createqlnhanvienpost'])->name('create.qlnhanvien.post');
    Route::get('edit-qlnhanvien{id}',[EmployeeAdminController::class,'editqlnhanvien'])->name('edit.qlnhanvien');
    Route::post('edit-qlnhanvien',[EmployeeAdminController::class,'editqlnhanvienpost'])->name('edit.qlnhanvien.post');
    Route::get('delete-qlnhanvien/{id}',[EmployeeAdminController::class,'deleteqlnhanvien'])->name('delete.qlnhanvien');
    
    // route trang tin tức
    Route::get('qltintuc',[NewsAdminController::class,'index'])->name('qltintuc');
    Route::get('create-qltintuc',[NewsAdminController::class,'createqltintuc'])->name('create.qltintuc');
    Route::post('create-qltintuc',[NewsAdminController::class,'createqltintucpost'])->name('create.qltintuc.post');
    Route::get('edit-qltintuc{id}',[NewsAdminController::class,'editqltintuc'])->name('edit.qltintuc');
    Route::post('edit-qltintuc',[NewsAdminController::class,'editqltintucpost'])->name('edit.qltintuc.post');
    Route::get('delete-qltintuc/{id}',[NewsAdminController::class,'deleteqltintuc'])->name('delete.qltintuc');
    });