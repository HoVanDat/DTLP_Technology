

@extends('layout')
@section('noidung')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>


 .mainmenu-area {
     background: none repeat scroll 0 0 #333;
     font-family: "Roboto Condensed",sans-serif;
     text-transform: uppercase;
     width: 100%;
     z-index: 999;
 }
 .mainmenu-area ul.navbar-nav li a {
     color: white;
     font-size: 14px;
     padding: 20px;
 }
 .product-big-title-area {
     background: url(img/crossword.png) repeat scroll 0 0 #f17024;
 }
 .logo h1 a img{
     width: 30%;
 }
 .header-area{
     background-color: #f17024;
 }
 .header-area a {
     color: white;
 }
 /* end */
 .blog-content .row {
     margin-right: -15px;
     margin-left: -15px;
     margin-top: 20px;
 }
 hr {
     margin-top: 20px;
     margin-bottom: 20px;
     margin-left: 78px;
     border: 0;
     border-top: 1px solid #eee;
 }
 .form-outline input{
     height: 50px;
     padding-bottom: 10px;
     margin-top: 20px;
 }
 section{
     margin-top: 50px;
     margin-bottom: 50px;
 }

 .title-login{
     border-bottom: 2px solid #f17024;
     height: 40px;
     width: 95%;
 }
 .title-login h2{
     float: left;
     text-transform: uppercase;
     font-size: 20px;
     line-height: 40px;
     background: #f17024;
     color: #fff;
     border-radius: 5px 5px 0 0;
     padding: 0 20px;
     font-weight: bold;
     position: relative;
     margin-right: 20px;
 }

 button[type=submit] {
     background: none repeat scroll 0 0 #f17024;
     border: medium none;
     color: #fff;
     padding: 11px 20px;
     text-transform: uppercase;
 }
 </style>
 <script>
    @include('sweetalert::alert')
</script>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <div class="mt-5">
                @if($errors->any())
                <div class="col-12">
                  @foreach($errors->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
              </div>
              <form action="{{route('login.post')}}" method="POST">
                @csrf
                <div class="title-login">
                <h2>Đăng Nhập</h2>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form1Example13" placeholder="Email" class="form-control form-control-lg" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example23" placeholder="Password" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="{{route('forget.password')}}">Forgot password?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class=" btn-primary btn-lg btn-block">Đăng nhập</button>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">Hoặc</p>
                </div>

                <button class="btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!">
                  <i class="fab fa-facebook-f me-2"></i>Tiếp tục với Facebook
                </button>
                <button class="btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter me-2"></i>
                  Tiếp tục với Twitter</button>
              </form>
            </div>
          </div>
        </div>
      </section>




@endsection
