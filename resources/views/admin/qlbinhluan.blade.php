@extends('admin/layout')
@section('noidung')
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách bình luận</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <!-- <div class="row element-button">
                            <div class="col-sm-2">

                                <a class="btn btn-add btn-sm" href="create-qlsanpham" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới bình luận</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                                  class="fas fa-file-upload"></i> Tải từ file</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                  class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                  class="fas fa-copy"></i> Sao chép</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                  class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                        </div> -->
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th width="100">Id bình luận</th>
                                <th>Tiêu đề</th>
                                <th>Họ và tên</th>
                                <th>Bình luận</th>
                                <th>Trạng thái</th>
                                <th>Ngày đăng</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($binhluan as $bl)
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>{{ $bl->id_binh_luan}}</td>
                                <td>{{ $bl->ten_san_pham}}</td>
                                <td>{{ $bl->ten}}</td>
                                <td>{{ $bl->noi_dung}}</td>
                                <td>
                                    @if($bl->an_hien == 1)
                                    Hiện
                                    @else
                                    Ẩn
                                    @endif
                                </td>
                                <td>{{ $bl->created_at }}</td>
                                <td class="table-td-center">

                                    <a class="btn btn-primary btn-sm trash"
                                        onclick="showDeleteConfirmation('{{ $bl->id_binh_luan }}', 'delete-qlbinhluan/{{ $bl->id_binh_luan }}')"
                                        href="#" title="Xóa" type="button">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm edit" href="edit-qlbinhluan{{ $bl->id_binh_luan }}"
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
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin bình luận cơ bản</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Mã bình luận </label>
                        <input class="form-control" type="number" value="71309005">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Tên bình luận</label>
                        <input class="form-control" type="text" required value="Bàn ăn gỗ Theresa">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label">Số lượng</label>
                        <input class="form-control" type="number" required value="20">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Giá tiền</label>
                        <input class="form-control" type="text" value="5.600.000">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>Bàn ăn</option>
                            <option>Bàn thông minh</option>
                            <option>Tủ</option>
                            <option>Ghế gỗ</option>
                            <option>Ghế sắt</option>
                            <option>Giường người lớn</option>
                            <option>Giường trẻ em</option>
                            <option>Bàn trang điểm</option>
                            <option>Giá đỡ</option>
                        </select>
                    </div>
                </div>
                <BR>
                <a href="edit-qlsanpham" style="    float: right;
    font-weight: 600;
    color: #ea0000;">Chỉnh sửa bình luận nâng cao</a>
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
</script>
<!-- Hiển thị thông báo và bấm ok mới đc xóa -->
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
oTable = $('#sampleTable').dataTable();
$('#all').click(function(e) {
    $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
    e.stopImmediatePropagation();
});
</script>
@endsection