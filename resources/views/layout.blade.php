<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DTLP Technology</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/menu.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- MDB -->
    <!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/> -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <style>
    .footer-about-us {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0; /* Adjust the padding as needed */
    }

    .logo-img {
        max-width: 50%; /* Set the maximum width of the image to 100% of its container */
        height: auto;    /* Allow the height to adjust proportionally */
    }

    .description {
        margin-top: 20px; /* Adjust the margin between the logo and description */
        text-align: center;
    }
</style>

</head>

<body>
    <!-- End header area -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <h1><a href="/"><img src="http://127.0.0.1:8000/img/logo2.jpg"></a></h1>
                    </div>
                </div>
                <div id="sm" class="col-sm-6">
                    <form action="{{ route('products.search') }}" method="get" autocomplete="off">
                        <label for="key" class="mf-vhiditem"
                            style="width:1px;height:1px;position:absolute;overflow:hidden;">Nhập tên điện thoại, máy
                            tính, phụ kiện... cần tìm</label>
                        <input class="fs-stxt" type="text" id="key" name="keyword"
                            placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" autocomplete="off"
                            maxlength="50">
                        <span class="icon-cance" id="icon-cance" style="display:none" title="Xóa">✕</span>
                        <button type="submit" aria-label="Tìm kiếm" class="search-button" title="Tìm kiếm"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="col-sm-3">
                    <div class="shopping-item">
                        <a href="/cart">Giỏ hàng<span class="cart-amunt"></span> <i
                                class="fa fa-shopping-cart"></i> <span class="product-count">{{ count(session('cart', [])) }}   </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Trang chủ</a></li>
                        <li><a href="/shoplaptop">Laptop</a></li>
                        <li><a href="/shopdienthoai">Điện thoại</a></li>
                        <li><a href="/shopmaytinhbang">Máy tính bảng</a></li>
                        <li><a href="/tintuc">Tin tức</a></li>
                        <li><a href="{{route('tinkhuyenmai')}}">Khuyến mãi</a></li>
                        <li><a href="/lienhe">Liên hệ</a></li>
                    </ul>

                    <ul id="right" class="nav navbar-nav navbar-right">

                        @if (session('userInfo'))

                        <!-- Avatar -->
                        <li class="nav-item dropdown">
                            <!-- Add this to your HTML where you have the dropdown toggle -->
                            <div class="nav-link dropdown-toggle nav-dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ session('userInfo.hinh') }}" class="nav-avatar rounded-circle"
                                    alt="Portrait of a Woman" loading="lazy" />
                                <!-- Add any other content for the dropdown toggle -->
                            </div>

                            <!-- Your dropdown menu structure goes here -->
                            <div class="dropdown-menu nav-dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Add dropdown menu items here -->
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>

                                    <a class="dropdown-item" href="/thongtin">Thông tin của tôi</a>

                                </li>
                                <li>
                                    <a class="dropdown-item" href="/dangxuat">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li><a href="/dangnhap"><i class="fa-regular fa-user"></i> Đăng nhập </a></li>
                        <li><a href="/dangky"><i class="fa-regular fa-user"></i> Đăng ký</a></li>
                        @endif

                        <script>
                        // Sử dụng jQuery để hiển thị dropdown-menu khi hover vào thẻ a
                        $(document).ready(function() {
                            $('.nav-item.dropdown').hover(
                                function() {
                                    $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
                                },
                                function() {
                                    $(this).find('.dropdown-menu').stop(true, true).slideUp(200);
                                }
                            );
                        });
                        </script>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    @yield('noidung')


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                    <h1><a href="./"><img src="{{ asset('img/logo2.jpg') }}"></a></h1>
                        <p>Cảm ơn quý khách hàng đã tin tưởng và lựa chọn chúng tôi. Chúng tôi sẽ không ngừng phấn đấu để đáp ứng và vượt qua mong đợi của quý khách hàng, xây dựng một mối quan hệ lâu dài và mang lại giá trị không ngừng.</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/hoangtiennn" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UClojYLbnD4mcXp1heQHy8xA" target="_blank"><i class="fa fa-youtube"></i></a>                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Hướng Dẫn</h2>
                        <ul>
                            <li><a href="/shop">Sản phẩm</a></li>
                            <li><a href="/tintuc">Tin tức</a></li>
                            <li><a href="{{route('tinkhuyenmai')}}">Khuyến mãi</a></li>
                            <li><a href="/lienhe">Liên hệ</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh Mục</h2>
                        <ul>

                            <li><a href="/shoplaptop">Laptop</a></li>
                            <li><a href="/shopdienthoai">Điện thoại</a></li>
                            <li><a href="/shopmaytinhbang">Máy tính bảng</a></li>

                        </ul>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Đăng Ký</h2>
                        <p>Đăng ký nhận bản tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn không tìm thấy ở bất
                            kỳ đâu khác, ngay trong hộp thư đến của bạn!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="email">
                                <input type="submit" value="Theo dõi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <!-- End footer bottom area -->

    <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
</body>

</html>

<style>
.dropdown-menu {
    display: none;
    /*Thêm các thuộc tính CSS tùy ý khác */
}

/* Hiển thị dropdown-menu khi hover vào thẻ a */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    /*Thêm các thuộc tính CSS tùy ý khác */
}
.logo h1 a img{
    width: 150px;
}
</style>
