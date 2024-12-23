<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./img/logo.png">
    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />
    <title>Đăng nhập - Hydanz</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="grid wide">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <nav class="header_navbar">
                            <ul class="header_navbar-list">
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                    <a href="https://play.google.com/">Tải ứng dụng</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <a href="">Kết nối</a>
                                    <a id="fb" href="https://www.facebook.com/" target="_blank"><i style="color: white;"
                                            class="fab fa-facebook-square"></i></a>
                                    <a id="ins" href="https://www.instagram.com/" target="_blank"><i
                                            style="color: white;" class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                            <ul class="header_navbar-list">
                                <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-bell"></i>
                                    <a href="thongbao.php">Thông báo</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-question-circle"></i>
                                    <a href="hotro.php">Hỗ trợ</a>
                                </li>
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                    <a style="font-weight: bold;" href="dangky.php">Đăng ký</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <a style="font-weight: bold" href="dangnhap.php">Đăng nhập</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header_main">
                            <div class="header_logo">
                                <img class="header_logo-img" src="./img/logo.png" alt="">
                                <a href="./index.php">
                                    <b
                                        style="text-align: center;
                                            font-size: 2rem;
                                            color: #222222;
                                            /* letter-spacing: .05em; */
                                            text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgb(105 105 105);">HYDANZ</b>
                                </a>
                            </div>

                            <div class="header_search">
                                <form action="/timkiem.php" method="get" class="header_search">
                                    <input class="header_search-input" name="search" type="text"
                                        placeholder="Tìm kiếm sản phẩm, thương hiệu">
                                    <button type="submit" class="header_search-btn">
                                        <i class="fa fa-search header_search-btn-icon"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="header_cart">
                                <div class="header_cart-wrap">
                                    <div class="header_product-count">
                                        <div class="shop">
                                            <a href="./giohang.php"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="banner">
            <div class="grid wide">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <div class="banner-content">
                            <div class="banner-menu">
                                <div class="menu" onclick="clickMenu()">
                                    <i class="fa fa-bars" aria-hidden="true" style="color:white">
                                        DANH MỤC
                                    </i>
                                </div>
                                <ul id="list-menu">
                                    <li><a href="#sanphambanchay">SẢN PHẨM BÁN CHẠY</a></li>
                                    <li><a href="#dungcuyte">DỤNG CỤ Y TẾ</a></li>
                                    <li><a href="#mypham">MỸ PHẨM</a></li>
                                    <li><a href="#thucphamchucnang">THỰC PHẨM CHỨC NĂNG</a></li>
                                    <li><a href="">SỮA UỐNG CÁC LOẠI</a></li>
                                    <li><a href="">CHĂM SÓC CÁ NHÂN</a></li>
                                    <li><a href="">VỆ SINH NHÀ CỬA</a></li>
                                    <li><a href="">SỨC KHỎE SINH SẢN</a></li>
                                    <li><a href="">SẢN PHẨM MỚI</a></li>
                                    <li><a href="">SẢN PHẨM KHUYẾN MẠI</a></li>
                                </ul>
                            </div>
                            <div class="banner-img">
                                <img src="./img/banner1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </header>

    <main>
        <div class="modal ">
            <div class="modal__overlay "></div>
            <div class="modal__body ">
                <div class="auth-from ">
                    <div class="auth-from__container ">
                        <div class="auth-from_header ">
                            <h3 class="auth-from_heading " style="color:rgba(207, 8, 8, 0.8)"><b>Đăng Nhập</b></h3>
                            <a href="javascript: history.go(-1)" class=" btn btn-with--icon_close btn-color-back">
                                <b>X</b>
                            </a>
                        </div>

                        <form action="xulydn.php?do=login" method="POST">

                            <div class="containerr">
                                <input type="text" class="auth-form_input " placeholder="Tên đăng nhập " name="tendn"
                                    required>
                            </div>
                            <br>
                            <div class="containerr">
                                <input type="password" placeholder="Mật khẩu " name="matkhau" id="upass">
                                <span class="show-btn">
                                    <i class="fas fa-eye" onclick="togglePassword()"></i>
                                </span>
                            </div>

                            <script>
                                function togglePassword() {
                                    var upass = document.getElementById('upass');
                                    var toggleBtn = document.getElementById('toggleBtn');
                                    if(upass.type == "password"){
                                        upass.type = "text";
                                        toggleBtn.value = "Hide Password Characters";
                                    } else {
                                        upass.type = "password";
                                        toggleBtn.value = "Show Password Characters";
                                    }
                                }
                            </script>

                            <div class="auth-form_help ">
                                <a href="hotro.php" class="auth-form_help-input auth-form_help-input_1">
                                    Bạn quên mật khẩu?</a>
                            </div>
                            <div class="auth-form_control ">
                                <input class="btn--primary " type="submit" name="dangnhap" value="Đăng Nhập">

                            </div>
                            <br>
                            <div class="auth-form_control ">
                                <button class="btn--primary_1 ">
                                    <a href="dangky.php" style="color: white">Đăng Ký</a>
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="auth-form_socials ">
                        <a href="https://www.instagram.com/" class="btn btn-with--icon btn-color-3 ">
                            <i class="fab fa-instagram-square"></i>Instagram
                        </a>
                        <a href="https://www.facebook.com/" class="btn btn-with--icon btn-color-1 ">
                            <i class="fab fa-facebook-square "></i>Facebook
                        </a>
                        <a href="https://google.com/" class="btn btn-with--icon btn-color-2 ">
                            <i class="fab fa-google "></i>Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

        <img src="img/banner1.jpg" width="100%" style="padding-left:7rem; padding-right:7rem;">

    <footer class="footer ">
        <div class="grid wide ">
            <div class="row ">
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading "><b>CHĂM SÓC KHÁCH HÀNG</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" class="footer-link ">Liên Hệ</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Hỗ Trợ</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Chính Sách</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Hướng Dẫn Mua Hàng</a>
                        </li>
                        <li class="footer-item "><a href="tuvan.php" class="footer-link ">Tư Vấn</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>THÔNG TIN</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" class="footer-link ">Tin Tức</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Tuyển Dụng</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Điều Khoản</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Video Clip</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Y Học Quanh Ta</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>SẢN PHẨM NỔI BẬT</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" class="footer-link ">Cân sức khỏe</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Máy đo đường huyết</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Khẩu trang</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Máy massage</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Máy đo huyết áp</a></li>

                    </ul>
                </div>
                <div class="col col-3 col-c-12">
                    <h3 class="footer-heading "><b>VÀO CỬA HÀNG TRÊN ỨNG DỤNG</b></h3>
                    <div class="fotter-download ">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/f184c0b68a2d385feb5d70a76396230b.png "
                            class="footer-download-qr ">
                        <div class="fotter-download-app ">
                            <a href="https://play.google.com/ "><img
                                    src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/2679f513b5f9e235adf2c6c288617e7b.png "
                                    class="footer-download-img "></a>
                            <a href="https://www.apple.com/vn/app-store/ "> <img
                                    src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/759416b55e2bd69ecc360ee2faab7ad0.png "
                                    class="footer-download-img "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="booton-footer">
        <h2>@HYDANZ Hãy để chúng tôi chăm sóc gia đình bạn !!!</h2>
    </div>
    <div class="top1">
        <a href="tel:0918007475" class="colorr"><i class="fas fa-phone-square"></i></a>
        <br>
        <a href="https://www.messenger.com/" class="colorr"><i class="fas fa-envelope"></i></a>
        <br>
        <a href="https://www.google.com/maps/" class="colorr"><i class="fas fa-map-marked"></i></a>
        <br><br><br><br><br>

    </div>
    <a class="top" href="#first" target="_top"><i class="fas fa-arrow-circle-up"></i></a>

    <script src="./js/product.js "></script>
    <script>
    let isClick = true

    function clickMenu() {
        console.log("hi")
        let list = document.getElementById('list-menu')
        if (isClick) {
            list.classList.add("hien-menu")
        } else {
            list.classList.remove("hien-menu")
        }
        isClick = !isClick
    }
    </script>
</body>

</html>