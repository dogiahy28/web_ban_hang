<?php

include_once(__DIR__ .'/dbconnect.php');

$masp = $_GET['id'];

// echo '<script language="javascript">
// 				if(confirm("Are you sure you want to delete this..?") === true){
// 					return true;
// 				}else{
// 					return false;
// 				}
//  			}
// 	</script>';

$sql = "DELETE FROM `san_pham` WHERE `MA_SP`='$masp'";

echo '<script language="javascript">alert("Xóa sản phẩm thành công"); window.location="dssanpham.php"</script>';

$result = mysqli_query($connect, $sql);

mysqli_close($connect);

// header('location:dssanpham.php');

?>