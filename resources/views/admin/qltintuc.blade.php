@extends('admin/layout')
@section('noidung')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách tin tức</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{route('create.qltintuc')}}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới tin tức</a>
                        </div>

                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th width="30">STT</th>
                                <th width="200">Tiêu đề</th>
                                <th width="60">Ảnh</th>
                                <th width="100">Người đăng</th>

                                <th width="70">Danh mục</th>
                                <th width="40">Lượt xem</th>
                                <th width="60">Trạng thái</th>
                                <th width="60">Ngày đăng</th>
                                <th width="70">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                            @endphp
                            @foreach($dstin as $ds)
                            @php
                            $i++;
                            @endphp
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>{{$i}}</td>
                                <td>{{$ds->tieu_de}}</td>

                                <td><img class="img-card-person" src="{{$ds->hinh}}" alt=""></td>

                                <td>{{$ds->ten_nguoi_dang}}</td>



                                <td>
                                    @if($ds->id_danh_muc_tin == 1)
                                    Công nghệ
                                    @elseif($ds->id_danh_muc_tin == 2)
                                    Giải trí
                                    @elseif($ds->id_danh_muc_tin == 3)
                                    Giáo dục
                                    @elseif($ds->id_danh_muc_tin == 4)
                                    Du lịch
                                    @elseif($ds->id_danh_muc_tin == 4)
                                    Thể thao
                                    @elseif($ds->id_danh_muc_tin == 4)
                                    Khoa học
                                    @elseif($ds->id_danh_muc_tin == 4)
                                    Sáng tạo
                                    @endif
                                </td>
                                <td>{{$ds->view}}</td>

                                <td>
                                    @if($ds->an_hien == 1)
                                    Hiện
                                    @else
                                    Ẩn
                                    @endif
                                </td>
                                <td>{{$ds->created_at}}</td>

                                <td class="table-td-center">

                                    <a class="btn btn-primary btn-sm trash"
                                        onclick="showDeleteConfirmation('{{ $ds->id_tin }}', 'delete-qltintuc/{{ $ds->id_tin }}')"
                                        href="#" title="Xóa" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm edit" href="edit-qltintuc{{$ds->id_tin}}"
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
$('#sampleTable').DataTable();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">

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

    //             text: "Bạn có chắc chắn là muốn xóa tin tức này?",
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
