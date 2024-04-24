@extends('dashboard')

<link rel="stylesheet" href="{{ asset('front-end/css/login-style.css') }}">
@section('content_login')
    <section class="login-view">
        <div class="breadcrumb">
            <p>Đăng nhập</p>
        </div>
        <div class="login-container">
            <div class="form-login">
                <form action="#">
                    <div class="user">
                        <label for="" class="lb-text">Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="pass">
                        <label for="" class="lb-text">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <a href="#" class="none-pass">Quên mật khẩu?</a>
                    <button type="submit" class="btn-login">Đăng Nhập</button>
                    <a href="{{ route('register') }}">Không có tài khoản/ Tạo một tài khoản</a>
                </form>
            </div>
        </div>
    </section>
@endsection
