<?php
    session_start();
    include_once('db/connect.php');

    $id_kh = "";
    $code_order = rand(0,9999);
    // $tongtien = $_POST['tongtien'];
    $tenkh = $_POST['hoten'];
    $sdtkh = $_POST['sdt'];
    $emailkh = $_POST['email'];
    $diachikh = $_POST['diachi'];
    // $thanhtien = $_POST['tongtien'];
    $thanhtien = addslashes($_POST['tongtien']);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaylap = date("Y/m/d h:i:s");

    $insert_cart = "INSERT INTO `hoa_don`(`MA_CCCD`, `MA_HD`, `THANH_TIEN`,  `TRANG_THAI_HD`, `TEN_KH`, `SDT_KH`, `EMAIL_KH`, `DIA_CHI_KH`, `NGAY_LAP`) VALUES ('$id_kh', '$code_order', '$thanhtien', 'Đang xử lý', '$tenkh', '$sdtkh', '$emailkh', '$diachikh' , '$ngaylap')";
    $cart_query = mysqli_query($connect, $insert_cart);

    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sp = $value['id'];
            $soluong = $value['soluong'];

            $insert_cart_detail = "INSERT INTO `chi_tiet_hd`(`MA_HD`, `MA_SP`, `SO_LUONG_MUA`) VALUES ('$code_order', '$id_sp', '$soluong')";
            mysqli_query($connect, $insert_cart_detail);

            // Tru so luong san pham
            $tru_soluong = "UPDATE `san_pham` SET `SO_LUONG` = `SO_LUONG` - '$soluong' WHERE `MA_SP`='$id_sp'";
            // $sql = "UPDATE `hoa_don` SET `TRANG_THAI_HD`='$trangthaidh' WHERE `MA_HD`='$mahd'";
            mysqli_query($connect, $tru_soluong);
        }
    }

    unset($_SESSION['cart']);
    header("location: camon.php")

?>

