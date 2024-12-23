<?php
    session_start();
    if (!isset($_POST['hoten'])){
        die('');
    }

    //Nhúng file kết nối với database
    include_once('db/connect.php');

    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    //Lấy dữ liệu từ file dangky.php
    $cccd = addslashes($_POST['cccd']);
    $hoten = addslashes($_POST['hoten']);
    $sdt = addslashes($_POST['sdt']);
    $email = addslashes($_POST['email']);
    $diachi = addslashes($_POST['diachi']);
    $tendn = addslashes($_POST['tendn']);
    $matkhau = addslashes($_POST['userpass']);

    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$cccd || !$hoten || !$sdt || !$email || !$diachi || !$tendn || !$matkhau)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
        // Mã khóa mật khẩu
        $matkhau = md5($matkhau);
    
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
        $sql = "SELECT * FROM `khach_hang` WHERE `MA_CCCD` = '$cccd' OR `EMAIL_KH` = '$email' OR `SDT_KH` = '$sdt' OR `TEN_DN_KH` = '$tendn'";
    
        $result = mysqli_query($connect, $sql);
        
    if (mysqli_num_rows($result) > 0)
        {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangky.php";</script>';
        // Dừng chương trình
        die ();
        }
            
    $sql_dk = "INSERT INTO `khach_hang`(`MA_CCCD`, `TEN_KH`, `SDT_KH`, `EMAIL_KH`, `DIA_CHI_KH`, `TEN_DN_KH`, `MAT_KHAU_KH`)
                    VALUE ('{$cccd}','{$hoten}','{$sdt}','{$email}','{$diachi}','{$tendn}','{$matkhau}')";
    
    $dangky = mysqli_query($connect, $sql_dk);
    
    
    //Thông báo quá trình lưu
    if($dangky)
    
        // echo "Bạn đã đăng ký thành công. <a href='index.php'>Về trang chủ</a>. <a href='dangnhap.php'>Đăng nhập ngay</a>.";
        echo '<script language="javascript">
		        if(confirm("Bạn đã đăng ký thành công. Bạn có muốn đăng nhập không?")){
			        document.location="dangnhap.php";
		        }else{
			        document.location="index.php";
		        }
	        </script>';
        
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>


