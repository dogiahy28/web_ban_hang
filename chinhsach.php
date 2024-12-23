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
    <title>Chính sách - Hydanz</title>
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
        <br>
        <div class="grid wide">
            <p style="text-align: left; font-size: 2rem;">
                <a href="index.php" style="font-size: 3rem" title="Trang chủ"><i class="fas fa-home"></i></a> >
                <a href=" " class="connect-link">Các chính sách mua hàng</a>
            </p>

            <div class="category">
                <p id="csgiaohang">CHÍNH SÁCH GIAO HÀNG</p>
            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> GIAO HÀNG</h2>

            <div class="info">
                <p>- Sau khi bạn đặt hàng, trong vòng 24 giờ (trừ Lễ, Tết,...) chúng tôi sẽ liên lạc lại để kiểm tra thông tin và thỏa thuận thêm những điều khoản khác có liên quan. Một số trường hợp khác, chúng tôi sẽ chủ động liên lạc với quý khách để
                    thống nhất lại thời gian giao hàng cụ thể.</p>

                <p>- Những rủi ro phát sinh trong quá trình vận chuyển (va đập, ẩm ướt, tai nạn..) có thể ảnh hưởng đến hàng hóa, vì thế xin Quý khách vui lòng kiểm tra hàng hóa thật kỹ trước khi ký nhận. Chúng tôi sẽ không chịu trách nhiệm với những sai
                    lệch hình thức của hàng hoá sau khi Quý khách đã ký nhận hàng.</p>
            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> GIAO HÀNG THEO HÌNH THỨC:</h2>

            <div class="info">
                <p>1. Nhân viên công ty giao hàng và thu tiền trực tiếp tại khu vực nội thành TP.Cần Thơ.</p>
                <p>2. Chuyển hàng qua bưu điện và các dịch vụ giao hàng nhanh theo hình thức COD (đối với hàng nhỏ gọn).</p>
                <p>3. Giao hàng tại nhà xe theo yêu cầu của khách hàng và nhận tiền thanh toán từ phía nhà xe.</p>
                <p>4. Chúng tôi giao hàng TẬN NƠI khu vực nội thành TP.Cần Thơ.</p>
            </div>
            
            <div class="category">
                <p id="csdoitra">CHÍNH SÁCH ĐỔI TRẢ HÀNG VÀ HOÀN TIỀN</p>
            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> TRƯỜNG HỢP ĐƯỢC ĐỔI TRẢ HÀNG:</h2>

            <div class="info">
                <p>Nhằm chăm sóc và đảm bảo quyền lợi khách hàng, chúng tôi sẵn sàng thực hiện đổi trả hàng cho những trường hợp sau:</p>
                <p>1. Hàng không đúng chủng loại, mẫu mã như quý khách đặt hàng.</p>
                <p>2. Không đủ số lượng, không đủ bộ như trong đơn hàng.</p>
                <p>3. Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</p>
                <p>4. Sai thông tin bảo hành theo chính sách bảo hành của HYDANZ.</p>
                <p>5. Hàng bị lỗi, không đạt chất lượng như không vận hành được, hỏng hóc khách quan trong phạm vi bảo hành của nhà cung cấp, nhà sản xuất…</p>
            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> TRƯỜNG HỢP KHÔNG ĐƯỢC ĐỔI TRẢ HÀNG:</h2>

            <div class="info">
                <p>1.Gửi lại hàng không đúng mẫu mã, không phải hàng của HYDANZ.</p>
                <p>2. Vi phạm các quy định về sử dụng của nhà sản xuất (va chạm , làm rơi vỡ…).</p>
                <p>3. Hết thời hạn bảo hành hoặc không thực hiện các quy định theo hướng dẫn để được hưởng chế độ bảo hành.</p>
                <p>4. Hàng gửi trả mà có lỗi phát sinh do quá trình vận chuyển từ nơi khách hàng đến <a>CỬA HÀNG HYDANZ</a>.</p>
            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> THỜI GIAN VÀ THỦ TỤC ĐỔI TRẢ HÀNG:</h2>

            <div class="info">
                <p>Quý khách hàng vui lòng gửi thông tin về mặt hàng muốn đổi càng sớm càng tốt hoặc qua email: <u><i><a>info@hydanz.com</a></i></u>. </p>
                Khi đó, nhân viên tư vấn & bán hàng trực tuyến sẽ chủ động gọi điện để hỗ trợ khách hàng và hướng dẫn chi tiết thời gian & địa điểm đổi hàng cụ thể.</p>

                <p><b><i>Thời gian đổi trả:</i></b></p>
                <p>1. Tại cửa hàng showroom HYDANZ: trong vòng 15 ngày theo ngày trên hóa đơn giao hàng.</p>
                <p>2. Tại các tỉnh thành khác TP.Cần Thơ: trong vòng 30 ngày theo ngày trên biên nhận của dịch vụ chuyển trả hoặc dấu bưu điện.</p>

                <p><b><i>Thủ tục đổi trả:</i></b></p>
                <p>1. Đóng gói toàn bộ sản phẩm vào lại bao hay hộp mà <a>HYDANZ</a> gửi đến cho Quý khách. Xin vui lòng ghi rõ lý do cho từng sản phẩm mà quý khách muốn đổi hoặc trả vào hóa đơn bán hàng cùng với sản phẩm.</p>
                <p>2. Ngay sau khi gửi hàng, vui lòng gửi email hoặc gọi cho phòng chăm sóc khách hàng của cửa hàng thông báo hiện trạng hàng (các chi tiết cụ thể khác)</p>
                <p>3. Sau khi nhận được sản phẩm đổi trả, công ty sẽ có phúc đáp cho quý khách hoặc chủ động liên lạc với quý khách để giải quyết các vấn đề (nếu có).</p>
                <p>Chúng tôi mong tiếp tục nhận được sự ủng hộ và góp ý của quý khách, để ngày càng hoàn thiện dịch vụ và mang đến sự hài lòng cho quý khách hàng.</p>

            </div>

            <h2 style="font-size: 2.5rem;"><i class="fas fa-angle-double-right"></i> THỜI GIAN VÀ THỦ TỤC ĐỔI TRẢ HÀNG:</h2>
            </h2>

            <div class="info">
                <p><b><i>1. Nguyên tắc hoàn tiền:</i></b></p>
                <p>- Phương thức hoàn tiền căn cứ theo phương thức thanh toán của Quý khách hàng khi mua hàng.</p>
                <p>- Hoàn tiền khi khách hàng sử dụng mã giảm giá, Giftcode: trong các trường hợp đặc biệt được công ty chấp nhận hoàn tiền khi khách hàng sử dụng Giftcode, HYDANZ sẽ không hoàn lại khoản giá trị Giftcode khách hàng đã sử dụng mà chỉ hoàn
                    lại khoản tiền khách hàng thực tế bỏ ra khi mua hàng.</p>

                <p><b><i>2. Phương thức hoàn tiền:</i></b></p>
                <p>- Hoàn tiền thông qua chuyển khoản ngân hàng.</p>
                <p>- Hoàn tiền thông qua ngân hàng chấp nhận thẻ.</p>
                <p>- Hoàn tiền mặt tại trung tâm đổi trả của HYDANZ.</p>
                <p>- Hoàn tiền thông qua hệ thống Banknet.</p>

                <p><b><i>3. Thời gian xử lý:</i></b></p>
                <p>- Thương Hiệu HYDANZ sẽ gửi kết quả phản hồi yêu cầu đổi trả tới quý khách hàng thông qua email hoặc/và tin nhắn SMS trong vòng tối đa 02 ngày làm việc kể từ khi HYDANZ nhận yêu cầu đổi trả.</p>
                <p>- Nếu yêu cầu hoàn trả của khách hàng đáp ứng các điều kiện quy định tại khoản 1, mục II của Chính sách này, HYDANZ sẽ thực hiện thủ tục hoàn tiền cho khách hàng kể từ khi yêu cầu đổi trả được thực hiện trong thời gian như sau:</p>
                <p>1. Với phương thức thanh toán không thông qua ngân hàng: khách hàng sẽ nhận được tiền hoàn từ 5-7 ngày làm việc.</p>
                <p>2. Với phương thức thanh toán thông qua ngân hàng: HYDANZ sẽ hoàn tất thủ tục hoàn tiền để chuyển yêu cầu đến ngân hàng trong vòng 5-7 ngày làm việc. Sau đó, ngân hàng sẽ tiếp tục xử lý yêu cầu hoàn tiền của Quý khách hàng trong vòng
                    7 đến 15 ngày làm việc kể từ lúc nhận được yêu cầu.</p>
            </div>

            <div style="text-align: right;">
                <img src="img/logo.png">
                <h2 style="font-size: 2.5rem; "><a>CỬA HÀNG HYDANZ</a></h2>
            </div>
        </div>
    </main>

    <footer class="footer ">
        <div class="grid wide ">
            <!-- <div class="row ">
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