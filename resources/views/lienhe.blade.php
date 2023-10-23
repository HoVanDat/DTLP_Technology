@extends('layout')
@section('noidung')
   <!--css liên hệ  -->
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
    .title-block-common {
        overflow: hidden;
        border-bottom: solid 2px #f17024;
        height: 40px;
        line-height: 40px;
        margin-bottom: 5px;
        width: 95%;
        margin-left: 0px;
        margin-bottom: 30px;
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
    
    .contact-form input[type="submit"]{
        margin-right: 15px;
    }
    .contact-form input[type="submit"]:hover {
        padding: 7px 25px;
        cursor: pointer;
        background: #f17024 url(../images/large-button-overlay.png);
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        right: 0;
        border: 1px solid #ccc;
        color: white !important;
        font-size: 1em;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.5);
    }
    
    </style>

    <div class="main">
        <div class="container">
            
             <div class="content">
            <div class="support">
                <div class="title-block-common mb-2">
                    <h1>Contact</h1>
                  </div>
                  <div class="space2"></div>
                <div class="support_desc">
                    <h3>Live Support</h3>
                    <p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span>
                    </p>
                    <p> It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters.There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                        or randomised words which don't look even slightly believable. If you are going to use a
                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                        middle of text.</p>
                </div>
                <img src="/img/contact.png" alt="" />
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        <form>
                            <div>
                                <span><label>NAME</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>MOBILE.NO</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>SUBJECT</label></span>
                                <span><textarea> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" value="SUBMIT"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="contact_info">
                        <h2>Find Us Here</h2>
                        <div class="map">
                            <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a
                                    href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
                                    style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                        </div>
                    </div>
                    <div class="company_address">
                        <h2>Company Information :</h2>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone:(00) 222 666 444</p>
                        <p>Fax: (000) 000 00 00 0</p>
                        <p>Email: <span>info@mycompany.com</span></p>
                        <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>

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