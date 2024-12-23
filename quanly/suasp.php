<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật - Sửa</title>
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once(__DIR__ . '/dbconnect.php');

        $masp=$_GET['id'];
        $query=mysqli_query($connect,"SELECT * FROM `san_pham` where `MA_SP`='$masp'");
        $row=mysqli_fetch_assoc($query);
    ?>


    <div class="container">
        <h1>Cập Nhật - Sửa Sản Phẩm</h1>

        <form name="frmEdit" id="frmEdit" method="POST" action="" class="form" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Mã Loại</td>
                    <td><input type="text" name="maloai" id="maloai" class="form-control"
                            value="<?php echo $row['MA_LOAI'] ?>" /></td>
                </tr>
                <tr>
                    <td>Tên Sản Phẩm</td>
                    <td><input type="text" name="tensp" id="tensp" class="form-control"
                            value="<?php echo $row['TEN_SP'] ?>" /></td>
                </tr>
                <tr>
                    <td>Mô Tả Sản Phẩm</td>
                    <td><input type="text" name="motasp" id="motasp" style="height:100px;" class="form-control"
                            value="<?php echo $row['MO_TA_SP'] ?>" /></td>
                </tr>
                <tr>
                    <td>Mã Nhà Cung Cấp</td>
                    <td><select name="tenncc" id="tenncc">
                            <?php
                                $sql_sanpham = "SELECT *FROM `nha_cung_cap` ORDER BY `MA_NCC` ASC";
                                $query_sanpham = mysqli_query($connect, $sql_sanpham);
                                while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            ?>
                            <option value="<?php echo $row_sanpham['MA_NCC'] ?>">
                                <?php echo $row_sanpham['MA_NCC'] ?> - <?php echo $row_sanpham['TEN_NCC'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tên Nhà Cung Cấp</td>
                    <td><select name="ten_ncc" id="ten_ncc">
                            <?php
                                $sql_sanpham = "SELECT *FROM `nha_cung_cap` ORDER BY `MA_NCC` ASC";
                                $query_sanpham = mysqli_query($connect, $sql_sanpham);
                                while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            ?>
                            <option value="<?php echo $row_sanpham['TEN_NCC'] ?>">
                                <?php echo $row_sanpham['TEN_NCC'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <!-- <td><input type="text" name="tenncc" id="tenncc" class="form-control"
                            value="" /></td> -->
                    <td><input aria-label="quantity" class="input-qty" max="500" min="0" name="soluong"
                                type="number" value="<?php echo $row['SO_LUONG']; ?>"
                                style="margin-left: 20px;margin-right: 20px; padding-left: 10px; width: 20%;height: 30px; font-size: 15px;text-align: center;"></td>
                </tr>
                <!-- <tr>
                    <td>Trạng Thái</td>
                    <td><input type="text" name="trangthai" id="trangthai" class="form-control" value="Còn hàng" /></td>
                </tr> -->
                <tr>
                    <td>Giá Gốc</td>
                    <td><input type="text" name="giagoc" id="giagoc" class="form-control"
                            value="<?php echo $row['GIA_GOC'] ?>" /></td>
                </tr>
                <tr>
                    <td>Giá Khuyến Mãi</td>
                    <td><input type="text" name="giakm" id="giakm" class="form-control"
                            value="<?php echo $row['GIA_BAN'] ?>" /></td>
                </tr>
                <tr>
                    <td>Hình Ảnh</td>
                    <td>
                        <img src="../img/<?php echo $row['HINH_ANH_SP'] ?>" style="width:200px;height:200px">
                        <input type="hidden" value="<?php echo $row['HINH_ANH_SP'] ?>>" name="old_image">
                        <input type="file" name="image" id="image" class="form-control">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                        <a href="dssanpham.php" id="" class="btn btn-primary" title="Trở về"
                            style="background-color:red;">
                            Trở về
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <?php
        if (isset($_POST['btnSave'])){
            
        $maloai = $_POST['maloai'];
        $tensp = $_POST['tensp'];
        $motasp = $_POST['motasp'];
        $tenncc = $_POST['tenncc'];
        $ten_ncc = $_POST['ten_ncc'];
        $soluong = $_POST['soluong'];
        $giagoc = $_POST['giagoc'];
        $giakm = $_POST['giakm'];
        // $hinhanh = $_POST['hinhanh'];

        $connect = new mysqli($server, $username, $password, $dbname);

        if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

        mysqli_query($connect, "UPDATE `san_pham` SET MA_LOAI='$maloai', TEN_SP='$tensp', MO_TA_SP='$motasp',
                                        MA_NCC='$tenncc', TEN_NCC='$ten_ncc', SO_LUONG='$soluong', GIA_GOC='$giagoc',
                                        GIA_BAN='$giakm' WHERE MA_SP='$masp'") or die('query failed');

        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folter = '../img/'.$image;
        $old_image = $_POST['old_image'];
        // $image_new = rand(1,10000) .time() .$_FILES['image']['name'] ;
        if(!empty($image)){
           if($image_size > 5000000){
            echo '<script language="javascript">alert("Kích thước file ảnh qúa lớn!!"); window.location=" "</script>';
           }else{
              mysqli_query($connect, "UPDATE `san_pham` SET HINH_ANH_SP = '$image' WHERE MA_SP='$masp'") or die('query failed');
              move_uploaded_file($image_tmp_name, $image_folter);
              unlink('../img/'.$old_image);
             
           }
        }
            echo '<script language="javascript">alert("Sửa sản phẩm thành công"); window.location="dssanpham.php"</script>';
     





        // $hinhanh = $_FILES['hinhanh']['name'];
        // $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        // $hinhanh_cu = $_POST['hinh_anh_cu'];

        // $connect = new mysqli($server, $username, $password, $dbname);

        // if ($connect->connect_error) {
        // die("Connection failed: " . $connect->connect_error);
        // }

        // if (isset($_FILES['hinhanh']))
        // {
        //     // Nếu file upload không bị lỗi,
        //     // Tức là thuộc tính error > 0
        //     if ($_FILES['hinhanh']['error'] > 0)
        //     {
        //         echo 'File Upload Bị Lỗi';
        //     }
        //     else{
        //         // Upload file
        //         move_uploaded_file($_FILES['hinhanh']['tmp_name'], '../img/'.$_FILES['hinhanh']['name']);
        //         unlink('../img/'.$hinhanh_cu);
        //         echo '<script language="javascript">alert("Sửa sản phẩm thành công"); window.location="dssanpham.php"</script>';
        //     }
        // }
        // else{
        //     echo 'Bạn chưa chọn file upload';
        // }
        // $sql = "UPDATE `san_pham` SET `MA_LOAI`='" . $maloai . "', `TEN_SP`='$tensp', `MO_TA_SP`='$motasp',
        //                                 `MA_NCC`='$tenncc', `SO_LUONG`='$soluong', `GIA_GOC`='$giagoc',
        //                                 `GIA_BAN`='$giakm' WHERE `MA_SP`='$masp'";

        // $sql = "UPDATE `san_pham` SET `MA_LOAI`='" . $maloai . "', `TEN_SP`='$tensp', `MO_TA_SP`='$motasp',
        //                                 `MA_NCC`='$tenncc', `SO_LUONG`='$soluong', `GIA_GOC`='$giagoc',
        //                                 `GIA_BAN`='$giakm', `HINH_ANH_SP`='$hinhanh' WHERE `MA_SP`='$masp'";
        
        // mysqli_query($connect, $sql);

       
                                        // if(!empty($hinhanh)){
                                        //     mysqli_query($connect, "UPDATE `san_pham` SET `HINH_ANH_SP` = '$hinhanh' WHERE `MA_SP` = '$masp'") or die('query failed');
                                        //     move_uploaded_file($hinhanh_tmp, '../img/'.$hinhanh_tmp);
                                        //     unlink('../img/'.$hinhanh_cu);
                                        //     echo '<script language="javascript">alert("Sửa sản phẩm thành công"); window.location="dssanpham.php"</script>';
                                        // }else{
                                        //     echo "Error updating record: " . $connect->error;                                             
                                        //     }
        

        // mysqli_query($connect, $sql);

        // if ($connect->query($sql) === TRUE) {
        //     echo '<script language="javascript">alert("Sửa sản phẩm thành công"); window.location="dssanpham.php"</script>';
        // } else {
        //     echo "Error updating record: " . $connect->error;
        // }

        // $connect->close();

        }                             

        // if ($connect->query($sql) === TRUE) {
        //     echo '<script language="javascript">alert("Sửa sản phẩm thành công"); window.location="dssanpham.php"</script>';
        // } else {
        //     echo "Error updating record: " . $connect->error;
        // }

        

        // header('location:dssanpham.php');
        

    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>