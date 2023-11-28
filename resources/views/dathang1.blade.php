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

@extends('layout')
@section('noidung')


    <!-- Bootstrap CSS -->


    <!-- header -->

    <!-- end header -->

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="" method="post"
                action="">
                {{ csrf_field() }}


                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">

                        <ul class="list-group mb-3">

                            <?php
    $thanhtien = 0; // Khởi tạo giá trị $thanhtien

    foreach ($sanPhamInfo as $item):
        $thanhtienItem = $item['soLuong'] * $item['sanPham']->gia; // Tính thành tiền cho mỗi sản phẩm
        $thanhtien += $thanhtienItem; // Thêm vào tổng thành tiền
        ?>

        <li class="list-group-item justify-content-between lh-condensed">
            <img src="img/{{ $item['sanPham']->hinh }}" alt="">
            <div class="dd">
                <div>
                    <h6 class="my-0">
                        {{ $item['sanPham']->ten_san_pham }}
                        <span>Số lượng: {{ $item['soLuong'] }}</span>
                </div>

                <span class="text-muted">Giá: {{ number_format($item['sanPham']->gia, 0, ',', '.') }}</span> </br>
                <span>Số lượng: {{ $item['soLuong'] }}</span>
                <!-- Các input hidden khác bạn có thể giữ nguyên -->
            </div>
        </li>
        <input type="hidden" name="idsp"value="{{$item['sanPham']->id_san_pham}}">
                        <input type="hidden" name="tensp"value="{{$item['sanPham']->ten_san_pham}}">
                        <input type="hidden" name="gia"value="{{$item['sanPham']->gia}}">
                        <input type="hidden" name="soluong"value="{{ $item['soLuong'] }}">
                        <input type="hidden" name="tongtien"value="{{ $thanhtien }}">
                        <input type="hidden" name="productData" value="<?= htmlentities(json_encode($item)); ?>">

    <?php endforeach; ?>


    <li class="list-group-item d-flex justify-content-between">
        <span>Tổng thành tiền</span>
        <strong>{{ number_format($thanhtien, 0, ',', '.') }} VNĐ</strong>
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

            <?php

use App\Models\DonHang;

use App\Models\DonHangChiTiet;
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}


$tongtien = 0; // Khởi tạo tổng tiền

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Xử lý Đặt hàng ở đây
    $tenNguoiNhan = $_POST['ten_nguoi_nhan'];
    $diaChi = $_POST['dia_chi'];
    $soDienThoai = $_POST['so_dien_thoai'];
    $email = $_POST['email'];
    $htttMa = $_POST['httt_ma'];
    $tonggia = $_POST['tongtien'];
    if (session()->has('userInfo')) {
        $iduser = session('userInfo.iduser');
    } else {
        $iduser = 0;
    }
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    for ($i = 0; $i < 8; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    if ($htttMa == 2) {
        if (session()->has('userInfo')) {
            $iduser = session('userInfo.iduser');
        } else {
            $iduser = 0;
        }
        $donHang = new DonHang;
        $donHang->pttt = $htttMa;
        $donHang->thoi_diem_mua_hang = now();
        $donHang->ten_nguoi_nhan = $tenNguoiNhan;
        $donHang->dia_chi = $diaChi;
        $donHang->so_dien_thoai = $soDienThoai;
        $donHang->email = $email;
$donHang->id_nguoi_dung = $iduser;
$donHang->tong_don_hang = $thanhtien;

        $donHang->save();

        $donhangID = $donHang->id_don_hang; // Lấy ID của đơn hàng sau khi thêm


        // Lấy dữ liệu sản phẩm từ biến $_POST hoặc tham số URL nếu bạn muốn
        // $productData = json_decode($_POST['products']); // hoặc sử dụng tham số URL

        // Thực hiện lưu dữ liệu chi tiết đơn hàng vào CSDL
        $productData = json_decode($_POST['productData']);

        foreach ($productData as $dt) {
            // Kiểm tra nếu $dt là một đối tượng
            if (is_object($dt)) {
                $idsp = $dt->id_san_pham;
                $tensp = $dt->ten_san_pham;
                $gia = $dt->gia;
                $soluong = 2;

                // Thực hiện chèn thông tin chi tiết đơn hàng
                $donHangchitiet = new DonHangChiTiet;
                $donHangchitiet->id_don_hang = $donhangID;
                $donHangchitiet->id_san_pham = $idsp;
                $donHangchitiet->so_luong = $soluong;
                $donHangchitiet->gia = $gia;
                $donHangchitiet->ten_san_pham = $tensp;

                $donHangchitiet->save();
                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


                $partnerCode = 'MOMOBKUN20180529';
                $accessKey = 'klm05TvNBzhg7h7j';
                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                $orderInfo = "Thanh toán qua MoMo";
                $amount = $tonggia;
                $orderId = rand(00, 9999);
                $redirectUrl = "http://127.0.0.1:8000/";
                $ipnUrl = "http://127.0.0.1:8000/";
                $extraData = "";


                if (!empty($_POST)) {
                    $partnerCode = $partnerCode;
                    $accessKey = $accessKey;
                    $serectkey = $secretKey;
                    $orderId = $orderId; // Mã đơn hàng

                    $orderInfo = $orderInfo;
                    $amount = $amount;
                    $ipnUrl = $ipnUrl;
                    $redirectUrl = $redirectUrl;
                    $extraData = $extraData;

                    $requestId = time() . "";
                    $requestType = "payWithATM";
                    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                    //before sign HMAC SHA256 signature
                    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                    $signature = hash_hmac("sha256", $rawHash, $serectkey);
                    $data = array(
                        'partnerCode' => $partnerCode,
                        'partnerName' => "Test",
                        "storeId" => "MomoTestStore",
                        'requestId' => $requestId,
                        'amount' => $amount,
                        'orderId' => $orderId,
                        'orderInfo' => $orderInfo,
                        'redirectUrl' => $redirectUrl,
                        'ipnUrl' => $ipnUrl,
                        'lang' => 'vi',
                        'extraData' => $extraData,
                        'requestType' => $requestType,
                        'signature' => $signature
                    );
                    $result = execPostRequest($endpoint, json_encode($data));
                    $jsonResult = json_decode($result, true); // decode json

                    //Just a example, please check more in there

                    // return redirect('/home')->with('thongbao', $thongbao);
                    if (isset($jsonResult['payUrl'])) {
                        return redirect()->away($jsonResult['payUrl']);
                    } else {
                        // Xử lý nếu không có URL thanh toán
                    }
                }
            } else {
                // Nếu $dt không phải là đối tượng, xử lý tùy thuộc vào cấu trúc dữ liệu của $dt
                // Ví dụ: giả sử $dt có cấu trúc là một mảng
                // Lưu ý: Bạn cần biết cấu trúc thực tế của $dt khi nó không phải là đối tượng
                if (is_array($dt)) {
                    // Xử lý để lấy thông tin từ mảng $dt và lưu vào CSDL
                    $idsp = $dt['id_san_pham'];
                    $tensp = $dt['ten_san_pham'];
                    $gia = $dt['gia'];
                    $soluong = 2;

                    // Thực hiện chèn thông tin chi tiết đơn hàng
                    $donHangchitiet = new DonHangChiTiet;
                    $donHangchitiet->id_don_hang = $donhangID;
                    $donHangchitiet->id_san_pham = $idsp;
                    $donHangchitiet->so_luong = $soluong;
                    $donHangchitiet->gia = $gia;
                    $donHangchitiet->ten_san_pham = $tensp;

                    $donHangchitiet->save();


                } else {
                    // Xử lý cho trường hợp khác nếu cần
                    error_log('Dữ liệu không phải là đối tượng hoặc mảng: ' . print_r($dt, true));
                }
            }
        }


    } else {
        if (session()->has('userInfo')) {
            $iduser = session('userInfo.iduser');
        } else {
            $iduser = 0;
        }
        $donHang = new DonHang;
        $donHang->pttt = $htttMa;
        $donHang->thoi_diem_mua_hang = now();
        $donHang->ten_nguoi_nhan = $tenNguoiNhan;
        $donHang->dia_chi = $diaChi;
        $donHang->so_dien_thoai = $soDienThoai;
        $donHang->email = $email;
$donHang->id_nguoi_dung = $iduser;
$donHang->tong_don_hang = $thanhtien;

        $donHang->save();

        $donhangID = $donHang->id_don_hang; // Lấy ID của đơn hàng sau khi thêm

        // Lấy dữ liệu sản phẩm từ biến $_POST hoặc tham số URL nếu bạn muốn
        // $productData = json_decode($_POST['products']); // hoặc sử dụng tham số URL

        // Thực hiện lưu dữ liệu chi tiết đơn hàng vào CSDL
        $productData = json_decode($_POST['productData']);

        foreach ($productData as $dt) {
            // Kiểm tra nếu $dt là một đối tượng
            if (is_object($dt)) {
                $idsp = $dt->id_san_pham;
                $tensp = $dt->ten_san_pham;
                $gia = $dt->gia;
                $soluong = 2;

                // Thực hiện chèn thông tin chi tiết đơn hàng
                $donHangchitiet = new DonHangChiTiet;
                $donHangchitiet->id_don_hang = $donhangID;
                $donHangchitiet->id_san_pham = $idsp;
                $donHangchitiet->so_luong = $soluong;
                $donHangchitiet->gia = $gia;
                $donHangchitiet->ten_san_pham = $tensp;

                $donHangchitiet->save();
            } else {
                // Nếu $dt không phải là đối tượng, xử lý tùy thuộc vào cấu trúc dữ liệu của $dt
                // Ví dụ: giả sử $dt có cấu trúc là một mảng
                // Lưu ý: Bạn cần biết cấu trúc thực tế của $dt khi nó không phải là đối tượng
                if (is_array($dt)) {
                    // Xử lý để lấy thông tin từ mảng $dt và lưu vào CSDL
                    $idsp = $dt['id_san_pham'];
                    $tensp = $dt['ten_san_pham'];
                    $gia = $dt['gia'];
                    $soluong = 2;

                    // Thực hiện chèn thông tin chi tiết đơn hàng
                    $donHangchitiet = new DonHangChiTiet;
                    $donHangchitiet->id_don_hang = $donhangID;
                    $donHangchitiet->id_san_pham = $idsp;
                    $donHangchitiet->so_luong = $soluong;
                    $donHangchitiet->gia = $gia;
                    $donHangchitiet->ten_san_pham = $tensp;

                    $donHangchitiet->save();
                    alert()->success('Đặt hàng thành công', 'Cảm ơn bạn đã mua hàng!')->persistent("OK");

    // Sau đó chuyển hướng người dùng về trang chủ
    return redirect('/');
                } else {
                    // Xử lý cho trường hợp khác nếu cần
                    error_log('Dữ liệu không phải là đối tượng hoặc mảng: ' . print_r($dt, true));
                }
            }
        }






    }


}

// Đóng kết nối CSDL
?>

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
    margin-right:60px;
}
</style>
