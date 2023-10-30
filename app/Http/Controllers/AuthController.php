<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
   public function login(){
    return view('dangnhap');
   }

   function getpassword($id){
    $t = User::find($id);
    if($t==null) return redirect('/thongbao');
    return view('getpass', ['tin'=>$t]);
}


public function register(){
    return view('dangky');
   }



function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('home'));
}

// public function forgetPassword(){
// return view('forget-password');
// }

// public function forgetPasswordPost(Request $request){
//     $request->validate([
//         'email'=>'required|email|exists:users',
//     ]);
//     $token = Str::random(64);
//     \DB::table('password_resets')->insert([
//         'email'->$request->email,
//         'token'=>$token,
//         'created_at'=>Carbon::now()
//     ]);
//     Mail::send('emails.forget-password',['token'=>$token],function($message)use ($request){
//         $mesage->to($request->email);
//         $mesage->subject("Đặt lại mật khẩu");
//     });
// return redirect()->to(route("forget.password"))->with("success","Chúng tôi đã gửi email để đặt lại mật khẩu");
// }

// function resetPassword($token){
//     return view('new-password',compact('token'));
// }
// function resetPasswordPost(Request $request){
//     $request->validate([
//         'email'=>'require|email|exists:users',
//         'password'=>'require|string|min:6|confirmed',
//         'password_confirmation'=>'require',
//     ]);
//     $updatePassword = \DB::table('password_resets')->where([
//         'email'=>$request->email,
//         'token'=>$request->token,
//     ])->first();
//     if(!$updatePassword)
//     return redirect()->to(route('reset.password'))->with('error',"Invalid");
//  User::where('email',$request->email)->update(["password"=>Hash::make($request->password)]);
// \DB::table('password_resets')->where(["email"=>$request->email])->delete();
// return redirect()->to(route("login"))->with("success","Dặt lại mật khẩu thành công");
// }

public function loginPost(Request $request){
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $email = $request->email;
    $password = $request->password;

    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $user = Auth()->user();
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
public function registerPost(Request $request){
    $request->validate([
        'hoten' => 'required',
        'diachi' => 'required',
        'sdt' => 'required',
        'email' => 'required|email', // Thêm kiểm tra email hợp lệ
        'password' => 'required',
    ]);

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

function forgetpassword(){
    return view('quenmatkhau');
}


function postforgetpassword (Request $reg){
    $reg->validate([
        'email' => 'required',
    ]);

    $customer = User::where('email',$reg->email)->first();
        Mail::send('emails.check', compact('customer'), function($email) use($customer){
            $email->subject('Hoang tien');
            $email->to($customer->email, $customer->name);
       });
       return redirect()->route('customer.forgetpass')->with('error', 'Vui lòng check gmail để đổi mật khẩu.');


}
}
