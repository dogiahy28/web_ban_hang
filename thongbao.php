<?php
    include_once('db/connect.php');
?>

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
    <link rel="canonical" href="https://thietbiytevp.com:443/" />
    <link rel="DCTERMS.replaces" hreflang="vi" href="https://thietbiytevp.com:443/" />
    <link rel="icon" href="favicon.ico" type="image/icon" />
    <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/products.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css"/>
    <link href="styles/menu.css" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./img/logo.png">
    <script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/flaunt.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jBasket/fly-to-basket/inc/js/custom.js"></script>
    <script src="js/quantity.js"></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');


    ga('create', 'UA-104101566-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://thietbiytevp.com/",
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+84 918007475",
            "contactType": "customer service"
        }]
    }
    </script>

    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />
    <title>Hydanz</title>
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
                                    <a id="fb" href="https://www.facebook.com/" target="_blank" title="Facebook"><i
                                            style="color: white;" class="fab fa-facebook-square"></i></a>
                                    <a id="ins" href="https://www.instagram.com/" target="_blank" title="Instagram"><i
                                            style="color: white;" class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                            <ul class="header_navbar-list">
                                <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-bell"></i>
                                    <a href="thongbao.php"><b>Thông báo</b></a>
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
                                <li class="header_navbar-list-item">
                                    <a style="font-weight: bold" href="dangnhapad.php" title="Đăng nhập nhân viên (admin)">
                                    <img style="width:28px;height:28px" src="./img/admin.png"></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header_main">
                            <div class="header_logo">
                                <a href="./index.php">
                                    <img class="header_logo-img" src="./img/logo.png" alt="" id="logo">
                                </a>
                                <a href="./index.php">
                                    <b style="text-align: center;
                                            font-size: 2rem;
                                            color: #222222;
                                            /* letter-spacing: .05em; */
                                            text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgb(105 105 105);"
                                            >HYDANZ</b>
                                        <!-- style="font-size: 2rem; color:  black; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">HYDANZ</b> -->
                                </a>
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
                                            <a href="giohang.php" title="Giỏ hàng"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);"="showcart()">
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

        <div class="banner">
            <div class="grid wide">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <div class="banner-content">
                            <div class="banner-menu">
                                <div class="menu">
                                    <i class="fa fa-bars">
                                        DANH MỤC
                                    </i>
                                </div>
                                <ul>
                                    <li><a href="#sanphambanchay">
                                            SẢN PHẨM BÁN CHẠY!!!
                                        </a>
                                    </li>

                                    <?php
                                        $sql_loai_sp = mysqli_query($connect,"SELECT * FROM `loai_san_pham` ORDER BY `MA_LOAI` ASC");
                                        while($row_loai_sp = mysqli_fetch_array($sql_loai_sp)){
                                    ?>

                                    <li><a href="#<?php echo $row_loai_sp['MA_LOAI']?>">
                                            <?php echo $row_loai_sp['TEN_LOAI'] ?>
                                        </a>
                                    </li>

                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>

                            <div class=" banner-img">
                                <img src="./img/banner1.jpg" alt="">
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
            <div class="row">
                <div class="col col-12 col-c-12" id="sanphambanchay">
                    <div class="category">
                        <p>SẢN PHẨM BÁN CHẠY</p>
                    </div>
                </div>
            </div>

            <div class="row product_SPBC">
                <div class="col col-3 col-c-3">
                    <div class="sph home-product-item">
                        <div class="home-product-item__img"><img src="./img/may-do-huyet-ap-dien-tu-omron-hem-8712.jpg"
                                alt="sp">
                        </div>
                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=2">Máy đo huyết áp tự động Omron HEM-8712
                                <br><br>
                                Trạng thái: Còn hàng
                            </a>
                        </h4>
                        <div class="home-product-item__price">
                            <span class="home-product-item__price-old">798.000đ</span>
                            <span class="home-product-item__price-current">719.000đ</span>
                        </div>
                        <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div>
                        <button class="home-product-item-button">
                        <!-- onclick="themvaogiohang(this)" -->
                            Chọn mua</button>
                    </div>
                </div>

                <div class="col col-3 col-c-3">
                    <div class="sph home-product-item">
                        <div class="home-product-item__img">
                            <img src="./img/khautrangd&j.jpg" alt="sp">
                        </div>
                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=20">Khẩu trang D&J KN - 95
                                <br><br>
                                Trạng thái: Còn hàng
                            </a>
                        </h4>
                        <div class="home-product-item__price">
                            <span class="home-product-item__price-old">27.000đ</span>
                            <span class="home-product-item__price-current">23.000đ</span>
                        </div>
                        <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div>
                        <button class="home-product-item-button">Chọn mua</button>
                    </div>
                </div>

                <div class="col col-3 col-c-3">
                    <div class="sph home-product-item">
                        <div class="home-product-item__img"><img src="./img/can-suc-khoe-co-hoc-laica-ps2018.png"
                                alt="sp">
                        </div>
                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=9">Cân sức khỏe cơ học Laica PS - 2018
                                <br><br>
                                Trạng thái: Còn hàng
                            </a>
                        </h4>
                        <div class="home-product-item__price">
                            <span class="home-product-item__price-old">290.000đ</span>
                            <span class="home-product-item__price-current">249.000đ</span>
                        </div>
                        <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div>
                        <button class="home-product-item-button">Chọn mua </button>
                    </div>
                </div>

                <div class="col col-3 col-c-3">
                    <div class="sph home-product-item">

                        <div class="home-product-item__img"><img
                                src="./img/may-massage-cam-tay-da-nang-kingtech-yt-1803-12-che-do.jpg" alt="sp">
                        </div>

                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=6">Máy massage cầm tay đa năng
                                KINGTECH YT-1803 (12 chế độ)
                                <br><br>
                                Trạng thái: Còn hàng
                            </a>
                        </h4>
                        <div class="home-product-item__price">
                            <span class="home-product-item__price-old">640.000đ</span>
                            <span class="home-product-item__price-current">589.000đ</span>
                        </div>


                        <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div>

                        <button class="home-product-item-button">Chọn mua</button>
                    </div>
                </div>

            </div>
            <!--<div class="seemore">
                <ul class="pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item-link">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item-active"><a class="pagination-item-link" href="">1</a>
                    </li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">2</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">3</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">4</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">5</a></li>
                    <li class="pagination-item ">
                        <a href=" " class="pagination-item-link ">
                            <i class="fa fa-angle-right "></i>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>

        <div class="grid wide">
            <?php 
                $sql_cate_home = mysqli_query($connect,"SELECT * FROM `loai_san_pham` ORDER BY `MA_LOAI` ASC");
                while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
                    $id_loai = $row_cate_home['MA_LOAI'];
            ?>

            <div class="row">

                <div class="col col-12 col-c-12" id="<?php echo $row_cate_home['MA_LOAI']?>">
                    <div class="category">
                        <p><?php echo $row_cate_home['TEN_LOAI'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row product_SPBC">

                <?php
                        $sql_san_pham = mysqli_query($connect,"SELECT * FROM `san_pham` ORDER BY `MA_SP` DESC");
                        while($row_san_pham = mysqli_fetch_array($sql_san_pham)){
                            if($row_san_pham['MA_LOAI']==$id_loai){
                    ?>

                <div class="col col-3 col-c-3">
                    <div class="home-product-item">

                        <div class=" home-product-item__img">
                            <img src="./img/<?php echo $row_san_pham['HINH_ANH_SP'] ?>" alt="sp">
                        </div>

                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=<?php echo $row_san_pham['MA_SP'] ?>">
                                <?php echo $row_san_pham['TEN_SP'] ?>
                                <br><br>
                                Trạng thái: <?php
                                                    if ($row_san_pham['SO_LUONG'] > 0) {
                                                        echo "Còn hàng";
                                                    } else {
                                                        echo "Hết hàng!!!";
                                                    }
                                                    ?>
                            </a>
                        </h4>

                        <div class=" home-product-item__price">
                            <span class="home-product-item__price-old">
                                <?php
                                    echo number_format($row_san_pham['GIA_GOC'],0,".",".")
                                ?>đ
                            </span>
                            <span class="home-product-item__price-current">
                                <?php
                                    echo number_format($row_san_pham['GIA_BAN'],0,".",".")
                                ?>đ
                            </span>
                        </div>
                        <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div>

                        <button class="home-product-item-button">Chọn mua</button>
                    </div>
                </div>
                <?php
                        }
                    }
                    ?>

                <!--<div class="seemore">
                <ul class="pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item-link">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item-active"><a class="pagination-item-link" href="">1</a>
                    </li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">2</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">3</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">4</a></li>
                    <li class="pagination-item "><a href=" " class="pagination-item-link ">5</a></li>
                    <li class="pagination-item ">
                        <a href="" class="pagination-item-link">
                            <i class="fa fa-angle-right "></i>
                        </a>
                    </li>
                </ul>
                -->
            </div>

            <?php
                }
            ?>

        </div>

        <div class="modal ">
            <div class="modal__overlay "></div>
            <div class="modal__body ">
                <div class="auth-from ">
                    <div class="auth-from__container ">
                        <div class="auth-from_header ">
                            <h3 class="auth-from_heading" style="color:rgba(207, 8, 8, 0.8)"><b>Bạn chưa đăng nhập!</b></h3>

                            <a href='javascript: history.go(-1)' class="btn btn-with--icon_close btn-color-back">
                                <b>X</b>
                            </a>
                        </div>
                        <br>
                        <div class="auth-form-info">
                            <img src="img/dangnhap.jpg" style="height: 120px; width: 120px;">
                            <br>
                            <a>Đăng nhập để xem Thông báo</a>
                        </div>

                    </div><br>
                    <div class="auth-form_socials">
                        <a href="dangnhap.php" class="btn btn-with--icon btn-color-login">
                            Đăng nhập
                        </a>
                        <a href="dangky.php" class="btn btn-with--icon btn-color-register">
                            Đăng ký
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </main>

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
        <a href="tel:0918007475" class="colorr" title="Gọi điện" title="Gọi điện"><i
                class="fas fa-phone-square"></i></a>
        <br>
        <a href="https://www.messenger.com/" class="colorr" title="Nhắn tin"><i class="fas fa-envelope"></i></a>
        <br>
        <a href="https://www.google.com/maps/" class="colorr" title="Vị trí"><i class="fas fa-map-marked"></i></a>
        <br><br><br><br><br>

    </div>
    <a class="top" href="#first" target="_top" title="Về đầu trang"><i class="fas fa-arrow-circle-up"></i></a>

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