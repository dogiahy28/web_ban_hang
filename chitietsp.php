<?php 
    session_start();
    include_once('db/connect.php');

    $sql_chitietsp = mysqli_query($connect,"SELECT * FROM `san_pham` WHERE `MA_SP` = ".$_GET['id']);

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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="canonical" href="https://thietbiytevp.com:443/" />
    <link rel="DCTERMS.replaces" hreflang="vi" href="https://thietbiytevp.com:443/" />
    <link rel="icon" href="favicon.ico" type="image/icon" />
    <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/products.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <link href="styles/menu.css" rel="stylesheet" type="text/css" />

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

    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Chi tiết sản phẩm - Hydanz</title>
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
                                <a href="./index.php">
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
                                            <a href="giohang.php"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);"
                                                title="Giỏ hàng" onclick="showcart()">
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
                    <a href="index.php" style="font-size: 3rem;" title="Trang chủ"><i class="fas fa-home"></i></a> >
                    <a href="" class="connect-link">Chi tiết sản phẩm</a>
                </p>
            </div>

            <div class="banners">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <div class="banner-content">
                            <div class="banner-menu-support">

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">THÔNG TIN HỮU ÍCH</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-chalkboard-teacher" style="color: orange;"></i><a
                                                href="huongdan.php"> Hướng dẫn mua hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-book" style="color: yellowgreen;"></i><a
                                                href="chinhsach.php">
                                                Chính sách mua hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-exchange-alt" style="color:blueviolet;"></i><a
                                                href="chinhsach.php"> Đổi hàng - Trả hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-book-open" style="color: pink;"></i><a
                                                href="chinhsach.php"> Chính
                                                sách bảo hành</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-money-bill-wave" style="color: yellow;"></i><a
                                                href="chinhsach.php"> Hướng dẫn thanh toán</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-box" style="color: springgreen;"></i><a href=""> Chất lượng
                                                hàng
                                                hóa</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-file-invoice" style="color: tomato;"></i><a href=""> Hóa
                                                đơn VAT
                                                điện tử</a></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-piggy-bank" style="color: rgb(184, 7, 169);"></i><a
                                                href=""> Trả
                                                góp</a></td>
                                    </tr>
                                </table>

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">LIÊN HỆ MUA HÀNG</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-map-marked" style="color: aqua;"></i><a href=""> Địa chỉ:
                                                <em>456
                                                    Quang Trung, Phường Xuân Khánh, Quận Ninh Kiều, TP.Cần Thơ</em></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-phone-square" style="color: red;"></i><a href=""> Hotline:
                                                <em>0123
                                                    45 67 89 hoặc 0909 333 666</em></a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-envelope" style="color: seagreen;"></i><a href=""> Email:
                                                <a><em>info@hydanz.com</a></em></a></td>
                                    </tr>
                                </table>


                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">TIN TUYỂN DỤNG</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-male" style="color: crimson;"></i><a href="tuyendung.php">
                                                Vị trí
                                                cần tuyển</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-file-alt" style="color: darkcyan;"></i><a
                                                href="tuyendung.php">
                                                Mẫu CV</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-users-cog" style="color: darkgoldenrod;"></i><a
                                                href="thongtin.php"> Về chúng tôi</a></td>
                                    </tr>
                                </table>

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">MẸO VẶT & THÔNG TIN</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/cu-nghe.jpg" class="table-support-image"><br>
                                            <a href="">Chữa bỏng bằng củ nghệ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/dau-tam.jpg" class="table-support-image"><br>
                                            <a href="">Tác dụng kỳ diệu của nước dâu tằm đối với sức khỏe</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/hocxuong.jpg" class="table-support-image"><br>
                                            <a href="">8 mẹo dân gian giúp chữa hóc xương cá ngay tức thì mà bạn nên
                                                biết</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/chanh.jpg" class="table-support-image"><br>
                                            <a href="">Công dụng của chanh đào mật ong và cách chế biến</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/gan.jpg" class="table-support-image"><br>
                                            <a href="">Chế độ ăn cho người bị gan nhiễm mỡ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/matkhuugiac.jpg" class="table-support-image"><br>
                                            <a href="">Mất mùi vị khi mắc Covid và những câu hỏi thường gặp</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/taptheduc.jpg" class="table-support-image"><br>
                                            <a href="">Tập thể dục quá sức và hệ luỵ</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/thucpham.jpg" class="table-support-image"><br>
                                            <a href="">Những thực phẩm mùa thu giúp giảm cân hiệu quả</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/cac-loai-hat-tot-cho-toc.jpg" class="table-support-image"><br>
                                            <a href="">Mách nhỏ những thực phẩm ngăn ngừa rụng tóc</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/xutritaichokhibidiengiat.jpg" class="table-support-image"><br>
                                            <a href="">Sơ cứu khẩn cấp khi bỏng điện</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/phuong-phap-an-nhan-trung.jpg"
                                                class="table-support-image"><br>
                                            <a href="">Áp dụng phương phấp ấn nhân trung cho người bị ngất đột ngột</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/ky-nang-thiet-yeu-cho-tre.jpg"
                                                class="table-support-image"><br>
                                            <a href="">Những kỹ năng sinh tồn thiết yếu đối với trẻ</a>
                                        </td>
                                    </tr>
                                </table>

                            </div>

                            <div class="grid wide-support">

                                <?php 
                                    while($row_chitietsp = mysqli_fetch_array($sql_chitietsp)){
                                ?>

                                <div>
                                    <form method="POST" action="themgiohang.php?id=<?php echo $row_chitietsp['MA_SP'] ?>">
                                    <table class="table-support-insurance">
                                        <tr style="background-color: rgba(207, 8, 8, 0.8)">
                                            <td colspan="2" style="font-size: 2.5rem;">
                                                <b><?php echo $row_chitietsp['TEN_SP'] ?></b>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="contact-form">
                                        <div style="float:left">
                                            <img src=" ./img/<?php echo $row_chitietsp['HINH_ANH_SP'] ?>"
                                                alt="sp" style="width:450px;height:450px">
                                        </div>
                                        <div>
                                            <h4 style="font-size:2.5rem;">
                                                <?php echo $row_chitietsp['TEN_SP'] ?>
                                                <p>Trạng thái: <a style="color:rgba(207, 8, 8, 0.8)">
                                                <?php
                                                    if ($row_chitietsp['SO_LUONG'] > 0) {
                                                        echo "Còn hàng";
                                                    } else {
                                                        echo "Hết hàng!!!";
                                                    }
                                                    ?></a>
                                                </p>
                                                <p>Thương hiệu: <a href="" style="color:rgba(207, 8, 8, 0.8)">
                                                        <?php echo $row_chitietsp['TEN_NCC'] ?>
                                                    </a></p>
                                            </h4>
                                        </div>

                                        <div style="text-align:left">
                                            <h4 class="home-product-item__price-old" style="font-size:2.2rem">
                                                Giá gốc:
                                                <?php echo number_format($row_chitietsp['GIA_GOC'],0,".",".")  ?>đ
                                            </h4>
                                            <h4 class="home-product-item__price-current" style="font-size:3.8rem">
                                                <?php echo number_format($row_chitietsp['GIA_BAN'],0,".",".")  ?>đ
                                                <button class="sale" disabled><em>SALE!</em></button>
                                            </h4>
                                        </div>
                                        <!-- <div class="soluong"
                                            style="padding-left: 12px;font-size:2rem;padding-left:450px;">
                                            Số lượng: <input aria-label=" quantity" class="input-qty" max="100" min="1"
                                                name="" type="number" value="1"
                                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                        </div> -->
                                        <div class="soluong" style="padding-left: 12px;font-size: 14px;"><h4 style="font-size:2.5rem;">
                                            Số lượng: <input aria-label="quantity" class="input-qty" max="20" min="1" name="soluong"
                                                type="number" value="1"
                                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 70px;height: 30px; font-size: 15px;text-align: center;">
                                        </h4>
                                        </div>
                                        <br>
                                        <?php 
                                            if ($row_chitietsp['SO_LUONG'] > 0) {
                                        ?>
                                        <!-- onclick="themvaogiohang(this)" -->
                                        <input class="home-product-item-button" type="submit" value="Thêm vào giỏ hàng" name="themgiohang" 
                                                onclick="return alert('Thêm sản phẩm vào giỏ hàng thành công')">
                                        </input>
                                        <input class="home-product-item-button-2" type="submit" value="Chọn mua" name="muangay">
                                        </input>
                                        <!-- <button class="home-product-item-button-2">
                                            <a href="giohang.php"> <b style="font-size:1.7rem">Chọn mua<b></a>
                                        </button> -->
                                        <?php  } else { ?>
                                            <input class="home-product-item-button-2" type="submit" value="Sản phẩm đã hết hàng!" disabled></input> 
                                        <?php
                                            }
                                        ?>
                                    </div>


                                    <table class="table-support-insurance">
                                        <!-- <tr style="background-color: rgba(207, 8, 8, 0.8)">
                                            <td colspan="2" style="font-size: 2.5rem;">
                                                <b><?php echo $row_chitietsp['TEN_SP'] ?></b>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="text-align:left">
                                                <div>
                                                    <img
                                                        src="./quanly/uploads/<?php echo $row_chitietsp['HINH_ANH_SP'] ?>">
                                                </div>
                                            </td>
                                            <td style="text-align:left">
                                                <h3 style="font-size: 2.8rem; color:rgba(207, 8, 8, 0.8)">
                                                    <b><i><?php echo $row_chitietsp['TEN_SP'] ?></i></b>
                                                </h3>

                                                <h3>Thương hiệu: <a href=""
                                                        style="font-size: 2rem; color:rgba(207, 8, 8, 0.8)">
                                                        <?php echo $row_chitietsp['MA_NCC'] ?>
                                                    </a></h3>
                                                <h3>Trạng thái: <a style="font-size: 2rem; color:rgba(207, 8, 8, 0.8)">
                                                        <?php echo $row_chitietsp['TRANG_THAI'] ?></a>
                                                </h3>

                                                <b style="font-size: 3.8rem; color: rgba(207, 8, 8, 0.8);">
                                                    <?php echo $row_chitietsp['GIA_BAN'] ?>.000đ</b></a>
                                                <button class="sale"><em>SALE!</em></button>

                                                <h3>Giá thị trường:
                                                    <a style="text-decoration-line:line-through; font-size:1.7rem">
                                                        <?php echo $row_chitietsp['GIA_GOC'] ?>.000đ</a>
                                                </h3>

                                                <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                                                    <h3 style="font-size:2rem">Số lượng: <input aria-label="quantity"
                                                            class="input-qty" max="100" min="1" name="" type="number"
                                                            value="1"
                                                            style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                                    </h3>
                                                </div>
                                                <button class="home-product-item-button-2">
                                                    <b style="font-size:1.7rem">Mua ngay<b>
                                                </button>

                                                <button class="home-product-item-button" onclick="themvaogiohang(this)">
                                                    <a href="giohang.php"> Thêm vào giỏ hàng </a></button>

                                            </td>

                                        </tr> -->


                                        <tr style="background-color: rgba(207, 8, 8, 0.8)">
                                            <td style="font-size: 2.3rem;">
                                                <b>Đặc điểm nổi bật</b>
                                            </td>
                                            <td style="font-size: 2.3rem;">
                                                <b>Chính sách giao hàng - bảo hành</b>
                                        </tr>
                                        <tr>
                                            <td style="text-align:justify; font-size: 2rem;">
                                                <p><?php echo $row_chitietsp['MO_TA_SP'] ?></p>
                                            </td>
                                            <td style="text-align:left; font-size: 2.3rem">
                                                <a href=""><img src="img/chatluonghh.png"
                                                        style="height:45px; width:45px">
                                                    <em> Hàng chính hãng 100%</em></a>
                                                <br><br>
                                                <a href=""><img src="img/doitrahotro.png"
                                                        style="height:45px; width:45px">
                                                    <em> Đổi trả trong 45 ngày (Nếu do lỗi kỹ
                                                        thuật)</em></a>
                                                <br><br>
                                                <a href=""><img src="img/csgiaohang.png"
                                                        style="height:45px; width:45px">
                                                    <em> Giao hàng tận nơi (Miễn phí trong khu vực TP.Cần
                                                        Thơ)</em></a>
                                                <br><br>
                                                <button class="home-product-item-button">
                                                    <a href="chinhsach.php"> Xem thêm</a></button>
                                            </td>
                                        <tr>
                                    </form>
                                </div>
                                </table>

                                <?php
                                    }    
                                ?>

                                <div class="category">
                                    <p>SẢN PHẨM NỔI BẬT</p>

                                </div>

                                <div class="row product_SPBC">
                                    <div class="col col-3 col-c-3">
                                        <div class="sph home-product-item">

                                            <div><img src="./img/khautrangd&j.jpg"
                                                    alt="sp" heigh="230px" width="230px">
                                            </div>

                                            <h4 class="home-product-item__name">
                                                <a href="chitietsp.php?id=20">
                                                    Khẩu trang D&J KN-95
                                                    <br><br>
                                                    Trạng thái: Còn hàng
                                                </a>
                                            </h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">27.000đ</span>
                                                <span class="home-product-item__price-current">25.000đ</span>
                                            </div>
                                            <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                                                Số lượng: <input aria-label="quantity" class="input-qty" max="100"
                                                    min="1" name="" type="number" value="1"
                                                    style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                            </div>
                                            <button class="home-product-item-button">
                                                Chọn mua </button>
                                        </div>

                                    </div>
                                    <div class="col col-3 col-c-3">
                                        <div class="sph home-product-item">

                                            <div><img
                                                    src="./img/can-suc-khoe-co-hoc-laica-ps2018.png" alt="sp" heigh="230px" width="230px">
                                            </div>

                                            <h4 class="home-product-item__name">
                                                <a href="chitietsp.php?id=9">
                                                    Cân sức khỏe cơ học Laica PS -
                                                    2018
                                                    <br><br>
                                                    Trạng thái: Còn hàng
                                                </a>
                                            </h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">290.000đ</span>
                                                <span class="home-product-item__price-current">249.000đ</span>
                                            </div>
                                            <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                                                Số lượng: <input aria-label="quantity" class="input-qty" max="100"
                                                    min="1" name="" type="number" value="1"
                                                    style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                            </div>
                                            <button class="home-product-item-button">
                                                Chọn mua </button>
                                        </div>
                                    </div>

                                    <div class="col col-3 col-c-3">
                                        <div class="sph home-product-item">

                                            <div><img
                                                    src="./img/may-do-huyet-ap-dien-tu-omron-hem-8712.jpg" alt="sp" heigh="230px" width="230px">
                                            </div>

                                            <h4 class="home-product-item__name">
                                                <a href="chitietsp.php?id=2">
                                                    Máy đo huyết áp tự động Omron
                                                    HEM-8712
                                                    <br><br>
                                                    Trạng thái: Còn hàng
                                                </a>
                                            </h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">799.000đ</span>
                                                <span class="home-product-item__price-current">785.000đ</span>
                                            </div>
                                            <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                                                Số lượng: <input aria-label="quantity" class="input-qty" max="100"
                                                    min="1" name="" type="number" value="1"
                                                    style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                            </div>
                                            <button class="home-product-item-button">
                                                Chọn mua
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col col-3 col-c-3">
                                        <div class="sph home-product-item">
                                            <div><img
                                                    src="./img/may-massage-cam-tay-da-nang-kingtech-yt-1803-12-che-do.jpg"
                                                    alt="sp" heigh="230px" width="230px">
                                            </div>

                                            <h4 class="home-product-item__name"><a href="chitietsp.php?id=6">
                                                    Máy massage cầm tay đa năng KINGTECH YT-1803 (12 chế
                                                    độ)
                                                    <br><br>
                                                    Trạng thái: Còn hàng
                                                </a>
                                            </h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">640.000đ</span>
                                                <span class="home-product-item__price-current">589.000đ</span>
                                            </div>

                                            <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                                                Số lượng: <input aria-label="quantity" class="input-qty" max="100"
                                                    min="1" name="" type="number" value="1"
                                                    style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                                            </div>

                                            <button class="home-product-item-button">
                                                Chọn mua </button>
                                        </div>
                                    </div>
 
                                </div>
                                <!--
                                    <div class="seemore">
                                        <ul class="pagination">
                                            <li class="pagination-item">
                                                <a href="" class="pagination-item-link">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="pagination-item pagination-item-active"><a
                                                    class="pagination-item-link" href="">1</a>
                                            </li>
                                            <li class="pagination-item "><a href=" " class="pagination-item-link ">2</a>
                                            </li>
                                            <li class="pagination-item "><a href=" " class="pagination-item-link ">3</a>
                                            </li>
                                            <li class="pagination-item "><a href=" " class="pagination-item-link ">4</a>
                                            </li>
                                            <li class="pagination-item "><a href=" " class="pagination-item-link ">5</a>
                                            </li>
                                            <li class="pagination-item ">
                                                <a href=" " class="pagination-item-link ">
                                                    <i class="fa fa-angle-right "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                            </div>

                            <div class="category">
                                <p>LIÊN HỆ HYDANZ</p>
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
                                        <input type="email" placeholder="Nhập địa chỉ email..." name="email"
                                            pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required>
                                    </div>
                                    <h3 style="font-size: 1.8rem;">Điện thoại</h3>
                                    <div class="input-box">
                                        <i></i>
                                        <input type="phone" maxlength="10" placeholder="Nhập số điện thoại..." required>
                                    </div>
                                    <h3 style="font-size: 1.8rem;">Nội dung</h3>
                                    <div class="input-box">
                                        <textarea rows="10" cols="50" method="post" minlength="20" maxlength="200"
                                            placeholder="Nội dung cần liên hệ..." required></textarea>
                                    </div>
                                    <div class="btn-box">
                                        <button type="submit" value="Gửi" class="btn--primary">
                                            Gửi
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
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