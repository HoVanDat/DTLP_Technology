@extends('layout')
@section('noidung')
<?php


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



    <!-- Bootstrap CSS -->


    <!-- header -->

    <!-- end header -->

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="" method="post"
                action="{{route('luudonhang2')}}">
                @csrf


                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">

                        <ul class="list-group mb-3">

                            <?php
    $thanhtien = 0; // Khởi tạo giá trị $thanhtien

    foreach ($sanPhamInfo as $item):
        // Thêm vào tổng thành tiền
        $id_chi_tiet = $item['id_chi_tiet'];
        $tin1 = DB::table('chitietsanpham')->where('id_chi_tiet', $id_chi_tiet)->first();
        $thanhtienItem = $item['soLuong'] * $tin1->gia; // Tính thành tiền cho mỗi sản phẩm
        $thanhtien += $thanhtienItem;
        ?>

        <li class="list-group-item justify-content-between lh-condensed">
            <img src="img/{{ $item['sanPham']->hinh }}" alt="">
            <div class="dd">
                <div>
                    <h6 class="my-0">
                        {{ $item['sanPham']->ten_san_pham }}
                        <span>Số lượng: {{ $item['soLuong'] }}</span>

                </div>
                <span class="text-muted">Giá: {{ number_format($tin1->gia, 0, ',', '.') }}</span> </br>
                <span>Số lượng: {{ $item['soLuong'] }}</span>
                <span>Màu sắc: {{ $tin1->mau_sac }}</span>
                <span>Ram: {{ $tin1->RAM }}</span>                <span>
</span>
                <!-- Các input hidden khác bạn có thể giữ nguyên -->
            </div>
        </li>
        <input type="hidden" name="sanpham[{{ $item['sanPham']->id_san_pham }}][id_chi_tiet]" value="{{ $item['id_chi_tiet'] }}">
<input type="hidden" name="sanpham[{{ $item['sanPham']->id_san_pham }}][so_luong]" value="{{ $item['soLuong'] }}">

                        <input type="hidden" name="productData" value="<?= htmlentities(json_encode($item)); ?>">
    <?php endforeach; ?>

    <input type="hidden" name="sanPhamInfo" value="<?= htmlentities(json_encode($sanPhamInfo)); ?>">
    <li class="list-group-item d-flex justify-content-between">
        <span>Tổng thành tiền</span>
        <strong>{{ number_format($thanhtien, 0, ',', '.') }} VNĐ</strong>
        <input type="hidden" name="thanhtien" value="{{$thanhtien}}">
    </li>

                        </ul>


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
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
    margin-right:60px;
}
.mainmenu-area ul.navbar-nav li a {
    color: white;
    font-size: 14px;
    padding: 20px;
}
.logo img{
    width: 100px;
}
</style>
@endsection
