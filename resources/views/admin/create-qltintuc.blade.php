@extends('admin/layout')
@section('noidung')

<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
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

    /* Mô tả */
    trix-editor {
        min-height: 200px;
        /* Điều chỉnh chiều cao tối thiểu */
        max-height: 400px;
        /* Điều chỉnh chiều cao tối đa */
        overflow-y: auto;
        /* Hiển thị thanh cuộn dọc khi văn bản vượt quá kích thước */
    }

    /*  */
    </style>
</head>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách tin tức</li>
            <li class="breadcrumb-item"><a href="#">Thêm tin tức</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Tạo mới tin tức</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a href="/admin/create-qldanhmuctintuc" class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo danh mục</b></a>
                        </div>

                    </div>
                    <form class="row" action="#" method='POST'>
                        @csrf

                        <div class="form-group col-md-3">
                            <label class="control-label">Loại tin</label>
                            <select class="form-control" name="id_danh_muc_tin" id="exampleSelect2">
                                <option value="">-- Chọn loại tin --</option>
                                @foreach($loaitin as $loai)
                                <option value="{{$loai->id_danh_muc_tin}}">{{$loai->ten_danh_muc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Tiêu đề</label>
                            <input class="form-control" name="tieude" type="text" >
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Tóm tắt</label>
                            <input class="form-control" name="tomtat" type="text" >
                        </div>
                        <!-- Mô tả -->
                        <div class="form-group col-md-12">
                            <label class="control-label">Nội dung</label>
                            <input id="noidung" type="hidden" name="noidung" >
                            <trix-editor class="form-control" input="noidung"></trix-editor>
                        </div>
                        <!-- end mô tả -->
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh</label>
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
                </div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="/admin/qltintuc">Hủy bỏ</a>
                <form>
            </div>

</main>



@endsection