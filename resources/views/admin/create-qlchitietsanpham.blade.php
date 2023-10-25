@extends('admin/layout')
@section('noidung')
<head>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                <li class="breadcrumb-item">Danh sách sản phẩm</li>
                <li class="breadcrumb-item">Danh sách chi tiết sản phẩm</li>
                <li class="breadcrumb-item"><a href="#">Thêm chi tiết sản phẩm</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Tạo mới chi tiết sản phẩm</h3>
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i
                    class="fas fa-folder-plus"></i> Thêm tình trạng</a>
                            </div>
                        </div>
                        <form class="row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Mã chi tiết sản phẩm </label>
                                <input class="form-control" type="number" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên chi tiết sản phẩm</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>-- Chọn tình trạng --</option>
                                    <option>Còn hàng</option>
                                    <option>Hết hàng</option>
                                </select>
                            </div>
                            <!-- option ẩn hiện -->
                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Ẩn/Hiện</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>-- Chọn danh mục --</option>
                                    <option>Ẩn</option>
                                    <option>Hiện</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control" type="number" placeholder="">
                            </div>
                            <!-- ram -->
                            <div class="form-group col-md-3">
                                <label class="control-label">RAM</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- rom -->
                            <div class="form-group col-md-3">
                                <label class="control-label">ROM</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- màu sắc -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Màu sắc</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- cân nặng -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Cân nặng</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- GPU -->
                            <div class="form-group col-md-3">
                                <label class="control-label">GPU</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- màn hình -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Màn hình</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- kích thước -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Kích thước</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- xuất xứ -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Xuất xứ</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- thời điểm ra mắt -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Thời điểm ra mắt</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- hệ điều hành -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Hệ điều hành</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- camera trước -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Camera trước</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- camera sau -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Camera sau</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- dung lượng pin -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Dung lượng pin</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- sim -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Sim</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- tính năng -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Tính năng</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- bảo hành -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Bảo hành</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- cổng giao tiếp -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Cổng giao tiếp</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- thương hiệu -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Thương hiệu</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- độ dài dây -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Độ dài dây</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- loại tai nghe -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Loại tai nghe</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- chất liệu -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Chất liệu</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- thời gian sạc dây -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Thời gian sạc dây</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Thời gian sử dụng</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- dải tần số -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Dải tần số</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- giá bán -->
                            <div class="form-group col-md-3">
                                <label class="control-label">Giá bán</label>
                                <input class="form-control" type="text" placeholder="">
                            </div>
                            <!-- giá khuyến mãi -->
                            <div class="form-group col-md-12">
                                <label class="control-label">Ảnh sản phẩm</label>
                                <div id="myfileupload">
                                    <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                                </div>
                                <div id="thumbbox">
                                    <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                                    <a class="removeimg" href="javascript:"></a>
                                </div>
                                <div id="boxchoice">
                                    <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                                    <p style="clear:both"></p>
                                </div>

                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="mota" id="mota"></textarea>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>
                            </div>

                    </div>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
                </div>
    </main>


    <!--
  MODAL CHỨC VỤ 
-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                <h5>Thêm mới nhà cung cấp</h5>
              </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tên chức vụ mới</label>
                            <input class="form-control" type="text" required>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->



    <!--
  MODAL DANH MỤC
-->
    <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                <h5>Thêm mới danh mục </h5>
              </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tên danh mục mới</label>
                            <input class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                            <ul style="padding-left: 20px;">
                                <li>Bàn ăn</li>
                                <li>Bàn thông minh</li>
                                <li>Tủ</li>
                                <li>Ghế gỗ</li>
                                <li>Ghế sắt</li>
                                <li>Giường người lớn</li>
                                <li>Giường trẻ em</li>
                                <li>Bàn trang điểm</li>
                                <li>Giá đỡ</li>
                            </ul>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->




    <!--
  MODAL TÌNH TRẠNG
-->
    <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <span class="thong-tin-thanh-toan">
                <h5>Thêm mới tình trạng</h5>
              </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nhập tình trạng mới</label>
                            <input class="form-control" type="text" required>
                        </div>
                    </div>
                    <BR>
                    <button class="btn btn-save" type="button">Lưu lại</button>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <BR>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--
MODAL
-->



    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script>
        const inpFile = document.getElementById("inpFile");
        const loadFile = document.getElementById("loadFile");
        const previewContainer = document.getElementById("imagePreview");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image-preview__image");
        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
        inpFile.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";
                reader.addEventListener("load", function() {
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
 @endsection