@extends('layout')
@section('noidung')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.mainmenu-area {
    background: none repeat scroll 0 0 #333;
    font-family: "Roboto Condensed", sans-serif;
    text-transform: uppercase;
    width: 100%;
    z-index: 999;
}

.mainmenu-area ul.navbar-nav li a {
    color: white;
    font-size: 14px;
    padding: 20px;
}

.product-big-title-area {
    background: url(img/crossword.png) repeat scroll 0 0 #f17024;
}

.logo h1 a img {
    width: 30%;
}

.header-area {
    background-color: #f17024;
}

.single-product h2 {
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 4px;
    margin-top: 4px;
}

.header-area a {
    color: white;
}

/* end */
.product-name {
    text-transform: uppercase;
    font-size: 20px;
    line-height: 40px;
    background: #f17024;
    color: #fff;
    border-radius: 5px 5px 0 0;
    padding: 0 20px;
    font-weight: bold;
    position: relative;
    margin-right: 20px;
}

input[type="submit"],
button[type=submit] {
    background: none repeat scroll 0 0 #f17024;
    border: medium none;
    color: #fff;
    padding: 11px 20px;
    text-transform: uppercase;
}

/* Style for the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Style for the product description container */
#home {
    padding: 20px;
}

/* Style for alert message */
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
}

/* Responsive styling for small screens */
@media (max-width: 768px) {
    table {
        font-size: 14px;
    }
}


/* bình luận */
/* Container styling */
/* .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
} */

/* Title styling */
h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
}

/* Horizontal line styling */
hr {
    border: 1px solid #ccc;
    margin: 15px 0;
}

/* Comment styling */
.bl {
    display: flex;
    margin-bottom: 20px;
}

/* Comment image styling */
.bl img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
    border: 2px solid #007bff;
    /* Change the color as needed */
}

/* Comment content styling */
.noidungbl {
    flex-grow: 1;
}

/* Comment author styling */
h5 {
    font-size: 18px;
    margin: 0;
    color: #007bff;
}

/* Comment text styling */
p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

/* Hover effect for comments */
.bl:hover {
    background-color: #e2e8f0;
    transition: background-color 0.3s ease;
}


.star {
    cursor: pointer;
}

.star:hover,
.star.active {
    color: gold;
}

.notification {
    display: none;
    padding: 10px;
    background: #4CAF50;
    color: #ffffff;
    border-radius: 4px;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    transition: opacity 0.3s ease-in-out;
}

.notification.show {
    display: block;
}
.username>h5{
margin-top: 12px;
}
/* end */
  button.add_to_cart_buttonss{
        height:40px;
        border:none;
        background-color:#5a88ca;
        color:white;
    }
</style>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Trang chủ</a>
                        <a href="">{{$sanpham->loai->ten_loai}}</a>
                        <a href="">{{$sanpham->ten_san_pham}}</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="/img/{{$sanpham->hinh}}" width="300px" alt="hinh">
                                </div>
                                <div class="product-gallery">
                                    @foreach($anhsanpham as $asp)
                                    <img src="/img/{{$asp->url_anh}}" alt="">
                                    @endforeach
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$sanpham->ten_san_pham}}</h2>
                                <div class="product-inner-price">
                                    <ins>{{ number_format($sanpham->gia, 0, ',', '.') }} VNĐ</ins>
                                    <del>{{ number_format($sanpham->gia_khuyen_mai, 0, ',', '.') }} VNĐ</del>
                                </div>
                                <p>Màu sắc: Đen </p>
                                <div id="cartMessage"></div>

                                <form action="{{ route('muahang',['id' => $sanpham->id_san_pham]) }}" method="get" class="cart" id="addToCartForm">
    <div class="quantity">
        <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
            name="quantity" min="1" step="1">
    </div>
    <input type="hidden" name="product_id" value="{{ $sanpham->id_san_pham }}">

    <button class="" type="submit">Mua ngay</button>
    <button class="add_to_cart_buttonss" type="button" onclick="addToCart('cart')">Thêm vào giỏ hàng</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function addToCart(action) {
        <?php if (!session()->has('userInfo')): ?>
            window.location.href = '<?php echo route("login"); ?>';
        <?php else: ?>
            var quantity = $('#addToCartForm input[name="quantity"]').val();
            var product_id = $('#addToCartForm input[name="product_id"]').val();

            var csrf_token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: '/add-to-cart123',
                data: {
                    action: action,
                    quantity: quantity,
                    product_id: product_id,
                    _token: csrf_token,
                },
                success: function(response) {
                    // Thêm mã hiển thị thông báo từ AlertSweet2 ở đây
                    Swal.fire({
                        title: 'Đã thêm vào giỏ hàng',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(error) {
                    console.error('Lỗi khi thêm vào giỏ hàng', error);
                    // Thêm mã hiển thị thông báo lỗi từ AlertSweet2 ở đây
                    Swal.fire({
                        title: 'Đã thêm vào giỏ hàng lỗi',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        <?php endif; ?>
    }
</script>



                                <div class="product-inner-category">
                                    <p>Danh mục: <a href="">{{$sanpham->loai->ten_loai}}</a>. Tags: <a
                                            href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>. </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                role="tab" data-toggle="tab">Thông tin chi tiết</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                data-toggle="tab">Đánh giá</a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
<div class="row banner">
    <div class="col-6">
        <h3>Thông tin sản phẩm {{$sanpham->ten_san_pham}}</h3>
        <img src="/img/{{$sanpham->hinh}}" alt="">
        <p>Đang cập nhật</p>
    </div>
    <div class="col-6">
    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Thông số kỹ thuật</h2>
                                            @if($chitietsanpham)
                                            <table>
                                                <tr>
                                                    <th>Mã sản phẩm
                                                    </th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Ram</th>
                                                    <th>CPU</th>
                                                </tr>
                                                <tr>
                                                    <td>SP00{{$chitietsanpham->id_chi_tiet}}</td>
                                                    <td>{{$sanpham->ten_san_pham}}</td>
                                                    <td>{{$chitietsanpham->RAM}}</td>
                                                    <td>{{$chitietsanpham->CPU}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ROM <p></p>
                                                    </th>
                                                    <th>Màu Sắc</th>
                                                    <th>Cân Nặng</th>
                                                    <th>GPU</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->ROM}}</td>
                                                    <td>{{$chitietsanpham->kich_thuoc}}</td>
                                                    <td>{{$chitietsanpham->can_nang}}</td>
                                                    <td>{{$chitietsanpham->GPU}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Màn Hình<p></p>
                                                    </th>
                                                    <th>Kích Thước</th>
                                                    <th>Xuất xứ</th>
                                                    <th>Thời điểm ra mắt</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->man_hinh}}</td>
                                                    <td>{{$chitietsanpham->kich_thuoc}}</td>
                                                    <td>{{$chitietsanpham->xuat_xu}}</td>
                                                    <td>{{$chitietsanpham->thoi_diem_ra_mat}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Hệ điều hành <p></p>
                                                    </th>
                                                    <th>Camera trước</th>
                                                    <th>Camera sau</th>
                                                    <th>Dung lượng pin</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->he_dieu_hanh}}</td>
                                                    <td>{{$chitietsanpham->camera_truoc}}</td>
                                                    <td>{{$chitietsanpham->camera_sau}}</td>
                                                    <td>{{$chitietsanpham->dung_luong_pin}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Sim<p></p>
                                                    </th>
                                                    <th>Tính năng</th>
                                                    <th>Bảo hành</th>
                                                    <th>Cổng giao tiếp</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->sim}}</td>
                                                    <td>{{$chitietsanpham->tinh_nang}}</td>
                                                    <td>{{$chitietsanpham->bao_hanh}}</td>
                                                    <td>{{$chitietsanpham->cong_giao_tiep}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Thương hiệu <p></p>
                                                    </th>
                                                    <th>Độ dài dây</th>
                                                    <th>Loại tai nghe</th>
                                                    <th>Chất liệu</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->thuong_hieu}}</td>
                                                    <td>{{$chitietsanpham->do_dai_day}}</td>
                                                    <td>{{$chitietsanpham->loai_tai_nghe}}</td>
                                                    <td>{{$chitietsanpham->chat_lieu}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Thời gian sạc đầy<p></p>
                                                    </th>
                                                    <th>Thời gian sử dụng</th>
                                                    <th>Đai tần số</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->thoi_gian_sac_day}}</td>
                                                    <td>{{$chitietsanpham->thoi_gian_su_dung}}</td>
                                                    <td>{{$chitietsanpham->dai_tan_so}}</td>
                                                    <td>{{$chitietsanpham->so_luong}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tốc độ bus <p></p>
                                                    </th>
                                                    <th>Ổ cứng</th>
                                                    <th>Tần số quét</th>
                                                </tr>
                                                <tr>
                                                    <td>{{$chitietsanpham->toc_do_bus}}</td>
                                                    <td>{{$chitietsanpham->o_cung}}</td>
                                                    <td>{{$chitietsanpham->tan_so_quet}}</td>
                                                </tr>

                                                <!-- Thêm các dòng khác tương tự cho các sản phẩm khác -->
                                            </table>
                                            @else
                                            <p class="alert alert-danger">Không có tin chi tiết cho sản phẩm này</p>

                                            @endif

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <!-- BÌNH LUẬN -->
                                            <?php
                                            // Kiểm tra xem phiên đăng nhập đã tồn tại hay chưa
                                            if (session()->has('userInfo')) {
                                                // Lấy thông tin người dùng từ phiên đăng nhập
                                                $userInfo = session('userInfo');
                                            ?>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-2">
                                                        @if (session('success'))
                                                        <div class="notification" id="successNotification">
                                                            {{ session('success') }}</div>
                                                        @endif


                                                        <h3>BÌNH LUẬN</h3>
                                                        <div class="bl">
                                                            <img src="{{session('userInfo.hinh')}}" alt="User Avatar">
                                                            <div class="username">
                                                                <h5>{{session('userInfo.ten')}}</h5>
                                                            </div>
                                                        </div>

                                                        <!-- CSS -->
                                                        <style>
                                                        .user-profile {
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .avatar {
                                                            width: 30px;
                                                            height: 30px;
                                                            border-radius: 50%;
                                                            margin-right: 10px;
                                                        }
                                                        </style>

                                                        <form action="{{ url('/comments') }}" id="comment-form"
                                                            method="POST">
                                                            @csrf
                                                            <div class="rating">
                                                                <input type="hidden" name="rating" id="ratingInput">
                                                                <span class="star" data-rating="1"><i
                                                                        class="fas fa-star"></i></span>
                                                                <span class="star" data-rating="2"><i
                                                                        class="fas fa-star"></i></span>
                                                                <span class="star" data-rating="3"><i
                                                                        class="fas fa-star"></i></span>
                                                                <span class="star" data-rating="4"><i
                                                                        class="fas fa-star"></i></span>
                                                                <span class="star" data-rating="5"><i
                                                                        class="fas fa-star"></i></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" id="ten"
                                                                    value="{{session('userInfo.ten')}}" name="ten"
                                                                    type="hidden" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" id="email" value="{{$id}}"
                                                                    name="id_san_pham" type="hidden" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Nội dung:</label>
                                                                <textarea class="form-control" id="comment"
                                                                    name="comment" rows="4" required></textarea>
                                                            </div>
                                                            <button id="submit-comment" type="submit"
                                                                class="btn btn-primary">Gửi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                            }

                                                            ?>

                                        </div>
                                    </div>
    </div>
</div>
<div class="row binhluan">
<h2>Ý kiến nhận xét</h2>

                                                @foreach($binhluan as $bl)
                                                <div class="bl">
                                                    <img src="{{ asset('img/1.jfif') }}" alt="">
                                                    <div class="noidungbl">
                                                        <h5>{{$bl->ten}}</h5>
                                                        <p>{{$bl->noi_dung}}</p>
                                                    </div>
                                                </div>
                                                @endforeach

</div>

                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Sản phẩm tương tự</h2>
                        <div class="related-products-carousel">
                            <div class="row">
                                @foreach($sanphamlienquan as $splq)
                                <div class="col-md-4">
                                    <div class="single-product" style="margin-bottom:25px;">
                                        <div class="product-f-image">
                                            <img src="/img/{{$splq->hinh}}" alt="">
                                            <div class="product-hover">
                                                <a href="{{ route('muahang',['id' => $splq->id_san_pham]) }}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>
                                                    Mua ngay</a>
                                                <a href="{{url('chi-tiet-san-pham',[$splq->id_san_pham])}}" class="view-details-link"><i class="fa fa-link"></i> Xem thêm</a>
                                            </div>
                                        </div>

                                        <h2><a href="">{{$splq->ten_san_pham}}</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>{{ number_format($splq->gia, 0, ',', '.') }} VNĐ</ins>
                                            <del>{{ number_format($splq->gia_khuyen_mai, 0, ',', '.') }} VNĐ</del>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="text-center">
                                {{ $sanphamlienquan->appends(request()->all())->links() }}
                                <!-- Hiển thị liên kết phân trang -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript đánh giá-->
<script>
const stars = document.querySelectorAll('.star');

stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        const rating = star.dataset.rating;
        ratingInput.value = rating;
        highlightStars(index);
    });
});

function highlightStars(index) {
    stars.forEach((star, i) => {
        if (i <= index) {
            star.classList.add('active');
        } else {
            star.classList.remove('active');
        }
    });
}
// thông báo 2s
window.onload = function() {
    var successNotification = document.getElementById('successNotification');
    if (successNotification) {
        successNotification.style.display = 'block';
        setTimeout(function() {
            successNotification.style.display = 'none';
        }, 2000); // Thời gian hiển thị thông báo (2 giây)
    }
};
</script>
@endsection

<style>
    .row {
    display: flex;
}
.banner{
border-radius:10px;
margin-top:20px;
}

.col-6 {
    width: 50%;
    background-color:white;
    padding:20px;
    box-shadow: 1px 1px 1px #cccccc;
}
.binhluan{
    display:block;
    background-color:white;
    padding:20px;
    margin-top:20px;
}
.tab-content {
    /* Thêm các quy tắc thiết kế cho tab-content tại đây */
}

.tab-pane {
    /* Thêm các quy tắc thiết kế cho tab-pane tại đây */
}
.binhluan hr{
    height:1px;
}
#comment-form{
    width: 50%;
}
.binhluan .bl{
    margin-top:20px;
}
</style>

