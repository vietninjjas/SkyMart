@extends('layouts.app')
@section('title', trans('main.home'))
@section('content') 
<div class = "container"> 
    <div class="container-row">
    <div id="top-heading-res" class="column-list-product">
        <nav class="list_product">
            <h3 class="heading">
                <i class="fa fa-bars"></i>@lang('main.categories')</h3>
            <ul class="product-list">
                @foreach($categories as $cate)
                <li class="product-list-item">
                    <a href="{{$cate->cate_id}}" class="item-link">
                        <img style="width: 20px; height:20px" src="images/categories/{{ $cate->cate_logo }}" alt="">
                        {{ $cate->cate_name }}</a>
                    <div class="lon">
                        <div class="cac">
                            <ul>
                                @foreach($cate->children as $catehihi)
                                    <h5 >{{ $catehihi->cate_name }}</h5>
                                @endforeach
                                <li>
                                    // o day se goi product
                                    <a href="#">Samsung Galaxy S20 Plus</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
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
                <a href="#">
                    <li>
                        <img width="100%" src="./assets/images/slider1.png" alt=""></li>
                    </a>
                    <a href="#">
                        <li>
                            <img width="100%" src="./assets/images/slider2.jpg" alt=""></li>
                        </a>
                        <a href="#">
                            <li>
                                <img width="100%" src="./assets/images/slider3.png" alt=""></li>
                            </a>
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
                                                        <li class="sales-item">
                                                            <a href="">
                                                                <img src="" alt="">
                                                                    <img src="./assets/images/sales1.png" alt=""></a>
                                                                </li>
                                                                <li class="sales-item">
                                                                    <a href="">
                                                                        <img src="" alt="">
                                                                            <img src="./assets/images/sales2.png" alt=""></a>
                                                                        </li>
                                                                        <li class="sales-item">
                                                                            <a href="">
                                                                                <img src="" alt="">
                                                                                    <img src="./assets/images/sales3.png" alt=""></a>
                                                                                </li>
                                                                                <li class="sales-item">
                                                                                    <a href="">
                                                                                        <img src="" alt="">
                                                                                            <img src="./assets/images/sales4.png" alt=""></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <!-- end sales -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- end sales -->
                                                                            <div class="selling-max">
                                                                                <div class="container">
                                                                                    <div class="selling-title">
                                                                                        <img
                                                                                            src="https://frontend.tikicdn.com/_desktop-next/static/img/giasoc.svg"
                                                                                            alt="">
                                                                                            <img
                                                                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/flash.gif"
                                                                                                alt="">
                                                                                                <img
                                                                                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/homnay.svg"
                                                                                                    alt=""></div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-3 pro-hov">
                                                                                                        <div class="product-top">
                                                                                                            <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                <div class="overlay">
                                                                                                                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                        <i class="fa fa-eye"></i>
                                                                                                                    </button>
                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                        <i class="fa fa-heart"></i>
                                                                                                                    </button>
                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <span class="percent deal">80%</span>
                                                                                                            <div class="product-bottom text-center">
                                                                                                                <i class="fas fa-star"></i>
                                                                                                                <i class="fas fa-star"></i>
                                                                                                                <i class="fas fa-star"></i>
                                                                                                                <i class="fas fa-star-half"></i>
                                                                                                                <i class="far fa-star"></i>
                                                                                                                <p class="title">
                                                                                                                    Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                <h5 class="price">200.000 đ
                                                                                                                    <span class="original deal">300.000 đ</span>
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-3 pro-hov">
                                                                                                            <div class="product-top">
                                                                                                                <img
                                                                                                                    src="https://salt.tikicdn.com/cache/280x280/ts/product/34/5c/52/85412535723b0e4b72638d79ca2f521f.jpg"
                                                                                                                    alt="">
                                                                                                                    <div class="overlay">
                                                                                                                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                            <i class="fa fa-eye"></i>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                            <i class="fa fa-heart"></i>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                            <i class="fa fa-shopping-cart"></i>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <span class="percent deal">80%</span>
                                                                                                                <div class="product-bottom text-center">
                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                    <i class="fas fa-star-half"></i>
                                                                                                                    <i class="far fa-star"></i>
                                                                                                                    <p class="title">
                                                                                                                        Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                    <h5 class="price">200.000 đ
                                                                                                                        <span class="original deal">300.000 đ</span>
                                                                                                                    </h5>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-3 pro-hov">
                                                                                                                <div class="product-top">
                                                                                                                    <img
                                                                                                                        src="https://salt.tikicdn.com/cache/280x280/ts/product/da/83/1b/6061de7e0a3dc94f5241d6fcb09c4bba.jpg"
                                                                                                                        alt="">
                                                                                                                        <div class="overlay">
                                                                                                                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                            </button>
                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                <i class="fa fa-heart"></i>
                                                                                                                            </button>
                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                <i class="fa fa-shopping-cart"></i>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <span class="percent deal">80%</span>
                                                                                                                    <div class="product-bottom text-center">
                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                        <i class="fas fa-star-half"></i>
                                                                                                                        <i class="far fa-star"></i>
                                                                                                                        <p class="title">
                                                                                                                            Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                        <h5 class="price">200.000 đ
                                                                                                                            <span class="original deal">300.000 đ</span>
                                                                                                                        </h5>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-3 pro-hov">
                                                                                                                    <div class="product-top">
                                                                                                                        <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                            <div class="overlay">
                                                                                                                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                    <i class="fa fa-eye"></i>
                                                                                                                                </button>
                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                    <i class="fa fa-heart"></i>
                                                                                                                                </button>
                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                                                                </button>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <span class="percent deal">80%</span>
                                                                                                                        <div class="product-bottom text-center">
                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                            <i class="fas fa-star-half"></i>
                                                                                                                            <i class="far fa-star"></i>
                                                                                                                            <p class="title">
                                                                                                                                Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                            <h5 class="price">200.000 đ
                                                                                                                                <span class="original deal">300.000 đ</span>
                                                                                                                            </h5>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-3 pro-hov">
                                                                                                                        <div class="product-top">
                                                                                                                            <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                <div class="overlay">
                                                                                                                                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                        <i class="fa fa-eye"></i>
                                                                                                                                    </button>
                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                        <i class="fa fa-heart"></i>
                                                                                                                                    </button>
                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <span class="percent deal">80%</span>
                                                                                                                            <div class="product-bottom text-center">
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                <i class="fas fa-star-half"></i>
                                                                                                                                <i class="far fa-star"></i>
                                                                                                                                <p class="title">
                                                                                                                                    Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                <h5 class="price">200.000 đ
                                                                                                                                    <span class="original deal">300.000 đ</span>
                                                                                                                                </h5>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-3 pro-hov">
                                                                                                                            <div class="product-top">
                                                                                                                                <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                    <div class="overlay">
                                                                                                                                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                            <i class="fa fa-eye"></i>
                                                                                                                                        </button>
                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                            <i class="fa fa-heart"></i>
                                                                                                                                        </button>
                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                            <i class="fa fa-shopping-cart"></i>
                                                                                                                                        </button>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <span class="percent deal">80%</span>
                                                                                                                                <div class="product-bottom text-center">
                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                    <i class="fas fa-star-half"></i>
                                                                                                                                    <i class="far fa-star"></i>
                                                                                                                                    <p class="title">
                                                                                                                                        Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                    <h5 class="price">200.000 đ
                                                                                                                                        <span class="original deal">300.000 đ</span>
                                                                                                                                    </h5>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-md-3 pro-hov">
                                                                                                                                <div class="product-top">
                                                                                                                                    <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                        <div class="overlay">
                                                                                                                                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                                            </button>
                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                <i class="fa fa-heart"></i>
                                                                                                                                            </button>
                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                <i class="fa fa-shopping-cart"></i>
                                                                                                                                            </button>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <span class="percent deal">80%</span>
                                                                                                                                    <div class="product-bottom text-center">
                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                        <i class="fas fa-star-half"></i>
                                                                                                                                        <i class="far fa-star"></i>
                                                                                                                                        <p class="title">
                                                                                                                                            Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                        <h5 class="price">200.000 đ
                                                                                                                                            <span class="original deal">300.000 đ</span>
                                                                                                                                        </h5>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-3 pro-hov">
                                                                                                                                    <div class="product-top">
                                                                                                                                        <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                            <div class="overlay">
                                                                                                                                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                    <i class="fa fa-eye"></i>
                                                                                                                                                </button>
                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                    <i class="fa fa-heart"></i>
                                                                                                                                                </button>
                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                                                                                </button>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <span class="percent deal">80%</span>
                                                                                                                                        <div class="product-bottom text-center">
                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                            <i class="fas fa-star-half"></i>
                                                                                                                                            <i class="far fa-star"></i>
                                                                                                                                            <p class="title">
                                                                                                                                                Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                            <h5 class="price">200.000 đ
                                                                                                                                                <span class="original deal">300.000 đ</span>
                                                                                                                                            </h5>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="btn-more text-center mt-3 mb-3">
                                                                                                                                    <a href="">Xem thêm</a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="top-selling">
                                                                                                                            <h2>Top Khuyến Mãi</h2>
                                                                                                                            <div class="custom-slider">
                                                                                                                                <div class="custom-box">
                                                                                                                                    <a href="#">
                                                                                                                                        <img src="./assets/images/topbanchay1.jpg" alt=""></a>
                                                                                                                                    </div>
                                                                                                                                    <div class="custom-box">
                                                                                                                                        <a href="#">
                                                                                                                                            <img src="./assets/images/topbanchay2.jpg" alt=""></a>
                                                                                                                                        </div>
                                                                                                                                        <div class="custom-box">
                                                                                                                                            <a href="#">
                                                                                                                                                <img src="./assets/images/topbanchay3.jpg" alt=""></a>
                                                                                                                                            </div>
                                                                                                                                            <div class="custom-box">
                                                                                                                                                <a href="#">
                                                                                                                                                    <img src="./assets/images/topbanchay4.png" alt=""></a>
                                                                                                                                                </div>
                                                                                                                                                <div class="custom-box">
                                                                                                                                                    <a href="#">
                                                                                                                                                        <img src="./assets/images/topbanchay5.jpg" alt=""></a>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="custom-box">
                                                                                                                                                        <a href="#">
                                                                                                                                                            <img src="./assets/images/topbanchay6.jpg" alt=""></a>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="custom-box">
                                                                                                                                                            <a href="#">
                                                                                                                                                                <img src="./assets/images/topbanchay7.jpg" alt=""></a>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="custom-box">
                                                                                                                                                                <a href="#">
                                                                                                                                                                    <img src="./assets/images/topbanchay8.jpg" alt=""></a>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="custom-box">
                                                                                                                                                                    <a href="#">
                                                                                                                                                                        <img src="./assets/images/topbanchay10.jpg" alt=""></a>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="custom-box">
                                                                                                                                                                        <a href="#">
                                                                                                                                                                            <img src="./assets/images/topbanchay11.jpg" alt=""></a>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="custom-box">
                                                                                                                                                                            <a href="#">
                                                                                                                                                                                <img src="./assets/images/topbanchay12.jpg" alt=""></a>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="custom-box">
                                                                                                                                                                                <a href="#">
                                                                                                                                                                                    <img src="./assets/images/topbanchay13.jpg" alt=""></a>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="custom-box">
                                                                                                                                                                                    <a href="#">
                                                                                                                                                                                        <img src="./assets/images/topbanchay14.jpg" alt=""></a>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="custom-box">
                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                            <img src="./assets/images/topbanchay15.jpg" alt=""></a>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="custom-box">
                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                <img src="./assets/images/topbanchay9.jpg" alt=""></a>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <!-- end top khuyến mãi -->
                                                                                                                                                                                        <h2>Ngành hàng quan tâm</h2>
                                                                                                                                                                                        <div id="gallery">
                                                                                                                                                                                            <div class="pro-hov">
                                                                                                                                                                                                <div class="product-top">
                                                                                                                                                                                                    <img
                                                                                                                                                                                                        src="https://salt.tikicdn.com/cache/280x280/media/catalog/product/m/3/m331blue_0.u2470.d20161215.t105840.843570.jpg"
                                                                                                                                                                                                        alt=""></div>

                                                                                                                                                                                                    <div class="product-bottom text-center">

                                                                                                                                                                                                        <p class="title text-center">
                                                                                                                                                                                                            Chuột văn phòng</p>

                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="pro-hov">
                                                                                                                                                                                                    <div class="product-top">
                                                                                                                                                                                                        <img
                                                                                                                                                                                                            src="https://salt.tikicdn.com/ts/category/66/15/4f/6282e8c6655cb87cb226e3b701bb9137.png"
                                                                                                                                                                                                            alt=""></div>

                                                                                                                                                                                                        <div class="product-bottom text-center">

                                                                                                                                                                                                            <p class="title text-center">
                                                                                                                                                                                                                Chuột văn phòng</p>

                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="pro-hov">
                                                                                                                                                                                                        <div class="product-top">
                                                                                                                                                                                                            <img
                                                                                                                                                                                                                src="https://salt.tikicdn.com/ts/category/93/27/e3/192b0ebe1d4658c51f9931bda62489b2.png"
                                                                                                                                                                                                                alt=""></div>

                                                                                                                                                                                                            <div class="product-bottom text-center">

                                                                                                                                                                                                                <p class="title text-center">
                                                                                                                                                                                                                    Chuột văn phòng</p>

                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="pro-hov">
                                                                                                                                                                                                            <div class="product-top">
                                                                                                                                                                                                                <img
                                                                                                                                                                                                                    src="https://salt.tikicdn.com/ts/category/85/13/02/d8e5cd75fd88862d0f5f647e054b2205.png"
                                                                                                                                                                                                                    alt=""></div>

                                                                                                                                                                                                                <div class="product-bottom text-center">

                                                                                                                                                                                                                    <p class="title text-center">
                                                                                                                                                                                                                        Chuột văn phòng</p>

                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="pro-hov">
                                                                                                                                                                                                                <div class="product-top">
                                                                                                                                                                                                                    <img
                                                                                                                                                                                                                        src="https://salt.tikicdn.com/ts/category/b3/2b/72/8e7b4b703653050ffc79efc8ee017bd0.png"
                                                                                                                                                                                                                        alt=""></div>

                                                                                                                                                                                                                    <div class="product-bottom text-center">

                                                                                                                                                                                                                        <p class="title text-center">
                                                                                                                                                                                                                            Chuột văn phòng</p>

                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div class="pro-hov">
                                                                                                                                                                                                                    <div class="product-top">
                                                                                                                                                                                                                        <img
                                                                                                                                                                                                                            src="https://salt.tikicdn.com/ts/category/48/96/3b/9403c9f9579883b9433decf44e3d4591.png"
                                                                                                                                                                                                                            alt=""></div>

                                                                                                                                                                                                                        <div class="product-bottom text-center">

                                                                                                                                                                                                                            <p class="title text-center">
                                                                                                                                                                                                                                Chuột văn phòng</p>

                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="pro-hov">
                                                                                                                                                                                                                        <div class="product-top">
                                                                                                                                                                                                                            <img
                                                                                                                                                                                                                                src="https://salt.tikicdn.com/ts/category/7b/54/d8/fdee971618ba2ef7ae7a313021677c46.png"
                                                                                                                                                                                                                                alt=""></div>

                                                                                                                                                                                                                            <div class="product-bottom text-center">

                                                                                                                                                                                                                                <p class="title text-center">
                                                                                                                                                                                                                                    Chuột văn phòng</p>

                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="pro-hov">
                                                                                                                                                                                                                            <div class="product-top">
                                                                                                                                                                                                                                <img
                                                                                                                                                                                                                                    src="https://salt.tikicdn.com/ts/category/7b/54/d8/fdee971618ba2ef7ae7a313021677c46.png"
                                                                                                                                                                                                                                    alt=""></div>

                                                                                                                                                                                                                                <div class="product-bottom text-center">

                                                                                                                                                                                                                                    <p class="title text-center">
                                                                                                                                                                                                                                        Chuột văn phòng</p>

                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <!-- end top bán chạy -->

                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="product">
                                                                                                                                                                                                                        <h2>Sản Phẩm Hot Trong Ngày</h2>
                                                                                                                                                                                                                        <div class="filter">
                                                                                                                                                                                                                            <span class="filter-label">Sắp Xếp theo</span>
                                                                                                                                                                                                                            <button class="filter-btn btn btn-primary">Phổ Biến</button>
                                                                                                                                                                                                                            <button class="filter-btn btn btn-primary">Mới Nhất</button>
                                                                                                                                                                                                                            <button class="filter-btn btn btn-primary">Bán Chạy</button>
                                                                                                                                                                                                                            <!-- -->
                                                                                                                                                                                                                            <div class="select-input btn btn-primary">
                                                                                                                                                                                                                                <span>Theo Giá</span>
                                                                                                                                                                                                                                <i class="fas fa-angle-down"></i>
                                                                                                                                                                                                                                <!-- -->
                                                                                                                                                                                                                                <ul class="select-input-list btn btn-primary">
                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                        <a href="">Giá: Thấp Đến Cao</a>
                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                        <a href="">Giá: Cao Tới Thấp</a>
                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                            <div class="filter-paginate">
                                                                                                                                                                                                                                <span class="paginate-num">
                                                                                                                                                                                                                                    <span class="paginate-current">1</span>/14
                                                                                                                                                                                                                                </span>
                                                                                                                                                                                                                                <div class="paginate-control">
                                                                                                                                                                                                                                    <a href="" class="filter-control-btn">
                                                                                                                                                                                                                                        <i class="fas fa-angle-left"></i>
                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                    <a href="" class="filter-control-btn">
                                                                                                                                                                                                                                        <i class="fas fa-angle-right"></i>
                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <!-- end filter -->
                                                                                                                                                                                                                        <!-- san pham -->
                                                                                                                                                                                                                        <div class="container">

                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                    <div class="product-top">
                                                                                                                                                                                                                                        <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                            <div class="overlay">
                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                    <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                    <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <span class="percent deal">80%</span>
                                                                                                                                                                                                                                        <div class="product-bottom text-center">
                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                            <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                            <i class="far fa-star"></i>
                                                                                                                                                                                                                                            <p class="title">
                                                                                                                                                                                                                                                Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                            <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                            </h5>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                        <div class="product-top">
                                                                                                                                                                                                                                            <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                <div class="overlay">
                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                        <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                        <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <span class="percent deal">80%</span>
                                                                                                                                                                                                                                            <div class="product-bottom text-center">
                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                <i class="far fa-star"></i>
                                                                                                                                                                                                                                                <p class="title">
                                                                                                                                                                                                                                                    Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                    <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                </h5>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                            <div class="product-top">
                                                                                                                                                                                                                                                <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                    <div class="overlay">
                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                            <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                            <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                            <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                <div class="product-bottom text-center">
                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                    <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                    <i class="far fa-star"></i>
                                                                                                                                                                                                                                                    <p class="title">
                                                                                                                                                                                                                                                        Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                    <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                        <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                    </h5>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                                <div class="product-top">
                                                                                                                                                                                                                                                    <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                        <div class="overlay">
                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                                <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                                <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                    <div class="product-bottom text-center">
                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                        <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                        <i class="far fa-star"></i>
                                                                                                                                                                                                                                                        <p class="title">
                                                                                                                                                                                                                                                            Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                        <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                            <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                        </h5>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                                    <div class="product-top">
                                                                                                                                                                                                                                                        <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                            <div class="overlay">
                                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                                    <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                                    <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                                <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                        <div class="product-bottom text-center">
                                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                            <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                            <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                            <i class="far fa-star"></i>
                                                                                                                                                                                                                                                            <p class="title">
                                                                                                                                                                                                                                                                Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                            <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                                <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                            </h5>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                                        <div class="product-top">
                                                                                                                                                                                                                                                            <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                                <div class="overlay">
                                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                                        <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                                        <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                    <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                                        <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                            <div class="product-bottom text-center">
                                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                                <i class="far fa-star"></i>
                                                                                                                                                                                                                                                                <p class="title">
                                                                                                                                                                                                                                                                    Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                                <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                                    <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                                </h5>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                        <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                                            <div class="product-top">
                                                                                                                                                                                                                                                                <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                                    <div class="overlay">
                                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                                            <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                                            <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                        <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                                            <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                                <div class="product-bottom text-center">
                                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                    <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                    <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                                    <i class="far fa-star"></i>
                                                                                                                                                                                                                                                                    <p class="title">
                                                                                                                                                                                                                                                                        Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                                    <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                                        <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                                    </h5>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                            <div class="col-md-3 pro-hov">
                                                                                                                                                                                                                                                                <div class="product-top">
                                                                                                                                                                                                                                                                    <img src="./assets/images/pro1.jpg" alt="">
                                                                                                                                                                                                                                                                        <div class="overlay">
                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                                                                                                                                                                                                                                                                <i class="fa fa-eye"></i>
                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to Wishlish">
                                                                                                                                                                                                                                                                                <i class="fa fa-heart"></i>
                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                                                                                                                                                                                                                                                                <i class="fa fa-shopping-cart"></i>
                                                                                                                                                                                                                                                                            </button>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <span class="percent deal">80%</span>
                                                                                                                                                                                                                                                                    <div class="product-bottom text-center">
                                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                        <i class="fas fa-star"></i>
                                                                                                                                                                                                                                                                        <i class="fas fa-star-half"></i>
                                                                                                                                                                                                                                                                        <i class="far fa-star"></i>
                                                                                                                                                                                                                                                                        <p class="title">
                                                                                                                                                                                                                                                                            Chuột không dây logitech MB3000 slient-plus</p>
                                                                                                                                                                                                                                                                        <h5 class="price">200.000 đ
                                                                                                                                                                                                                                                                            <span class="original deal">300.000 đ</span>
                                                                                                                                                                                                                                                                        </h5>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                <div class="btn-more text-center mt-3 mb-3">
                                                                                                                                                                                                                                                                    <a href="">Xem thêm</a>
                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <!-- end sản phẩm -->
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <!-- end container -->
                                                                                                                                                                                                                                            @endsection