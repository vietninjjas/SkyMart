@extends('layouts.admin')
@section('title', 'admin.title')
@section('content')

<div class="order-history">
    <div class="container">
      <div class="order-page">
        <div class="or-top">
          <div class="or-title">
            <div class="row">
              <div class="col-7">
                <h3><i class="fas fa-cart-arrow-down"></i> Đơn hàng của bạn</h3>
              </div>
              <div class="col-5">
                <p>Đã đặt:14:00 - <span>Ngày: 02/12/2020</span></p>
              </div>
            </div>
            
          </div>
          <div class="or-body">
            <div class="row">
              <div class="col-2">
                <div class="or-img">
                  <img src="./assets/images/pro1.jpg" alt="">
                </div>
              </div>
              <div class="col-6">
                <div class="or-name mt-5">
                  <a  href="">Dây cáp sạc nhanh balaalalal</a>
                  <span>x1</span>
                </div>
              </div>
              <div class="col-2">
                <div class="or-price">
                  200.000đ
                </div>
              </div>
              <div class="col-2">
                <div class="trang-thai">Đã giao</div>
              </div>
            </div>
          </div>
        
        </div>
        <div class="or-mid">
          <div class="row">
            <div class="col-7">
                <div class="or-logo">
                  <img src="./assets/images/logo_nne.png" alt="">
                  <p style="display: inline-block;">Sản phẩm được phân phổi bởi <span>Sky Mart</span></p>
                </div>
            </div>
            <div class="col-5">
              <div class="or-total"><p><i class="fas fa-coins"></i> Tổng tiền: <span>200.000đ</span></p> </div>
            </div>
          </div>
          
        </div>
        <div class="or-bot">
          <div class="or-btn">
            <button><a href="">Mua lần nữa</a></button>
            <button><a href="">Xem chi tiết đơn</a></button>
          </div>
        </div>
        
      </div>
        
    </div>
  </div>

@endsection