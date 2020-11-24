@extends('layouts.app')
@section('title', trans('main.home'))
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="   text-center p-0 mt-3 mb-2">
                <div class="card-c px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="check-logo">
                        <img src="./assets/images/logo_nne.png" alt="">
                        <p class="text-logo">@lang('main.order.sologan')</p>
                    </div>
                    <form action="{{ route('order.store') }}" id="msform" method="POST">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>@lang('main.order.title_info')</strong></li>
                            <li id="personal"><strong>@lang('main.order.title_method')</strong></li>
                            <li id="payment"><strong>@lang('main.order.title_viewcart')</strong></li>
                            <li id="confirm"><strong>@lang('main.order.title_complete')</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <fieldset>
                            <div class="form-card">

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="fieldlabels col-3">@lang('main.order.name') : </label> <input name="order_name"
                                                type="text" class="col-8" placeholder="{{ trans('main.order.name') }}" />

                                            <label class="fieldlabels col-3">@lang('main.order.phone'): </label> 
                                            <input type="text" name="order_phone" class="col-8" placeholder="{{ trans('main.order.phone') }}" />

                                            <label class="fieldlabels col-3">@lang('main.order.city'): </label> 
                                            <input type="text" name="order_city" class="col-8" placeholder="{{ trans('main.order.city') }}" />

                                            <label class="fieldlabels col-3">@lang('main.order.district'): </label>
                                            <input type="text" name="order_district" class="col-8" placeholder="{{ trans('main.order.district') }}">

                                            <label class="fieldlabels col-3">@lang('main.order.ward'): </label>
                                            <input type="text" name="order_ward" class="col-8" placeholder="{{ trans('main.order.ward') }}" />

                                            <label class="fieldlabels col-3">@lang('main.order.address'): </label> 
                                            <input type="text" name="order_address" class="col-8" placeholder="{{ trans('main.order.address') }}" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div> <input type="button" name="next" class="next action-button" value="{{ trans('admin.action.next') }}" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="style_shiping">
                                            <h3>1. @lang('main.ship.select_ship')</h3>
                                            <div class="shipping-method">
                                                <div class="shipping-method2">
                                                    <label class="radio-check">
                                                        <p style="font-weight:bold">@lang('main.ship.ship1') </p>
                                                        <input type="radio" checked="checked" value="1" name="ship_method">
                                                        <span class="checkmark"></span>
                                                        <div style="font-size: 12px; color: rgb(77, 75, 74);">
                                                            <p>@lang('main.ship.ship_desc1')</p>
                                                            <p>@lang('main.ship.ship_fee'): 15.000đ</p>
                                                        </div>
                                                    </label>
                                                    <label class="radio-check">
                                                        <p style="font-weight:bold">@lang('main.ship.ship2')</p>
                                                        <input type="radio" value="2" name="ship_method">
                                                        <span class="checkmark"></span>
                                                        <div style="font-size: 12px; color: rgb(77, 75, 74);">
                                                            <p>@lang('main.ship.ship_desc2')</p>
                                                            <p>@lang('main.ship.ship_fee'): 30.000đ</p>
                                                        </div>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="style_shiping">
                                            <h3>2. @lang('main.payment.select_pay')</h3>
                                            <div class="shipping-method">
                                                <div class="shipping-method2">
                                                    <label class="radio-check">
                                                        <p style="font-weight:bold"><img class="method-icon"
                                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-cod.svg"
                                                                alt=""> @lang('main.payment.monney') </p>
                                                        <input type="radio" checked="checked" name="pay_method" value="1">
                                                        <span class="checkmark"></span>

                                                    </label>
                                                    <label class="radio-check">
                                                        <p style="font-weight:bold"><img class="method-icon"
                                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-credit.svg"
                                                                alt=""> @lang('main.payment.paypal')</p>
                                                        </p>
                                                        <input type="radio" name="pay_method" value="2">
                                                        <span class="checkmark"></span>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div><input type="button" name="previous" class="previous action-button-previous"
                                value="{{ trans('admin.action.return') }}" /> <input type="button" name="next" class="next action-button"
                                value="{{ trans('admin.action.next') }}" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="small-container  cart-page2 ">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <table style="text-align:center">
                                                        <tr>
                                                            <th>@lang('admin.products.pro_name')</th>
                                                            <th>@lang('admin.products.pro_image')</th>
                                                            <th>@lang('admin.products.quantity')</th>
                                                            <th>@lang('main.cart.price')</th>
                                                        </tr>
                                                        @foreach(Cart::content() as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>
                                                                <div class="cart-info">
                                                                    <img src="images/products/{{ $item->options->image }}" alt="">
                                                                </div>
                                                            </td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>{{ $item->price * $item->qty }}đ</td>
                                                            <input type="hidden" name="total_price" value="{{ $item->price * $item->qty }}">
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                    <div class="total-price2">
                                                        <table>
                                                            <tr>
                                                                <td>@lang('main.cart.total_price')</td>
                                                                <td>{{ Cart::subTotal() }}đ</td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div> <input type="button" name="previous" class="previous action-button-previous" value="{{ trans('admin.action.return') }}" />
                            <input type="submit" name="next" class="next action-button" value="{{ trans('main.cart.order') }}" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <br><br>
                                <h2 class="purple-text text-center"><strong>Cám ơn bạn đã đặt hàng tại Skymart !</strong>
                                </h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img
                                            src="https://icon-library.com/images/complete-icon-png/complete-icon-png-6.jpg"
                                            class="fit-image"> </div>
                                </div> <br>

                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h4 class=" text-center">@lang('main.order.see_your_order') <a href=""
                                                style="color: rgb(243, 54, 54);">@lang('admin.action.here')</a></h4>
                                        <h4 class="purple-text text-center"><a href=""><i
                                                    class="fas fa-cart-arrow-down"></i> Tiếp tục mua sắm</a></h4>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });

    </script>

    <!-- scrip của bán chạy -->
    <!-- script swiper slider -->

@endsection
