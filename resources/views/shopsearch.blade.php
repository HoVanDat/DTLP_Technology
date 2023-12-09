@extends('layout')
@section('noidung')
<!-- css trang shop -->
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
.loctt {
        width: 96%;
        margin: 10px auto;
        border: 1px solid #ccc;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .loctt .filter-form {
        display: flex;
        flex-direction: column;
    }

   .loctt .row {
        display: flex;
        margin-bottom: 15px;
    }

   .loctt .col-4 {
        flex: 1;
        margin-right: 10px;
    }

   .loctt label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .loctt input,
    select {
        width: 100%;
        padding: 8px;
        height:40px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

   .loctt button {
        background-color: #4CAF50 !important;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

   .loctt button:hover {
        background-color: #45a049;
    }
.logo h1 a img {
    width: 30%;
}

.header-area {
    background-color: #f17024;
}

.header-area a {
    color: white;
}

/* end */
.title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 97%;
    margin-left: 30px;
    margin-bottom: 70px;
}

.title-block-common h1 {
    float: left;
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


.add_to_cart_button {
    background-color: #f17024;
    border: medium none;
    color: #fff;
    padding: 6px 25px;
    display: inline-block;
}

input[type="submit"],
button[type=submit] {
    background-color: #f17024;
    border: medium none;
    color: #fff;
    padding: 11px 20px;
    text-transform: uppercase;
}

body {
    background-color: #fcfcfc;
}

#col-md-8 {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
}

.group_sidebar {
    border: 1px solid #ffcccc;

}
</style>
<!--end css trang shop -->

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="title-block-common mb-2">
                <h1>Sản phẩm</h1>

            </div>
            <div class="loctt">
    <form class="filter-form" action="{{ route('tim-kiem') }}" method="get">
        <div class="row">
            <div class="col-4">
                <input type="text" id="tu" name="tu" placeholder="Nhập giá tối thiểu">
            </div>
            <div class="col-4">
                <h3 style="text-align:center">Đến</h3>
            </div>
            <div class="col-4">
                <input type="text" id="den" name="den" placeholder="Nhập giá tối đa">
            </div>
        </div>

        <label for="manufacturer">Chọn hãng:</label>
        <select id="manufacturer" name="hang">
            <option value="Saumsung">Samsung</option>
            <option value="Iphone">Iphone</option>
            <option value="Oppo">Oppo</option>
            <option value="Khac" selected>khác</option>
        </select>
        <label for="manufacturer">Loại sản phẩm:</label>

        <select id="manufacturer" name="loai">
            <option value="1">Điện thoại</option>
            <option value="2">Laptop</option>
            <option value="3">Máy tính bảng</option>
        </select>

        <button type="submit">Tìm kiếm</button>
    </form>
</div>
            <h2 class="left">Có {{$count}} sản phẩm với từ khóa " {{$keyword}} "</h2>

            <div class="space2"></div>

            <div class="col-md-12" id="col-md-8">

                @foreach($listtin as $d)
                <div class="col-md-4 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ asset('img/' . $d->hinh) }}" alt="">
                        </div>

                        <h2><a href="/chitiet">{{$d->ten_san_pham}}</a></h2>

                        <div class="product-carousel-price">
                            <ins>{{$d->gia}}</ins> <del>{{$d->gia_khuyen_mai}}</del>
                        </div>
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            </div>
                        </div>
                    </div> -->
            </div>


        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .left{
        margin-left:35px;
    }
    .single-sidebar{
        margin-top:70px;
    }
    .title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 97%;
    margin-left: 30px;
margin-bottom:40px in !important;}
</style>

@endsection
