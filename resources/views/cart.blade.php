<!-- Trong resources/views/cart.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
</head>
<body>
    <h1>Giỏ hàng của bạn</h1>

    @if(count($cart) > 0)
        <ul>
            @foreach($cart as $item)
                <li>{{ $item['product_id'] }} - Số lượng: {{ $item['quantity'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Giỏ hàng trống rỗng</p>
    @endif
</body>
</html>
