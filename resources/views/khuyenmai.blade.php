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
.title-block-common {
    overflow: hidden;
    border-bottom: solid 2px #f17024;
    height: 40px;
    line-height: 40px;
    margin-bottom: 5px;
    width: 90%;
    margin-left: 0px  !important;
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
<div class="container">

<section id="content" class="clearfix container">
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
                                    <h1>Tin khuyến mãi mới nhất</h1>
                                </div>



                                @if(count($tintucs['dt']) > 0)
    @foreach($tintucs['dt'] as $tin)
        <div class="news-content row">
            <div class="col-md-3 text-center col-xs-12 col-sm-12 img-article">
                <div class="art-img">
                    <img src="{{ $tin->hinh }}" alt="">
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <h2 class="title-article">
                    <a href="chi-tiet-tin/{{ $tin->id_tin }}">{{ $tin->tieu_de }}</a>
                </h2>
                <div class="body-content">
                    <p>{{ $tin->tom_tat }}</p>
                </div>
                <a class="readmore btn-rb clear-fix"
                    href="chi-tiet-tin/{{ $tin->id_tin }}" role="button">
                    Xem tiếp <span class="fa fa-angle-double-right"></span>
                </a>
            </div>
        </div>
        <hr class="line-blog" />
    @endforeach
    <div class="pagination">
        {{ $tintucs['dt']->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
@else
    <p style="color:red; text-align:center; margin-top:30px;">Không có tin tức nào</p>
@endif
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

</div>
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
.blog-content .col-md-12{
    min-height:400px;
}
.art-img img{
    width: 300px;
    height:200px;
    text-align:left !important;
}
.col-md-3 {
padding: 0px 20px !important}
.art-img{
    text-align:left !important;

}

</style>

@endsection
