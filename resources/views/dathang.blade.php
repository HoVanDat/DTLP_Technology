<?php
session(['start']);
$thanhtien = $tin->gia * $soluong;
session(['thanhtien' => $thanhtien]);
if (session()->has('userInfo')) {
    $iduser = session('userInfo.iduser');
} else {
    $iduser = 0;
}
$tin123 = DB::table('nguoidung')->where('id_nguoi_dung',$iduser)->first();
$diachi = $tin123->dia_chi;
$ten = $tin123->ten;
$sdt = $tin123->so_dien_thoai;
$email = $tin123->email;



?>

@extends('layout')
@section('noidung')


    <!-- Bootstrap CSS -->


    <!-- header -->

    <!-- end header -->

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="{{ route('luu_don_hang') }}">
                @csrf
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">

                        <ul class="list-group mb-3">
                            <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                            <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                            <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">
                            <div class="row-de" style="display:flex; height:120px; padding:0px;">
                            <img style="width:100px; " src="/img/{{$tin->hinh}}" alt="">
                            <li  class="list-group-item   lh-condensed">
                                <div>
                                    <h6 class="my-0">{{$tin->ten_san_pham}}
                                </div>

                                <span class="text-muted">{{ number_format($tin->gia, 0, ',', '.') }} VNĐ</span>
                                <span>Số lượng: {{$soluong}}</span>


                            </li>
                            </div>

                            <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                            <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                            <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong>{{ number_format($thanhtien, 0, ',', '.') }} VNĐ</strong>
                            </li>
                        </ul>


                        <div class="input-group">
                        <form method="post" action="{{ route('xu-ly-ma-giam-gia') }}" onsubmit="return xuLyMaGiamGia()">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="ma_giam_gia" placeholder="Mã khuyến mãi">
        <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Xác nhận</button>
        </div>
    </div>
</form>
<script>
 function xuLyMaGiamGia(event) {
        // Thực hiện logic xử lý mã giảm giá ở đây

        // Ngăn chặn hành vi mặc định của nút "Xác nhận"
        event.preventDefault();

        // Submit form mã giảm giá
        document.forms[0].submit();
        return false;
    }
</script>




                        </div>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="ten_nguoi_nhan" id="kh_ten"
                                    value="{{$ten}}" readonly="">
                            </div>

                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="dia_chi" id="kh_diachi"
                                    value="{{$diachi}}" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="so_dien_thoai" id="kh_dienthoai"
                                    value="{{$sdt}}" readonly="">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" id="kh_email"
                                    value="{{$email}}" readonly="">
                            </div>

                        </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản momo</label>
                            </div>

                        </div>
                        <input type="hidden" name="idsp"value="{{$tin->id_san_pham}}">
                        <input type="hidden" name="tensp"value="{{$tin->ten_san_pham}}">
                        <input type="hidden" name="gia"value="{{$tin->gia}}">
                        <input type="hidden" name="soluong"value="{{$soluong}}">

                        <hr class="mb-4">
<input type="hidden" name="tongtien" value="{{$thanhtien}}">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                            hàng</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>

    <!-- footer -->

@endsection

<style>
    div.mainmenu-area{
        width: 100%;
        background-color:#333333;
    }
    ul.navbar-nav li a {
    background: #333333;
    color: white;
    font-size: 14px;
    padding: 20px;

}
.mainmenu-area ul.navbar-nav li a {
    background: #333333;
    /* color: #6e6a6a; */
    font-size: 14px;
    padding: 20px;
}
main{
    margin-top:50px;
}
h6.my-0{
    font-weight:bolder;
    font-size:20px;
}
span.text-muted{
    font-weight:bolder;
    margin-right:40px;
}
Li.lh-condensed{
    border:none;
    width: 400px;
}
div.input-group{
    display:flex;
}.input-group button{
    height:36px;
}
</style>
