<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 @extends('layout')
 @section('noidung')
 <style>
    .mainmenu-area {
    background: none repeat scroll 0 0 #333;
    font-family: "Roboto Condensed",sans-serif;
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
.logo h1 a img{
    width: 30%;
}
.header-area{
    background-color: #f17024;
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
input[type="submit"], button[type=submit] {
    background: none repeat scroll 0 0 #f17024;
    border: medium none;
    color: #fff;
    padding: 11px 20px;
    text-transform: uppercase;
}
.product-main-img img.hinh2{
    width: 400px;
}
.container .row{
    display:flex;
    width: 100%;
}
.container .row .col-8{
    background-color:white;
    padding: 30px;
    width: 70%;
    margin-right:20px;

}
.container .row .col-4{
    width: 30%;
    background-color:white;
    padding: 30px;
}
.col-8 span{
    font-weight:bolder;
    font-size:20px;
}
.col-8 p{
    font-size:17px;
}
.col-4 h4{
    font-weight:bolder;
}
.col-4 span{
    font-weight:bolder;
}
.bonho .tieude{
    width: 100%;
    background-color:#f17024;
    padding:10px 0;
}
.bonho .tieude h4{
    color:white;
    text-align:center;
    font-size:20px;
    margin-top:10px;
}
table tr td{
    padding:10px 0;

}
table tr td:first-child{
    padding:10px 0;
    font-weight:bolder;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: white;
  width: 100%;
  padding:10px;
}

.grid-item {
  border: 1px solid rgba(0, 0, 0, 0.8);
  width: 30%;

  font-size: 30px;
  text-align: center;
}
.grid-item input{
    width: 100%;
}
.grid-container .item1{
    width: 100%;

}
.grid-container .item1 input{
    width: 80%;

}
.grid-container .item2{
    width: 100%;

}
.grid-container .item2 input{
    width: 80%;

}
.grid-container .item3{
    width: 100%;

}
.grid-container .item3 input{
    width: 80%;

}
#review{
    width: 100%;
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
                            <a href="">Category Name</a>
                            <a href="">{{$tin->ten_san_pham}}</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img class="hinh2" src="{{ asset('img/' . $tin->hinh) }}" alt="">
                                    </div>

                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$tin->ten_san_pham}}</h2>
                                    <div class="product-inner-price">
                                    <ins class="gia">{{ number_format($tin->gia_khuyen_mai, 0, ',', '.') }} đ</ins> <del class="gia1">{{ number_format($tin->gia, 0, ',', '.') }} đ</del>
                                    </div>
                                    <h5 class="mausac">Màu sắc:</h5>
                                    @foreach($tin1 as $t)
                                    <div class="but">
                                        <button>{{$t->mau_sac}}</button>
                                    </div>
                                    @endforeach
                                    <form action="{{ url('/muahang', [$tin->id_san_pham]) }}" class="cart">
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="quantity">
        <input type="number" id="soluong" size="4" class="input-text qty text" title="Qty" value="1" name="soluong" min="1" step="1">
    </div>
    <input type="hidden" id="tensp" value="{{$tin->ten_san_pham}}">
    <button id="add-to-cart-button" class="add_to_cart_button" type="submit">Thêm vào giỏ hàng</button>
    <button class="add_to_cart_button" type="submit">Mua ngay</button>
</form>


                                    </div>

                                </div>
                            </div>
                        </div>

<div class="container">
    <div class="row">
        <div class="col-8">
            <span>{{$tin->ten_san_pham}}</span><p>{{$tin->mo_ta}}</p>
        </div>
        <div class="col-4">
            <h4>Thông số kỹ thuật của {{$tin->ten_san_pham}}</h4>
            <img class="" src="{{ asset('img/' . $tin->hinh) }}" alt="">
            <p><span>Số hiệu CPU :</span>{{$tin2->CPU}}</p>
            <p><span>RAM :</span>{{$tin2->RAM}}</p>
            <p><span>Độ phân giải :</span>{{$tin2->man_hinh}}</p>
            <p><span>Hệ điều hành:</span>{{$tin2->he_dieu_hanh}}</p>
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Xem chi tiết</button>
            <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div class="bonho">
            <div class="tieude">
                <h4>Bộ xử lý</h4>
            </div>
            <table style="width:100%">
  <tr>
    <td>RAM</td>
    <td>{{$tin2->RAM}}</td>
  </tr>
  <tr>
    <td>Tốc độ Bus</td>
    <td>{{$tin2->toc_do_bus}}
</td>
<tr>
    <td>Khả năng nâng cấp</td>
    <td>{{$tin2->tinh_nang}}
</td>
<tr>
    <td>Rom</td>
    <td>{{$tin2->ROM}}
</td>

<tr>
    <td>CPU</td>
    <td>{{$tin2->CPU}}
</td>
  </tr>
</table>
        </div>
        <div class="bonho">
            <div class="tieude">
                <h4>Màn hình và Âm thanh</h4>
            </div>
            <table style="width:100%">
  <tr>
    <td>Kích thước màn hình</td>
    <td>{{$tin2->kich_thuoc}}</td>
  </tr>
  <tr>
    <td>Độ phân giải</td>
    <td>{{$tin2->man_hinh}}
</td>
<tr>
    <td>Tần số quét</td>
    <td>{{$tin2->tan_so_quet}}
</td>
<tr>
    <td>Công nghệ âm thanh</td>
    <td>{{$tin2->loai_tai_nghe}}
</td>

  </tr>
</table>
        </div>
        <div class="bonho">
            <div class="tieude">
                <h4>Thông tin khác</h4>
            </div>
            <table style="width:100%">
  <tr>
    <td>Trọng lượng</td>
    <td>{{$tin2->can_nang}}</td>
  </tr>
  <tr>
    <td>Dung lượng pin</td>
    <td>{{$tin2->dung_luong_pin}}
</td>
<tr>
    <td>Hệ điều hành</td>
    <td>{{$tin2->he_dieu_hanh}}
</td>


  </tr>
</table>
        </div>
        <p>Some text. Some text. Some text.</p>
      </div>
    </div>
  </div>
        </div>
    </div>
</div>
<div class="container">
    Hãy nêu nhận xét của bạn
    <form action="{{ url('/comments') }}" id="comment-form" method="POST">
@csrf
    <div class="grid-container">
  <div class="item1"><input value="{{session('userInfo.ten')}}" name="name" type="text" readonly></div>
  <div class="item2"><input value="{{session('userInfo.so_dien_thoai')}}" name="sdt" type="text" readonly></div>
  <div class="item3"><input value="{{session('userInfo.email')}}" name="email" type="text" readonly></div>
  </div>
  <div class=""> <textarea name="content" id="review" cols="30" rows="10"></textarea>
  <input type="hidden" name="idsp" value="{{$tin->id_san_pham}}">


    <button id="submit-comment" class="add_to_cart_button" type="submit">Gửi bình luận</button>

</div>
  </form>

  <script>
    document.getElementById('submit-comment').addEventListener('click', function (event) {
        var nameInput = document.querySelector('input[name="name"]');
        var emailInput = document.querySelector('input[name="email"]');
        var contentTextarea = document.querySelector('textarea[name="content"]');

        if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || contentTextarea.value.trim() === '') {
            alert('Vui lòng điền đầy đủ thông tin và đánh giá trước khi gửi bình luận.');
            event.preventDefault(); // Ngăn chặn hành vi mặc định của nút
        }
    });
</script>

</div>
                        <!-- <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart Air Condtion</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <h2>Thống kê bình luận</h2>
    <hr>
    @foreach($binhluan as $bl)
    <div class="bl">
    <img src="{{ asset('img/avata.jpeg') }}" alt="">
        <div class="noidungbl">
            <h5>{{$bl->name}}</h5>
            <p>{{$bl->noi_dung}}</p>
        </div>
    </div>
    @endforeach
</div>





@endsection
<style>
    .bl img{
        width: 70px;
        border-radius:100%;
        margin-right:20px;
    }
    .bl{
        display:flex;
    }
    .bl h5{
        font-weight:bolder;
    }
    .product-inner-price .gia{
        font-size:25px;
    }
    h5.mausac{
        color: #f17024;
        font-weight:bolder;
        font-size:20px;
    }
    .but button{
        width: 70px;
    height:40px;
        background-color:white;
        border:1px solid #cccccc;
        margin-bottom:20px;
    }
</style>


