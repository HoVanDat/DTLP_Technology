@extends('layout')
@section('noidung')
 <!-- css khuyen mai -->
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
      font-size: 14px;php
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
                                <div class="group_sidebar">
                                    <div class="list-group navbar-inner ">


                                        <div>
                                            <h3 class="sb-title">Danh mục</h3>
                                        </div>

                                        <ul class="nav navs sidebar menu" id="menu-blog">




                                            <li class="item  first">
                                                <a href="/collections/dong-ho-nam">
                                                    <span>Laptop</span>
                                                </a>
                                            </li>





                                            <li class="item  ">
                                                <a href="/collections/dong-ho-nu">
                                                    <span>Laptop</span>
                                                </a>
                                            </li>





                                            <li class="item  ">
                                                <a href="/collections/dong-ho-tre-em">
                                                    <span>Laptop</span>
                                                </a>
                                            </li>





                                            <li class="item last">
                                                <a href="/collections/phu-kien-dong-ho">
                                                    <span>Laptop</span>
                                                </a>
                                            </li>


                                        </ul>

                                    </div>



                                </div>
                                <!-- End: Danh mục tin tức -->






                                <!--Begin: Bài viết mới nhất-->
                                <div class=" group_sidebar">
                                    <h3 class="sb-title">
                                        Bài viết mới nhất
                                    </h3>
                                    <div class="news-content row">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a>
                                            <div class="body-content">
                                                    <i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26"> 26/03/2017</time>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="news-content row">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a>
                                            <div class="body-content">
                                                    <i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26"> 26/03/2017</time>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="news-content row">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a>
                                            <div class="body-content">
                                                    <i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26"> 26/03/2017</time>

                                            </div>

                                        </div>


                                    </div>
                                    <div class="news-content row">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a>
                                            <div class="body-content">
                                                    <i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26"> 26/03/2017</time>

                                            </div>

                                        </div>


                                    </div>




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
                                        <h1>Tin khuyến mãi</h1>
                                      </div>
                                      <div class="space2"></div>





                                    <div class="news-content row">

                                        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-3.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->

                                            <h2 class="title-article"><a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26">26/03/2017</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG Nên tránh: - Va chạm và tiếp
                                                    xúc với chất ăn mòn, nhiệt độ cao hoặc từ trường mạnh. -
                                                    Sử dụng bất kì dung môi, chất làm sạch, chất tẩy công
                                                    nghiệp,...</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                                href="/blogs/news/goi-y-su-dung-dong-ho" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />
                                    <div class="news-content row">

                                        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h2 class="title-article"><a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26">26/03/2017</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG Nên tránh: - Va chạm và tiếp
                                                    xúc với chất ăn mòn, nhiệt độ cao hoặc từ trường mạnh. -
                                                    Sử dụng bất kì dung môi, chất làm sạch, chất tẩy công
                                                    nghiệp,...</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                                href="/blogs/news/goi-y-su-dung-dong-ho" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />
                                    <div class="news-content row">

                                        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h2 class="title-article"><a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26">26/03/2017</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG Nên tránh: - Va chạm và tiếp
                                                    xúc với chất ăn mòn, nhiệt độ cao hoặc từ trường mạnh. -
                                                    Sử dụng bất kì dung môi, chất làm sạch, chất tẩy công
                                                    nghiệp,...</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                                href="/blogs/news/goi-y-su-dung-dong-ho" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />
                                    <div class="news-content row">

                                        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h2 class="title-article"><a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26">26/03/2017</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG Nên tránh: - Va chạm và tiếp
                                                    xúc với chất ăn mòn, nhiệt độ cao hoặc từ trường mạnh. -
                                                    Sử dụng bất kì dung môi, chất làm sạch, chất tẩy công
                                                    nghiệp,...</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                                href="/blogs/news/goi-y-su-dung-dong-ho" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />
                                    <div class="news-content row">

                                        <div class="col-md-5 text-center col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <img src="img/product-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h2 class="title-article"><a
                                                    href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG
                                                    VÀ BẢO DƯỠNG Laptop</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                            datetime="2017-03-26">26/03/2017</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG Nên tránh: - Va chạm và tiếp
                                                    xúc với chất ăn mòn, nhiệt độ cao hoặc từ trường mạnh. -
                                                    Sử dụng bất kì dung môi, chất làm sạch, chất tẩy công
                                                    nghiệp,...</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                                href="/blogs/news/goi-y-su-dung-dong-ho" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />


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

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-2.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-3.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-4.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-2.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-3.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-4.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="/chitiet"><img src="img/product-thumb-1.jpg" alt=""
                                    class="product-thumb"></a>
                            <h2><a href="/chitiet">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->





@endsection
