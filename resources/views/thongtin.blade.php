<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Thông tin Tài khoản</title>

    <meta name="description" content="" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/css/theme-default.css" class="template-customizer-theme-css" />
    <style>

    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span>
                            Account</h4> -->

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0);"><i
                                                class="bx bx-user me-1"></i> Account</a>
                                    </li>
                                  
                                </ul>
                                <div class="card mb-4">
                                    <h5 class="card-header">Thông tin cá nhân</h5>
                                    <!-- Account -->
                                    <form id="formAccountSettings" action="{{route('thongtin.post')}}" method="POST">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="img/{{session('userInfo.hinh')}}" alt="user-avatar" class="d-block rounded"
                                                height="100" width="100" id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Tải hình ảnh mới</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" name="hinh" id="upload" class="account-file-input" hidden
                                                        accept="image/png, image/jpeg" />
                                                </label>
                                                <!-- <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button> -->


                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                       
                                        @csrf    
                                        <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="ten" class="form-label">Họ Tên</label>
                                                    <input class="form-control" type="text" id="ten" name="ten"
                                                        value="{{session('userInfo.ten')}}" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="email" id="email" name="email"
                                                        value="{{session('userInfo.email')}}"
                                                        placeholder="john.doe@example.com" readonly/>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="dia_chi" class="form-label">Địa chỉ</label>
                                                    <input class="form-control" type="text" name="dia_chi"
                                                        id="dia_chi" value="{{session('userInfo.dia_chi')}}" />
                                                </div>
                                               
                                                <div class="mb-3 col-md-6">
                                                    <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="so_dien_thoai"
                                                        name="so_dien_thoai" value="{{session('userInfo.so_dien_thoai')}}" />
                                                </div>

                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Chỉnh sửa</button>
                                              <a class="btn btn-outline-secondary" href="/">Quay lại</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
     <!-- Page JS -->
     <script src="js/pages-account-settings-account.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>