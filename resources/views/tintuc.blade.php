@extends('layout')
@section('noidung')
<!-- css tin tức -->

<style>
    .blog-content .row {
    margin-right: -15px;
    margin-left: -15px;
    margin-top: 20px;
}

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
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 78px;
    border: 0;
    border-top: 1px solid #eee;
}
.group_sidebar{
    border-radius: 10px;
    margin-top:20px;
}
.title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 95.5%;
    margin-left: 40px;
}
.title-block-common h1 {
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
.list-group h3{
    background-color: #f17024;
    color:white;
    padding: 6px 20px;
    font-weight: bolder;
}
.sidebar {
    margin-top: 20px;
}
.list-group{
    border: 2px solid #f17024;
    border-radius: 10px;;
    background-color: white;
}
.group_sidebar h3{
    background-color: #f17024;
    color:white;
    padding: 6px 20px;
    font-weight: bolder;
}
.title-article a{
    font-size: 20px;
    font-weight: bold;
}

.footer-top-area {
    background: white;
    padding: 5px 0 40px;
}
.col-md-3 {
padding: 0px 0px;
}
.nen{
    background-color: white;
    margin-left:40px;
    border-radius: 10px;
}
.blog-content .row {
    margin-right: -15px;
    margin-left: -15px;
    margin-top: 20px;
    padding: 10px;
}
div.group_sidebar{
    border-radius: 10px;
}
div.group_sidebar{
    box-shadow: 1px solid red;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <section id="content" class="clearfix container danhmuc">
        <div class="row">
            <div id="blog" class="page-content main-content content-pages" data-sticky_parent>

                <!-- Begin content -->
                <div class="blog-content col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 " id="blog-container" data-sticky_column>
                            <div class="row">
                                <div class="articles clearfix" id="layout-page">

                                    <!-- Begin: Nội dung blog -->
                                    <div class="title-block-common mb-2">
                                        <h1>Tin tức</h1>
                                      </div>
                                      <div class="space2"></div>


                                      <div id="khung" class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Công nghệ</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Giải trí </button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Giáo dục</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyook')">Du lịch</button>

</div>

<div id="London" class="w3-container city">
<div class="nen">
@if(count($dt)>0)
@foreach($dt as $dt)
    <div class="news-content row">

        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
            <div class="art-img">
                <img src="/img/{{$dt->hinh}}"
                    alt="">
            </div>
        </div>


        <div class=" col-md-7 col-sm-12  col-xs-12">
            <h2 class="title-article"><a
                    href="chi-tiet-tin/{{$dt->id_tin}}">{{$dt->tieu_de}}</a></h2>
            <div class="body-content">
                <p>{{$dt->tom_tat}}</p>
            </div>
            <!-- End: Nội dung bài viết -->
            <a class="readmore btn-rb clear-fix"
                href="chi-tiet-tin/{{$dt->id_tin}}" role="button">Xem
                tiếp <span class="fa fa-angle-double-right"></span></a>
        </div>


    </div>
    <hr class="line-blog" />

    @endforeach

@else
<p style="color:red; text-align:center; margin-top:30px;">Không có tin tức nào</p>
@endif
    <!-- End: Nội dung blog -->

</div>
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}
</script>
</div>

<div id="Paris" class="w3-container city" style="display:none">
<div class="nen">
@if(count($dt1)>0)
@foreach($dt1 as $dt)
    <div class="news-content row">

        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
            <div class="art-img">
                <img src="/img/{{$dt->hinh}}"
                    alt="">
            </div>
        </div>


        <div class=" col-md-7 col-sm-12  col-xs-12">
            <h2 class="title-article"><a
                    href="chi-tiet-tin/{{$dt->id_tin}}">{{$dt->tieu_de}}</a></h2>
            <div class="body-content">
                <p>{{$dt->tom_tat}}</p>
            </div>
            <!-- End: Nội dung bài viết -->
            <a class="readmore btn-rb clear-fix"
                href="chi-tiet-tin/{{$dt->id_tin}}" role="button">Xem
                tiếp <span class="fa fa-angle-double-right"></span></a>
        </div>


    </div>
    <hr class="line-blog" />

    @endforeach

@else
<p style="color:red; text-align:center; margin-top:30px;">Không có tin tức nào</p>
@endif
    <!-- End: Nội dung blog -->

</div>
</div>

<div id="Tokyo" class="w3-container city" style="display:none">
<div class="nen">
@if(count($dt2)>0)
@foreach($dt2 as $dt)
    <div class="news-content row">

        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
            <div class="art-img">
                <img src="/img/{{$dt->hinh}}"
                    alt="">
            </div>
        </div>


        <div class=" col-md-7 col-sm-12  col-xs-12">
            <h2 class="title-article"><a
                    href="chi-tiet-tin/{{$dt->id_tin}}">{{$dt->tieu_de}}</a></h2>
            <div class="body-content">
                <p>{{$dt->tom_tat}}</p>
            </div>
            <!-- End: Nội dung bài viết -->
            <a class="readmore btn-rb clear-fix"
                href="chi-tiet-tin/{{$dt->id_tin}}" role="button">Xem
                tiếp <span class="fa fa-angle-double-right"></span></a>
        </div>


    </div>
    <hr class="line-blog" />

    @endforeach

@else
<p style="color:red; text-align:center; margin-top:30px;">Không có tin tức nào</p>
@endif
    <!-- End: Nội dung blog -->

</div>
</div>
<div id="Tokyook" class="w3-container city" style="display:none">
<div class="nen">
@if(count($dt3)>0)
@foreach($dt3 as $dt)
    <div class="news-content row">

        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
            <div class="art-img">
                <img src="/img/{{$dt->hinh}}"
                    alt="">
            </div>
        </div>


        <div class=" col-md-7 col-sm-12  col-xs-12">
            <h2 class="title-article"><a
                    href="chi-tiet-tin/{{$dt->id_tin}}">{{$dt->tieu_de}}</a></h2>
            <div class="body-content">
                <p>{{$dt->tom_tat}}</p>
            </div>
            <!-- End: Nội dung bài viết -->
            <a class="readmore btn-rb clear-fix"
                href="chi-tiet-tin/{{$dt->id_tin}}" role="button">Xem
                tiếp <span class="fa fa-angle-double-right"></span></a>
        </div>


    </div>
    <hr class="line-blog" />

    @endforeach

@else
<p style="color:red; text-align:center; margin-top:30px;">Không có tin tức nào</p>
@endif
    <!-- End: Nội dung blog -->

</div>
</div>
</div>


                                <div class="col-md-12">
                                    <!-- Begin: Phân trang blog -->
                                    <div id="pagination" class="">



                                    </div>

                                    <!-- End: Phân trang blog -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- End content -->

            </div>
        </div>
    </section>

   <!-- End brands area -->

    <!-- End product widget area -->


<style>
    #group_sidebar{
        padding-top:10px;
    }
    section.danhmuc .col-md-3
{
        padding-top:10px;
    }
    div#khung{
        width: 96%;
        margin-left:40px !important;
        margin-top:20px !important;
        margin:0 auto;
        background-color:white !important;
        border:1px solid #cccccc;
        color:black !important;
    }
    div.city{
        min-height:400px;
    }
    #khung {
    display: flex;
    justify-content: center; /* Căn giữa theo chiều ngang */
    align-items: center; /* Căn giữa theo chiều dọc */
    height: 60px; /* Hoặc bạn có thể thiết lập chiều cao theo ý muốn */
}

.w3-bar-item {
    margin: 0 0px; /* Tăng hoặc giảm giữa các nút theo ý muốn */
}
div#khung{
    margin:0 auto;
}
</style>

@endsection
