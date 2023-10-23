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

.logo h1 a img {
    width: 30%;
}

.header-area {
    background-color: white;
}

.header-area {
    background-color: #f17024;
}

.header-area a {
    color: white;
}

body {
    background-color: #f17024;
}

.maincontent-area .container {
    background-color: white;
    padding: 30px;
}

.site-branding-area {
    background-color: white;
}


.product-widget-area .container {
    background-color: white;
}

.promo-area .container {
    background-color: white;

}

.promo-area {
    background-color: #f17024;
    padding: 40px 0 40px;
}

.single-promo {
    padding: 20px 0px;
    font-size: 25px;
    font-weight: 200;
    padding: 20px 10px;
    text-align: center;
}

.col-md-3 {
    padding: 40px 20px;

}

.section-title {
    font-weight: bold;
    color: #f17024;
    font-size: 30px;
    text-align: left;
    padding: 20px;
}

.product-carousel {
    padding-top: 0px;
}

.col-md-12 {
    background-color: white;
}

.brands-area {
    color: #fff;
    padding: 20px 0 20px;
}

.brands-area {
    border-top: 0px solid #e5e5e5;
    border-bottom: 0px solid #e5e5e5;
    color: #fff;
    padding: 20px 0 20px;
}

.maincontent-area {
    padding-bottom: 10px;
    padding-top: 20px;
}

.product-widget-area {
    padding-bottom: 0px;
    padding-top: 0px;
}


#container {
    padding-left: 0px;
    padding-right: 0px;
    margin: 0 auto;
}

.panner {
    width: 100%;
    /* Đảm bảo ảnh chiếm full chiều ngang của thẻ div */
    height: 100%;
    /* Đảm bảo ảnh chiếm full chiều cao của thẻ div */
    object-fit: cover;
    /* Hiển thị ảnh mà không bị méo */
    object-position: center;
    /* Hiển thị ảnh ở giữa thẻ div */
    height: 250px;

}

.panner1 {
    width: 100%;
    margin-bottom: 30px;

}

.container .row {
    padding: 0;
}

.con {
    padding: 0px;
}

.panner4 {
    margin-top: -30px;
    width: 60%;
    margin: 0 auto;

}

.maincontent-area .container {
    background-color: white;

}


.flash-sale-title {
    display: flex;
    /* Sử dụng flexbox để căn giữa */
    justify-content: center;
    /* Căn giữa theo chiều ngang (trục X) */
    align-items: center;
    /* Căn giữa theo chiều dọc (trục Y) */
    width: 100%;
    /* Đảm bảo thẻ div chiếm full chiều ngang */
}

.panner4 {
    max-width: 100%;
    /* Đảm bảo ảnh không vượt quá kích thước của thẻ div */
    max-height: 100%;
    /* Đảm bảo ảnh không vượt quá kích thước của thẻ div */
}

.promo-area {
    background-color: #f17024;
    padding: 0 40px;
}

.brands-area {
    border-top: 0px solid #e5e5e5;
    border-bottom: 0px solid #e5e5e5;
    color: #fff;
    padding: 10px 0 20px;
}

.maincontent-area {
    padding-bottom: 10px;
    padding-top: 0px;
}

#container {
    margin-top: 10px;
    margin-bottom: 20px;
}



.container .col2-tech {
    display: flex;
    align-items: stretch;
    margin: 0 0 30px;
}

.tech-new {
    float: left;
    width: 895px;
    overflow: hidden;
    background: #fff;
    margin-right: 20px;
    border-radius: 12px;
}

.bg-ctv {
    display: block;
    overflow: hidden;
    max-width: 285px;
}

.tech-new ul li:last-child {
    margin-right: 0;
}

.tech-new ul li span {
    display: block;
    overflow: hidden;
    -webkit-line-clamp: 2;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    font-size: 16px;
    line-height: 26px;
    color: #333;
    margin: 10px 0;
}

.name-box {
    display: block;
    overflow: hidden;
    padding: 15px 22px;
    font-size: 22px;
    line-height: 36px;
    color: #f17024;
    text-transform: uppercase;
}

.tech-new ul li {
    float: left;
    overflow: hidden;
    vertical-align: middle;
    width: 33%;
    margin-right: 10px;
}

.tech-new ul li img {
    display: block;
    width: 100%;
    border-radius: 8px;
    height: auto;
}

.tech-new ul {
    display: flex;
    overflow: hidden;
    justify-content: space-between;
    align-items: center;
    padding: 15px 18px;
}

#container1 {
    padding-left: 0px;
    padding-right: 0px;
    margin-top: 20px;
}

.name-box a {
    float: right;
    text-transform: none;
    font-weight: 500;
    color: #555;
    font-size: 16px;
    text-transform: uppercase;
}

#container2 {
    padding: 30px;
}

.container {
    border-radius: 10px;
}

#container3 {
    margin-top: 20px;
}

.footer-about-us p {
    color: black;
}

.footer-wid-title {
    color: #f17024;
}

.footer-menu a {
    display: block;
    padding: 5px 0;
    color: #333;
}

.footer-top-area {
    background: white;
    padding: 35px 0 180px;
}

.footer-about-us h1 a img {
    width: 70%;
}

.footer-top-area {
    background: white;
    padding: 5px 0 0px;
}

.fs-search {
    float: left;
    margin-top: 10px
}

.fs-search>form .search-button i {
    color: #fff;
    font-size: 20px
}

.fs-search>form {
    display: block;
    width: 496px;
    position: relative;
    z-index: 11
}

.fs-search>form>input {
    width: 100%;
    height: 38px;
    border: none;
    font-size: 14px;
    padding: 0 60px 0 10px;
    background: #fff;
    border-radius: 2px
}

.fs-search>form>button {
    width: 58px;
    height: 38px;
    display: inline-block;
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    background: #333;
    border-radius: 0 2px 2px 0
}

#sm form {
    margin-top: 40px;
    width: 100%;
}

#sm {
    width: 50%;
}

#sm form input {
    width: 80%;
}

#right {
    color: white;
}

#brands-areass {
    border-radius: 10px;
}

.navbar-nav li:hover {
    background-color: #555;
}

.block-slider img {
    width: 100%;
    height: auto;
    padding: 15px;
}

body {
    background-image: url(https://images.fpt.shop/unsafe/fit-in/filters:quality(95):fill(transparent)s/fptshop.com.vn/Uploads/Originals/2023/9/6/638295864115669422_bg_theme-031.png);
}
</style>


<div class="container">
    <div class="sale-cd text-center">
        <div class="sale-cd-tit"><a href="https://fptshop.com.vn/ctkm/back-to-school" target="_blank"><img
                    src="https://images.fpt.shop/unsafe/fit-in/filters:quality(80):fill(transparent)/fptshop.com.vn/Uploads/Originals/2023/7/26/638259858145408752_desk-header.png"
                    alt="event"></a></div>
    </div>
</div>
<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="img/h4-slide.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide2.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide3.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide4.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container con" id="container3">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <div class="flash-sale-title">
                        <img class="panner4 text-center" src="img/sale.png" alt="">

                    </div>
                    <img class="panner1" src="img/panner1.png" alt="">

                    <div class="product-carousel">
                        @foreach($sp as $s)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/{{$s->hinh}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="/chitiet" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="/chitiet">{{$s->ten_san_pham}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$s->gia}}</ins> <del>{{$s->gia_khuyen_mai}}</del>
                            </div>
                        </div>
                        @endforeach
                        <!--  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area" id="brands-areass">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="img/brand1.png" alt="">
                        <img src="img/brand2.png" alt="">
                        <img src="img/brand3.png" alt="">
                        <img src="img/brand4.png" alt="">
                        <img src="img/brand5.png" alt="">
                        <img src="img/brand6.png" alt="">
                        <img src="img/brand1.png" alt="">
                        <img src="img/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @foreach($sp2 as $s)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/{{$s->hinh}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="/chitiet" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="/chitiet">{{$s->ten_san_pham}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$s->gia}}</ins> <del>{{$s->gia_khuyen_mai}}</del>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="product-carousel">
                        @foreach($sp3 as $s)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/{{$s->hinh}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="/chitiet" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="/chitiet">{{$s->ten_san_pham}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$s->gia}}</ins> <del>{{$s->gia_khuyen_mai}}</del>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="container">
    <div class="container1">
        <img class="panner" src="img/panner5.jpg" alt="">

    </div>
</div>
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @foreach($sp as $s)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/{{$s->hinh}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="/chitiet" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="/chitiet">{{$s->ten_san_pham}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$s->gia}}</ins> <del>{{$s->gia_khuyen_mai}}</del>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product-carousel">
                        @foreach($sp4 as $s)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="img/{{$s->hinh}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="/chitiet" class="view-details-link"><i class="fa fa-link"></i>
                                        See details</a>
                                </div>
                            </div>

                            <h2><a href="/chitiet">{{$s->ten_san_pham}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$s->gia}}</ins> <del>{{$s->gia_khuyen_mai}}</del>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="container">
    <div class="container1">
        <img src="https://images.fpt.shop/unsafe/fit-in/1200x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/8/1/638264471565749818_H5_1200x200.png"
            alt="H5_PC" title="H5_PC" height="200">

    </div>
</div>
<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container" id="container2">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Sony Smart TV - 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Apple new mac book 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Sony Smart Air Condtion</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="/chitiet">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->
<div class="container" id="container1">
    <div class="col2-tech">
        <!-- 24h công nghệ -->

        <div class="tech-new">
            <strong class="name-box">
                24h công nghệ
                <a href="/tin-tuc">Xem tất cả</a>
            </strong>
            <ul>
                <li>
                    <a href="/tin-tuc/deal-to-chan-dong-dien-thoai-moi-ra-mat-nam-2023-1542518">
                        <img data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/14/1542518/galaxy-z-fold-5-bo-sung-111111-140823-085238-200x200.jpg"
                            class=" lazyloaded" alt="Deal to chấn động, điện thoại mới ra mắt năm 2023 giảm đến 9 triệu"
                            width="270" height="151"
                            src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/14/1542518/galaxy-z-fold-5-bo-sung-111111-140823-085238-200x200.jpg">
                        <div class="text-tech">
                            <span>
                                Deal to chấn động, điện thoại mới ra mắt năm 2023 giảm đến 9 triệu
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/tin-tuc/oppo-lan-san-tri-tue-nhan-tao-gioi-thieu-tro-ly-ao-cua-rieng-hang-1542517">
                        <img data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/14/1542517/thumnb-140823-082827-200x200.jpg"
                            class=" ls-is-cached lazyloaded"
                            alt="OPPO lấn sân trí tuệ nhân tạo, giới thiệu trợ lý ảo đột phá của riêng hãng" width="270"
                            height="151"
                            src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/14/1542517/thumnb-140823-082827-200x200.jpg">
                        <div class="text-tech">
                            <span>
                                OPPO lấn sân trí tuệ nhân tạo, giới thiệu trợ lý ảo đột phá của riêng hãng
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/tin-tuc/oppo-a18-co-gi-moi-1542267">
                        <img data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/12/1542267/11-120823-105504-200x200.jpg"
                            class=" lazyloaded"
                            alt="Nghe Đồn Là: OPPO A18 sắp được ra mắt, chip Dimensity 810, camera 50 MP (liên tục cập nhật)"
                            width="270" height="151"
                            src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Files/2023/08/12/1542267/11-120823-105504-200x200.jpg">
                        <div class="text-tech">
                            <span>
                                Nghe Đồn Là: OPPO A18 sắp được ra mắt, chip Dimensity 810, camera 50 MP (liên tục cập
                                nhật)
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- End -->
        <!-- Banner cộng tác viên -->
        <a class="bg-ctv" aria-label="slide" data-cate="0" data-place="2006" rel="nofollow"
            href="https://www.dienmayxanh.com/hang-cao-cap"
            onclick="jQuery.ajax({ url: '/bannertracking?bid=51903&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img
                width="285" height="350" loading="lazy" class=" lazyloaded"
                data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2022/12/banner/HCCTGDDnew1-285x350.webp"
                alt="Bán hàng Nội Bộ"
                src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2022/12/banner/HCCTGDDnew1-285x350.webp"></a>
        <!-- End -->
    </div>
</div>
@endsection