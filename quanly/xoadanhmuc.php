<?php
include_once(__DIR__ .'/dbconnect.php');
    
$maloai = $_GET['id'];

$sql = "DELETE FROM `loai_san_pham` WHERE `MA_LOAI`='$maloai'";

echo '<script language="javascript">alert("Xóa danh mục thành công"); window.location="dsdanhmuc.php"</script>';

$result = mysqli_query($connect, $sql);

mysqli_close($connect);

// header('location:dsdanhmuc.php');
?>