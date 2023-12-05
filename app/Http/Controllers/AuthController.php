<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NguoiDung;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;




class AuthController extends Controller
{

     function thongtin(Request $request){

        $iduser = session('userInfo.iduser');
        $tin123 = DB::table('donhang')->where('id_nguoi_dung',$iduser)->get();



 return view('thongtin', ['tin123' => $tin123]);

    }
     function thongtinpost(Request $request){
        $ten = $request->ten;
        session(['userInfo.ten' => $ten]);
        $dia_chi = $request->dia_chi;
        session(['userInfo.dia_chi' => $dia_chi]);
        $so_dien_thoai = $request->so_dien_thoai;
        session(['userInfo.so_dien_thoai' => $so_dien_thoai]);

       $hinh = null;
        if($request->hasFile('hinh')){
            // dd($request->all());
            $file = $request->file('hinh');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move(public_path().'/img/img-anhthe/',$image);
            $hinh = '/img/img-anhthe/'.$image;
        session(['userInfo.hinh' => $hinh]);
        //   dd(session('userInfo'));
        }
    //    dd(session('userInfo.iduser'));
       $id=session('userInfo.iduser');
            NguoiDung::where('id_nguoi_dung',$id)
            ->update([
                'ten' => session('userInfo.ten'),
                'dia_chi' =>session('userInfo.dia_chi'),
                'so_dien_thoai' => session('userInfo.so_dien_thoai'),
                'hinh' => session('userInfo.hinh'),
            ]);

     $thongbao1 = "Cập nhật thông tin thành công";
     return view('thongtin',['thongbao1' => $thongbao1]);
    }

    function login(){
    return view('dangnhap');
   }

   public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập password',
        ]
    );
        $email = $request->email;
        $password = $request->password;
        $user = NguoiDung::where('email', $email)->first();
        // nếu tài khoản có lock = 1 sẽ khóa ngay lập tức
        $lock = NguoiDung::where('email', $email)->first();
        if ($lock && property_exists($lock, 'lock') && $lock->lock == 1) {
       Alert::error('Lỗi', 'Tài khoản đã bị khóa')->persistent("OK");
      return redirect('/dangnhap');
}
if ($user && Hash::check($password, $user->password)) {
    // Xác thực đăng nhập thành công
    // Thực hiện các hành động sau khi đăng nhập thành công
    // Ví dụ: Lưu thông tin người dùng vào session

            $userInfo = [
                'iduser' => $user->id_nguoi_dung,
                'ho' => $user->ho,
                'ten' => $user->ten,
                'email' => $user->email,
                'dia_chi' => $user->dia_chi,
                'so_dien_thoai' => $user->so_dien_thoai,
                'hinh' => $user->hinh,
                'vai_tro' => $user->vai_tro,
            ];
            session(['userInfo' => $userInfo]);

            if ($user->vai_tro > 0) {
                return redirect()->intended(route('admin-trang-chu'));
            } else {
                return redirect()->intended(route('home'));
            }
        } else {
            // Đăng nhập không thành công, hiển thị thông báo lỗi bằng SweetAlert2
            Alert::error('Lỗi', 'Email hoặc mật khẩu không đúng')->persistent("OK");
            // Sau đó chuyển hướng người dùng về trang chủ
            return redirect('/dangnhap');
        }
    }

    public function register(){
        return view('dangky');
       }


       public function registerPost(Request $request){
        $request->validate([
            'hoten' => 'required|string|max:255',
            'diachi' => 'required',
            'sdt' => 'required',
            'email' => 'required|string|email|max:255|unique:nguoidung',
            'password' => 'required|string|min:8|confirmed',
        ],
        [
            'hoten.required' => 'Vui lòng nhập họ tên.',
            'diachi.required' => 'Vui lòng nhập địa chỉ.',
            'sdt.required' => 'Vui lòng nhập số điện thoại.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Vui lòng nhập địa chỉ email hợp lệ.',
            'email.unique' => 'Email này đã được sử dụng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
        ]
    );

        $data['ten'] = $request->hoten;
        $data['dia_chi'] = $request->diachi;
        $data['so_dien_thoai'] = $request->sdt;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        // Kiểm tra xem email đã tồn tại hay chưa
        $existingUser = \DB::table('nguoidung')->where('email', $data['email'])->first();
        $existingUser1 = \DB::table('nguoidung')->where('so_dien_thoai', $data['so_dien_thoai'])->first();

        if ($existingUser) {
            // Email đã tồn tại, hiển thị thông báo lỗi bằng SweetAlert2
            Alert::error('Lỗi', 'Gmail đã tồn tại')->persistent("OK");
            // Sau đó chuyển hướng người dùng về trang chủ
            return redirect('/dangky');
        }
        if($existingUser1){
            Alert::error('Lỗi', 'Số điện thoại đã tồn tại')->persistent("OK");
            // Sau đó chuyển hướng người dùng về trang chủ
            return redirect('/dangky');
        }else{
                 // Email chưa tồn tại, tiến hành đăng ký
                 \DB::table('nguoidung')->insert($data);
                 alert()->success('Đăng ký thành công', 'Cảm ơn bạn đã đăng ký ')->persistent("OK");
                 // Sau đó chuyển hướng người dùng về trang chủ
                 return redirect('/dangnhap');
        }
    }


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }










public function forgetPassword(){
return view('forget-password');
}

public function forgetPasswordPost(Request $req) {
    $this->validate(
        $req,
        [
           'email' => 'required|exists:nguoidung',
        ],
        [
           'email.required' => 'Bạn chưa nhập email',
           'email.exists' => 'Email không tồn tại trong hệ thống',

        ]
     );

     $nguoidung = NguoiDung::where('email', $req->email)->first();
     $nguoidung->token = $req->token ?? Str::random(10);
     $nguoidung->update(['token' => $nguoidung->token]);
     Mail::send('emails.forget-password', compact('nguoidung'), function ($email) use ($nguoidung) {
        $email->subject('DTLP - Lấy lại mật khẩu');
        $email->to($nguoidung->email, $nguoidung->ten);
     });
     return redirect('dangnhap')->with('success', 'Vui lòng check email để thực hiện thay đổi mật khẩu');
}

public function resetPassword(NguoiDung $nguoidung, $token){
    if($nguoidung->token == $token){
       return view('change-password');
    }
    return abort(404);
}

public function resetPasswordPost(NguoiDung $nguoidung, Request $req){
    $this->validate($req,[
             'password'=>'required',
             'confirmpassword'=>'required|same:password',
      ],
      [
             'password.required'=>'Password chưa nhập',
             'confirmpassword.required'=>'Nhập lại password không đúng',
             'confirmpassword.same'=>'Không khớp',
      ]);

     $nguoidung->password = bcrypt($req->password);
     $nguoidung->update(['password'=>$nguoidung->password,'token'=>null]);
     return redirect('dangnhap')->with('success','Đổi mật khẩu thành công.Bạn có thể đăng nhập với mật khẩu mới!');

}

 }



