@extends('admin/layout')
@section('noidung')

<head>
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script>

    </script>
</head>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Quản lý banner</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="create-qlbanner" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới banner</a>
                        </div>
                 


                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th width="10">STT</th>
                                <th width="100">Tên banner</th>
                                <th width="20">Hình ảnh</th>
                                <th width="20">Mô tả</th>
                                <th width="25">Ngày tạo</th>
                                <th width="10">Trạng thái</th>
                                <th width="40">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($banner) && !empty($banner))
                            @foreach($banner as $b)
                            <tr>
                                <td width="5"><input type="checkbox" name="check1" value="1"></td>
                                <td width="5">{{ $loop->iteration }}</td>
                                <td width="100">{{$b->ten}}</td>
                                <td><img class="img-card-person" src="{{$b->hinh}}" alt=""></td>
                                <td width="100">{{$b->mo_ta}}</td>
                                <td width="50">{{$b->created_at}}</td>
                                <td width="10">@if($b->trang_thai == 1)
                                    Hiện
                                    @else
                                    Ẩn
                                    @endif</td>
                                <td class="table-td-center">
                                    <a class="btn btn-primary btn-sm trash"
                                        onclick="showDeleteConfirmation('{{$b->id_banner}}', 'delete-qlbanner/{{$b->id_banner}}')"
                                        href="#" title="Xóa" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                        href="edit-qlbanner{{$b->id_banner}}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin banner cơ bản</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">ID banner</label>
                        <input class="form-control" type="text" required value="#CD2187" disabled id="customerID">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Họ và tên</label>
                        <input class="form-control" type="text" required value="Võ Trường" name="" id="ten">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label">Số điện thoại</label>
                        <input class="form-control" type="number" required value="09267312388" name=""
                            id="so_dien_thoai">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Địa chỉ email</label>
                        <input class="form-control" type="text" required value="truong.vd2000@gmail.com" name=""
                            id="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Ngày sinh</label>
                        <input class="form-control" type="date" value="15/03/2000" name="" id="ngay_sinh">
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="exampleSelect1" class="control-label">Giới tính</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                </div>
                <BR>
                <a href="edit-qlkhachhang" style="    float: right;
        font-weight: 600;
        color: #ea0000;">Chỉnh sửa nâng cao</a>
                <BR>
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

<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$('#sampleTable').DataTable();
</script>
<!-- Hiển thị thông báo và bấm ok mới đc xóa -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}

function showDeleteConfirmation(userId, deleteUrl) {
    Swal.fire({
        title: 'Xác nhận xóa',
        text: 'Bạn có chắc chắn muốn xóa?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'OK',
        cancelButtonText: 'Hủy',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Chuyển hướng đến URL xóa
            window.location.href = deleteUrl;
        }
    });
}
oTable = $('#sampleTable').dataTable();
$('#all').click(function(e) {
    $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
    e.stopImmediatePropagation();
});

//EXCEL
// $(document).ready(function () {
//   $('#').DataTable({

//     dom: 'Bfrtip',
//     "buttons": [
//       'excel'
//     ]
//   });
// });


//Thời Gian
function time() {
    var today = new Date();
    var weekday = new Array(7);
    weekday[0] = "Chủ Nhật";
    weekday[1] = "Thứ Hai";
    weekday[2] = "Thứ Ba";
    weekday[3] = "Thứ Tư";
    weekday[4] = "Thứ Năm";
    weekday[5] = "Thứ Sáu";
    weekday[6] = "Thứ Bảy";
    var day = weekday[today.getDay()];
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    nowTime = h + " giờ " + m + " phút " + s + " giây";
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = day + ', ' + dd + '/' + mm + '/' + yyyy;
    tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
    document.getElementById("clock").innerHTML = tmp;
    clocktime = setTimeout("time()", "1000", "Javascript");

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
}
//In dữ liệu
var myApp = new function() {
    this.printTable = function() {
        var tab = document.getElementById('sampleTable');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
    }
}
//     //Sao chép dữ liệu
//     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

// copyTextareaBtn.addEventListener('click', function(event) {
//   var copyTextarea = document.querySelector('.js-copytextarea');
//   copyTextarea.focus();
//   copyTextarea.select();

//   try {
//     var successful = document.execCommand('copy');
//     var msg = successful ? 'successful' : 'unsuccessful';
//     console.log('Copying text command was ' + msg);
//   } catch (err) {
//     console.log('Oops, unable to copy');
//   }
// });


//Modal
$("#show-emp").on("click", function() {
    $("#ModalUP").modal({
        backdrop: false,
        keyboard: false
    })
});
// Đoạn mã JavaScript/jQuery
$('.edit').on('click', function() {
    var userId = $(this).data('id');
    loadDataFromDatabase(userId);
});

function loadDataFromDatabase(userId) {
    // Giả sử có một đoạn mã AJAX để lấy dữ liệu từ cơ sở dữ liệu
    $.ajax({
        url: '/get-customer-data/' + userId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Điền dữ liệu vào các trường trong modal
            $('#customerID').val(data.id);
            $('#ten').val(data.ten);
            $('#so_dien_thoai').val(data.so_dien_thoai);
            $('#email').val(data.email);
            $('#ngay_sinh').val(data.ngay_sinh);
            $('#gioi_tinh').val(data.gioi_tinh);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}
document.addEventListener('DOMContentLoaded', function () {
    var divs = document.querySelectorAll('div[contenteditable="true"] > div');
    divs.forEach(function (div) {
        div.outerHTML = div.innerHTML;
    });
});
</script>
@endsection
