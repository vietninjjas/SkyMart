<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('/assets/images/favico.ico')}}" rel='shortcut icon' type='image/ico' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/base.css')}}">
    <script src="{{asset('/assets/js/js.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.modal.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.modal.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/font/fontawesome-free-5.14.0-web/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <base href="{{ asset('') }}">
</head>

<body>
    <div class="main">
        <div id="form-modal">
            <div class="cont" id="ex1">
                <form method="POST" action="{{ route('login') }}" class="form sign-in">
                    @csrf
                    <h2>@lang('main.acc.login')</h2>
                    <label>
                        <span>@lang('main.acc.username')</span>
                        <input type="text" name="username">
                    </label>

                    <label>
                        <span>@lang('main.acc.password')</span>
                        <input type="password" name="password">
                    </label>
                    <button class="submit" type="submit">@lang('main.acc.login')</button>
                    <p class="forgot-pass">@lang('main.acc.quenpass')</p>

                    <div class="social-media">
                        <p>@lang('main.acc.socialogin')</p>
                        <ul>
                            <li><img src="{{asset('/assets/images/facebook.png')}}"></li>
                            <li><img src="{{asset('/assets/images/google.png')}}"></li>
                            <li><img src="{{asset('/assets/images/zalo.png')}}"></li>
                            <li><img src="{{asset('/assets/images/linkedin.png')}}"></li>
                        </ul>
                    </div>
                </form>

                <div class="sub-cont">
                    <div class="img">
                        <div class="img-text m-up">
                            <h2>@lang('main.acc.createAcc')</h2>
                            <p>@lang('main.acc.regDesc')</p>
                        </div>
                        <div class="img-text m-in">
                            <h2>@lang('main.acc.login')</h2>
                            <p></p>
                        </div>
                        <div class="img-btn">
                            <span class="m-up">@lang('main.acc.register')</span>
                            <span class="m-in">@lang('main.acc.login')</span>
                        </div>
                    </div>
                    <div class="form sign-up">
                        <h2>@lang('main.acc.createAcc')</h2>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <label>
                                <span>@lang('main.acc.username')</span>
                                <input name="username" type="text">
                            </label>
                            <label>
                                <span>@lang('main.acc.fullname')</span>
                                <input name="fullname" type="text">
                            </label>
                            <label>
                                <span>Email</span>
                                <input name="email" type="email">
                            </label>
                            <label>
                                <span>@lang('main.acc.password')</span>
                                <input name="password" type="password">
                            </label>
                            <label>
                                <span>@lang('main.acc.birthday')</span>
                                <input name="birthday" type="date">
                            </label>
                            <label>
                                <span>@lang('main.acc.gender')</span>
                                <select name="gender" id="">
                                    @foreach (config('app.gender') as $key => $value)
                                        <option value="{{ $key }}"> @lang('main.acc.'.$value) </option>
                                    @endforeach
                                </select>

                            </label>
                            <button type="submit" class="submit">@lang('main.acc.register')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <header class="header">
            <div class="top-menu">
                <div class="grid-top-menu">

                    <ul>
                        <li class="notifications-help">
                            @lang('main.welcome')
                        </li>
                        <li class="notifications-help">
                            @lang('main.connect')
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="" class="notifications-help">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                @lang('main.alert')
                            </a>
                        </li>
                        <li>
                            <a href="" class="notifications-help">
                                <i class="fa fa-question" aria-hidden="true"></i>
                                @lang('main.help')</a>
                        </li>
                        @if (Auth::check())
                            <li>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user"></i> 
                                        @lang('main.acc.hello') {{ Auth::user()->fullname }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-dark" href="{{ route('account.show', Auth::user()->user_id) }}"><i class="fas fa-user"></i> @lang('main.acc.acc_info')</a>
                                        @if (Auth::user()->role == 1)
                                            <a class="dropdown-item text-dark"
                                                href="{{ route('admin.index') }}"><i class="fas fa-user-shield"></i> @lang('main.acc.admin_page')</a>
                                        @endif
                                        <a class="dropdown-item text-dark"
                                    href="{{ route('account.changePass', Auth::user()->user_id) }}"> <i class="fas fa-exchange-alt"></i> @lang('main.acc.changed_password')</a>
                                        <form action="{{ route('logout') }}" method="post" style="margin-left: 40px">
                                            @csrf
                                            <button>
                                                <i class="fas fa-sign-out-alt"></i> 
                                                @lang('main.acc.logout')
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="#ex1" rel="modal:open"><i class="fa fa-user" aria-hidden="true"></i> @lang('main.acc.login')</a>

                            </li>
                        @endif

                        <li>
                            <a href="{{ route('user.change-language', ['vi']) }}">@lang('main.vietnam')</a>
                            |
                            <a href="{{ route('user.change-language', ['en']) }}">@lang('main.english')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end top-menu -->
            <div class="header-content">
                <div class="menu-content">
                    <div class="logo">
                        <a href=""><img src="./assets/images/logo_nne.png" alt=""></a>
                    </div>
                    <div class="seach">
                        <form action="{{url('search')}}" method="get">
                            @csrf
                            <input type="text" placeholder="{{trans('main.search')}}" name="key">
                            <div class="option">
                                <button type="submit">
                                    <i class="fas fa-search button-icon"></i>
                                    @lang('main.search')
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="category">
                        <i class="cart-icon fas fa-shopping-cart"></i>
                        <span class="cart-text">@lang('main.cart')
                            <span class="cart-num">0</span></span>
                    </div>
                </div>
            </div>
            <div class="bot-header">
                <div class="container">

                    <div class="bot-danhmuc">
                        <ul>
                            <li class="head-danhmuc">
                                <i class="fa fa-bars"></i>
                                <a href=""></a>
                                @lang('main.category')
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt giao-toi"></i>
                                <span style="text-align: justify;">@lang('main.ship_over')</span>
                            </li>
                            <li>
                                <i class="fas fa-shipping-fast giao-hang"></i>
                                @lang('main.ship_free')
                            </li>
                            <li>
                                <i class="fas fa-language change-language"></i>
                                @lang('main.i18n')
                            </li>
                        </ul>
                        <!-- <div class="col-lg-3 col-md-6 "> <h3 class="head-danhmuc"><i class="fa
                            fa-bars"></i> Danh mục sản phẩm</h3> </div> <div class="col-lg-3 giao-toi "> <i
                            class="fas fa-map-marker-alt "></i> <span style="text-align: justify;">@lang('main.ship_over')</span> </div> <div class="col-lg-3 giao-hang "> <i class="fas
                            fa-shipping-fast"></i> @lang('main.ship_free') </div> <div class="col-lg-3
                            change-language "> <i class="fas fa-language"></i> @lang('main.i18n') </div> -->
                    </div>
                </div>
            </div>
        </header>

        <!-- end header -->
        @yield('content')
        <footer>
            <div class="footer__email">
                <div class="container footer-leter">
                    <div class="row">
                        <div class="col-lg-2 NewsLetter-icon">
                            <img src="./assets/images/newsletter.png" alt="">
                        </div>
                        <div class="NewsLetter-description col-lg-4">
                            <h3>@lang('main.footer.reg_get_news')</h3>
                            <h5>@lang('main.footer.reg_get_news2')</h5>
                        </div>
                        <div class="NewsLetter-form col-lg-5">
                            <div>
                                <input type="email" placeholder="Địa chỉ email của bạn" value="">
                                <button>@lang('main.acc.register')</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="footer__infor">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <h4>@lang('main.footer.sup_customer')</h4>
                            <p class="hotline">
                                @lang('main.footer.hotline_title');
                                <span>1900-6035</span>
                                <span class="small-text">@lang('main.footer.hotline')</span>
                            </p>
                            <a href="" class="small-text">@lang('main.footer.question')</a>
                            <a href="" class="small-text">@lang('main.footer.request_suport')</a>
                            <a href="" class="small-text">@lang('main.footer.order_guide')</a>
                            <a href="" class="small-text">@lang('main.footer.transportation')</a>
                            <a href="" class="small-text">@lang('main.footer.borrow_return')</a>
                            <a href="" class="small-text">@lang('main.footer.tra_gop')</a>
                            <a href="" class="small-text">@lang('main.footer.input_product')</a>
                            <a href="" class="small-text">@lang('main.footer.sub_customer') hotro@SkyMart.vn</a>
                            <a href="" class="small-text">@lang('main.footer.secureti_error') SkyMart.vn</a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-6">
                            <h4>Về Sky mart</h4>
                            <p></p>
                            <a href="" class="small-text">@lang('main.footer.about') SkyMart</a>
                            <a href="" class="small-text">@lang('main.footer.Recruitment')</a>
                            <a href="" class="small-text">@lang('main.footer.payment_privacy_policy')</a>
                            <a href="" class="small-text">@lang('main.footer.privacy_policy_of_personal_information')</a>
                            <a href="" class="small-text">@lang('main.footer.complaint_settlement_policy')</a>
                            <a href="" class="small-text">@lang('main.footer.terms_of_use')</a>
                            <a href="" class="small-text">@lang('main.footer.about') SkyMart Xu</a>
                            <a href="" class="small-text">@lang('main.footer.sales_business')</a>
                            <a href="" class="small-text">@lang('main.footer.secureti_error') securiti@SkyMart.vn</a>
                        </div>
                        <div class="col-lg-2 col-md-6 col-xs-6">
                            <h4>@lang('main.footer.cooperation_and_association')</h4>
                            <p></p>
                            <a href="" class="small-text">@lang('main.footer.GDTMDT')</a>
                            <a href="" class="small-text">@lang('main.footer.selling_with_skymart')</a>
                        </div>
                        <div class="col-lg-2 col-md-6 col-xs-6 icon-tt">
                            <h4>@lang('main.footer.payment')</h4>
                            <p>
                                <img class="icon "
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg"
                                    style="width:44px" alt="">
                                <img class="icon"
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg"
                                    style="width:44px" alt="">
                                <img class="icon"
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg"
                                    style="width:44px" alt="">
                                <img class="icon"
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg"
                                    style="width:44px" alt="">
                                <img class="icon"
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg"
                                    style="width:44px" alt="">
                                <img class="icon"
                                    src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg"
                                    style="width:44px" alt="">
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-6 col-xs-6">
                            <h4>@lang('main.footer.Connect_with_SkyMart')</h4>
                            <p>
                                <a href="" class="icon">
                                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/fb.svg"
                                        width="32" alt="">
                                </a>
                                <a href="" class="icon">
                                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/youtube.svg"
                                        width="32" alt="">
                                </a>
                                <a href="" class="icon">
                                    <i class="icon tikicon icon-footer-zalo"></i>
                                </a>
                            </p>
                            <h4 class="store-title">@lang('main.footer.mobile_app')</h4>
                            <p>
                                <a href="" class="icon">
                                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/appstore.png"
                                        alt="">
                                </a>
                                <br>
                                <a href="" class="icon">
                                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/playstore.png"
                                        alt="">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="container">
                    <div>
                        <h5>© 2020 - @lang('main.footer.copy_right1')</h5>
                        <p>@lang('main.footer.copy_right2')</p>
                    </div>
                </div>

            </div>
        </footer>
        <!-- end footer -->
        <script type="text/javascript" src="{{asset('/assets/js/script.js')}}"></script>
</body>

</html>
<script>
    $('#gallery').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 8000,
        pauseOnHover: false,
        cssEase: 'linear'
    });

</script>
<!-- scrip của khuyến mãi -->
<script>
    $('.custom-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }, {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        }]
    });

</script>
<!-- scrip của bán chạy -->
<!-- script swiper slider -->
