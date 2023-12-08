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
            @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Xóa giỏ hàng thành công',
            text: '{{ session('success') }}',
        });
    </script>
@endif
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        @if($soLuongSanPham > 0)
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
if(isset($item['id_chi_tiet'])){
    $idchitiet = $item['id_chi_tiet'];

}else{
    $idchitiet = 1;
}
                                    $tin = DB::table('sanpham')->where('id_san_pham', $idproduct)->first();
                                    $tin1 = DB::table('chitietsanpham')->where('id_chi_tiet', $idchitiet)->first();
$thanhtien = $tin1->gia * $item['quantity'];
                                    @endphp
                                    <form method="POST" action="{{ route('delete-product', ['productId' =>$tin->id_san_pham]) }}">
                                    @csrf



                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <input type="checkbox" name="selected_products[]"
                                                value="{{$tin->id_san_pham}}" data-idchitiet="{{ $item['id_chi_tiet'] }}" data-quantity="{{ $item['quantity'] }}">
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="/chitiet"><img width="145" height="145" alt="poster_1_up"
                                                    class="shop_thumbnail" src="img/{{$tin->hinh}}"></a>
                                                    <p>Màu sắc: {{ $tin1->mau_sac }}</p>
                                                    <p>RAM: {{ $tin1->RAM }}</p>
                                        </td>

                                        <td class="product-name">
                                            <a href="/chitiet">{{ $tin->ten_san_pham ?? '' }}</a>
                                        </td>

                                        <td class="product-price">
                                        <span class="amount">{{ number_format($tin1 ->gia, 0, '.', ',') ?? '£0.00' }}VNĐ</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="number" size="4" class="input-text qty text" title="Qty"
                                                    value="{{ $item['quantity'] }}" min="0" step="1">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                        <span class="amount">{{ number_format($thanhtien, 0, ',', '.') ?? '£0.00' }}VNĐ</span>
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

                                        <td class="actions" colspan="6">
                                            <a href="/cart/remove-all"><input type="button" id="buy-button123" value="Xóa tất cả"></a>

</td>
<script>
    function removeAllItems() {
        // Gửi yêu cầu xóa tất cả sản phẩm đến endpoint trên server
        fetch('/cart/remove-all', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            // Xử lý phản hồi từ server, có thể cập nhật giao diện người dùng nếu cần
            console.log(data);
            alert(data.success); // Hiển thị thông báo thành công
        })
        .catch(error => {
            console.error('Lỗi:', error);
            alert('Có lỗi xảy ra khi xóa sản phẩm khỏi giỏ hàng');
        });
    }
</script>



                                    </tr>
                                </tbody>
                            </table>
@else

<p style="color:red; text-align:center; margin-top:30px;">Không có sản phẩm nào trong giỏ hàng</p>

@endif
                        <script>
                      document.addEventListener("DOMContentLoaded", function () {
    var buyButton = document.getElementById('buy-button');

    buyButton.addEventListener('click', function () {
        var selectedProducts = document.querySelectorAll('input[name="selected_products[]"]:checked');
        var selectedProductData = [];

        selectedProducts.forEach(function (checkbox) {
            var idProduct = checkbox.value;
            var idChitiet = checkbox.getAttribute('data-idchitiet');
            var quantity = checkbox.getAttribute('data-quantity');

            selectedProductData.push({
                idProduct: idProduct,
                idChitiet: idChitiet,
                quantity: quantity
            });
        });

        if (selectedProductData.length > 0) {
            // Chuyển đến trang mua hàng với thông tin sản phẩm đã chọn
            var url = '/dathang1?' + selectedProductData.map(data =>
    `selected_products[${data.idProduct}]=${data.quantity}&selected_chitiet[${data.idProduct}]=${data.idChitiet}`).join('&');
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
    #buy-button123{
        border:none;
        background-color:white;
color:black;

    }
</style>

@endsection
