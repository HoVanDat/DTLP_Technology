<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="/dangxuat"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        @if(session('userInfo'))
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="https://i.pinimg.com/564x/f9/c3/70/f9c370effa76f6de607e0cfcf9209283.jpg" height="75px"
                alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>{{session('userInfo')['ten']}}</b></p>
                <p class="app-sidebar__user-designation">{{session('userInfo')['email']}}</p>
                @if(session('userInfo')['vai_tro'] == 4)
                <span class="badge badge-success">Quản Trị Viên</span>
                @elseif(session('userInfo')['vai_tro'] == 3)
                <span class="badge badge-success">Quản Lý Đơn Hàng</span>
                @elseif(session('userInfo')['vai_tro'] == 2)
                <span class="badge badge-success">Quản Lý Sản Phẩm</span>
                @elseif(session('userInfo')['vai_tro'] == 1)
                <span class="badge badge-success">Quản Lý Tin Tức</span>
                @endif
            </div>
        </div>
        @endif
        <hr>
        <ul class="app-menu">
            <li><a class="app-menu__item haha" href="posbanhang"><i class='app-menu__icon bx bx-cart-alt'></i>
                    <span class="app-menu__label">POS Bán Hàng</span></a></li>
            <li><a class="app-menu__item" href="trangchu"><i class='app-menu__icon bx bx-tachometer'></i><span
                        class="app-menu__label">Bảng điều khiển</span></a></li>
            <li><a class="app-menu__item " href="qldanhmucsanpham"><i class='app-menu__icon bx bx-id-card'></i> <span
                        class="app-menu__label">Danh mục sản phẩm</span></a></li>
            <li><a class="app-menu__item" href="qlsanpham"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span
                        class="app-menu__label">Quản lý sản phẩm</span></a></li>
            <li><a class="app-menu__item " href="qldanhmuctintuc"><i class='app-menu__icon bx bx-id-card'></i> <span
                        class="app-menu__label">Danh mục tin tức</span></a></li>
            <li><a class="app-menu__item " href="qltintuc"><i class='app-menu__icon bx bx-id-card'></i> <span
                        class="app-menu__label">Quản lý tin tức</span></a></li>
            <li><a class="app-menu__item" href="qldonhang"><i class='app-menu__icon bx bx-task'></i><span
                        class="app-menu__label">Quản lý đơn hàng</span></a></li>
            <li><a class="app-menu__item" href="qlbinhluan"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span
                        class="app-menu__label">Quản lý bình luận</span></a></li>
            <li><a class="app-menu__item" href="qlkhachhang"><i class='app-menu__icon bx bx-user-voice'></i><span
                        class="app-menu__label">Quản lý khách hàng</span></a></li>
            <li><a class="app-menu__item " href="qlnhanvien"><i class='app-menu__icon bx bx-id-card'></i> <span
                        class="app-menu__label">Quản lý nhân viên</span></a></li>
            <li><a class="app-menu__item" href="qlnoibo"><i class='app-menu__icon bx bx-run'></i><span
                        class="app-menu__label">Quản lý nội bộ</span></a></li>
            <li><a class="app-menu__item" href="qlbanner"><i class='app-menu__icon bx bx-run'></i><span
                        class="app-menu__label">Quản lý banner</span></a></li>
            <li><a class="app-menu__item" href="homthugopy"><i class='app-menu__icon bx bx-run'></i><span
                        class="app-menu__label">Hòm thư góp ý</span></a></li>
            <!-- <li><a class="app-menu__item" href="bangkeluong"><i class='app-menu__icon bx bx-dollar'></i><span
                        class="app-menu__label">Bảng kê lương</span></a></li> -->
            <li><a class="app-menu__item" href="bcdoanhthu"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span
                        class="app-menu__label">Báo cáo doanh thu</span></a>
            </li>
            <!-- <li><a class="app-menu__item" href="lichcongtac"><i class='app-menu__icon bx bx-calendar-check'></i><span
                        class="app-menu__label">Lịch công tác </span></a></li>
            <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span
                        class="app-menu__label">Cài đặt hệ thống</span></a></li> -->
        </ul>
    </aside>

    @yield('noidung')



</body>

</html>