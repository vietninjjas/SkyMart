@extends('layouts.admin')
@section('content')

<div class="wishlist-page">
    <div class="container">
      <div class="wishlist-main">
        <div class="wl-header">
          <img src="./assets/images/logo_nne.png" alt="">
          <h2><i class="far fa-heart"></i> wishlist</h2>
        </div>
        <div class="wl-content">
          <div class="row">
            <div class="col-1 wl-x"><a href=""><i class="far fa-minus-square"></i></a></div>
            <div class="col-2 wl-img">
              <img src="./assets/images/pro1.jpg" alt="">
            </div>
            <div class="col-5 wl-name">
              <p>Chuột Logitech - Hàng chính hãng</p>
            </div>
            <div class="col-1 wl-name"><p style="margin-right: 30px;">250.000đ</p> </div>
            <div class="col-2 wl-btn">
              <button class="btn-wl"><a href=""> Xem sảm phẩm</a></button>
            </div>
          </div>
        </div>
        <div class="wl-content">
          <div class="row">
            <div class="col-1 wl-x"><a href=""><i class="far fa-minus-square"></i></a></div>
            <div class="col-2 wl-img">
              <img src="./assets/images/pro1.jpg" alt="">
            </div>
            <div class="col-5 wl-name">
              <p>Chuột Logitech - Hàng chính hãng</p>
            </div>
            <div class="col-1 wl-name"><p style="margin-right: 30px;">250.000đ</p> </div>
            <div class="col-2 wl-btn">
              <button class="btn-wl"><a href=""> Xem sảm phẩm</a></button>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>

@endsection