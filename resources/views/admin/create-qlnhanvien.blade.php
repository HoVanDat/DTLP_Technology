@extends('admin/layout')
@section('noidung')

<head>
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
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
    $(document).ready(function() {
        $(".Choicefile").bind('click', function() {
            $("#uploadfile").click();

        });
        $(".removeimg").click(function() {
            $("#thumbimage").attr('src', '').hide();
            $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
            $(".removeimg").hide();
            $(".Choicefile").bind('click', function() {
                $("#uploadfile").click();
            });
            $('.Choicefile').css('background', '#14142B');
            $('.Choicefile').css('cursor', 'pointer');
            $(".filename").text("");
        });
    })
    </script>
    <style>
    .Choicefile {
        display: block;
        background: #14142B;
        border: 1px solid #fff;
        color: #fff;
        width: 150px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        padding: 5px 0px;
        border-radius: 5px;
        font-weight: 500;
        align-items: center;
        justify-content: center;
    }

    .Choicefile:hover {
        text-decoration: none;
        color: white;
    }

    #uploadfile,
    .removeimg {
        display: none;
    }

    #thumbbox {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .removeimg {
        height: 25px;
        position: absolute;
        background-repeat: no-repeat;
        top: 5px;
        left: 5px;
        background-size: 25px;
        width: 25px;
        /* border: 3px solid red; */
        border-radius: 50%;

    }

    .removeimg::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        content: '';
        border: 1px solid red;
        background: red;
        text-align: center;
        display: block;
        margin-top: 11px;
        transform: rotate(45deg);
    }

    .removeimg::after {
        /* color: #FFF; */
        /* background-color: #DC403B; */
        content: '';
        background: red;
        border: 1px solid red;
        text-align: center;
        display: block;
        transform: rotate(-45deg);
        margin-top: -2px;
    }
    </style>
</head>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách nhân viên</li>
            <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
        </ul>
    </div>
    <div class="row">

      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo mới nhân viên</h3>
          <div class="tile-body">
            <form class="row" action="#" method='POST'enctype="multipart/form-data">
               @csrf  
            
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input name="hoten" class="form-control" type="text" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" name="email" type="email" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mật khẩu</label>
                <input class="form-control" name="password" type="password" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" name="dc_tt" type="text" >
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" name="sdt" type="number" >
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" name="ngaysinh" type="date">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Nơi sinh</label>
                <input class="form-control" name="noisinh" type="text" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Số CCCD</label>
                <input class="form-control" name="cccd" type="number" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Ngày cấp</label>
                <input class="form-control" name="ngaycap" type="date" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Nơi cấp</label>
                <input class="form-control" name="noicap" type="text" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giới tính</label>
                <select class="form-control" name="gioitinh" id="exampleSelect2" >
                  <option value="">-- Chọn giới tính --</option>
                  <option value="1">Nam</option>
                  <option value="2">Nữ</option>
                </select>
              </div>

              <div class="form-group  col-md-3">
                <label for="exampleSelect1" class="control-label">Chức vụ</label>
                <select class="form-control" name="chucvu" id="exampleSelect1">
                  <option value="">-- Chọn chức vụ --</option>
                  <option value="1">Bán hàng</option>
                  <option value="2">Tư vấn</option>
                  <option value="3">Dịch vụ</option>
                  <option value="4">Thu Ngân</option>
                  <option value="5">Quản kho</option>
                  <option value="6">Bảo trì</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Bằng cấp</label>
                <select class="form-control" name="bangcap" id="exampleSelect3">
                  <option value="">-- Chọn bằng cấp --</option>
                  <option value="1">Tốt nghiệp Đại Học</option>
                  <option value="2">Tốt nghiệp Cao Đẳng</option>
                  <option value="3">Tốt nghiệp Phổ Thông</option>
                  <option value="4">Chưa tốt nghiệp</option>
                  <option value="5">Không bằng cấp</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tình trạng hôn nhân</label>
                <select class="form-control" name="tthonnhan" id="exampleSelect2">
                  <option value="">-- Chọn tình trạng hôn nhân --</option>
                  <option value="1">Độc thân</option>
                  <option value="2">Đã kết hôn</option>
                  <option value="3">Góa</option>
                  <option value="4">Khác</option>
                </select>
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh 3x4 nhân viên</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="hinh" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                  <p style="clear:both"></p>
                </div>



                </div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="/admin/qlnhanvien">Hủy bỏ</a>
                <form>
            </div>

</main>



@endsection