@extends('admin/layout')
@section('noidung')
<head> 
<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>

function readURL(input, thumbimage) {
  if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#thumbimage").attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
  else { // Sử dụng cho IE
    $("#thumbimage").attr('src', input.value);

  }
  $("#thumbimage").show();
  $('.filename').text($("#ImageUpload").val());
  $('.Choicefile').css('background', '#14142B');
  $('.Choicefile').css('cursor', 'default');
  $(".removeimg").show();
  $(".Choicefile").unbind('click');

}
$(document).ready(function () {
  $(".Choicefile").bind('click', function () {
    $("#ImageUpload").click();

  });
  $(".removeimg").click(function () {
    $("#thumbimage").attr('src', '').hide();
    $("#myfileupload").html('<input type="file" id="ImageUpload"  onchange="readURL(this);" />');
    $(".removeimg").hide();
    $(".Choicefile").bind('click', function () {
      $("#ImageUpload").click();
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

    #ImageUpload,
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
        <li class="breadcrumb-item">Danh sách khách hàng</li>
        <li class="breadcrumb-item"><a href="#">Thêm khách hàng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới khách hàng</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
              </div>

            </div>
            <form class="row" action="{{route('admin-store-qlkhachhang')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" required name="name">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="email" required name="email">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mật khẩu</label>
                <input class="form-control" type="password" required name="password">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text"  name="address">
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number"  name="phone">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date"  name="birthday">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giới tính</label>
                <select class="form-control" id="exampleSelect2"  name="exampleSelect2">
                  <option>-- Chọn giới tính --</option>
                  <option value="1">Nam</option>
                  <option value="2">Nữ</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="ImageUpload" class="control-label">Ảnh 3x4 khách hàng</label>
                <div id="myfileupload">
                <!-- uploadfile -->
                    <input type="file" class="form-control-file" id="ImageUpload" name="ImageUpload" onchange="readURL(this);" /> 
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
          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="/admin/qlkhachhang">Hủy bỏ</a>
        </div>
        </form>
  </main>
  


 @endsection