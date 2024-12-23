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

        $maloai=$_GET['id'];
        $query=mysqli_query($connect,"SELECT * FROM `loai_san_pham` where `MA_LOAI`='$maloai'");
        $row=mysqli_fetch_assoc($query);
    ?>


    <div class="container">
        <h1>Cập Nhật - Sửa Danh Mục</h1>

        <form name="frmEdit" id="frmEdit" method="POST" action="" class="form">
            <table class="table">
                <tr>
                    <td>Tên Loại</td>
                    <td><input type="text" name="tenloai" id="tenloai" class="form-control"
                            value="<?php echo $row['TEN_LOAI'] ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <?php

        if (isset($_POST['btnSave'])){
            
        $maloai=$_GET['id'];
        $tenloai=$_POST['tenloai'];

        //Kiem tra ten loai khong duoc rong
        if (empty($tenloai)) {
            $errors['TEN_LOAI'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $tenloai,
                'msg' => 'Vui lòng nhập vào Tên Loại'
            ];
        }

        //Kiem tra ten loai khong vuot qua 50 ky tu
        if (!empty($tenloai) && strlen($tenloai) > 50) {
            $errors['TEN_LOAI'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $tenloai,
                'msg' => 'Tên Loại Sản Phẩm không được vượt quá 50 ký tự'
            ];
        }

        if (!empty($errors)) {
            // In ra thông báo lỗi
            // kèm theo dữ liệu thông báo lỗi
            foreach($errors as $errorField) {
                foreach($errorField as $error) {
                    echo $error['msg'] . '<br />';
                }
            }
            return;
        }

        // Create connection
        $connect = new mysqli($server, $username, $password, $dbname);
        // Check connection
        if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

        $sql = "UPDATE `loai_san_pham` SET `TEN_LOAI`='$tenloai' WHERE `MA_LOAI`='$maloai'";

        if ($connect->query($sql) === TRUE) {
        echo '<script language="javascript">alert("Sửa danh mục thành công"); window.location="dsdanhmuc.php"</script>';

        } else {
        echo "Error updating record: " . $connect->error;
        }

        $connect->close();
        
        // header('location:dsdanhmuc.php'); 
        }
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