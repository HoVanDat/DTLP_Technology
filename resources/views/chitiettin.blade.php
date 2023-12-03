@extends('layout')
@section('noidung')
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
.logo img{
    width: 100px;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
    max-width: 800px;
    margin: 0 auto;
}

.breadcrumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 6px 0;
}

.post__user {
    padding-bottom: 24px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 24px;
}


.post__user .post-time {
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
    color: #6a737a;
    padding-right: 12px;
    position: relative;
    display: inline-block;
    margin-right: 8px;
}

.post__user .author-avatar {
    display: inline-block;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    position: relative;
    margin-right: 8px;
}

.post__title {
    font-size: 32px;
    line-height: 40px;
    margin-bottom: 20px;
    font-weight: 600;
    margin-top: 16px;
}

.post__des,
.post__list {
    margin-bottom: 24px;
}

.post__des {
    font-size: 18px;
    line-height: 32px;
    color: #444b52;
}

.post__list li h3 {
    font-weight: 400;
    font-size: inherit;
    line-height: inherit;
    margin-bottom: 0;
}

.menu-heading {
    background: #f8f9fa;
    border-radius: 12px;
    border: 1px solid #e1e4e6;
    margin-bottom: 24px;
}

.menu-heading__title {
    padding: 16px 14px 12px;
    border-bottom: 1px solid #e1e4e6;
    font-size: 20px;
    font-weight: 500;
    line-height: 28px;
    color: #32373d;
}

.menu-heading__list {
    padding: 12px 14px 16px;
}

.menu-heading__item a {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    color: #444b52;
    display: block;
    cursor: pointer;
}

ul {
    list-style: none;
}

strong {
    font-weight: 700;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
small,
strong,
b,
i {
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: baseline;
    background: 0 0;
}

.post__content p {
    font-size: 18px;
    line-height: 32px;
    margin-bottom: 20px;
    text-align: left;
    color: #444b52;
}

element.style {
    text-align: justify;
}

.post__content ol li,
.post__content ul li {
    font-size: 18px;
    line-height: 32px;
    position: relative;
    padding-left: 14px;
    color: #444b52;
}

.fb-share-button {
    position: absolute !important;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 2;
    opacity: 0;
}

.fb_iframe_widget {
    display: inline-block;
    position: relative;
}

.zalo-share-button {
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #e1e4e6;
    padding: 7px 25.5px;
    border-radius: 4px;
    background: #fff;
    margin-left: 8px;
    cursor: pointer;
}

.social-network__action {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 32px;
    margin-top: 24px;
}

.post__share {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}

.author-wrap {
    display: -ms-flexbox;
    display: flex;
    background: #f8f9fa;
    border-radius: 6px;
    padding: 16px 16px 20px;
    margin-bottom: 24px;
}

.author-wrap .author-info {
    width: calc(100% - 88px);
    margin-left: 10px;
}

.author-wrap .author-name {
    border-bottom: 1px solid #e1e4e6;
    color: #212529;
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    padding-bottom: 7px;
}

.author-wrap .author-avatar img {
    border-radius: 50%;
}

.author-wrap .author-description {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    color: #444b52;
    margin-top: 8px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.post__tag {
    margin-bottom: 24px;
}

.post__tag .title {
    font-size: 16px;
    font-weight: bold;
    line-height: 24px;
    color: #444b52;
    margin-bottom: 4px;
}

.post__tag .list-tag a {
    font-size: 16px;
    line-height: 16px;
    padding: 8px 12px;
    background: #edeeef;
    color: #6a737a;
    margin-bottom: 8px;
    margin-right: 8px;
}

.post__tag .list-tag {

    margin-bottom: 20px;
    margin-right: 8px;
    padding-top: 10px;
}

.post-detail--bottom {
    padding: 30px 0;
    background: #f8f9fa;
}

#post-related {
    margin-bottom: 40px;
}

.post-related__title {
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 28px;
    margin-bottom: 16px;
    color: #32373d;
}

.post-related .item-title {
    font-size: 18px;
    font-weight: 500;
    line-height: 24px;
    color: #32373d;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    word-break: break-word;
    height: 72px;
}

.post-related .item-author {
    margin: 4px 0 0;
    display: -ms-flexbox;
    display: flex;
}

.post-related .item-author .author-avatar img {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    vertical-align: baseline;
}

.post-related .item-info {
    padding: 8px 12px 12px;
}

.swiper-wrapper {
    display: grid;
    grid-auto-flow: column;
    /* Xếp các phần tử theo hàng ngang */
    grid-column-gap: 24px;
    /* Khoảng cách giữa các phần tử */
    overflow-x: auto;
    /* Thêm thanh cuộn ngang nếu các phần tử vượt quá chiều rộng */
}

.fpt-comment {
    margin-bottom: 32px;
}

.fpt-comment .card-md {
    border-radius: 6px;
}

.fpt-comment .card {
    display: block;
    border-radius: 4px;
    box-shadow: 0 1px 4px rgba(10, 10, 10, .15);
    background: #fff;
    overflow: hidden;
}

.fpt-comment .card-title {
    padding: 16px 20px;
    box-shadow: inset 0 -1px 0 #edeeef;
    display: flex;
    justify-content: space-between;
    margin-bottom: 0;
}

.fpt-comment .user-form {
    padding: 16px 20px;
}

.fpt-comment .user-form .form-group textarea {
    height: 72px;
    border-radius: 6px;
    padding-right: 177px;
}

.fpt-comment .form-input {
    position: relative;
    display: block;
    width: 100%;
    font-family: inherit;
    padding: 7.5px 11px;
    color: #444b52;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #cbd1d6;
    border-radius: 4px;
    transition: color .3s cubic-bezier(0, 0, .4, 1), background-color .3s cubic-bezier(0, 0, .4, 1), border-color .3s cubic-bezier(0, 0, .4, 1), box-shadow .3s cubic-bezier(0, 0, .4, 1);
}

.fpt-comment h5,
.fpt-comment .h5 {
    font-size: 20px;
    line-height: 28px;
}

.user-form form .btn {
    font-size: 14px;
    /* Điều chỉnh kích thước chữ */
    padding: 5px 10px;
    /* Điều chỉnh padding nút */
    margin-top: 10px;
    /* Thêm khoảng cách 10px bên trên nút */
}

.boxpin {
    display: -ms-flexbox;
    display: flex;
    border: 1px solid #e1e4e6;
    padding: 20px;
    border-radius: 4px;
    margin-bottom: 20px;
    gap: 20px;
}

.boxpin .infor .title {
    font-size: 20px;
    line-height: 28px;
    color: #32373d;
    margin-top: 2px;
    margin-bottom: 8px;
}

.boxpin .infor .price-box .price {
    font-weight: 500;
    font-size: 24px;
    line-height: 100%;
    text-align: center;
    color: #cb1c22;
}

.boxpin .infor .price-box .precent {
    padding: 5px 8px;
    background: #cb1c22;
    border: 1px solid #cb1c22;
    border-radius: 4px;
    margin-left: 8px;
    font-size: 14px;
    line-height: 100%;
    color: #fff;
}

.boxpin .infor .price-box {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 8px;
}

.boxpin .infor .priceMarket {
    font-size: 16px;
    line-height: 100%;
    color: #939ca3;
}

.boxpin .infor ul {
    list-style: none;
    margin-bottom: 12px;
    padding: 8px;
    border-radius: 4px;
    background: #f8f9fa;

}

.boxpin .infor ul li p {
    margin-bottom: unset;
    font-weight: 400;
    font-size: 14px;
    line-height: 20px;
    color: #939ca3;
}

.boxpin .infor .viewdetail {
    background: #cb1c22;
    border: 1px solid #cb1c22;
    padding: 9px 23px;
    text-align: center;
    color: #fff;
    border-radius: 4px;
    font-size: 16px;
    line-height: 100%;
    display: inline-block;
    font-weight: 500;
    margin-top: 0;
}
</style>
<div class="post-detail" style="">
    <div class="container">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/tin-tuc/">Tin tức</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/tin-tuc/danh-gia">
                    @if(isset($chitiettin->danhmuc_tintuc->ten_danh_muc))
                    {{$chitiettin->danhmuc_tintuc->ten_danh_muc}}
                    @endif
                </a>
            </li>
        </ol>
    </div>
    <div class="container">
        <div class="row no-gutters">
            <div class="post-container">
                <div class="post-wrap">
                    <div style="display:none" class="data__title post__title" data-id="166633" data-cate="danh-gia">
                    </div>
                    <h1 class="post__title show" data-id="166633" data-cate="danh-gia">
                        {{$chitiettin->tieu_de}}
                    </h1>
                    <div class="post__user border-bottom">
                        <span class="author-avatar">
                            @if(isset($chitiettin->nguoidung->hinh))
                            <img src="/img/{{$chitiettin->nguoidung->hinh}}" alt="avarta">
                            @else

                            <i class="fa-solid fa-user-astronaut" style="margin-left:50px; margin-top:16px"></i>

                            @endif

                        </span>
                        <div>
                            <span class="author-name">
                                @if(isset($chitiettin->nguoidung->ten))
                                {{$chitiettin->nguoidung->ten}}
                                @endif
                            </span>
                            <div class="author-info">
                                <span class="post-time"> @if(isset($chitiettin->created_at))
                                    {{$chitiettin->created_at}}
                                    @endif
                                </span>
                                <a class="post-cmt" href="#root-comment"><i class="fa-brands fa-rocketchat"></i>
                                    <span id="totalCmt">0</span> <span> Hỏi &amp; Đáp</span></a>

                            </div>

                        </div>
                    </div>
                    <hr>

                    <ul id="post__list" class="post__list">
                        @foreach($tinlienquan as $tlq)
                        <li><a href="/chi-tiet-tin/{{$tlq->id_tin}}">
                                <h3>{{$tlq->tieu_de}}</h3>
                            </a></li>
                        @endforeach
                    </ul>
                    <div class="menu-heading">
                        <div class="menu-heading__title">Danh mục tin tức</div>
                        <ul class="menu-heading__list js--menu-heading">
                            @php
                            $count = 1;
                            @endphp
                            @foreach($danhmuctin as $dmt)
                            <li class="menu-heading__item">
                                <a toscroll="#4930868747" href="#1HONOR90Lite5G">{{ $count }}.
                                    {{ $dmt->ten_danh_muc }}</a>
                            </li>
                            @php
                            $count++;
                            @endphp
                            @endforeach

                        </ul>
                    </div>
                    <div class="post__content">
                        <p style="text-align: justify;"><strong><img alt="HONOR 90 Lite 5G"
                                    src="/img/{{$chitiettin->hinh}}" width="500px"></strong>
                        </p>

                        <p style="text-align: justify;">{{$chitiettin->noi_dung}}</p>


                        <div class="boxpin" data-id="47265">
                            <div class="image"><a target="_blank"
                                    href="http://fptshop.com.vn/dien-thoai/honor-90-lite"><img
                                        src="/img/{{$randsp->hinh}}"></a>
                            </div>
                            <div class="infor"><a target="_blank" href="http://fptshop.com.vn/dien-thoai/honor-90-lite">
                                    <div class="title">{{$randsp->ten_san_pham}}</div>
                                </a>
                                <div class="price-box">
                                    <div class="price">{{$randsp->gia_khuyen_mai}}</div>
                                    @if ($randsp->gia_khuyen_mai < $randsp->gia && $randsp->gia > 0)
                                        @php
                                        $phanTramGiamGia = ($randsp->gia - $randsp->gia_khuyen_mai) / $randsp->gia *
                                        100;
                                        @endphp
                                        <div class="precent">
                                            -{{ round($phanTramGiamGia) }}%
                                        </div>
                                        @endif

                                </div><del class="priceMarket">{{$randsp->gia}}</del>
                                <ul>
                                    @if(isset($randspchitiet))
                                    <li><i class="icon-cpu">{{$randspchitiet->CPU}}</i>
                                        <p></p>
                                    </li>
                                    <li><i class="">{{$randspchitiet->RAM}}</i>
                                        <p></p>
                                    </li>
                                    <li><i class="">{{$randspchitiet->man_hinh}}</i>
                                        <p></p>
                                    </li>
                                    <li><i class="icon-hdd-black">{{$randspchitiet->o_cung}}</i>
                                        <p></p>
                                    </li>
                                    @endif
                                </ul><a target="_blank" href="/chi-tiet-san-pham/{{$randsp->id_san_pham}}"
                                    class="viewdetail">Mua ngay</a>
                            </div>
                        </div>

                        <h2 style="text-align: justify;" id="1251025883492"><strong>Tổng kết</strong></h2>
                        <p style="text-align: justify;">{{$chitiettin->tong_ket}}</p>
                    </div>
                    <div class="social-network__action">
                        <div class="post__share">
                            <span class="post-desc">Chia sẻ: </span>
                            <div class="zalo-share-button">
                                <img src="/img/fb.webp" width="20px"> <span>Facebook</span>
                            </div>
                            <div class="zalo-share-button">
                                <img src="/img/zalo.webp" width="20px" width="10px"> <span>Zalo</span>
                            </div>
                        </div>
                    </div>
                    <div class="post__tag">
                        <div class=" post-detail-stt">
                            <div class="title">Chủ đề</div>
                            <div class="list-tag">
                                <a href="/shopdienthoai">So sánh điện thoại </a>
                                <a href="/lienhe">Tư vấn mua hàng</a>
                                <a href="/shoplaptop">Laptop</a>
                            </div>
                        </div>
                        <div class=" post-detail-stt">
                            <div class="title">Sản phẩm</div>
                            <div class="list-tag">
                                @foreach($sanpham as $sp)
                                <a href="/dien-thoai/honor-x8a">{{$sp->ten_san_pham}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="news-gallery">
</div>
<div class="post-detail--bottom">
    <div id="product-related1"></div>
    <div id="tiktok"></div>
    <div id="post-related" class="post-related">
        <div class="container">
            <div class="post-related__wrapper">
                <div class="post-related__title">CÓ THỂ BẠN THÍCH</div>
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        @foreach($tinlienquan as $tlq)
                        <div class="swiper-slide swiper-slide-active" style="width: 282px; margin-right: 24px;">
                            <div class="related-item"><a href="/chi-tiet-tin/{{$tlq->id_tin}}" class="item-img"><img
                                        src="/img/{{$tlq->hinh}}" alt=""></a>
                                <div class="item-info"><a href="/chi-tiet-tin/{{$tlq->id_tin}}">
                                        <h3 class="item-title">{{$tlq->tieu_de}}</h3>
                                    </a>
                                    <div class="item-author">
                                        @if(isset($tlq->nguoidung))
                                        <div class="author-avatar"><img src="/img/{{$tlq->nguoidung->hinh}}" alt="">
                                        </div><span class="author-name">{{$tlq->nguoidung->ten}}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev swiper-button-disabled"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="root-comment" data-title="Mách bạn TOP 4 điện thoại HONOR giá rẻ cấu hình mạnh đáng mua nhất hiện nay"
            data-modulid="2" data-total="0">
            <div class="fpt-comment">
                <div class="">
                    <div class="card card-md user-feedback">
                        <div class="card-title">
                            <h3 class="h5 heading">Hỏi &amp; Đáp</h3>
                            <div class="form-group">
                                <div class="form-search form-search-md"><span class="form-search-icon m-r-4"><i
                                            class="cm-ic-search cm-ic-sm"></i></span><input
                                        class="form-search-input m-r-8" type="text"
                                        placeholder="Tìm theo nội dung, người gửi..." value=""><span
                                        class="form-search-icon form-search-clear"><i
                                            class="cm-ic-close cm-ic-md"></i></span></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-form">
                                <form>
                                    <div class="form-group"><textarea name="newContent"
                                            class="form-input form-input-lg  " rows="3"
                                            placeholder="Nhập nội dung bình luận (tiếng Việt có dấu)..."></textarea><button
                                            type="submit" class="btn btn-primary btn-lg">GỬI BÌNH LUẬN</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
