<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonHang;
use App\Models\SanPham;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\DonHangChiTiet;
use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
    function muahang($id, Request $request){
        $soluong = $request->input('quantity');

        $tin = DB::table('sanpham')->where('id_san_pham',$id)->first();
        $data= ['soluong'=>$soluong,'tin'=>$tin];
        return view('dathang', $data);

    }

    public function deleteProduct($productId)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Tìm kiếm và xóa sản phẩm theo id
        foreach ($cart as $index => $item) {
            if ($item['product_id'] == $productId) {
                unset($cart[$index]);
                break; // Ngừng vòng lặp sau khi xóa
            }
        }

        // Cập nhật lại giỏ hàng trong session
        session()->put('cart', $cart);

        // Chuyển hướng trở lại trang trước đó sau khi xóa
        return redirect('/cart')->with('success', 'xóa sản phẩm thành công.');
    }

    public function removeAllItems(Request $request)
    {
        try {
            // Lấy giỏ hàng từ session
            $cart = session()->get('cart', []);

            // Xóa tất cả sản phẩm trong giỏ hàng
            session()->forget('cart');

            // Trả về kết quả (có thể là JSON hoặc thông báo khác)
            return redirect('/thongtin')->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng.');
        } catch (\Exception $e) {
            // Xử lý lỗi nếu có
            return response()->json(['error' => 'Đã xảy ra lỗi khi xóa giỏ hàng'], 500);
        }
    }
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function store(Request $request) {
        // Lấy dữ liệu từ form
        $httt_ma = $request->input('httt_ma');
        $ten_nguoi_nhan = $request->input('ten_nguoi_nhan');
        $dia_chi = $request->input('dia_chi');
        $so_dien_thoai = $request->input('so_dien_thoai');
        $email = $request->input('email');
        $idsp = $request->input('idsp');
        $thanhtien = $request->input('tongtien');
        $tensp = $request->input('tensp');
        $gia = $request->input('gia');
        $soluong = $request->input('soluong');

        if (!session()->has('userInfo')) {
            // Nếu session 'iduser' không tồn tại, chuyển người dùng sang trang đăng nhập
            return redirect()->route('login');
        }else{
            if (session()->has('userInfo')) {
                $iduser = session('userInfo.iduser');
            } else {
                $iduser = 0;
            }

            if($httt_ma == 2){
                $donHang = new DonHang;
                $donHang->pttt = $httt_ma;
                $donHang->thoi_diem_mua_hang = now();
                $donHang->ten_nguoi_nhan = $ten_nguoi_nhan;
                $donHang->dia_chi = $dia_chi;
                $donHang->so_dien_thoai = $so_dien_thoai;
                $donHang->email = $email;
        $donHang->id_nguoi_dung = $iduser;
        $donHang->tong_don_hang = $thanhtien;
                $donHang->save();

                $iddh = $donHang->id_don_hang;
 $donHangchitiet = new DonHangChiTiet;
 $donHangchitiet->id_don_hang = $iddh;
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
                $amount = $thanhtien;
                $orderId = rand(00,9999);
                $redirectUrl = "http://127.0.0.1:8000/";
                $ipnUrl = "http://127.0.0.1:8000/";
                $extraData = "";


                if (!empty($_POST)) {
                    $partnerCode = $partnerCode;
                    $accessKey = $accessKey;
                    $serectkey = $secretKey;
                    $orderId = $orderId;// Mã đơn hàng

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
                    $data = array('partnerCode' => $partnerCode,
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
                        'signature' => $signature);
                        $result = $this->execPostRequest($endpoint, json_encode($data));
                        $jsonResult = json_decode($result, true);  // decode json

                    //Just a example, please check more in there

                        // return redirect('/home')->with('thongbao', $thongbao);
                        if (isset($jsonResult['payUrl'])) {
                            return redirect($jsonResult['payUrl']);
                        } else {
                            // Xử lý lỗi khi không có khóa 'payUrl' trong dữ liệu trả về từ API
                            return redirect()->back()->with('error', 'Có lỗi xảy ra khi thanh toán qua MoMo.');
                        }

                     }

            }else{
                $donHang = new DonHang;
                $donHang->pttt = $httt_ma;
                $donHang->thoi_diem_mua_hang = now();
                $donHang->ten_nguoi_nhan = $ten_nguoi_nhan;
                $donHang->dia_chi = $dia_chi;
                $donHang->so_dien_thoai = $so_dien_thoai;
                $donHang->email = $email;
        $donHang->id_nguoi_dung = $iduser;
        $donHang->tong_don_hang = $thanhtien;

                $donHang->save();

                $iddh = $donHang->id_don_hang;
 $donHangchitiet = new DonHangChiTiet;
 $donHangchitiet->id_don_hang = $iddh;
 $donHangchitiet->id_san_pham = $idsp;
 $donHangchitiet->so_luong = $soluong;
 $donHangchitiet->gia = $gia;
 $donHangchitiet->ten_san_pham = $tensp;

 $donHangchitiet->save();
 alert()->success('Đặt hàng thành công', 'Cảm ơn bạn đã mua hàng!')->persistent("OK");

    // Sau đó chuyển hướng người dùng về trang chủ
    return redirect('/');
        }

        // Lưu dữ liệu vào cơ sở dữ liệu
        // Ví dụ:


        // Sau khi lưu dữ liệu, bạn có thể thực hiện các xử lý khác
        // ví dụ: thêm sản phẩm vào đơn hàng, tính tổng số tiền, vv.

        // Cuối cùng, chuyển người dùng đến trang cảm ơn hoặc trang tiếp theo
    }


}
public function store1(Request $request) {
    // Lấy dữ liệu từ form
    $tongtien = 0; // Khởi tạo tổng tiền

    // Xử lý Đặt hàng ở đây
    $sanPhamInfo = $_POST['sanPhamInfo'];
    $tenNguoiNhan = $_POST['ten_nguoi_nhan'];
    $diaChi = $_POST['dia_chi'];
    $soDienThoai = $_POST['so_dien_thoai'];
    $email = $_POST['email'];
    $htttMa = $_POST['httt_ma'];
    $tonggia = $_POST['tongtien'];
    $thanhtien = $_POST['thanhtien'];
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
        $sanPhamInfo = json_decode($sanPhamInfo);

        foreach ($sanPhamInfo as $dt) {

            $idsp = $dt->sanPham->id_san_pham;
        $soluong = 1;
                $gia = $dt->sanPham->gia;
            $tensp = $dt->sanPham->ten_san_pham;


            $donHangchitiet = new DonHangChiTiet;
            $donHangchitiet->id_don_hang = $donhangID;
            $donHangchitiet->id_san_pham = $idsp;
            $donHangchitiet->so_luong = $soluong;
            $donHangchitiet->gia = $gia;
            $donHangchitiet->ten_san_pham = $tensp;

            $donHangchitiet->save();
        }
        // Lấy dữ liệu sản phẩm từ biến $_POST hoặc tham số URL nếu bạn muốn
        // $productData = json_decode($_POST['products']); // hoặc sử dụng tham số URL

        // Thực hiện lưu dữ liệu chi tiết đơn hàng vào CSDL

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
            $result = $this->execPostRequest($endpoint, json_encode($data));
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
        $chuyenHuong = false;
        foreach ($productData as $dt) {
            // Kiểm tra nếu $dt là một đối tượng
            if (is_object($dt)) {
                $idsp = $dt->id_san_pham;
                $tensp = $dt->ten_san_pham;
                $gia = $dt->gia;
                $soluong = 1;

                // Thực hiện chèn thông tin chi tiết đơn hàng
                $donHangchitiet = new DonHangChiTiet;
                $donHangchitiet->id_don_hang = $donhangID;
                $donHangchitiet->id_san_pham = $idsp;
                $donHangchitiet->so_luong = $soluong;
                $donHangchitiet->gia = $gia;
                $donHangchitiet->ten_san_pham = $tensp;

                $donHangchitiet->save();

                // Sau đó chuyển hướng người dùng về trang chủ
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
                alert()->success('Đặt hàng thành công', 'Cảm ơn bạn đã mua hàng!')->persistent("OK");

                // Sau đó chuyển hướng người dùng về trang chủ
                return redirect('/');

            }
        }

            // Nếu biến flaglà true, thực hiện chuyển hướng







    }



}
public function addToCart(Request $request)
{
    // Xử lý logic thêm vào giỏ hàng ở đây
    // Sử dụng $request để lấy thông tin sản phẩm và số lượng

    $productInfo = [
        'product_id' => $request->input('product_id'), // Sửa khóa này để phù hợp với view
        'quantity' => $request->input('quantity'),

        // Thêm thông tin khác nếu cần
    ];

    // Lưu thông tin vào session giỏ hàng
    $cart = session()->get('cart', []);
    $cart[] = $productInfo;
    session()->put('cart', $cart);

    // Trả về số lượng sản phẩm trong giỏ hàng
    $cartCount = count($cart);

    // Trả về kết quả JSON với số lượng sản phẩm
    return response()->json(['success' => 'Đã thêm vào giỏ hàng', 'cartCount' => $cartCount]);
}


public function showCart()
{
    // Lấy thông tin giỏ hàng từ session
    $cart = session()->get('cart', []);
    $soLuongSanPham = count($cart);

    // Truyền thông tin giỏ hàng đến view
    return view('giohang', compact('cart', 'soLuongSanPham'));
}
public function muaHang1(Request $request)
{
    $productData = $request->input('products', []);


    return view('dathang1', compact('productData'));
}

public function timKiemDonHang(Request $request)
{
    $tuKhoa = $request->input('tu-khoa');

    // Thực hiện tìm kiếm trong CSDL dựa trên từ khóa

    // Ví dụ:
    $tin123 = DonHang::where('id_don_hang', 'LIKE', "%$tuKhoa%")
        ->orWhere('trang_thai', 'LIKE', "%$tuKhoa%")
        ->get();

    return view('thongtin', ['tin123' => $tin123]);
}



function xuLyMaGiamGia(Request $request)
{
    if (session()->has('userInfo')) {
        $iduser = session('userInfo.iduser');
    } else {
        $iduser = 0;
    }

    $maGiamGia = $request->input('ma_giam_gia');
    $tin = DB::table('magiamgia')->where('id_nguoi_dung', $iduser)->first();

    if ($tin && $maGiamGia == $tin->tieude && $tin->gia > 0) {
        $giaGiam = $tin->gia;

        $thanhtien = session('thanhtien');
        // Cập nhật giá trị mới của $thanhtien sau khi áp dụng giảm giá
        $thanhtien -= $thanhtien*$giaGiam; // logic tính toán giá trị mới ứng với mã giảm giá
        // Lưu giá trị mới của $thanhtien vào session hoặc nơi khác
        session()->put('thanhtien', $thanhtien);
    }

    return redirect()->back();
}



public function datHang12(Request $request)
{
      // Lấy thông tin sản phẩm và số lượng từ request
      $selectedProductData = $request->input('selected_products', []);

      // Lấy thông tin sản phẩm từ database dựa trên các ID đã chọn
      $sanPham = SanPham::whereIn('id_san_pham', array_keys($selectedProductData))->get();

      // Tạo một mảng mới để lưu trữ thông tin sản phẩm và số lượng
      $sanPhamInfo = [];

      foreach ($sanPham as $sp) {
          // Lấy số lượng từ dữ liệu đã chọn
          $quantity = $selectedProductData[$sp->id_san_pham];

          // Thêm thông tin vào mảng
          $sanPhamInfo[] = [
              'sanPham' => $sp,
              'soLuong' => $quantity,
          ];
      }
    // Hiển thị thông tin sản phẩm (hoặc bạn có thể thực hiện bất kỳ logic xử lý nào khác)
    return view('dathang1', ['sanPhamInfo' => $sanPhamInfo]);
}

}
