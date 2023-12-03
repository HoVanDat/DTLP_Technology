    <?php



    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SanphamController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\EmployeeAdminController;
    use App\Http\Controllers\NewsAdminController;
    use App\Http\Controllers\CategoryAdminController;
    use App\Http\Controllers\UserAdminController;
    use App\Http\Controllers\CommentController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\ContactAdminController;
    use App\Http\Controllers\BannerAdminController;
  use App\Http\Controllers\ChiTietSanPhamController;
use App\Http\Controllers\TinKhuyenMaiController;


 // tài khoản
 Route::get('thongtin',[AuthController::class,'thongtin']);
 Route::post('thongtin',[AuthController::class,'thongtinpost'])->name('thongtin.post');
 Route::get('/dangnhap',[AuthController::class,'login'])->name('login');
 Route::post('/dangnhap',[AuthController::class,'loginPost'])->name('login.post');
 Route::get('/dangky',[AuthController::class,'register'])->name('register');
 Route::post('/dangky',[AuthController::class,'registerPost'])->name('register.post');
 Route::get('/dangxuat',[AuthController::class,'logout'])->name('logout');
 Route::get('/tim-kiem-don-hang', [OrderController::class,'timKiemDonHang'])->name('tim-kiem-don-hang');

 Route::post('/xu-ly-ma-giam-gia', [OrderController::class,'xuLyMaGiamGia'])->name('xu-ly-ma-giam-gia');

 Route::post('/mua-hang', 'OrderController@muaHang1');

 Route::get('/tim-kiem', [SanphamController::class, 'timKiem'])->name('tim-kiem');

 Route::match(['get', 'post'], '/dathang1', [OrderController::class, 'datHang12'])->name('mua_hang');

    Route::get('/', [SanphamController::class, 'index'])->name('home');

    Route::get('/cart', [OrderController::class, 'showCart']);

Route::get('/', [SanphamController::class, 'index'])->name('home');

Route::get('/layout',function(){
    return view('layout');
});
Route::get('/shop',[SanphamController::class, 'dt']);

Route::get('/tintuc',function(){
    return view('tintuc');
});



Route::get('/products/search', [SanphamController::class, 'search'])->name('products.search');

route::get('/profile/{id}', [ProfileController::class, 'profile'])->name('profile');


Route::post('/filter-products', 'SanphamController@filter')->name('filterProducts');
Route::get('/khuyenmai',[TinKhuyenMaiController::class,'tinkhuyenmai'])->name('tinkhuyenmai');


Route::get('/lienhe',function(){
    return view('lienhe');
});
Route::post('/deletecart',[OrderController::class, 'muahang'])->name('muahang');

Route::get('/muahang/{id}',[OrderController::class, 'muahang'])->name('muahang');
Route::get('/dangnhap',[AuthController::class,'login'])->name('login');
Route::post('/dangnhap',[AuthController::class,'loginPost'])->name('login.post');
Route::get('/dangky',[AuthController::class,'register'])->name('register');
Route::post('/dangky',[AuthController::class,'registerPost'])->name('register.post');
Route::get('/dangxuat',[AuthController::class,'logout'])->name('logout');

Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget.password');
Route::post('/forget-password',[AuthController::class,'forgetPasswordPost']);
Route::get('/reset-password/{nguoidung}/{token}',[AuthController::class,'resetPassword'])->name('reset.password');
Route::post('/reset-password/{nguoidung}/{token}',[AuthController::class,'resetPasswordPost']);
Route::get('/chi-tiet-san-pham/{id}',[ChiTietSanPhamController::class,'chitiet'])->name('chitietsanpham');
Route::post('/add-to-cart123', [OrderController::class, 'addToCart']);
Route::get('/danh-muc/{id}',[SanphamController::class,'tintuctheoloai'])->name('chitietsanpham');

Route::get('/giohang',function(){
    return view('giohang');
});
Route::get('/thanhtoan',function(){
    return view('thanhtoan');
});

Route::post('/luu-don-hang', [OrderController::class, 'store'])->name('luu_don_hang');
Route::get('/shoplaptop',[SanphamController::class, 'lt']);
Route::get('/shopdienthoai',[SanphamController::class, 'dt']);
Route::get('/tintuc',[SanphamController::class, 'tintuc']);
Route::get('/chi-tiet-tin/{id}',[SanphamController::class, 'cttin']);

Route::get('/shopmaytinhbang',[SanphamController::class, 'mtb']);
// bình luận
Route::post('/comments', [CommentController::class, 'store']);
Route::get('/chitietsp/{id}',[SanphamController::class, 'chitietsp'])->name('chitietsp');
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
    Route::get('create-qlnhanvien',[EmployeeAdminController::class,'createqlnhanvien'])->name('create.qlnhanvien');
    Route::post('create-qlnhanvien',[EmployeeAdminController::class,'createqlnhanvienpost'])->name('create.qlnhanvien.post');
    Route::get('edit-qlkhachhang{id}',[UserAdminController::class,'edit'])->name('admin-edit-qlkhachhang');
    Route::post('edit-qlkhachhang',[UserAdminController::class,'update'])->name('admin-update-qlkhachhang');
    Route::get('create-qlnoibo',function(){
        return view('admin/create-qlnoibo');
    });

    Route::get('block-qlkhachhang{id}',[UserAdminController::class,'block'])->name('admin-block-qlkhachhang');
    Route::get('unblock-qlkhachhang{id}',[UserAdminController::class,'unblock'])->name('admin-unblock-qlkhachhang');

    Route::get('create-qlsanpham',[SanphamController::class,'create'])->name('admin-create-qlsanpham');
    Route::post('create-qlsanpham',[SanphamController::class,'store'])->name('admin-store-qlsanpham');

    Route::get('lichcongtac',function(){
        return view('admin/lichcongtac');
    });
    Route::get('qldonhang',function(){
        return view('admin/qldonhang');

    });
    Route::get('qlnhanvien',[EmployeeAdminController::class,'index'])->name('qlnhanvien');
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
    Route::get('edit-qlnhanvien{id}',[EmployeeAdminController::class,'editqlnhanvien'])->name('edit.qlnhanvien');
    Route::post('edit-qlnhanvien',[EmployeeAdminController::class,'editqlnhanvienpost'])->name('edit.qlnhanvien.post');
    Route::get('delete-qlnhanvien/{id}',[EmployeeAdminController::class,'deleteqlnhanvien'])->name('delete.qlnhanvien');
    Route::get('edit-qlsanpham{id}',[SanphamController::class,'edit'])->name('admin-edit-qlsanpham');
    Route::post('edit-qlsanpham',[SanphamController::class,'update'])->name('admin-update-qlsanpham');
    Route::get('delete-qlsanpham{id}',[SanphamController::class,'destroy'])->name('admin-delete-qlsanpham');
    Route::get('qlchitietsanpham{id}',[SanphamController::class,'qlchitietsanpham'])->name('admin-qlchitietsanpham');
    Route::get('create-qlchitietsanpham{id}',[SanphamController::class,'createchitietsanpham'])->name('admin-create-qlchitietsanpham');
    Route::post('create-qlchitietsanpham',[SanphamController::class,'storechitietsanpham'])->name('admin-store-qlchitietsanpham');
    Route::get('edit-qlchitietsanpham',[SanphamController::class,'editchitietsanpham'])->name('admin-edit-qlchitietsanpham');
    Route::post('edit-qlchitietsanpham',[SanphamController::class,'updatechitietsanpham'])->name('admin-update-qlchitietsanpham');
    Route::get('delete-qlchitietsanpham',[SanphamController::class,'deletechitietsanpham'])->name('delete-chitietsanpham');
    Route::get('delete-qlkhachhang{id}',[UserAdminController::class,'destroy'])->name('admin-delete-qlkhachhang');
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
      //    route trang tin tức
    Route::get('qltintuc',[NewsAdminController::class,'index'])->name('qltintuc');
    Route::get('create-qltintuc',[NewsAdminController::class,'createqltintuc'])->name('create.qltintuc');
    Route::post('create-qltintuc',[NewsAdminController::class,'createqltintucpost'])->name('create.qltintuc.post');
    Route::get('edit-qltintuc{id}',[NewsAdminController::class,'editqltintuc'])->name('edit.qltintuc');
    Route::post('edit-qltintuc',[NewsAdminController::class,'editqltintucpost'])->name('edit.qltintuc.post');
    Route::get('delete-qltintuc/{id}',[NewsAdminController::class,'deleteqltintuc'])->name('delete.qltintuc');
    // route quản lý bình luận
    Route::get('qlbinhluan',[CommentController::class,'index']);
    Route::get('edit-qlbinhluan{id}',[CommentController::class,'editqlbinhluan'])->name('edit.qlbinhluan');
    Route::post('edit-qlbinhluan',[CommentController::class,'editqlbinhluanpost'])->name('edit.qlbinhluan.post');
    Route::get('delete-qlbinhluan/{id}',[CommentController::class,'deleteqlbinhluan'])->name('delete.qlbinhluan');
    //Hòm thư góp ý
    Route::get('homthugopy',[ContactAdminController::class,'homthugopy'])->name('hom.thu.gop.y');
    Route::get('delete-homthugopy/{id}',[ContactAdminController::class,'deletehomthugopy'])->name('delete.hom.thu.gop.y');
    // Quản lý banner
    Route::get('qlbanner',[BannerAdminController::class,'index'])->name('qlbanner');
    Route::get('create-qlbanner',[BannerAdminController::class,'createqlbanner'])->name('create.qlbanner');
    Route::post('create-qlbanner',[BannerAdminController::class,'createqlbannerpost'])->name('create.qlbanner.post');
    Route::get('edit-qlbanner{id}',[BannerAdminController::class,'editqlbanner'])->name('edit.qlbanner');
    Route::post('edit-qlbanner',[BannerAdminController::class,'editqlbannerpost'])->name('edit.qlbanner.post');
    Route::get('delete-qlbanner/{id}',[BannerAdminController::class,'deleteqlbanner'])->name('delete.qltintuc');




});
