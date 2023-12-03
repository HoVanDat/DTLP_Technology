@extends('layout')
@section('noidung')
<!-- css khuyen mai -->
<style>
.mainmenu-area {
    background: none repeat scroll 0 0 #333;
    font-family: "Roboto Condensed", sans-serif;
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

.logo h1 a img {
    width: 30%;
}

.header-area {
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

.title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 90%;
    margin-left: 76px;
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

.list-group h3 {
    background-color: #f17024;
    color: white;
    padding: 6px 20px;
    font-weight: bolder;
}

.sidebar {
    margin-top: 20px;
}

.list-group {
    border: 2px solid #f17024;
    border-radius: 10px;
    ;
}

.group_sidebar h3 {
    background-color: #f17024;
    color: white;
    padding: 6px 20px;
    font-weight: bolder;
}

.title-article a {
    font-size: 20px;
    font-weight: bold;
}
</style>
<section id="content" class="clearfix container">
    <div class="row">
        <div id="blog" class="page-content main-content content-pages" data-sticky_parent>

            <!-- Begin content -->
            <div class="blog-content col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-3  col-sm-12 col-xs-12 leftsidebar-col" data-sticky_column>
                        <!-- Begin sidebar blog -->
                        <div class="sidebar ">

                            <!-- End: Danh mục tin tức -->






                            <!--Begin: Bài viết mới nhất-->
                            <div class=" group_sidebar">
                                <h3 class="sb-title">
                                    Nhiều lượt xem
                                </h3>
                                @foreach($nhieuluotxem as $nlx)
                                <div class="news-content row">

                                    <div class="col-md-5 col-xs-12 col-sm-12 img-article">

                                        <div class="art-img">
                                       <a href="/chi-tiet-tin/{{$nlx->id_tin}}"><img src="/img/{{$nlx->hinh}}" alt=""></a>
                                        </div>
                                    </div>


                                    <div class=" col-md-7 col-sm-12  col-xs-12">
                                        <!-- Begin: Nội dung bài viết -->
                                        <a href="/chi-tiet-tin/{{$nlx->id_tin}}">{{$nlx->tieu_de}}</a>
                                        <div class="body-content">
                                            <i class="fa fa-calendar-o"></i><time pubdate
                                                datetime="2017-03-26">{{$nlx->created_at}}</time>

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
                                    <h1>Tin khuyến mãi mới nhất</h1>
                                </div>
                                <div class="space2"></div>




                                @foreach($baivietmoinhat as $bvmn)
                                <hr class="line-blog"/>
                                <div class="news-content row">

                                    <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                        <div class="art-img">

                                         <a href="/chi-tiet-tin/{{$bvmn->id_tin}}"><img src="/img/{{$bvmn->hinh}}" alt=""></a>
                                        </div>
                                    </div>


                                    <div class=" col-md-7 col-sm-12  col-xs-12">
                                        <!-- Begin: Nội dung bài viết -->

                                        <h2 class="title-article"><a href="/chi-tiet-tin/{{$bvmn->id_tin}}">{{$bvmn->tieu_de}}</a></h2>
                                        <div class="body-content">
                                            <ul class="info-more">
                                                <li><i class="fa fa-calendar-o"></i><time pubdate
                                                        datetime="2017-03-26">{{$bvmn->created_at}}</time></li>
                                                <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                        tức </a> </li>

                                            </ul>
                                            <p>{{$bvmn->tom_tat}}</p>
                                        </div>
                                        <!-- End: Nội dung bài viết -->
                                        <a class="readmore btn-rb clear-fix" href="/chi-tiet-tin/{{$bvmn->id_tin}}"
                                            role="button">Xem
                                            tiếp <span class="fa fa-angle-double-right"></span></a>
                                    </div>


                                </div>

                               @endforeach


                                <!-- End: Nội dung blog -->

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
    .title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 90%;
    margin-left: 76px;
    margin-top: 40px;
}
</style>

@endsection
