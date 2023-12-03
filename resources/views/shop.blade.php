<?php



?>


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
            <div class="space2"></div>
            <div class="col-md-4">
                <div class="col-md-12">

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Lọc giá sản phẩm</h2>
                        <form class="filter-form" action="{{ route('tim-kiem') }}" method="get">
    <div class="row">
        <div class="col-4">
            <input type="text" name="tu" placeholder="Từ giá">
        </div>
        <div class="col-4">
            <h3>Đến</h3>
        </div>
        <div class="col-4">
            <input type="text" name="den" placeholder="Đến giá">
        </div>

    </div>
    <div class="col-12">
            <button type="submit">Tìm kiếm</button>
        </div>
</form>
<style>
    .filter-form .row{
        display:flex;
    }
    .filter-form .row .col-3{
        padding:10px;
        width:260px;
    }
    .filter-form .col-4 h3{
        font-size:10px;
        margin-top:30px;
    }
    .filter-form button{
        padding: 10px;
        margin-top:15px;
        width:100%;
    }
</style>

<div id="products-list">
    <!-- Hiển thị danh sách sản phẩm ở đây -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="price"]').change(function() {
            filterProducts();
        });

        function filterProducts() {
            var selectedPrices = [];
            $('input[name="price"]:checked').each(function() {
                selectedPrices.push($(this).val());
            });

            $.ajax({
                url: "{{ route('filterProducts') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    price: selectedPrices
                },
                success: function(data) {
                    $('#products-list').html(data);
                }
            });
        }
    });
</script>
</form>
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm mới nhất</h2>
                        @foreach($dt1 as $d)
                <div class="col-md-12 col-sm-6">
                    <div class="single-shop-product">
                        <div class="row">
                            <div class="col-4">
                            <div class="product-upper">
                            <img src="img/{{$d->hinh}}" alt="">
                        </div>
                            </div>
                            <div class="col-8">
                            <h2><a href="{{url('chi-tiet-san-pham',[$d->id_san_pham])}}">{{$d->ten_san_pham}}</a></h2>
<p>{{number_format($d->gia, 2, ',', '.')}} VND</p>
                            </div>
                        </div>


<div class="product-bottom">

                    </div></div>
                </div>
                @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="col-md-8">

                @foreach($dt as $d)
                <div class="col-md-4 col-sm-6 h-380">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/{{$d->hinh}}" alt="">
                        </div>

                        <h2><a href="{{url('chi-tiet-san-pham',[$d->id_san_pham])}}">{{$d->ten_san_pham}}</a></h2>
<div class="product-bottom">
                        <div class="product-carousel-price" style="margin-top:10px">
                            <ins>{{number_format($d->gia, 2, ',', '.')}} VND</ins><br> <del>{{number_format($d->gia_khuyen_mai, 2, ',', '.')}} VND</del>
                        </div>
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                rel="nofollow" href="{{ route('muahang',['id' => $d->id_san_pham]) }}">Mua ngay</a>
                        </div>
                    </div></div>
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
                    <div class="pagination">
    {{ $dt->withQueryString()->links('pagination::bootstrap-4') }}
</div>
            </div>

</div>


        </div>


    </div>
</div>
<style>
    .single-shop-product .row .col-8{
        margin-left:5px;
    }

    .pagination{
        background-color:red;
        display:block;
    }
    .filter-form {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
.single-sidebar{
    background-color:white;
}
        .filter-form label {
            display: block;
            margin-bottom: 5px;
        }

        .filter-form input[type="checkbox"] {
            margin-right: 5px;
        }
.col-8 h2 a{
    text-align:justify;
}
        .filter-form label, .filter-form input[type="checkbox"] {
            cursor: pointer;
        }
.row .col-3 input{
    width: 100px;
}
        .filter-form input[type="checkbox"]:checked + label {
            font-weight: bold;
        }
        .single-sidebar .row{
            display:flex;
        }
        .single-sidebar .row .col-4 img{
            width: 80px;
        }


.filter-form .col-4 h3{
}
.single-sidebar .col-4{
    height:50px;

}

.single-sidebar .col-4 input{
width:90%;
margin-left:10px;
}
.single-sidebar .row .col-12{
    width: 100%;
}
.shop-product h2 {
    font-size: 18px;
    margin: 10px 0 20px 0;
    text-transform: uppercase;
text-align:left;}
.single-shop-product {
    margin-bottom: 10px;
    text-align: left;
}
.filter-form{
    background-color:white;
}
.single-shop-product h2 {
    font-size: 18px;
    margin: 10px 0 20px 0;
    text-transform: uppercase;
    text-align: left;
}
</style>

@endsection
