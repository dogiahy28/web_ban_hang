<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['dangnhapad']))
{
    //Kết nối tới database
    include_once('db/connect.php');
    //Lấy dữ liệu nhập vào
    $tendnnv = addslashes($_POST['tendnnv']);
    $matkhaunv = addslashes($_POST['matkhaunv']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$tendnnv || !$matkhaunv) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // mã hóa pasword
    // $matkhaunv = md5($matkhaunv);

    $sql_dn = "SELECT `TEN_DN_NV`, `MAT_KHAU_NV` FROM `nhan_vien` WHERE `TEN_DN_NV`='$tendnnv'";

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, $sql_dn);

    if (mysqli_num_rows($query) == 0) {
        // echo "Tên đăng nhập không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhaunv != $row['MAT_KHAU_NV']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['tendnnv'] = $tendnnv;
    // echo "Xin chào " . $tendnnv . ". Bạn đã đăng nhập thành công. <a href='./quanly/'>Quản Lý</a>";
    header("Location: ./quanly/");
    die();
}
?>