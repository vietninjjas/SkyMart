@extends('layouts.app')
@section('title', $product->pro_name)
@section('content')
    <div class="container">
        <div class="container-product p-5 mt-5">
            <div class="container-row">
                <div class="product-image">
                    <img class="demo" src="images/products/{{ $product->pro_image }}" alt="">
                    <ul id="haha">
                        @foreach ($product->proChillImages as $chill)
                            <li>
                                <img src="images/chillImageProducts/{{ $chill->chill_image }}" alt="">
                            </li>
                        @endforeach
                    </ul>
                    <div class="img-ads">
                        <img src="https://c0.anthill.vn/images/2020/11/19/6140b5c3f6078fc094ec22e606f64cb9.jpg" alt="">
                    </div>
                </div>
                <!-- end img -->
                <div class="brand">
                    <ul class="top-brand">
                        <li>@lang('main.categories') <a href="">{{ $product->category->cate_name }}</a></li>
                    </ul>
                    <div class="brand-header">
                        <ul>
                            <li><img src="./assets/images/logo_nne.png" alt=""></li>
                            <li>
                                {{ $product->pro_name }}
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                @lang('main.product.number_review', ['sodanhgia' => $product->reviews->count()])
                            </li>

                        </ul>
                    </div>
                    <div class="brand-content">
                        <div class="left">
                            <div class="price-and-icon">
                                <div class="flash-sale-price">
                                    <span>{{ $product->pro_new_price }} ₫</span>
                                    <span>{{ FLOOR(100 - ($product->pro_new_price / $product->pro_old_price) * 100) }}%</span>
                                    <span>{{ $product->pro_old_price }}</span>
                                </div>
                            </div>
                            <div class="inner">
                                @lang('main.product.inner')
                            </div>
                            <form action="{{ route('addCart') }}" method="post">
                                @csrf
                                <div class="QualityInput__Wrapper">
                                    <p>@lang('main.cart.quantity')</p>
                                    <div class="group-input">
                                        <button type="button" class="disable">
                                            <img
                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg">
                                        </button>
                                        <input type="number" value="1" name="quantity" class="input">
                                        <button type="button">
                                            <img
                                                src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg">
                                        </button>
                                    </div>
                                    <div class="yellow"><span>@lang('main.product.rest', ['quantity' =>
                                            $product->quantity])</span></div>
                                    <input type="hidden" name="pro_id" value="{{ $product->pro_id }}">
                                    <div class="group-button">
                                        @if (Auth::check())
                                            <input type="hidden" name="pro_id" value="{{ $product->pro_id }}">
                                            <button type="submit"
                                                class="btn btn-add-to-cart">@lang('main.cart.add')</button>
                                        @else
                                            <button type="button" onclick="alert(' @lang('main.acc.must_login') ')"
                                                class="btn btn-add-to-cart">@lang('main.cart.add')</button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <div class="coupon">
                                @lang('main.product.coupon')
                                <div class="images">
                                    @foreach ($productOrderSame as $same)
                                        <a href="{{ route('product.show', $same->pro_id) }}">
                                            <img src="images/products/{{ $same->pro_image }}" alt="">
                                        </a>
                                        <p>+</p>
                                    @endforeach
                                </div>
                                <div class="btn-more text-center mt-3 mb-3">
                                    <a href="">@lang('main.see_more')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end brand -->
            </div>
        </div>
    </div>

    <!-- end brand -->
    <div class="container">
        <h2>@lang('main.product.product_same')</h2>
        <div class="container-product">

            <div class="container-row">
                <div class="custom-slider">
                    @foreach ($products as $pro)
                        @if ($pro->cate_id == $product->cate_id && $pro->pro_id != $product->pro_id)
                            <div class="custom-box">
                                <a href="{{ route('product.show', $pro->pro_id) }}">
                                    <img src="images/products/{{ $pro->pro_image }}" alt="">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <h2>MÔ TẢ SẢN PHẨM</h2>
                <div class="container-product" >
                    @php
                        Echo($product->pro_desc);
                    @endphp                   
                </div>
                <h2>@lang('main.product.cus_review')</h2>
                <div class="container-product">
                    <form action="{{ route('review.store') }}" method="post">
                        @csrf
                        <div class="review-rating__inner">
                            <div class="review-rating__summary">
                                <div>
                                    <h3 class="mt-5">@lang('main.product.review')</h3>
                                </div>
                                <div class="review-rating__point">
                                    <span
                                        class="point_span">{{ round($product->reviews->avg('rate'), 1, PHP_ROUND_HALF_UP) }}</span>
                                    <img src="assets/images/star.png" alt="">
                                </div>
                                <div class="review-rating__total">{{ $product->reviews->count() }}
                                    @lang('main.product.review')</div>
                            </div>
                            <!-- số đánh giá -->
                            <div class="review-rating__detail">
                                <div class="review-rating__level mt-5">
                                    <div class="stars">
                                        <input value="5" class="star star-5" id="star-5" type="radio" name="rate" />
                                        <label class="star star-5" for="star-5"></label>
                                        <input value="4" class="star star-4" id="star-4" type="radio" name="rate" />
                                        <label class="star star-4" for="star-4"></label>
                                        <input value="3" class="star star-3" id="star-3" type="radio" name="rate" />
                                        <label class="star star-3" for="star-3"></label>
                                        <input value="2" class="star star-2" id="star-2" type="radio" name="rate" />
                                        <label class="star star-2" for="star-2"></label>
                                        <input value="1" class="star star-1" id="star-1" type="radio" name="rate" />
                                        <label class="star star-1" for="star-1"></label>
                                    </div>
                                </div>
                            </div>
                            <!-- chi tiết số đánh giá -->
                        </div>
                        <!-- đây là phần số liệu đánh giá -->
                        @foreach ($product->reviews as $rev)
                            <div class="review-comment__avatar">
                                <ul>
                                    <li class="ml-4"><img src="images/users/{{ $rev->user->avatar }}" alt=""></li>
                                    {{ $rev->user->fullname }}
                                    <li></li>
                                    @foreach ($rev->user->orders as $key)
                                        @if ($key->user_id != null)
                                            <li><i class="fas fa-comments"></i> @lang('main.product.order_check')</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class="review-comment-content ml-4">
                                    {{ $rev->comment }}
                                </div>
                        @endforeach
                        <div class="form-cmt">
                            <input type="text" name="comment" placeholder="{{ trans('main.product.cmt_placeholder') }}">
                            <input type="hidden" value="{{ $product->pro_id }}" name="pro_id">
                            <button type="submit">@lang('main.product.send_review')</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-3">
            <img class="mt-5" src="https://c0.anthill.vn/images/2020/11/16/46524b889f7d5522e3cd8552edf1351e.jpg" alt="">
        </div>
    </div>




    </div>
@endsection
