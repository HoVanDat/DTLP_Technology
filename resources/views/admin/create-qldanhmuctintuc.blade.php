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
  $('.filename').text($("#uploadfile").val());
  $('.Choicefile').css('background', '#14142B');
  $('.Choicefile').css('cursor', 'default');
  $(".removeimg").show();
  $(".Choicefile").unbind('click');

}
$(document).ready(function () {
  $(".Choicefile").bind('click', function () {
    $("#uploadfile").click();

  });
  $(".removeimg").click(function () {
    $("#thumbimage").attr('src', '').hide();
    $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
    $(".removeimg").hide();
    $(".Choicefile").bind('click', function () {
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
        <li class="breadcrumb-item">Danh sách danh mục tin tức</li>
        <li class="breadcrumb-item"><a href="#">Thêm danh mục tin tức</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo mới danh mục tin tức</h3>
          <div class="tile-body">
            <form class="row" action="{{route('create.qldanhmuctintuc.post')}}" method='POST'>
               @csrf  
            
              <div class="form-group col-md-4">
                <label class="control-label">Tên danh mục tin tức</label>
                <input name="tendanhmuc" class="form-control" type="text" required>
              </div>
          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="/admin/qldanhmuctintuc">Hủy bỏ</a>
         <form>
        </div>
      
  </main>
  


 @endsection