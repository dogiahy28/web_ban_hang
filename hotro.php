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
    <title>Hỗ trợ - Hydanz</title>
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
                                    <a id="fb" href="https://www.facebook.com/" target="_blank" title="Facebook"><i style="color: white;" class="fab fa-facebook-square"></i></a>
                                    <a id="ins" href="https://www.instagram.com/" target="_blank" title="Instagram"><i style="color: white;" class="fab fa-instagram"></i></a>
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
                                <a href="index.php">
                                    <b style="text-align: center;
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
                                            <a href="./giohang.php" style="text-decoration: none; color: rgba(207, 8, 8, 0.8);" title="Giỏ hàng" onclick="showcart()">
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
                    <a href="index.php" style="font-size: 3rem" title="Trang chủ"><i class="fas fa-home"></i></a> >
                    <a href="hotro.php" class="connect-link">Hỗ trợ khách hàng</a>
                </p>
            </div>

            <div class="banners">
                <div class="row">
                    <div class="col col-c-12 col-12">
                        <div class="banner-content">
                            <div class="banner-menu-support">

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">HỖ TRỢ & DỊCH VỤ</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-chalkboard-teacher" style="color: orange;"></i><a href="huongdan.php"> Hướng dẫn mua hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-book" style="color: yellowgreen;"></i><a href="chinhsach.php"> Chính sách mua hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-exchange-alt" style="color:blueviolet;"></i><a href="chinhsach.php"> Đổi hàng - Trả hàng</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-book-open" style="color: pink;"></i><a href="chinhsach.php"> Chính sách bảo hành</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-money-bill-wave" style="color: yellow;"></i><a href="chinhsach.php"> Hướng dẫn thanh toán</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-box" style="color: springgreen;"></i><a href=""> Chất lượng hàng hóa</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-file-invoice" style="color: tomato;"></i><a href=""> Hóa đơn VAT điện tử</a></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-piggy-bank" style="color: rgb(184, 7, 169);"></i><a href=""> Trả góp</a></td>
                                    </tr>
                                </table>

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">LIÊN HỆ MUA HÀNG</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-map-marked" style="color: aqua;"></i><a href=""> Địa chỉ: <em>456 Quang Trung, Phường Xuân Khánh, Quận Ninh Kiều, TP.Cần Thơ</em></a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-phone-square" style="color: red;"></i><a href=""> Hotline: <em>0123 45 67 89 hoặc 0909 333 666</em></a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-envelope" style="color: seagreen;"></i><a href=""> Email: <a><em>info@hydanz.com</a></em></a></td>
                                    </tr>
                                </table>

                                <!-- <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">TƯ VẤN SỬ DỤNG</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-capsules" style="color: black;"></i><a href=""> Thiết bị y tế sức khỏe</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-lungs" style="color: teal;"></i><a href=""> Chăm sóc sức khỏe</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-home" style="color: rgb(143, 29, 29);"></i><a href=""> Nhà cửa & Sức khỏe</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-lightbulb" style="color: yellow;"></i><a href=""> Mẹo vặt cuộc sống</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-tv" style="color: blue;"></i><a href=""> Giải trí</a></td>
                                    </tr>
                                </table> -->

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">TIN TUYỂN DỤNG</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-male" style="color: crimson;"></i><a href="tuyendung.php"> Vị trí cần tuyển</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-file-alt" style="color: darkcyan;"></i><a href="tuyendung.php"> Mẫu CV</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-users-cog" style="color: darkgoldenrod;"></i><a href="thongtin.php"> Về chúng tôi</a></td>
                                    </tr>
                                </table>

                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">MẸO VẶT & THÔNG TIN</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/cu-nghe.jpg" class="table-support-image"><br>
                                            <a href="">Chữa bỏng bằng củ nghệ</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/dau-tam.jpg" class="table-support-image"><br>
                                            <a href="">Tác dụng kỳ diệu của nước dâu tằm đối với sức khỏe</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/hocxuong.jpg" class="table-support-image"><br>
                                            <a href="">8 mẹo dân gian giúp chữa hóc xương cá ngay tức thì mà bạn nên biết</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/chanh.jpg" class="table-support-image"><br>
                                            <a href="">Công dụng của chanh đào mật ong và cách chế biến</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/gan.jpg" class="table-support-image"><br>
                                            <a href="">Chế độ ăn cho người bị gan nhiễm mỡ</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/matkhuugiac.jpg" class="table-support-image"><br>
                                            <a href="">Mất mùi vị khi mắc Covid và những câu hỏi thường gặp</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/taptheduc.jpg" class="table-support-image"><br>
                                            <a href="">Tập thể dục quá sức và hệ luỵ</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/thucpham.jpg" class="table-support-image"><br>
                                            <a href="">Những thực phẩm mùa thu giúp giảm cân hiệu quả</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/cac-loai-hat-tot-cho-toc.jpg" class="table-support-image"><br>
                                            <a href="">Mách nhỏ những thực phẩm ngăn ngừa rụng tóc</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/xutritaichokhibidiengiat.jpg" class="table-support-image"><br>
                                            <a href="">Sơ cứu khẩn cấp khi bỏng điện</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/phuong-phap-an-nhan-trung.jpg" class="table-support-image"><br>
                                            <a href="">Áp dụng phương phấp ấn nhân trung cho người bị ngất đột ngột</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/ky-nang-thiet-yeu-cho-tre.jpg" class="table-support-image"><br>
                                            <a href="">Những kỹ năng sinh tồn thiết yếu đối với trẻ</a></td>
                                    </tr>
                                </table>
                                <table class="table-support">
                                    <tr>
                                        <td style="text-align: center;">GÓC THƯ GIÃN</td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/funny-doctor-cartoon.png" class="table-support-image"><br>
                                            <a href="">Chết cười vì ca khó</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/ba-mon-no-tuyet-doi-tranh-khi-o-tuoi-trung-nien.jpg" class="table-support-image"><br>
                                            <a href="">Cùng suy ngẫm 3 món nợ tuyệt đối tránh ở tuổi trung niên</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/10-dieu-ve-bo-nguoi-lam-con-se-ua-nuoc-mat-khi-doc-xong.jpg" class="table-support-image"><br>
                                            <a href="">10 điều về bố, người làm con sẽ khóc khi đọc xong!</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/bai-hoc-cuoc-song.jpg" class="table-support-image"><br>
                                            <a href="">Những điều cần cần nghiệm và không thể quên trong cuộc sống</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/danh-ngon-cuoc-song.jpg" class="table-support-image"><br>
                                            <a href="">Danh ngôn cuộc sống</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/nganh-y.jpg" class="table-support-image"><br>
                                            <a href="">Bệnh nghề nghiệp</a></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><img src="img/tho-nganh-y.jpg" class="table-support-image"><br>
                                            <a href="">Thơ cho sĩ tử ngành y</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/nuoc-mat-va-nu-cuoi-mot-nguoi-me-trong-nghe-y.jpg" class="table-support-image"><br>
                                            <a href="">Nước mắt và nụ cười của một người mẹ trong ngành y</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/tinh-nghia-vo-chong-nhung-dieu-dang-ngam.jpg" class="table-support-image"><br>
                                            <a href="">Tình nghĩa vợ chồng những điều đáng ngẫm</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/khong-tu.jpg" class="table-support-image"><br>
                                            <a href="">Khổng Tử với những câu nói muôn đời giá trị</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/chuyen-suy-ngam.jpg" class="table-support-image"><br>
                                            <a href="">Đừng vội đánh giá người khác khi mình chưa biết hết về họ</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/su-tich-ao-blue-trang.jpg" class="table-support-image"><br>
                                            <a href="">Sự tích chiếc áo Blouse trắng</a></td>
                                    </tr>
                                </table>      
                            </div>
                            <div class="grid wide-support">
                                <div class="category">
                                    <p>TRUNG TÂM HỖ TRỢ KHÁCH HÀNG</p>
                                </div>
                                

                                <img src="img/cskh.jpg" class="banner-img">

                                <table class="table-support-insurance">

                                    <tr>
                                        <td colspan="2"><i class="fas fa-wrench"></i> Chính sách bảo hành</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="chinhsach.php"><img src="img/quydinhbh.png"><br><br> Quy định bảo hành</a>
                                        </td>
                                        <td>
                                            <a href="chinhsach.php"><img src="img/tracuubh.png"><br><br> Tra cứu địa chỉ bảo hành</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="chinhsach.php"><img src="img/tiendobh.png"><br><br> Tiến độ bảo hành</a>
                                        </td>
                                        <td>
                                            <a href="chinhsach.php"><img src="img/doitrahotro.png"><br><br> Chính sách đổi trả</a>
                                        </td>
                                    </tr>
                                </table>
                                <br>

                                <table class="table-support-insurance">
                                    <tr>
                                        <td colspan="2"><i class="fas fa-shopping-bag"></i> Dịch vụ bán hàng</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href=""><img src="img/chatluonghh.png"><br><br> Chất lượng hàng hóa</a>
                                        </td>
                                        <td>
                                            <a href="chinhsach.php"><img src="img/csgiaohang.png"><br><br> Chính sách giao hàng</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="huongdan.php"><img src="img/hdmuahang.png"><br><br> Hướng dẫn mua hàng</td>
                                        <td>
                                            <a href="huongdan.php"><img src="img/hdthanhtoan.png"><br><br> Hướng dẫn thanh toán</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href=""><img src="img/mienphi.png"><br><br> Danh sách khu vực miễn phí</a>
                                        </td>
                                        <td>
                                            <a href=""><img src="img/hoadondt.png"><br><br> Hóa đơn điện tử</a>
                                        </td>
                                    </tr>
                                </table>

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
                                            <input type="email" placeholder="Nhập địa chỉ email..." name="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required>
                                        </div>
                                        <h3 style="font-size: 1.8rem;">Điện thoại</h3>
                                        <div class="input-box">
                                            <i></i>
                                            <input type="phone" maxlength="10" placeholder="Nhập số điện thoại..." required>
                                        </div>
                                        <h3 style="font-size: 1.8rem;">Nội dung</h3>
                                        <div class="input-box">
                                            <textarea rows="10" cols="50" method="post" minlength="20" maxlength="200" placeholder="Nội dung cần liên hệ..." required></textarea>
                                        </div>
                                        <div class="btn-box">
                                            <button type="submit" value="Gửi" class="btn--primary">
                                                    Gửi
                                                </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="category">
                                    <p>MỘT SỐ VIDEO KHOA HỌC</p>
                                </div>

                                <table class="table-video">
                                    <tr>
                                        <td><video controls class="video-support"><source src="video/ykhoa.mp4"></video></td>
                                    </tr><br>

                                    <tr>
                                        <td><video controls class="video-support"><source src="video/dna.mp4"></video></td>
                                    </tr><br>

                                    <tr>
                                        <td><video controls class="video-support"><source src="video/vacin.mp4"></video></td>
                                    </tr><br>

                                </table>

                                <div class="category">
                                    <p>MỘT SỐ VIDEO HÀI HƯỚC</p>
                                </div>

                                <table class="table-video">
                                
                                <tr>
                                    <td><video controls class="video-support"><source src="video/deokhautranghai.mp4"></video></td>
                                </tr><br>
                                
                                <tr>
                                    <td><video controls class="video-support"><source src="video/hai2.mp4"></video></td>
                                </tr><br>
                                
                                <tr>
                                    <td><video controls class="video-support"><source src="video/hai3.mp4"></video></td>
                                </tr><br>
                                </table>
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