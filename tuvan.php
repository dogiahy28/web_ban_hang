<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./img/logo.png">
    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tư vấn - Hydanz</title>
    
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
                                    <a href="https://play.google.com/" id="first">Tải ứng dụng</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <a href="">Kết nối</a>
                                    <a id="fb" href="https://www.facebook.com/" target="_blank" title="Facebok"><i style="color: white;" class="fab fa-facebook-square"></i></a>
                                    <a id="ins" href="https://www.instagram.com/" target="_blank" title="Instagram"><i style="color: white;" class="fab fa-instagram"></i></a>
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
                                <img class="header_logo-img" src="./img/logo.png" alt="" id="logo"> 
                                <a href="index.php">
                                    <b style="text-align: center;
                                            font-size: 2rem;
                                            color: #222222;
                                            /* letter-spacing: .05em; */
                                            text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgb(105 105 105);">HYDANZ</b>
                            </div>

                            <div class="header_search">
                                <form action="timkiem.php" method="get" class="header_search">
                                    <input class="header_search-input" name="search" type="search"
                                        placeholder="Tìm kiếm sản phẩm, thương hiệu" value="">
                                    <button type="submit" name="ok" class=" header_search-btn" title="Tìm kiếm">
                                        <i class="fa fa-search header_search-btn-icon"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="header_cart">
                                <div class="header_cart-wrap">
                                    <div class="header_product-count">
                                        <div class="shop">
                                            <a href="./giohang.php" style="text-decoration: none; color: rgba(207, 8, 8, 0.8);" title="Giỏ hàng" onclick="showcart()">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span id="countsp" style="font-size:large">
                                                0
                                            </span>
                                            </a>
                                        </div>
                                        <div id="showcart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="grid wide">
            <div style="color:black">
                <p style="text-align: left; font-size: 2rem;">
                    <a href="index.php" style="font-size: 3rem; color:black" title="Trang chủ"><i class="fas fa-home"></i></a> >
                    <a href="tuvan.php" class="connect-link" style="color:black">Tư vấn khách hàng</a>
                </p>
            </div>

            <div class="baner-img_tuvan">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/bannerr.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/banner2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/banner4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/banner-3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/bannerr.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="category">
                <p>LIÊN HỆ TƯ VẤN - HYDANZ</p>
            </div>


            <div class="contact-form">
                <form action="" method="post">
                    <h3 style="font-size: 1.8rem;">Họ và Tên</h3>
                        <div class="input-box">
                            <i></i>
                            <input type="text" placeholder="Nhập họ và tên..." minlength="4" required>
                        </div>
                        <h3 style="font-size: 1.8rem;">Địa chỉ Email</h3>
                        <div class="input-box">
                            <i></i>
                            <input type="email" placeholder="Nhập địa chỉ email..." name="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required>
                        </div>
                        <h3 style="font-size: 1.8rem;">Điện thoại</h3>
                        <div class="input-box">
                            <i></i>
                            <input type="phone" maxlength="10" placeholder="Nhập số điện thoại..." required>
                        </div>
                        <h3 style="font-size: 1.8rem;">Nội dung</h3>
                        <div class="input-box">
                            <textarea rows="10" cols="50" method="post" minlength="1" maxlength="250" placeholder="Nội dung cần tư vấn..." required></textarea>
                        </div>
                        <div class="btn-box">
                            <button type="submit" value="Gửi" class="btn--primary">
                                Gửi
                            </button>
                        </div>
                </form>
            </div>
            
    </main>

    <footer class="footer ">
        <div class="grid wide ">
            <div class="row ">
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading "><b>CHĂM SÓC KHÁCH HÀNG</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="lienhe.php" class="footer-link ">Liên Hệ</a></li>
                        <li class="footer-item "><a href="hotro.php" class="footer-link ">Hỗ Trợ</a></li>
                        <li class="footer-item "><a href="chinhsach.php" class="footer-link ">Chính Sách</a></li>
                        <li class="footer-item "><a href="huongdan.php" class="footer-link ">Hướng Dẫn Mua Hàng</a></li>
                        <li class="footer-item "><a href="tuvan.php" class="footer-link ">Tư Vấn</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>THÔNG TIN</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="tintuc.php" class="footer-link ">Tin Tức</a></li>
                        <li class="footer-item "><a href="tuyendung.php" class="footer-link ">Tuyển Dụng</a></li>
                        <li class="footer-item "><a href="dieukhoan.php" class="footer-link ">Điều Khoản</a></li>
                        <li class="footer-item "><a href="videoclip.php" class="footer-link ">Video Clip</a></li>
                        <li class="footer-item "><a href="yhoc.php" class="footer-link ">Y Học Quanh Ta</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>SẢN PHẨM NỔI BẬT</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="index.php#3" class="footer-link ">Cân sức khỏe</a></li>
                        <li class="footer-item "><a href="index.php#4" class="footer-link ">Máy đo đường huyết</a></li>
                        <li class="footer-item "><a href="index.php#5" class="footer-link ">Khẩu trang</a></li>
                        <li class="footer-item "><a href="index.php#2" class="footer-link ">Máy massage</a></li>
                        <li class="footer-item "><a href="index.php#4" class="footer-link ">Máy đo huyết áp</a></li>
                        
                    </ul>
                </div> 
                <div class="col col-3 col-c-12">
                    <h3 class="footer-heading "><b>VÀO CỬA HÀNG TRÊN ỨNG DỤNG</b></h3>
                    <div class="fotter-download ">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/f184c0b68a2d385feb5d70a76396230b.png " class="footer-download-qr ">
                        <div class="fotter-download-app ">
                            <a href="https://play.google.com/ "><img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/2679f513b5f9e235adf2c6c288617e7b.png " class="footer-download-img "></a>
                            <a href="https://www.apple.com/vn/app-store/ "> <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/759416b55e2bd69ecc360ee2faab7ad0.png " class="footer-download-img "></a>
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
        <a href="tel:0918007475" class="colorr" title="Gọi điện"><i class="fas fa-phone-square"></i></a>
        <br>
        <a href="https://www.messenger.com/" class="colorr" title="Nhắn tin"><i class="fas fa-envelope"></i></a>
        <br>
        <a href="https://www.google.com/maps/" class="colorr" title="Vị trí"><i class="fas fa-map-marked"></i></a>
    <br><br><br><br><br>
    
    </div>
    <a class="top" href="#first" target="_top" title="Về trang chủ"><i class="fas fa-arrow-circle-up"></i></a>

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
<!-- Nguồn thông tin: https://meta.vn; https://benh.vn -->

