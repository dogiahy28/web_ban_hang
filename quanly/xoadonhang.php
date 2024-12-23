<?php

include_once(__DIR__ .'/dbconnect.php');

$madonhang = $_GET['id'];

$sql = "DELETE FROM `hoa_don` WHERE `MA_HD`='$madonhang'";

echo '<script language="javascript">alert("Xóa đơn hàng thành công"); window.location="dsdonhang.php"</script>';

$result = mysqli_query($connect, $sql);

mysqli_close($connect);

// header('location:dssanpham.php');

?>