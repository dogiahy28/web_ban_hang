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
    <link rel="canonical" href="https://thietbiytevp.com:443/" />
    <link rel="DCTERMS.replaces" hreflang="vi" href="https://thietbiytevp.com:443/" />
    <link rel="icon" href="../favicon.ico" type="image/icon" />
    <!-- <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles/products.css" rel="stylesheet" type="text/css" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" />
    <link href="styles/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../img/logo.png">

    <script src="../js/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/flaunt.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="jBasket/fly-to-basket/inc/js/custom.js"></script>
    <script src="js/quantity.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../img/logo.png">

    <link rel="shortcut icon" href="../logo_.ico" type="image/ico" />
    <title>Giỏ hàng - Hydanz</title>
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
                                    <a href="thongbao.html">Thông báo</a>
                                </li>
                                <li class="header_navbar-list-item">
                                    <i style="color: white; margin-right: 2px" class="fas fa-question-circle"></i>
                                    <a href="hotro.html">Hỗ trợ</a>
                                </li> -->
                                <li class="header_navbar-list-item header_navbar-list-item--sepa">
                                <a href="canhan.php?id=<?php echo $_SESSION['id_kh'] ?>" style="font-size:1.7rem; font-weight: bold" title="Trang cá nhân">
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
                                <img class="header_logo-img" src="../img/logo.png" alt="">
                                <a href="trangchudn.php?id=<?php echo $_SESSION['id_kh'] ?>">
                                    <b
                                        style="text-align: center;
                                            font-size: 2rem;
                                            color: #222222;
                                            /* letter-spacing: .05em; */
                                            text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgb(105 105 105);">HYDANZ</b>
                                </a>
                            </div>

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
                                        <!-- <div class="giohang">
                                            <a href="./giohang.php"
                                                style="text-decoration: none; color: rgba(207, 8, 8, 0.8);"
                                                title="Giỏ hàng" onclick="showcart()">
                                                <i class="fas fa-shopping-cart" style="font-size: 25px;"></i>
                                                <span id="countsp" style="font-size:large">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                        <div id="showcart">
                                        </div> -->
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
        <div class="container">
        <?php
                    while($row_dn = mysqli_fetch_array($sql_trang_ca_nhan)){
                ?>
            <div>
                <p style="text-align: left; font-size: 2rem;">
                
                    <a href="trangchudn.php?id=<?php echo $_SESSION['id_kh']  ?>" style="font-size: 3rem" title="Trang chủ"><i class="fas fa-home"></i></a>
                    >
                    <a href="" class="connect-link">Giỏ hàng</a>

                    <a href="dsdonhangdn.php" style="float:right"><i class="fas fa-file-invoice"
                            style="font-size: 2.8rem"></i> Đơn mua</a>
                
                </p>
            </div>
            <div class=" category">
                <p style="padding-top: 12px;" id="first_cart">THÔNG TIN GIỎ HÀNG</p>
            </div>

                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:5%; text-align: center; vertical-align: middle;">STT</th>
                            <th style="width:5%; text-align: center; vertical-align: middle;">Mã sản phẩm</th>
                            <th style="width:20%; text-align: center; vertical-align: middle;">Ảnh sản phẩm</th>
                            <th style="width:20%; text-align: center; vertical-align: middle;">Tên sản phẩm</th>
                            <th style="width:10%; text-align: center; vertical-align: middle;">Số lượng</th>
                            <th style="width:10%; text-align: center; vertical-align: middle;">Giá sản phẩm</th>
                            <th style="width:12%; text-align: center; vertical-align: middle;">Thành tiền</th>
                            <th style="width:7%; text-align: center; vertical-align: middle;">Xóa</th>
                        </tr>
                    </thead>
                    <!-- <tbody id="mycart">

                    </tbody> -->
                    <?php
                        if(isset($_SESSION['cart'])){
                            $i=0;
                            $tongtien=0;
                            foreach($_SESSION['cart'] as $cart_item){
                                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                $tongtien += $thanhtien;
                                $i++;
                    ?>
                    <tbody>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $cart_item['id']; ?></td>
                        <td style="text-align: center; vertical-align: middle;"><a href="chitietspdn.php?id=<?php echo $cart_item['id'] ?>"><img src="../img/<?php echo $cart_item['hinhanh']; ?> " width="180px"></a></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $cart_item['tensanpham']; ?></td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="themgiohangdn.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus-square" style="font-size:23px"></i></a>
                                <?php echo $cart_item['soluong']; ?>
                            <a href="themgiohangdn.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus-square" style="font-size:23px"></i></a>
                        </td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo number_format($cart_item['giasp'],0,".","."); ?>đ</td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo number_format($thanhtien,0,".","."); ?>đ</td>
                        <td style="text-align: center; vertical-align: middle;"><a href="themgiohangdn.php?xoa=<?php echo $cart_item['id'] ?>" style="font-size:25px"><i class="fas fa-backspace"></i></a></td>
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
                        <td style="text-align: center; vertical-align: middle;"><p style="font-size:17px"><b>Tổng thanh toán:</b></p></td>
                        <td style="text-align: center; vertical-align: middle;"><p style="font-size:17px"><b><?php echo number_format($tongtien,0,".","."); ?>đ</b></p></td>
                        <td style="text-align: center; vertical-align: middle;"><p style="text-align:center"><a href="themgiohangdn.php?xoatatca=1" onclick="return confirm('Bạn có chắc chắn muốn xóa tất cả sản phẩm trong giỏ hàng?')">Xóa tất cả<br><i class="fas fa-window-close" style="font-size:25px"></i></a></p></td>
                    </tr>
                    <?php
                        }else{
                    ?>
                    <tr>
                        <td colspan="8" style="text-align: center; vertical-align: middle;">
                        <br>
                            <p style="font-size:1.8rem;">Chưa có sản phẩm nào trong giỏ hàng!</p>
                            <button name="muahang" style="background-color:rgba(221, 30, 30, 0.8); width:150px; height:35px; font-size:1.5rem;">
                                <a href="trangchudn.php?id=<?php echo $_SESSION['id_kh'] ?>"><b> Mua ngay</b></a>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
                <?php
                    if(isset($_SESSION['cart'])){
                ?>
                <div class=" category">
                    <p style="padding-top: 12px;" id="first_cart">THÔNG TIN NGƯỜI NHẬN</p>
                </div>

                <form action="thanhtoandn.php" method="POST" style="text-align: center;">
                        <input type="hidden" name="masp" value="<?php echo $cart_item['id']; ?>">
                        <input type="hidden" name="anhsp" value="<?php echo $cart_item['hinhanh']; ?>">
                        <input type="hidden" name="tensp" value="<?php echo $cart_item['tensanpham']; ?>">
                        <input type="hidden" name="soluong" value="<?php echo $cart_item['soluong']; ?>">
                        <input type="hidden" name="tongtien" value="<?php echo $tongtien ?>">
                        <!-- Lấy giờ ở Việt Nam -->
                        <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
                        <input type="hidden" name="ngayban" value="<?php echo date("Y/m/d h:i:s") ?>">

                <table class="thongtinkhachhang">
                    <tr>
                        <th class="trai">Họ và tên</th>
                        <th  style="width:750px; height:50px"><input style="height:35px" type="text" value="<?php echo $row_dn['TEN_KH'] ?>" name="hoten" required></th>
                    </tr>
                    <tr>
                        <th class="trai">Số điện thoại</th>
                        <th style="width:750px; height:50px">
                            <input style="height:35px" type="text" value="<?php echo $row_dn['SDT_KH'] ?>" pattern="\d{9,10}" name="sdt" required>
                        </th>
                    </tr>
                    <tr>
                        <th class="trai">Email</th>
                        <th style="width:750px; height:50px"><input style="height:35px" type="email" value="<?php echo $row_dn['EMAIL_KH'] ?>" name="email"
                                pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required></th>
                    </tr>
                    <tr>
                        <th class="trai">Địa chỉ nhận hàng</th>
                        <th style="width:750px; height:50px"><input style="height:35px" type="text" value="<?php echo $row_dn['DIA_CHI_KH'] ?>" name="diachi" required></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>
                        <!-- <button name="muahang" class="btn btn-success btn-block"><i class="fab fa-cc-amazon-pay"></i> Mua hàng</button> -->
                        <button name="muahang" style="background-color:rgba(221, 30, 30, 0.8); width:150px; height:35px; font-size:1.5rem;"><b><i class="fab fa-cc-amazon-pay"></i> Mua hàng</b></button>
                    </th>
                    </tr>
                </table>
                </form>
                <?php
                    }else{
                    }
                ?>
            <?php
                }
            ?>
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
    showgiohang_trangthanhtoan()
    </script>
</body>

</html>