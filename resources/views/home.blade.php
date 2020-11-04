@extends('layouts.app')
@section('title', trans('main.home'))
@section('content')
<div class="container">
    <div class="container-row">
        <div id="top-heading-res" class="column-list-product">
            <nav class="list_product">
                <h3 class="heading">
                    <i class="fa fa-bars"></i>@lang('main.categories')
                </h3>
                <ul class="product-list">
                    @foreach ($categories as $cate)
                    @if ($cate->parent_id == null)
                    <li class="product-list-item">
                        <a href="{{ $cate->cate_id }}" class="item-link">
                            <img style="width: 20px; height:20px" src="images/categories/{{ $cate->cate_logo }}" alt="">
                            {{ $cate->cate_name }}
                        </a>
                        <div class="lon">
                            <div class="cac">
                                @foreach ($cate->children as $catehihi)
                                <ul>
                                    <h5>{{ $catehihi->cate_name }}</h5>
                                    @foreach ($catehihi->products as $pro)
                                    <li><a href="#">{{ $pro->pro_name }}</a></li>
                                    @if ($proCount++ == 5) @break @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                    <!-- end -->
                </ul>
            </nav>
        </div>
        <div class="column-content">
            <div id="slider">
                <p href="#" class="control next">&gt;</p>
                <p href="#" class="control prev">&lt;</p>
                <ul>
                    @foreach ($banners as $ban)
                    <a href="#">
                        <li>
                            <img width="100%" src="images/banners/{{ $ban->ban_image }}" alt="">
                        </li>
                    </a>
                    @endforeach
                </ul>
            </div>
            <div class="list-product-res">
                <ul class="list-product-res-content">
                    <li class="product-res-content">
                        <a href="">
                            Công Nghệ</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Gia Đình</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Sức Khỏe</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Mẹ & Bé</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Đời Sống</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Thời Trang</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Xe Cộ</a>
                    </li>
                    <li class="product-res-content">
                        <a href="">
                            Sạch</a>
                    </li>
                </ul>
            </div>
            <div class="banner_bottom_container">
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/Banners-MainGrid1.png" alt=""></a>
                </div>
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/Banners-MainGrid2.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="column-quangcao">
            <div class="banner_qc_container">
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc1.png" alt=""></a>
                </div>
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc2.png" alt=""></a>
                </div>
            </div>
            <div class="banner_qc_container">
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc3.png" alt=""></a>
                </div>
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc4.png" alt=""></a>
                </div>
            </div>
            <div class="banner_qc_container">
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc6.png" alt=""></a>
                </div>
                <div class="Banners-MainGrid">
                    <a href="">
                        <img src="./assets/images/qc7.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end danh mục - slider - quảng cáo -->
    <div class="sales-container">

        <div class="container-row">
            <ul class="sales">
                @foreach($deals as $deal)
                <li class="sales-item">

                    <a href="#">
                        <img width="100%" src="images/deal/{{$deal-> deal_image}}" alt="">
                    </a>

                </li>
                @endforeach
            </ul>
            <!-- end sales -->
        </div>
    </div>
    <!-- end sales -->
    <div class="selling-max">
        <div class="container">
            <div class="selling-title">
                <img src="https://frontend.tikicdn.com/_desktop-next/static/img/giasoc.svg" alt="">
                <img src="https://frontend.tikicdn.com/_desktop-next/static/img/flash.gif" alt="">
                <img src="https://frontend.tikicdn.com/_desktop-next/static/img/homnay.svg" alt="">
            </div>
            <div class="row">
                @foreach ($products as $pro)
                @if ($pro->pro_sale == 1)
                <div class="col-md-3 pro-hov">
                    <div class="product-top">
                        @if ($pro->pro_image == null)
                        <img src="https://salt.tikicdn.com/cache/280x280/ts/product/34/5c/52/85412535723b0e4b72638d79ca2f521f.jpg" alt="">
                        @else
                        <img src="images/products/{{ $pro->pro_image }}" alt="">
                        @endif
                        <div class="overlay">
                            <a href="{{ route('product.show', $pro->pro_id) }}" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </a>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <span class="percent deal">HOT</span>
                    <div class="product-bottom text-center">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                        <i class="far fa-star"></i>
                        <p class="title">{{ $pro->pro_name }}</p>
                        <h5 class="price">{{ number_format($pro->pro_new_price) }} đ
                            <span class="original deal">{{ number_format($pro->pro_old_price) }}đ</span>
                        </h5>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="btn-more text-center mt-3 mb-3">
                    <a href="">@lang('main.see_more')</a>
                </div>
            </div>
        </div>

        <div class="top-selling">
            <h2 class="alert alert-warning">@lang('main.top_sale')</h2>
            <div class="custom-slider">
                @foreach ($topSales as $sa)
                <div class="custom-box">
                    <a href="#"><img src="./assets/images/topbanchay1.jpg" alt=""></a>
                </div>
                @endforeach
            </div>
            <!-- end top khuyến mãi -->
            <h2 class="alert alert-warning">@lang('main.cate_quantam')</h2>
            <div id="gallery">
                @foreach ($categories as $cate)
                <div class="pro-hov">
                    <div class="product-top">
                        <img src="images/categories/{{ $cate->cate_logo }}" alt="">
                    </div>
                    <div class="product-bottom text-center">
                        <p class="title text-center">{{ $cate->cate_name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end top bán chạy -->

        </div>
        <div class="product">
            <h2 class="alert alert-warning">@lang('main.hot_in_day')</h2>
            <!-- san pham -->
            <div class="container">
                <div class="row">
                    @foreach ($hots as $hot)
                    <div class="col-md-3 pro-hov">
                        <div class="product-top">
                            <img src="images/products/{{ $hot->pro_image }}" alt="">
                            <div class="overlay">
                                <a href="{{ route('product.show', $hot->pro_id) }}" class="btn btn-secondary" title="{{ trans('main.product.detail') }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="" method="post">
                                    <button type="button" class="btn btn-secondary" title="{{ trans('main.product.add_wishlist') }}">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                </form>
                                <form action="" method="post">
                                    <button type="button" class="btn btn-secondary" title="{{ trans('main.product.add_cart') }}">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <span class="percent deal">HOT</span>
                        <div class="product-bottom text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                            <i class="far fa-star"></i>
                            <p class="title">{{ $hot->pro_name }}</p>
                            <h5 class="price">{{ number_format($hot->pro_new_price) }}000 đ
                                <span class="original deal">{{ number_format($hot->pro_old_price) }} đ</span>
                            </h5>
                        </div>
                    </div>
                    @endforeach
                    <div class="btn-more text-center mt-3 mb-3">
                        <a href="">@lang('main.see_more')</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sản phẩm -->
    </div>
</div>
<!-- end container -->
@endsection