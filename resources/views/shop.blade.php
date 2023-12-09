
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
    margin-bottom: 20px;
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

/* body {
    background-color: #fcfcfc;
} */

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
   
    /* Lọc */
    /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */

        .filter-container {
            width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .filter-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filter-form label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            width: 100%;
        }

        .filter-form input,
        .filter-form select {
            flex: 1;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .filter-form select {
            margin-top: 5px; /* Add a little space between input and select */
        }

        .filter-form button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-form button:hover {
            background-color: #0056b3;
        }
</style>




   <script>
    $(document).ready(function () {
        // Bắt sự kiện thay đổi của thẻ select
        $('#cars').change(function () {
            // Lấy giá trị của option đã chọn
            console.log('Change event triggered'); // Thêm dòng này

            var selectedManufacturer = $(this).val();

            // Thực hiện AJAX để gửi yêu cầu lấy danh sách sản phẩm theo hãng
            $.ajax({
                url: '/get-products-by-manufacturer/' + selectedManufacturer,
                type: 'GET',
                success: function (data) {
                    // Xử lý dữ liệu sản phẩm (ở đây là ví dụ hiển thị thông tin trong console)
                    console.log(data);

                    // TODO: Xử lý hiển thị sản phẩm trong giao diện web của bạn
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        });
    });

    </script>
        <div class="row">
            <div class="title-block-common mb-2">
                <h1>Sản phẩm</h1>
            </div>

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
<div class="loctt">
<form class="filter-form" action="{{ route('tim-kiem') }}" method="get">
            <div style="flex: 1;">
                <label for="tu">Nhập giá tối thiểu:</label>
                <input type="text" id="tu" name="tu" placeholder="Ví dụ: 1000000">
            </div>
            <div style="flex: 1;">
                <label for="den">Nhập giá tối đa:</label>
                <input type="text" id="den" name="den" placeholder="Ví dụ: 5000000">
            </div>

            <div style="flex: 1;">
                <label for="manufacturer">Chọn hãng:</label>
                <select id="manufacturer" name="hang">
                    <option value="Saumsung">Samsung</option>
                    <option value="Iphone">iPhone</option>
                    <option value="Oppo">Oppo</option>
                    <option value="Khac" selected>Khác</option>
                </select>
            </div>

            <div style="flex: 1;">
                <label for="loai">Loại sản phẩm:</label>
                <select id="loai" name="loai">
                    <option value="1">Điện thoại</option>
                    <option value="2">Laptop</option>
                    <option value="3">Máy tính bảng</option>
                </select>
            </div>

            <button type="submit">Tìm kiếm</button>
        </form>
</div>

            <div class="col-md-12" id="col-md-8">
                @if(count($dt) > 0)
                @foreach($dt as $d)
                <div  class="col-md-3 col-sm-6 h-380">
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
@else
<p style="color:red; text-align:center; margin-top:30px;">Không có sản phẩm nào</p>
@endif
                


            </div>
            @if(count($dt) > 0)
    <div class="pagination">
        {{ $dt->withQueryString()->links('pagination::bootstrap-4') }}
    </div>
@endif
</div>


        </div>


    </div>
</div>
<style>
    .product-upper {
    display: flex;
    justify-content: center;
    align-items: center;
    /* Các thuộc tính khác nếu cần */
}

.product-upper img {
    max-width: 100%; /* Đảm bảo ảnh không vượt quá kích thước của div */
    height: auto; /* Đảm bảo tỷ lệ khung hình bảo toàn */
}
    .single-shop-product .row .col-8{
        margin-left:5px;
    }
    .product-bottom {
        position: static !important;
}
.single-shop-product h2 {
    font-size: 18px;
    margin: 10px 0 20px 0;
    text-transform: uppercase;
    text-align: center !important;
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
