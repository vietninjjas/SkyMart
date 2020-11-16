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
                <h3 class="text-align-center">Đổi mật khẩu</h3>
              </div>
              <div class="infor-main">
                <form action="">
                  <div class="row">
                    <div class="col-5">
                      <label for="">Nhập mật khẩu cũ:</label>
                    </div>
                    <div class="col-7">
                      <input type="password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-5">
                      <label for="">Nhập mật khẩu mới:</label>
                    </div>
                    <div class="col-7">
                      <input type="password">
                    </div>
                  </div>
                 <button type="submit">Đổi mật khẩu</button>
                </form>
              </div>
            </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
  

  </div>


@endsection