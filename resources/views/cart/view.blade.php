@extends('layouts.app')
@section('title', trans('main.cart.cart'))
@section('content')
    <div class="small-container cart-page">
        <div class="container">
            <table>
                <tr>
                    <th>@lang('main.cart.pro_desc')</th>
                    <th>@lang('main.cart.quantity')</th>
                    <th>@lang('main.cart.total_item')</th>
                </tr>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="images/products/{{ $item->options->image }}" alt="">
                                <div>
                                    <p>{{ $item->name }}</p>
                                    <small>@lang('main.cart.price'): {{ number_format($item->price) }}đ</small>
                                    <br>
                                    <a href="{{ route('deleteCart', $item->rowId) }}">@lang('admin.action.delete')</a>
                                </div>
                            </div>

                        </td>
                        <td>
                            <form action="{{ route('updateCart', $item->rowId) }}" method="post">
                                @csrf
                                <input name="update_qty" type="number" value="{{ $item->qty }}" min="1">
                                <button type="submit" class="btn">@lang('admin.action.edit')</button>
                            </form>
                        </td>
                        <td>{{ $item->price * $item->qty }}đ</td>
                    </tr>
                @endforeach
            </table>


            <div class="total-price">
                <table>
                    <tr>
                        <td>@lang('main.cart.total_price')</td>
                        <td>{{ Cart::subTotal() }}đ</td>
                    </tr>
                </table>
                <div class="btn-more text-center mt-3 mb-3">
                    <a href="{{ route('order.create') }}">@lang('main.cart.order')</a>
                </div>
            </div>
        </div>


    </div>
@endsection
