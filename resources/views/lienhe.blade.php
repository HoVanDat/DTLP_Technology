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
        margin-top:5%;
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
.container h1{
    margin-top:30px;
    margin-bottom:50px;

}
.container .mt-2{
    margin-top:30px;
}
    </style>

<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-2">
            <h1 class="text-center">Liên hệ</h1>
            <div class="row">
                <div class="col col-md-6">
                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/Content/tin-tuc/gia-dung/laptop-danh-cho-sinh-vien-nen-dat-nhung-tieu-chi-nao-h1.jpg">
                </div>
                <div class="col col-md-6">
                    <form method="post" action="https://nentang.vn/">
                        <div class="form-group">
                            <label for="email">Email của bạn</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email của bạn">
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề của bạn</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Tiêu đề của bạn">
                        </div>
                        <div class="form-group">
                            <label for="message">Lời nhắn của bạn</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" name="btnGoiLoiNhan">Gởi lời nhắn</button>
                    </form>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.7235485722294!2d105.78061631523369!3d10.039656175103817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a062a768a8090b%3A0x4756d383949cafbb!2zMTMwIFjDtCBWaeG6v3QgTmdo4buHIFTEqW5oLCBBbiBI4buZaSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1556697525436!5m2!1svi!2s"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>

@endsection
