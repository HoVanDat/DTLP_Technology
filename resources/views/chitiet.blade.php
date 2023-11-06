@extends('layout')
@section('noidung')
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

table {
    border-collapse: collapse;
    width: 100%;
}


td {
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    text-align: left;

}
</style>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Home</a>
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

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
                                            name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>

                                <div class="product-inner-category">
                                    <p>Category: <a href="">{{$sanpham->loai->ten_loai}}</a>. Tags: <a
                                            href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>. </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
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
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email">
                                                </p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id=""
                                                        cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            <div class="row">
                                @foreach($sanphamlienquan as $splq)
                                <div class="col-md-4">
                                    <div class="single-product" style="margin-bottom:25px;">
                                        <div class="product-f-image">
                                            <img src="/img/{{$splq->hinh}}" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>
                                                    Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See
                                                    details</a>
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





@endsection