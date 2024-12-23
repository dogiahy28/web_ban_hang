<?php
    
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
    //Kết nối tới database
    include_once('db/connect.php');
    //Lấy dữ liệu nhập vào
    $tendn = addslashes($_POST['tendn']);
    $matkhau = addslashes($_POST['matkhau']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$tendn || !$matkhau) {
        // echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        echo '<script language="javascript">alert("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!"); window.location="dangnhap.php";</script>';
        exit;
    }

    // mã hóa pasword
    $matkhau = md5($matkhau);

    $sql_dn = "SELECT `TEN_DN_KH`, `MAT_KHAU_KH` FROM `khach_hang` WHERE `TEN_DN_KH`='$tendn'";

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, $sql_dn);

    if (mysqli_num_rows($query) == 0) {
        // echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        // echo '<script language="javascript">alert("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại!"); window.location="dangnhap.php";</script>';
        echo '<script language="javascript">
		alert("Tên đăng nhập này không tồn tại!. Vui lòng nhập lại!"); window.location="dangnhap.php";</script>';
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhau != $row['MAT_KHAU_KH']) {
        // echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        echo '<script language="javascript">alert("Mật khẩu không đúng. Vui lòng nhập lại!"); window.location="dangnhap.php";</script>';
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['tendn'] = $tendn;

    include_once('db/connect.php');

    $sql_dn = mysqli_query($connect,"SELECT * FROM `khach_hang` WHERE `TEN_DN_KH` = '$tendn'");
        while($row_dn = mysqli_fetch_array($sql_dn)){

    $_SESSION['id_kh'] = $row_dn['MA_CCCD'];
    header("Location: login/trangchudn.php?id=$row_dn[MA_CCCD]");

    die();
    }
}
?>