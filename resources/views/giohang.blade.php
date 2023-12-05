@extends('layout')
@section('noidung')
<!-- css -->

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

.title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 95%;
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

.header-area {
    background-color: #f17024;
}

.header-area a {
    color: white;
}

input[type="submit"],
button[type=submit] {
    background: none repeat scroll 0 0 #f17024;
    border: medium none;
    color: #fff;
    padding: 11px 20px;
    text-transform: uppercase;
}

div.quantity input.plus,
div.quantity input.minus {
    background: none repeat scroll 0 0 #f17024;
    border: medium none;
    color: #fff;
    height: 25px;
    line-height: 15px;
    width: 25px;
}

.add_to_cart_button {
    background: none repeat scroll 0 0 #f17024;
    border: medium none;
    color: #fff;
    padding: 6px 25px;
    display: inline-block;
}
</style>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="title-block-common mb-2">
                <h1>Giỏ hàng</h1>
            </div>
            <div class="space2"></div>
            <div class="col-md-4">

            </div>

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                        <th class="product-subtotal">Hành động</th>

                                    </tr>
                                </thead>

                                <tbody>


                                    @foreach($cart as $item)
@php
                                    $idproduct = $item['product_id'];
                                    $tin = DB::table('sanpham')->where('id_san_pham', $idproduct)->first();
                                    @endphp
                                    <form method="POST" action="{{ route('delete-product', ['productId' =>$tin->id_san_pham]) }}">
                                    @csrf

                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <input type="checkbox" name="selected_products[]"
                                                value="{{$tin->id_san_pham}}" data-quantity="{{ $item['quantity'] }}">
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="/chitiet"><img width="145" height="145" alt="poster_1_up"
                                                    class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="/chitiet">{{ $tin->ten_san_pham ?? '' }}</a>
                                        </td>

                                        <td class="product-price">
                                        <span class="amount">{{ number_format($tin->gia, 2, '.', ',') ?? '£0.00' }}</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="button" class="minus" value="-">
                                                <input type="number" size="4" class="input-text qty text" title="Qty"
                                                    value="{{ $item['quantity'] }}" min="0" step="1">
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                        <span class="amount">{{ number_format($tin->gia, 0, ',', '.') ?? '£0.00' }}</span>
                                        </td>
                                        <td class="product-price">

                                        <button type="submit">Xóa</button>

                                        </td>
                                    @endforeach

                                    <tr>

</form>


                                        <td class="actions" colspan="6">

                                            <input type="button" id="buy-button" value="Mua hàng"
                                                class="checkout-button button alt wc-forward">
                                        </td>


                                    </tr>
                                </tbody>
                            </table>

                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
var buyButton = document.getElementById('buy-button');

                            buyButton.addEventListener('click', function() {
                                var selectedProducts = document.querySelectorAll(
                                    'input[name="selected_products[]"]:checked');
                                var selectedProductData = [];

                                selectedProducts.forEach(function(checkbox) {
                                    // Lấy thông tin từ data-* attributes của checkbox
                                    var productId = checkbox.value;
                                    var quantity = checkbox.dataset.quantity;

                                    console.log('Product ID:', productId, 'Quantity:',
                                    quantity);

                                    // Thêm thông tin vào mảng selectedProductData
                                    selectedProductData.push({
                                        id: productId,
                                        quantity: quantity
                                    });
                                });

                                if (selectedProductData.length > 0) {
                                    // Chuyển đến trang mua hàng với thông tin sản phẩm đã chọn
                                    var url = '/dathang1?' + selectedProductData.map(data =>
                                        `selected_products[${data.id}]=${data.quantity}`).join('&');
                                    window.location.href = url;
                                } else {
                                    alert('Vui lòng chọn ít nhất một sản phẩm để mua.');
                                }
                            });
                        });
                        </script>



                        <div class="cart-collaterals">
                            <form method="post" action="#" class="shipping_calculator">

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                                    <p class="form-row form-row-wide">

                                    </p>

                                    <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state"
                                            name="calc_shipping_state" placeholder="State / county" value=""
class="input-text"> </p>

                                    <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode"
                                            name="calc_shipping_postcode" placeholder="Postcode / Zip" value=""
                                            class="input-text"></p>


                                    <p><button class="button" value="1" name="calc_shipping" type="submit">Update
Totals</button></p>

                                </section>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #buy-button{
        background-color:#f17024;
        border:none;
        color:white;
        width: 100px;
        height:40px;
    }
    .product-price button{
        background-color:#f17024;
        border:none;
        color:white;
        width: 100px;
        height:40px;
    }
</style>
@endsection