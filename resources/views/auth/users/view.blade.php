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
                            <h3 class="text-align-center">Thông tin tài khoản</h3>
                        </div>
                        <div class="infor-main">
                            <ul>
                                <li>
                                    <img class="img-thumbnail" src="images/users/{{ $user->avatar }}" alt="">
                                </li>
                                <li>Họ và tên: <span class="inf">{{ $user->name }}</span></li>
                                <li>Ngày sinh: <span class="inf">{{ $user->birthday }}</span></li>
                                <li>Số điện thoại: <span class="inf">{{ $user->phone }}</span></li>
                                <li>Email: <span class="inf">{{ $user->email }}</span></li>
                                <li>Giới tính: <span class="inf">@lang('admin.user.'. config('app.gender.'.
                                        $user->gender))</span></li>
                            </ul>
                            <div class="change-info-btn">
                                <a href="{{ route('account.edit', $user->user_id) }}">Cập nhật tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>

@endsection
