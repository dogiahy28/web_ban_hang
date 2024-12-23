<?php
    session_start();
    include_once('db/connect.php');
    // $query = "SELECT * FROM `hoa_don`,`chi_tiet_hd` WHERE `hoa_don`.`MA_CCCD` = `khach_hang`.`MA_CCCD` ORDER BY `hoa_don`.`ID_HD`";
    $sql_lietke_dh = "SELECT * FROM `chi_tiet_hd`,`san_pham` WHERE `chi_tiet_hd`.`MA_SP` = `san_pham`.`MA_SP` AND `chi_tiet_hd`.`MA_HD` =".$_GET['id'];
    $query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>


    <!DOCTYPE html>
    <html lang="en">

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
    <!-- <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles/products.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <link href="styles/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/logo.png">

    <script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/flaunt.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jBasket/fly-to-basket/inc/js/custom.js"></script>
    <script src="js/quantity.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/logo.png">

    <link rel="shortcut icon" href="logo_.ico" type="image/ico" />
    <title>Chi Tiết Đơn Hàng - Hydanz</title>
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
                                    <a href="index.php">
                                        <img class="header_logo-img" src="img/logo.png" alt="" id="logo">
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
                                                <a href="giohang.php" title="Giỏ hàng"
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
                        <a href="" class="connect-link">Chi Tiết Đơn hàng</a>
                        <!-- <a href="donhang.php" style="float:right"><i class="fas fa-file-invoice"
                                style="font-size: 2.8rem"></i> Đơn hàng</a> -->
                    </p>
                </div>
                <div class=" category">
                    <p style="padding-top: 12px;" id="first_cart">CHI TIẾT ĐƠN HÀNG</p>
                </div>

                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:5%; text-align: center; vertical-align: middle;">STT</th>
                            <th style="width:5%; text-align: center; vertical-align: middle;">Mã hóa đơn</th>
                            <th style="width:5%; text-align: center; vertical-align: middle;">Mã sản phẩm</th>
                            <th style="width:30%; text-align: center; vertical-align: middle;">Ảnh sản phẩm</th>
                            <th style="width:25%; text-align: center; vertical-align: middle;">Tên sản phẩm</th>
                            <th style="width:10%; text-align: center; vertical-align: middle;">Số lượng mua</th>
                            <th style="width:15%; text-align: center; vertical-align: middle;">Đơn giá</th>
                            <th style="width:15%; text-align: center; vertical-align: middle;">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $i = 0;
                        $tongtien = 0;
                        while ($row = mysqli_fetch_array($query_lietke_dh)) {
                            $i++;
                            $tongtien += $row['GIA_BAN']*$row['SO_LUONG_MUA'];

                    ?>

                    <tr>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $i ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $row['MA_HD']; ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $row['MA_SP']; ?></a></td>
                        <td style="text-align: center; vertical-align: middle;"><a href="chitietsp.php?id=<?php echo $row['MA_SP']; ?>"><img src="img/<?php echo $row['HINH_ANH_SP']?>" style="width:250px;height:200px"></a></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $row['TEN_SP']; ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $row['SO_LUONG_MUA']; ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo number_format($row['GIA_BAN'],0,".","."); ?>đ</td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo number_format($row['GIA_BAN']*$row['SO_LUONG_MUA'],0,".","."); ?>đ</td>
                    </tr>
                    <?php
                        }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <td style="text-align: center; vertical-align: middle;"><p style="font-size:17px"><b>Tổng thanh toán:</b></p></td>
                        <td style="text-align: center; vertical-align: middle;"><p style="font-size:17px"><b><?php echo number_format($tongtien,0,".","."); ?>đ</b></p></td>
                    </tr>
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
                        <li class="footer-item "><a href="tuvan.html" class="footer-link ">Tư Vấn</a></li>
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

    </body>

    </html>