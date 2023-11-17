<div>
   <div style="margin: 0 auto; text-align:center">
    <h2>Xin Chào {{$nguoidung->ten}}</h2>
    <p>Email này giúp bạn lấy lại mật khẩu</p>
     <p>Vui lòng nhấp vào link dưới đây để đặt lại mật khẩu</p>
     <p>Chú ý: Mã xác minh chỉ có hiệu lực 72 giờ</p>
     <p>
        <a href="{{route('reset.password',['nguoidung'=>$nguoidung->id_nguoi_dung, 'token'=>$nguoidung->token])}}" style=" background:green; color:#fff; font-weight:bold">Đặt lại mật khẩu</a>
     </p>
</div>

</div>