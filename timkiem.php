<?php
    session_start();
    include_once('db/connect.php');
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
        </div>

    </header>
    <div class="container">

                        <?php
                            if (isset($_REQUEST['ok']))
                            {
                                // Gán hàm addslashes để chrống sql injection
                                $search = addslashes($_GET['search']);
                    
                                // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                                if (empty($search)) {
                                    echo "Bạn chưa nhập dữ liệu!!!";
                                }
                                else
                                {
                                    $query = "SELECT * FROM `san_pham` WHERE `TEN_SP` LIKE '%$search%' OR `TEN_NCC` LIKE '%$search%'";
                                    $sql = mysqli_query($connect, $query);
                    
                                    $num = mysqli_num_rows($sql);
                    
                                    echo "<p style='text-align:center; font-size:1.8rem;'>Tìm thấy <b>$num</b> sản phẩm với từ khóa tìm kiếm: <b>$search</b></p>";
                                }
                            }
                        ?>

    <div class="row product_SPBC">

                <?php
                        while ($row = mysqli_fetch_assoc($sql)) {
                    ?>

<div class="col col-3 col-c-3">
                    <div class="home-product-item">
                        <div class=" home-product-item__img">
                            <img src="img/<?php echo $row['HINH_ANH_SP'] ?>" alt="sp">
                        </div>

                        <h4 class="home-product-item__name">
                            <a href="chitietsp.php?id=<?php echo $row['MA_SP'] ?>" style="text-decoration: none">
                                <?php echo $row['TEN_SP'] ?>
                                <br><br>
                                Trạng thái: <?php
                                                    if ($row['SO_LUONG'] > 0) {
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
                                    echo number_format($row['GIA_GOC'],0,".",".")
                                ?>đ
                            </span>
                            <span class="home-product-item__price-current">
                                <?php
                                    echo number_format($row['GIA_BAN'],0,".",".")
                                ?>đ
                            </span>
                        </div>
                        <!-- <div class="soluong" style="padding-left: 12px;font-size: 14px;">
                            Số lượng: <input aria-label="quantity" class="input-qty" max="100" min="1" name=""
                                type="number" value="1"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;">
                        </div> -->
                            <!-- <button class="home-product-item-button" type="submit" name="addtocart">Thêm vào giỏ</button> -->
                        </div>
                </div>

                <?php
                    }
                ?>

        <!-- <table class="table table-borderd">
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Mã Loại</th>
                    <th>Hình Ảnh Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Mô Tả Sản Phẩm</th>
                    <th>Nhà cung cấp</th>
                    <th>Trạng Thái</th>
                    <th>Giá Gốc</th>
                    <th>Giá Bán</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    while ($row = mysqli_fetch_assoc($sql)) {    
                
                ?>
                <tr>
                    <td><?php echo $row['MA_SP']; ?></td>
                    <td><?php echo $row['MA_LOAI']; ?></td>
                    <td><img src="./img/<?php echo $row['HINH_ANH_SP'] ?>" alt="sp"
                            style="width:200px;height:200px">
                    </td>
                    <td><?php echo $row['TEN_SP']; ?></td>
                    <td><?php echo $row['MO_TA_SP']; ?></td>
                    <td><?php echo $row['TEN_NCC']; ?></td>
                    <td>
                        <p>Còn hàng</p>
                    </td>
                    <td><?php echo number_format($row['GIA_GOC'],0,".",".") ?>đ</td>

                    <td><?php echo number_format($row['GIA_BAN'],0,".",".") ?>đ</td>

                    <td><a href="chitietsp.php?id=<?php echo $row['MA_SP'] ?>" style="color:rgba(207, 8, 8, 0.8)">
                            Xem chi tiết ==>
                        </a>

                </tr>
                <?php 
                    }
                ?>

            </tbody>
            <br>
            <p style="text-align: left; font-size: 2rem;">
                <a href="javascript: history.go(-1)" style="font-size: 3rem" title="Trang chủ"><i
                        class="fas fa-home"></i></a> 
                        
                >
                <a href=" " class="connect-link">Thông tin tìm kiếm</a>
            </p>
            <!-- <button style=" text-align:right; background-color:red">
                <a href='javascript: history.go(-1)' id="" class=" btn btn-primary" title="Đóng"
                    style="background-color:red; font-size:20px">Trở về
                </a>
            </button> -->
        
    </div>
    <br>
    <footer class="footer ">
    <div class="grid wide ">
            <div class="row ">
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading "><b>CHĂM SÓC KHÁCH HÀNG</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Liên Hệ</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Hỗ Trợ</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Chính Sách</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Hướng Dẫn Mua Hàng</a>
                        </li>
                        <li class="footer-item "><a href="tuvan.php" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Tư Vấn</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>THÔNG TIN</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Tin Tức</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Tuyển Dụng</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Điều Khoản</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Video Clip</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Y Học Quanh Ta</a></li>
                    </ul>
                </div>
                <div class="col col-3 col-c-12 ">
                    <h3 class="footer-heading"><b>SẢN PHẨM NỔI BẬT</b></h3>
                    <ul class="footer-list ">
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Cân sức khỏe</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Máy đo đường huyết</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Khẩu trang</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Máy massage</a></li>
                        <li class="footer-item "><a href="" style="text-decoration: none;color: #333333;font-size: 1.4rem;">Máy đo huyết áp</a></li>

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