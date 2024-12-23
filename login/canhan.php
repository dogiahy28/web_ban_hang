<?php
    session_start();
    include_once('../db/connect.php');

    $sql_trang_ca_nhan = mysqli_query($connect,"SELECT * FROM `khach_hang` WHERE `MA_CCCD` = ".$_GET['id']);

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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="canonical" href="https://thietbiytevp.com:443/" />
    <link rel="DCTERMS.replaces" hreflang="vi" href="https://thietbiytevp.com:443/" />
    <link rel="icon" href="../favicon.ico" type="image/icon" />
    <link href="../styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../styles/products.css" rel="stylesheet" type="text/css" />
    <link href="../styles/main.css" rel="stylesheet" type="text/css" />
    <link href="../styles/menu.css" rel="stylesheet" type="text/css" />

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

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

    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../logo_.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>Trang Cá Nhân - Hydanz</title>
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
                                <!-- <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-bell"></i>
                                    <a href="thongbao.php">Thông báo</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-question-circle"></i>
                                    <a href="hotro.php">Hỗ trợ</a>
                                </li> -->
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                <a href="canhan.php?id=<?php echo $_SESSION['id_kh'] ?>" style="font-size:1.7rem; font-weight: bold">
                                <?php
                                    if (isset($_SESSION['tendn']) && $_SESSION['tendn']){
                                        // echo '<script language="javascript">alert("Chào mừng '.$_SESSION['tendn'].' đến với Hydanz!");</script>';
                                        echo $_SESSION['tendn'].'<a></a>';
                                    }
                                    else{
                                        echo 'Bạn chưa đăng nhập';
                                    }
                                    ?>
                                </li>
                                </a>
                                <li class="header_navbar-list-item">
                                    <a style="font-size:1.7rem;" href="../dangxuat.php" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất?')">Đăng xuất</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header_main">
                            <div class="header_logo">
                                <img class="header_logo-img" src="../img/logo.png" alt="" id="logo">

                                <a href="trangchudn.php?id=<?php echo $_SESSION['id_kh'] ?>">
                                    <b
                                        style="text-align: center;
                                            font-size: 2rem;
                                            color: #222222;
                                            /* letter-spacing: .05em; */
                                            text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgb(105 105 105);">HYDANZ</b>
                                </a>
                            </div>

                            <!-- <div class="header_search">
                                <form action="/timkiem.php" method="get" class="header_search">
                                    <input class="header_search-input" name="search" type="text"
                                        placeholder="Tìm kiếm sản phẩm, thương hiệu, thương hiệu, thương hiệu">
                                    <button type="submit" class="header_search-btn">
                                        <i class="fa fa-search header_search-btn-icon"></i>
                                    </button>
                                </form>
                            </div> -->
                            <div class="header_search">
                                <form action="timkiemdn.php?id=<?php echo $_SESSION['id_kh'] ?>" method="get" class="header_search">
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
                                            <a href="giohangdn.php?id=<?php echo $_SESSION['id_kh'] ?>" title="Giỏ hàng"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);"="showcart()">
                                
                                                <i class="fas fa-shopping-cart"></i>
                                                <!-- <span id="countsp" style="font-size:large">
                                                    0
                                                </span> -->
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
            <div>
                <p style="text-align: left; font-size: 2rem;">
                    <a href="trangchudn.php?id=<?php echo $_SESSION['id_kh'] ?>" style="font-size: 3rem" title="Trang chủ"><i class="fas fa-home"></i></a> >
                    <a href="" class="connect-link">Thông tin cá nhân</a>
                </p>
            </div>
            <div class="banners">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <div class="banner-content">
                            <div class="banner-menu-support">

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center; font-size: 2.7rem;">- - - <i class="fas fa-user-cog"></i> - - -</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-user-edit" style="color: orange; font-size:2.4rem"></i><a href="" style="font-size:1.9rem"> Thông tin cá nhân</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-box" style="color: springgreen; font-size:2.4rem"></i><a href="dsdonhangdn.php" style="font-size:1.9rem"> Đơn hàng của tôi</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-exchange-alt" style="color:blueviolet; font-size:2.4rem"></i><a href="doimatkhau.php" style="font-size:1.9rem"> Đổi mật khẩu</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-concierge-bell" style="color: pink; font-size:2.4rem"></i><a href="" style="font-size:1.9rem"> Thông báo</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-ticket-alt" style="color: yellow; font-size:2.4rem"></i><a href="" style="font-size:1.9rem"> Kho Voucher</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-map-marked-alt" style="color: rgb(184, 7, 169); font-size:2.4rem"></i><a href="" style="font-size:1.9rem"> Quản lý địa chỉ</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-sign-out-alt" style="color: tomato; font-size:2.4rem"></i><a href="../dangxuat.php" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất?')" style="font-size:1.9rem"> Đăng xuất</a></i>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <?php
                                while($row_dn = mysqli_fetch_array($sql_trang_ca_nhan)){
                            ?>

                            <div class="grid wide-support">
                                <div class="category">
                                    <p>THÔNG TIN CÁ NHÂN</p>
                                </div>
                                
                                <!-- <div style="float:center">
                                    <img src="../img/red-user-icon.png" width="110px" height="100px">
                                </div> -->
                                <form  method="POST" action="">
                                <table style="border-collapse: collapse;
                                            width: 100%;
                                            flex-direction: column;
                                            text-decoration: none;">
                                    <tr>
                                        <td colspan="2" style="background-color: #fff;
                                            text-align: center;
                                            padding: 20px;
                                            font-size: 1.8rem;">
                                            <img src="../img/red-user-icon.png" width="130px" height="130px"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: black;
                                            text-align: right;
                                            padding-top: 20px;
                                            padding-right: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575; width:350px">
                                            Họ và tên
                                        </td>
                                        <td style="color: black;
                                            text-align: left;
                                            padding-top: 20px;
                                            padding-left: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                        <input style="height:35px; width:300px" type="text" value="<?php echo $row_dn['TEN_KH'] ?>" name="hoten" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: black;
                                            text-align: right;
                                            padding-top: 20px;
                                            padding-right: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                            Số điện thoại
                                        </td>
                                        <td style="color: black;
                                            text-align: left;
                                            padding-top: 20px;
                                            padding-left: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                        <input style="height:35px; width:300px" type="text" value="<?php echo $row_dn['SDT_KH'] ?>" name="sdt" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: black;
                                            text-align: right;
                                            padding-top: 20px;
                                            padding-right: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                            Email
                                        </td>
                                        <td style="color: black;
                                            text-align: left;
                                            padding-top: 20px;
                                            padding-left: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                        <input style="height:35px; width:300px" type="text" value="<?php echo $row_dn['EMAIL_KH'] ?>" name="email" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: black;
                                            text-align: right;
                                            padding-top: 20px;
                                            padding-right: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                            Địa chỉ
                                        </td>
                                        <td style="color: black;
                                            text-align: left;
                                            padding-top: 20px;
                                            padding-left: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;
                                            border-bottom: 1px solid #757575;">
                                        <input style="height:100px; width:300px" type="text" maxlength="1000" value="<?php echo $row_dn['DIA_CHI_KH'] ?>" name="diachi" required>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2" style="color: black;
                                            text-align: center;
                                            padding-top: 30px;
                                            padding-left: 20px;
                                            padding-bottom: 5px;
                                            font-size: 1.8rem;">
                                        <button name="btnSave" style="background-color:rgba(221, 30, 30, 0.8); width:150px; height:35px; font-size:1.5rem;"><i class="fas fa-save"></i> Cập nhật</button>
                                    </td>
                                    </tr>
                                </table>
                                </form>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
    </main>

    <?php
        if (isset($_POST['btnSave'])){

        $hoten = $_POST['hoten'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];

        $sql = "UPDATE `khach_hang` SET `TEN_KH`='$hoten', `SDT_KH`='$sdt', `EMAIL_KH`='$email', `DIA_CHI_KH`='$diachi' WHERE `MA_CCCD`='$_SESSION[id_kh]'";

        if ($connect->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Cập nhật thông tin thành công!"); window.location=" "</script>';
            
        } else {
            echo "Error updating record: " . $connect->error;
        }

        $connect->close();

        // header('location:dssanpham.php');
        }

    ?>

    <footer class="footer ">
        <div class="grid wide ">
            <div class="row ">
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading "><b>CHĂM SÓC KHÁCH HÀNG</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" class="footer-link ">Liên Hệ</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Hỗ Trợ</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Chính Sách</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Hướng Dẫn Mua Hàng</a></li>
                        <li class="footer-item "><a href="" class="footer-link ">Tư Vấn</a></li>
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

            <!-- <div class="col col-c-12 col-12">
                        <nav class="header_navbar">
                            <ul class="header_navbar-list">
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                    <a style="color:#757575" href="https://play.google.com/" id="first">Tải ứng dụng</a>
                                </li>
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                    <a href="" style="color:#757575">Kết nối</a>
                                    <a id="fb" href="https://www.facebook.com/" target="_blank" title="Facebook"><i style="color: white;" class="fab fa-facebook-square"></i></a>
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
                        
                    </div> -->
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