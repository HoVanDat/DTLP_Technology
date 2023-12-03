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
    <section id="content" class="clearfix container danhmuc">
        <div class="row">
            <div id="blog" class="page-content main-content content-pages" data-sticky_parent>

                <!-- Begin content -->
                <div class="blog-content col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-3 pt-4  col-sm-12 col-xs-12 leftsidebar-col" data-sticky_column>
                            <!-- Begin sidebar blog -->
                            <div class="sidebar ">
                            <div class="mt-4">
                                <div class="list-group navbar-inner ">


                                    <div>
                                        <h3 class="sb-title">Danh mục tin tức</h3>
                                    </div>

                                    <ul class="nav navs sidebar menu" id="menu-blog">
                                        @foreach($dt2 as $dm)
                                        <li class="item  first">
                                            <a href="{{ url('danh-muc',[$dm->id_danh_muc_tin]) }}">
                                                <span>{{$dm->ten_danh_muc}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>



                            </div>
                                <!-- End: Danh mục tin tức -->






                                <!--Begin: Bài viết mới nhất-->
                                <div id="group_sidebar" class="group_sidebar">
                                    <h3 class="sb-title">
                                        Bài viết mới nhất
                                    </h3>
@foreach($dt1 as $tt)
                                    <div class="news-content row">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="/img/{{$tt->hinh}}"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">{{$tt->tieu_de}}</a>
                                            <div class="body-content">
                                                    <i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26"> 26/03/2017</time>

                                            </div>

                                        </div>


                                    </div>
                                    @endforeach







                                </div>

                                <!--End: Bài viết mới nhất-->





                            </div>
                            <!-- End sidebar blog -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12 " id="blog-container" data-sticky_column>
                            <div class="row">
                                <div class="articles clearfix" id="layout-page">

                                    <!-- Begin: Nội dung blog -->
                                    <div class="title-block-common mb-2">
                                        <h1>Tin tức</h1>
                                      </div>
                                      <div class="space2"></div>



<div class="nen">
@if(isset($dt))
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
<p>Không có tin tức nào</p>
@endif
    <!-- End: Nội dung blog -->

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
</style>

@endsection
