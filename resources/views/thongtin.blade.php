<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Thông tin Tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <meta name="description" content="" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/css/theme-default.css" class="template-customizer-theme-css" />

   <script>
    function readURL(input, thumbimage) {
        if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#thumbimage").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        } else { // Sử dụng cho IE
            $("#thumbimage").attr('src', input.value);

        }
        $("#thumbimage").show();
        $('.filename').text($("#uploadfile").val());
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'default');
        $(".removeimg").show();
        $(".Choicefile").unbind('click');

    }
   </script>
   
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span>
                            Account</h4> -->

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">

                                </ul>
                                <div class="card mb-4">
                                <div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Thông tin cá nhân</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Quản lí đơn hàng</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Đổi mật khẩu</button>
</div>
<div id="London" class="w3-container city">
<form id="formAccountSettings" action="{{route('thongtin.post')}}" method="POST" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="{{session('userInfo.hinh')}}" alt="user-avatar" class="d-block rounded"
                                                height="100" width="100" id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <!-- <span class="d-none d-sm-block">Tải hình ảnh mới</span> -->
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" name="hinh" id="uploadfile" class="account-file-input"  onchange="readURL(this);" />
                                                </label>
                                                <!-- <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button> -->


                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">

                                        @csrf
                                        <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="ten" class="form-label">Họ Tên</label>
                                                    <input class="form-control" type="text" id="ten" name="ten"
                                                        value="{{session('userInfo.ten')}}" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="email" id="email" name="email"
                                                        value="{{session('userInfo.email')}}"
                                                        placeholder="john.doe@example.com" readonly/>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="dia_chi" class="form-label">Địa chỉ</label>
                                                    <input class="form-control" type="text" name="dia_chi"
                                                        id="dia_chi" value="{{session('userInfo.dia_chi')}}" />
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="so_dien_thoai"
                                                        name="so_dien_thoai" value="{{session('userInfo.so_dien_thoai')}}" />
                                                </div>

                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Chỉnh sửa</button>
                                              <a class="btn btn-outline-secondary" href="/">Quay lại</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                <!-- Content wrapper -->

</div>

<div id="Paris" class="w3-container city" style="display:none">

<form action="{{ route('tim-kiem-don-hang') }}" method="get" class="search">
    <input style="width:50%; border:1px solid #cccccc" class="input" type="text" name="tu-khoa" placeholder="Có thể tìm kiếm tên sản phẩm hoặc mã đơn hàng">
    <button style="border:none; background-color:#F17024; color:white;" type="submit">Tìm kiếm</button>
</form>

<div class="donhang">
@foreach($tin123 as $donhang)

    <div style="padding:20px; margin-top:20px;" class="tong">
        @php
        $tt = DB::table('donhangchitiet')->where('id_don_hang',$donhang->id_don_hang)->get();

            if($donhang->trang_thai == 0){
                $trangthai = 'Chờ xác nhận';
            } elseif($donhang->trang_thai == 1){
                $trangthai = 'Đang vận chuyển';
            } elseif($donhang->trang_thai == 2){
                $trangthai = 'Đã hoàn thành';
            } else{
                $trangthai = 'Đã hủy';
            }
        @endphp
        <div class="donhang1">
            <h5>Mã đơn hàng:{{$donhang->id_don_hang}}</h5>
            <p>Tình trạng: {{$trangthai}}</p>
            <hr>
        </div>
        @foreach($tt as $t)

        <div class="donhang2">
            <div class="row">
                <div class="col-6">
                    @php
                    $tongtien = $t->so_luong * $t->gia;

                    $tt3 = DB::table('sanpham')->where('id_san_pham',$t->id_san_pham)->get();

                    @endphp
                    @foreach($tt3 as $tt2)
                    <img src="./img/{{$tt2->hinh}}" alt="">
                    <div class="thongtin">
                        <h5>{{$tt2->ten_san_pham}}</h5>
                        <p>X{{$t->so_luong}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-6">
                <h4>{{ number_format($tongtien, 0, ',', '.') }} VND</h4>
                </div>
            </div>
        </div>
        <hr>
        @endforeach

        <div class="donhang3">
            <h4>Tổng đơn hàng:  {{ number_format($donhang->tong_don_hang, 0, ',', '.') }} VND </h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Chi tiết đơn hàng
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Chi tiết đơn hàng</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="fulldonhang">
            <div class="full1">
                <div class="row">
                <h5>Mã đơn hàng:{{$donhang->id_don_hang}}</h5>
            <p>Tình trạng: {{$trangthai}}</p>
                </div>
                <hr>
            </div>
            @foreach($tt as $t)

            <div class="donhang2">
            <div class="row">
                <div class="col-6">
                    @php
                    $tongtien = $t->so_luong * $t->gia;

                    $tt3 = DB::table('sanpham')->where('id_san_pham',$t->id_san_pham)->get();

                    @endphp
                    @foreach($tt3 as $tt2)
                    <img src="./img/{{$tt2->hinh}}" alt="">
                    <div class="thongtin">
                        <h5>{{$tt2->ten_san_pham}}</h5>
                        <p>x{{$t->so_luong}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-6">
                <h4 style="font-size:14px;">{{ number_format($tongtien, 0, ',', '.') }} VND</h4>
                </div>
            </div>
        </div>
        <hr>
            @endforeach

            <div class="ful3">
                <div class="row">
                    <div class="col-6">
                        <p>{{$donhang->ten_nguoi_nhan}}</p>
                        <p>{{$donhang->dia_chi}}</p>
                        <p>{{$donhang->so_dien_thoai}}</p>
                        <p>{{$donhang->email}}</p>



                    </div>
                    <div class="col-6">
                      <p>Tổng: <span>{{ number_format($donhang->tong_don_hang, 0, ',', '.') }} VND</span></p>
                      <p>Ship: 0đ</p>
                      <p>Thanh toán: <span>{{ number_format($donhang->tong_don_hang, 0, ',', '.') }} VND</span></p>
                        </div>
                </div>
            </div>
        </div>
      </div>

    </div>
  </div>
</div>
        </div>
    </div>
    @endforeach


</div>


</div>

<div id="Tokyo" class="w3-container city" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}
</script>
                                    <!-- Account -->


        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
     <!-- Page JS -->
     <script src="js/pages-account-settings-account.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
<style>
    #Paris .donhang{
        width: 50%;
        border:1px solid #cccccc;
        border-radius:20px;
    }
    #Paris{
        background-color:white;
        padding:20px;
    }
    #Paris .donhang .donhang1{
        display: flex;
    justify-content: space-between;
    align-items: center
    }
    .donhang2 .col-6{
        display:flex;
    }
    .donhang2 .col-6 img{
        width: 100px;
    }

    button.w3-button{
        border:none;
        background-color:white;
        border-bottom:2px solid #f17024;
        padding: 20px;
        width: 250px;

    }
    .donhang1 p{
        margin-left:300px;
    }
    div.w3-black{
        display:flex;
        align-items: center;

        justify-content:center;
    }
    .search{
        margin:0 auto;
        justify-content:center;
        display:flex;
        margin-bottom:20px;
    }
.col-6 h4{
    margin-left:120px;
}
.ful3 .col-6{
    border-right:2px solid #cccccc;
}
span{
    font-weight:bolder;
}
</style>


