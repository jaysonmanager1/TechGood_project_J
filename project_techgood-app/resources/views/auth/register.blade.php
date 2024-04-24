@extends('dashboard')
<link rel="stylesheet" href="{{ asset('bootstrap/public-bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-end/css/register-style.css') }}">
<style>

</style>
@section('content_register')
    <div class="breadcrumb">
        <p>Đăng ký</p>
    </div>
    <h1>Tạo tài khoản</h1>
    <section class="view-register">
        <div class="card-register">
            <form action="#" class="form-register">
                <div class="input-data">
                    <div class="div box-class-gender">
                        <div class="box-gender">
                            <label for="#">Giới tính</label>
                            <div class="male-gender">
                                <label for="male">Nam</label>
                                <input type="radio" id="male" name="gender">
                            </div>
                            <div class="female-gender">
                                <label for="female">Nữ</label>
                                <input type="radio" id="female" name="gender">
                            </div>
                        </div>
                    </div>
                    <div class="div-firt box-class">
                        <label for="firt-name">Tên đầu</label>
                        <input placeholder="Tên đầu" class="input-class" type="text" id="firt-name" name="firt-name">
                    </div>
                    <div class="div-last box-class">
                        <label for="last-name">Tên cuối</label>
                        <input placeholder="Tên cuối" class="input-class" type="text" id="last-name" name="last-name">
                    </div>
                    <div class="div-email box-class">
                        <label for="email">Email</label>
                        <input placeholder="Email" class="input-class" type="text" id="email" name="email">
                    </div>
                    <div class="div-password box-class">
                        <label for="password">Mật khẩu</label>
                        <input placeholder="Mật khẩu" class="input-class" type="password" id="password" name="password">
                    </div>
                    <div class="div-birtday box-class">
                        <label for="birtday">Sinh nhật</label>
                        <input class="input-class" type="date" id="birtday" name="birtday">
                    </div>
                    <div class="div-photo box-class">
                        <label for="photo">Ảnh đại diện</label>
                        <input class="input-class" type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="check-link">
                    <button type="submit" class="btn-register">Đăng ký</button>
                </div>
            </form>
        </div>
    </section>
@endsection
