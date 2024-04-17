<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./font-awesome/fontawesome-free-6.5.2-web/css/all.min.css') }}">
</head>
<style>

</style>

<body>
    <nav class="header-nav">
        <div class="container">
            <div class="left-nav">
                <ul>
                    <li>Contact</li>
                    <li>About Us</li>
                    <li> FAQs</li>
                </ul>
            </div>
            <div class="right-nav">
                <label for="drop-language">ENGLISH <span
                        style="margin-left:10px ; font-weight: 800; font-size: 15px;">&#8744;</span></label>
                <input class="language-checkbox" type="checkbox" name="drop-language" id="drop-language">
                <div class="language">
                    <ul>
                        <li>English</li>
                        <li>اللغة العربية</li>
                        <li>Chinese</li>
                        <li>Viet Nam</li>
                        <li>Russia</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="header-top">
        <div class="nav-bar">
            <div class="logo-techgood top-left">
                <img src="{{ asset('./imgs/logo.png') }}" alt="logo" width="70px" height="70px">
            </div>
            <div class="top-center">
                <form class="search" action="#" method="GET">
                    <label for="search-nav" class="lb-search">Tim Kiem</label>
                    <input class="search-input" type="text" placeholder="Bạn muốn tìm gì . . ." name="search-nav"
                        id="search-nav">
                    <button type="submit" class="btn-search">Tìm</button>
                </form>
            </div>
            <div class="top-right">
                <div class="grid">
                    <div class="help row">
                        <div class="icon-">
                            <i class="fa fa-phone"
                                style="color: #255840; font-size: 30px; float: left;  width: 30px; height: 30px;"></i>
                        </div>
                        <div class="item">
                            <p>Cần giúp đỡ ?</p>
                            <p>(+84) 123 123 132</p>
                        </div>

                    </div>
                    <div class="infor-account row">
                        <div class="icon-">
                            <i class="fa fa-user"
                                style="color: #255840; font-size: 30px; float: left; width: 30px; height: 30px;"></i>
                        </div>
                        <p>Tên Tài Khoản</p>
                        <a class="login-link" href="{{ asset('login') }}">Đăng Nhập</a>
                    </div>
                    <div class="cart row">
                        <div class="icon-"><i class="fa fa-cart-shopping  icon-cart"
                                style="color: #255840; font-size: 30px; float: left;  width: 30px; height: 30px;"></i>
                        </div>
                        <div class="item">
                            <a href="#" class="cart-link">Giỏ Hàng</a>
                            <p>SL: 0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <div class="container-menu menu-top">
            <div class="menu-1 grid-item">
                <div class="text-drop">Danh mục<span>></span>
                </div>
                <div class="drop-down">
                    <div class="grid-1">
                        <ul>
                            <li><b>Danh Muc Grid 1</b></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Âm thanh</a></li>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Màn hình, PC</a></li>
                            <li><a href="#">Máy tính bảng</a></li>
                        </ul>
                    </div>
                    <div class="grid-2">
                        <ul>
                            <li><b>Danh Muc Grid 2</b></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Âm thanh</a></li>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-2 grid-item">
                <div class="text-drop">Thương hiệu<span>></span></div>
                <div class="drop-down">
                    <div class="grid-1">
                        <ul>
                            <li><b>Thương hiệu Grid 1</b></li>
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Oppo</a></li>
                            <li><a href="#">Onplus</a></li>
                            <li><a href="#">Xiao mi</a></li>
                            <li><a href="#">Google</a></li>
                        </ul>
                    </div>
                    <div class="grid-2">
                        <ul>
                            <li><b>Thương hiệu Grid 2</b></li>
                            <li><a href="#">Vivo</a></li>
                            <li><a href="#">Infinix</a></li>
                            <li><a href="#">Corsair</a></li>
                            <li><a href="#">Intel</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Toshiba</a></li>
                            <li><a href="#">Asus</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="menu-3 grid-item">
                <div class="text-drop">Tất cả sản phẩm</div>
                <div class="#">
                </div>
            </div>
            <div class="menu-4 grid-item">
                <div class="text-drop">Giỏ hàng của tôi</div>
                <div class="#">
                </div>
            </div>
            <div class="menu-5 grid-item">
                <div class="text-drop">Chính sách điều khoản</div>
                <div class="#">
                </div>
            </div>
        </div>
    </div>


    @yield('content_login')


    <!-- footer -->
    <footer>
        <div class="footer-all">
            <div class="fill-bg-top">
                <div class="top-footer">
                    <div class="text-left">
                        <div class="icon-email"><i class="fa fa-envelope"></i></div>
                        <div class="text">
                            <p>Để lại email để chúng tôi có thể thông báo những ưu đãi mới nhất đến với bạn</p>
                            <p>Nhận thông tin cập nhật qua E-mail về của chúng tôi và các ưu đãi đặc biệt.</p>
                        </div>
                    </div>
                    <div class="email-right">
                        <form action="#" method="GET" class="form-email">
                            <input type="email" name="email-footer" id="email-footer"
                                placeholder="Email của bạn . . .">
                            <button type="submit" class="btn-sub">Gửi Email</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="fill-bg-center">
                <div class="center-footer">
                    <div class="first-text">
                        <h3 class="text-logo"><b style="color: #238456">Tech</b>Good.</h3>
                        <p class="m-10px">TechGood là website giúp bạn mua sâm trực tuyến <br> các thiết bị công nghệ
                            điện tử một cách
                            dễ
                            dàng, <br>
                            nhanh chống, tiện lợi</p>
                    </div>
                    <div class="last-text">
                        <div class="one-text">
                            <h4>Need help?</h4>
                            <p class="m-10px">TechGood</p>
                            <p class="m-10px ">Contact</p>
                            <i class="fa fa-phone"></i><span class="cl-black font-w-7">+84 123 123 123</span>
                            <div class="line"></div>
                            <i class="fa fa-envelope"></i><span class="cl-black font-w-7">techgood@gmail.com</span>
                        </div>
                        <div class="two-text">
                            <h4>Sản phẩm</h4>
                            <p class="m-10px">Thiết bị điện tử</p>
                            <p>Tai nghe</p>
                            <p class="m-10px">Laptop</p>
                            <p>Điện thoại thông minh</p>
                            <p class="m-10px">Máy tính</p>
                            <p>Thiết bị thông minh</p>
                        </div>
                        <div class="three-text">
                            <h4>Chi nhánh</h4>
                            <p class="m-10px">Tầng 78 landmark 81</p>
                            <p>Tầng 14 tòa nhà bitexco</p>
                            <p class="m-10px">Số 19 chương dương</p>
                        </div>
                        <div class="for-text">
                            <h4>Khác</h4>
                            <p class="m-10px">Theo dõi Đơn hàng</p>
                            <a href="#" class="link-deleted-account">Xóa tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="fill-bg-bottom">
                    <div class="text-bt-fot">
                        &copy; 2024 - TechGood software by J&#8482;
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>