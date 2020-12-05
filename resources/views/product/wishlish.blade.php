@extends('layouts.app')
@section('title', trans('main.cart.cart'))
@section('content')

<div class="wishlist-page">
  <div class="container">
    <div class="wishlist-main">
      <div class="wl-header">
        <img src="./assets/images/logo_nne.png" alt="">
        <h2><i class="far fa-heart"></i> wishlist</h2>
      </div>
      <div class="wl-content">
        @if (Auth::user()->wishlist->count() )
        @foreach($wish->wishlist as $pro)
        <div class="row">
          <div class="col-1 wl-x">
            <form action="{{route('deleteWish', $pro -> wish_id)}}" method="post">
              @csrf
              <button type="submit">XÓA</button>
            </form>
          </div>
          <div class="col-2 wl-img">
            <img src="images/products/{{$pro->product -> pro_image}}" alt="">
          </div>
          <div class="col-5 wl-name">
            <p>{{$pro->pro_id}}</p>
          </div>
          <div class="col-1 wl-name">
            <p style="margin-right: 30px;">{{$pro->product -> pro_new_price}}</p>
          </div>
          <div class="col-2 wl-btn">
            <button class="btn-wl"><a href="{{route('product.show',$pro -> pro_id)}}"> Xem sảm phẩm</a></button>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>

@endsection