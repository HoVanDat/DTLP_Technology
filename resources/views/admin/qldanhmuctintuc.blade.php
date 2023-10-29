@extends('admin/layout')
@section('noidung')
<link rel="stylesheet" type="text/css" href="css/main2.css">
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục tin tức</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{route('create.qldanhmuctintuc')}}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới danh mục tin tức</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập"
                                onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In"
                                onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button"
                                title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                                Excel</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In"
                                onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th ><input type="checkbox" id="all"></th>
                                <th width="200">ID danh mục tin tức</th>
                                <th >Tên danh mục tin tức</th>
                               
                                <th width="200">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($danhmuctin as $dm)
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                
                                <td>{{$dm->id_danh_muc_tin}}</td>
                                <td>{{$dm->ten_danh_muc}}</td>
                                <td class="table-td-center">

                                    <a class="btn btn-primary btn-sm trash"
                                        onclick="showDeleteConfirmation('{{$dm->id_danh_muc_tin}}', 'delete-qldanhmuctintuc/{{$dm->id_danh_muc_tin}}')"
                                        href="#" title="Xóa" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm edit" href="edit-qldanhmuctintuc{{$dm->id_danh_muc_tin}}"
                                        title="Sửa" type="button"><i class="fas fa-edit"></i></a>

                                </td>
                            </tr>


                            @endforeach
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
<!--  -->
<!--
  MODAL
-->
<script>

</script>
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

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
$('#sampleTable').DataTable();
<script>
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

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
jQuery(function() {
    // jQuery(".trash").click(function() {
    //     swal({
    //             title: "Cảnh báo",

    //             text: "Bạn có chắc chắn là muốn xóa danh mục tin tức này?",
    //             buttons: ["Hủy bỏ", "Đồng ý"],
    //         })
    //         .then((willDelete) => {
    //             if (willDelete) {
    //                 swal("Đã xóa thành công.!", {

    //                 });
    //             }
    //         });
    // });
});
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
</script>
@endsection