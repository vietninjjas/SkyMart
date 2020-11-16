@extends('layouts.app')
@section('content')

<div class="information-page">
    <div class="container" style="background-color: white;">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="infor">
              <div class="infor-title">
                <img src="./assets/images/logo_nne.png" alt="">
                <h3 class="text-align-center">Cập nhật tài khoản</h3>
              </div>
              <div class="infor-main">
                <form action="">
                  <div class="row">
                    <div class="col-5">
                      <label for="">Họ và tên:</label>
                    </div>
                    <div class="col-7">
                      <input type="text" placeholder="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Số điện thoại:</label>
                    </div>
                    <div class="col-7">
                      <input type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Email:</label>
                    </div>
                    <div class="col-7">
                      <input type="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Địa chỉ:</label>
                    </div>
                    <div class="col-7">
                      <input type="password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Ngày sinh:</label>
                    </div>
                    <div class="col-7">
                      <input type="date">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Giới tính:</label>
                    </div>
                    <div class="col-7">
                      <select name="" id="">
                        <option value="">...</option>
                        <option value="">Nam</option>
                        <option value="">Nữ</option>
                       
                      </select>
                    </div>
                  </div>
                  
                 <button type="submit">Thay đổi</button>
                </form>
              </div>
            </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
  

  </div>

@endsection