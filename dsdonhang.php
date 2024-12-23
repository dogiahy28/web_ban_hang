<?php

include_once('db/connect.php');

if (isset($_REQUEST['find']))
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);

            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Bạn chưa nhập dữ liệu!!!";
            }
            else
            {
                $query = "SELECT * FROM `hoa_don` WHERE `SDT_KH` LIKE '%$search%' OR `EMAIL_KH` LIKE '%$search%'";
                // $query = "SELECT * FROM `hoa_don`,`chi_tiet_hd` WHERE `hoa_don`.`MA_CCCD` = `khach_hang`.`MA_CCCD` ORDER BY `hoa_don`.`ID_HD`";
                $sql = mysqli_query($connect, $query);

                $num = mysqli_num_rows($sql);

                echo "Tìm thấy <b>$num</b> hóa đơn với số điện thoại/email: <b>$search</b>";
            }
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm - Hydanz</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

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
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <link href="styles/menu.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />
    <link rel="icon" href="favicon.ico" type="image/icon" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href=".quanly/img/logo.png">
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
    <title>Đơn Hàng - Hydanz</title>
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
                                <a href="./index.php">
                                    <img class="header_logo-img" src="./img/logo.png" alt="" id="logo">
                                </a>
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
                                            <a href="./giohang.php" title="Giỏ hàng"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);"="showcart()">
                                                <i class="fas fa-shopping-cart"></i>
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
        </div>

        <div class="container">
            <div>
                <p style="text-align: left; font-size: 2rem;">
                    <a href="index.php" style="font-size: 3rem" title="Trang chủ"><i class="fas fa-home"></i></a> >
                    <a href="" class="connect-link">Đơn hàng</a>
                    <!-- <a href="donhang.php" style="float:right"><i class="fas fa-file-invoice"
                            style="font-size: 2.8rem"></i> Đơn hàng</a> -->
                </p>
            </div>
            <div class=" category">
                <p style="padding-top: 12px;" id="first_cart">THÔNG TIN ĐƠN HÀNG</p>
            </div>
                
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <!-- <th style="width:5%; text-align: center; vertical-align: middle;">STT</th> -->
                        <th style="width:8%; text-align: center; vertical-align: middle;">Mã hóa đơn</th>
                        <th style="width:15%; text-align: center; vertical-align: middle;">Trạng thái</th>
                        <!-- <th style="width:5%; text-align: center; vertical-align: middle;">Mã khách hàng</th> -->
                        <th style="width:20%; text-align: center; vertical-align: middle;">Tên khách hàng</th>
                        <th style="width:10%; text-align: center; vertical-align: middle;">Số điện thoại</th>
                        <th style="width:15%; text-align: center; vertical-align: middle;">Email</th>
                        <th style="width:30%; text-align: center; vertical-align: middle;">Địa chỉ giao hàng</th>
                        <th style="width:12%; text-align: center; vertical-align: middle;">Ngày mua</th>
                        <th></th>
                        <!-- <th style="width:12%; text-align: center; vertical-align: middle;">Địa chỉ giao hàng</th>
                        <th style="width:12%; text-align: center; vertical-align: middle;">Ngày đặt</th>
                    </tr> -->
                </thead>
                <tbody>

                <?php
                    while ($row = mysqli_fetch_assoc($sql)) {
                ?>

                <tr>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['MA_HD']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['TRANG_THAI_HD']; ?></td>
                    <!-- <td style="text-align: center; vertical-align: middle;"><?php echo $row['MA_CCCD']; ?></td> -->
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['TEN_KH']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['SDT_KH']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['EMAIL_KH']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['DIA_CHI_KH']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $row['NGAY_LAP']; ?></td>
                    <td style="text-align: center; vertical-align: middle;"><a href="ctdonhang.php?id=<?php echo $row['MA_HD']; ?>">Xem chi tiết</a>
                </tr>
                <?php
                    }
                ?>
                </tbody>
                </table>
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

</body>

</html>