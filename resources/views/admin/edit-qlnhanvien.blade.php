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

    function editSuccess() {
        alert("Chỉnh sửa thành công");
    }
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
            <li class="breadcrumb-item"><a href="#">Sửa nhân viên</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Sửa nhân viên</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
                        </div>

                    </div>
                    <form class="row" action="{{route('edit.qlnhanvien.post')}}" method='POST'
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-4">
                            <label class="control-label">ID nhân viên</label>
                            <input name="id" class="form-control" type="text" value="{{$edit->id_nguoi_dung}}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input name="hoten" class="form-control" type="text" value="{{$edit->ten}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" name="email" type="email" value="{{$edit->email}}" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Mật khẩu</label>
                            <input class="form-control" name="password" type="password" value="{{$edit->password}}"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ thường trú</label>
                            <input class="form-control" name="dc_tt" type="text" value="{{$edit->dia_chi}}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" name="sdt" type="number" value="{{$edit->so_dien_thoai}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" name="ngaysinh" type="date" value="{{$edit->ngay_sinh}}">
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Nơi sinh</label>
                            <input class="form-control" name="noisinh" type="text" value="{{$edit->noi_sinh}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Số CCCD</label>
                            <input class="form-control" name="cccd" type="number" value="{{$edit->CCCD}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ngày cấp</label>
                            <input class="form-control" name="ngaycap" type="date" value="{{$edit->ngay_cap}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Nơi cấp</label>
                            <input class="form-control" name="noicap" type="text" value="{{$edit->noi_cap}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giới tính</label>
                            <select class="form-control" name="gioitinh" id="exampleSelect2">
                                <option value="">-- Chọn chức vụ --</option>
                                @php
                                $positions = [
                                1 => "Nam",
                                2 => "Nữ",
                                ];
                                @endphp

                                @foreach ($positions as $value => $position)
                                @if ($edit->gioi_tinh == $value)
                                <option value="{{ $value }}" selected>{{ $position }}</option>
                                @else
                                <option value="{{ $value }}">{{ $position }}</option>
                                @endif
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group  col-md-3">
                            <label for="exampleSelect1" class="control-label">Chức vụ</label>
                            <select class="form-control" name="chucvu" id="exampleSelect1">
                                <option value="">-- Chọn chức vụ --</option>
                                @php
                                $positions = [
                                1 => "Bán hàng",
                                2 => "Tư vấn",
                                3 => "Dịch vụ",
                                4 => "Thu Ngân",
                                5 => "Quản kho",
                                6 => "Bảo trì",
                                7 => "Kiểm hàng",
                                8 => "Bảo vệ",
                                9 => "Tạp vụ"
                                ];
                                @endphp

                                @foreach ($positions as $value => $position)
                                @if ($edit->chuc_vu == $value)
                                <option value="{{ $value }}" selected>{{ $position }}</option>
                                @else
                                <option value="{{ $value }}">{{ $position }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Bằng cấp</label>
                            <select class="form-control" name="bangcap" id="exampleSelect3">
                                <option value="">-- Chọn bằng cấp --</option>
                                @php
                                $positions = [
                                1 => "Tốt nghiệp Đại Học",
                                2 => "Tốt nghiệp Cao Đẳng",
                                3 => "Tốt nghiệp Phổ Thông",
                                4 => "Chưa tốt nghiệp",
                                5 => "Không bằng cấp",
                                ];
                                @endphp

                                @foreach ($positions as $value => $position)
                                @if ($edit->bang_cap == $value)
                                <option value="{{ $value }}" selected>{{ $position }}</option>
                                @else
                                <option value="{{ $value }}">{{ $position }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tình trạng hôn nhân</label>
                            <select class="form-control" name="tthonnhan" id="exampleSelect2">
                                <option value="">-- Chọn tình trạng hôn nhân --</option>
                                @php
                                $positions = [
                                1 => "Độc thân",
                                2 => "Đã kết hôn",
                                3 => "Góa phụ",
                                4 => "Khác",
                                ];
                                @endphp

                                @foreach ($positions as $value => $position)
                                @if ($edit->tinh_trang_hon_nhan == $value)
                                <option value="{{ $value }}" selected>{{ $position }}</option>
                                @else
                                <option value="{{ $value }}">{{ $position }}</option>
                                @endif
                                @endforeach



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
                </div>
                <button class="btn btn-save" type="submit" onclick="editSuccess()">Lưu lại</button>
                </form> <a class="btn btn-cancel" href="{{route('qlnhanvien')}}">Hủy bỏ</a>
            </div>
</main>
@endsection