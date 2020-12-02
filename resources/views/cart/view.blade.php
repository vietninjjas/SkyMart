@extends('layouts.app')
@section('title', trans('main.cart.cart'))
@section('content')

    <div class="container">
        <div class="sp-cart mt-5">
            <div class="row">
                <div class="col-9">
                    <div class="cart-right">
                        <div class="cart-title">@lang('main.cart.cart')</div>
                        <div class="cart-content">
                            @foreach (Cart::content() as $item)
                                <div class="cart-main">
                                    <div class="row ">
                                        <div class="col-2">
                                            <div class="cart-p-img">
                                                <img src="images/products/{{ $item->options->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="cart-p-name">
                                                <a href="">{{ $item->name }}</a><br>
                                            </div>

                                            <div>
                                                <a href="{{ route('deleteCart', $item->rowId) }}" class="text-danger">@lang('admin.action.delete')</a>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="cart-p-price">
                                                <p>{{ number_format($item->price) }}đ</p>

                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="cart-qty">
                                                <form action="{{ route('updateCart', $item->rowId) }}" method="post">
                                                    @csrf
                                                    <input name="update_qty" type="number" class="qty-input" value="{{ $item->qty }}" min="1">
                                                    <button type="submit" class="btn">@lang('admin.action.edit')</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="cart-total">

                        <div class="prices">
                            <div class="cart-title">@lang('main.cart.total_price')</div>
                            <p class="prices__total text-center justify-content-center">
                                <span class="prices__value prices__value--final">{{ Cart::subTotal() }} đ
                                    <i style="margin:0 auto">(@lang('main.cart.vated'))</i>
                                </span>
                            </p>
                            <div class="cart-title">@lang('main.ship.ship_fee')</div>
                            <p class="prices__total text-center justify-content-center">
                                <span class="">
                                    <i style="margin:0 auto">@lang('main.cart.shipToOrder')</i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="cart__submit"><a href="{{ route('order.create') }}">@lang('main.cart.order')</a></button>
        </div>

    </div>
@endsection
