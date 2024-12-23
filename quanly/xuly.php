<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "webbanhang";      // Khai báo database

// Kết nối database 
$connect = new mysqli($server, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Không thể kết nối :" . $conn->connect_error);
}

//lấy tiếng việt utf8
mysqli_set_charset($connect,"utf8");

$sql_themsp = "SELECT * FROM `san_pham`";
$query_themsp = mysqli_query($connect, $sql_themsp);
    
$masp = $_POST['MA SP'];
$maloai = $_POST['MA LOAI'];
$tensp = $_POST['TEN SP'];
$motasp = $_POST['MO TA SP'];
$nhacc = $_POST['NHA CC'];
$trangthai = $_POST['TRANG THAI'];
$giagoc = $_POST['GIA GOC SP'];
$giasp = $_POST['GIA SP'];

//xử lý hình ảnh
$hinhanh = $_FILES['HINH ANH SP']['name'];
$hinhanh_tmp = $_FILES['HINH ANH SP']['tmp_name'];
$hinhanh = time() . '' . $hinhanh;


if (isset($_POST['themsanpham'])) {
    //thêm
    $sql = "INSERT INTO `san_pham`(`MA SP`, `MA LOAI`, `TEN SP`, `MO TA SP`, `NHA CC`, `TRANG THAI`, `GIA GOC SP`, `GIA SP`, `HINH ANH SP`)
                VALUES ('" . $masp . "','" . $maloai . "','" . $tensp. "','" . $motasp . "','" . $nhacc . "','" . $trangthai . "','" . $giagoc. "','" . $giasp .  "','" . $hinhanh . "')";
    $query = mysqli_query($connect, $sql);
    move_uploaded_file($hinhanh_tmp, 'img/'.$hinhanh); 
    header('Location:../../index.php?action=quanly&query=them');
} elseif (isset($_POST['suasanpham'])) {
    //sửa
    // if ($hinhanh != '') {

    //     move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

    //     $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` = '$_GET[idsanpham]' LIMIT 1";
    //     $query = mysqli_query($connect, $sql);
    //     while ($row = mysqli_fetch_array($query)) {
    //         unlink('uploads/' . $row['SP_HINHANH']);
    //     }
    //     $sql_update = "UPDATE `sanpham` SET `SP_MASANPHAM`='" . $masanpham . "',`LSP_MA`='" . $maloaisp . "',`SP_TENSANPHAM`='" . $tensanpham . ",
    //                         `SP_GIABAN`='" . $giasp . "',`SP_SOLUONG`='" . $soluong . "',`SP_HINHANH`='" . $hinhanh . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    // } else {
    //     $sql_update = "UPDATE `sanpham` SET `SP_MASANPHAM`='" . $masanpham . "',`LSP_MA`='" . $maloaisp . "',`SP_TENSANPHAM`='" . $tensanpham . ",
    //                         `SP_GIABAN`='" . $giasp . "',`SP_SOLUONG`='" . $soluong . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    // }

    move_uploaded_file($hinhanh_tmp, 'img/' . $hinhanh);

    $sql = "SELECT * FROM `san_pham` ORDER BY `san_pham`.`MA SP` = '$_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('img/' . $row['HINH ANH SP']);
    }
    $sql_update = "UPDATE `san_pham` SET `SP_MASANPHAM`='" . $masanpham . "',
                                        `LSP_MA`='" . $maloaisp . "',
                                        `SP_TENSANPHAM`='" . $tensanpham . "',
                                        `SP_GIABAN`='" . $giasp . "',
                                        `SP_SOLUONG`='" . $soluong . "',
                                        `SP_HINHANH`='" . $hinhanh . "' WHERE `SP_MASANPHAM`='$_GET[idsanpham]'";
    mysqli_query($connect, $sql_update);
    header('Location:../../index.php?action=quanly&query=them');
} else {
    //xoa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM `sanpham` ORDER BY `sanpham`.`SP_MASANPHAM` = '$id' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['SP_HINHANH']);
    }

    $slq_xoa = "DELETE FROM sanpham WHERE `sanpham`.`SP_MASANPHAM` = '" . $id . "'";
    mysqli_query($connect, $slq_xoa);
    header('Location:../../index.php?action=quanly&query=them');
}