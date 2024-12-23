<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý - Hydanz</title>
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once(__DIR__ . '/dbconnect.php');

        $mahd=$_GET['id'];
        $query=mysqli_query($connect,"SELECT * FROM `hoa_don` where `MA_HD`='$mahd'");
        $row=mysqli_fetch_assoc($query);
    ?>


    <div class="container">
        <h1>Cập Nhật Trạng Thái Đơn Hàng</h1>

        <form name="frmEdit" id="frmEdit" method="POST" action="" class="form">
            <table class="table">
                <tr>
                    <!-- <td>Trạng Thái Đơn Hàng:</td> -->
                    <td><label for="trangthaidh">Trạng thái đơn hàng:</label>
                            <input type="hidden" id="trangthaidh" name="trangthaidh">
                            <select id="trangthaidh" name="trangthaidh">
                                <option value="<?php echo $row['TRANG_THAI_HD'] ?>"><?php echo $row['TRANG_THAI_HD'] ?></option>
                                <option value="Đang xử lý">Đang xử lý</option>
                                <option value="Đang vận chuyển">Đang vận chuyển</option>
                                <option value="Giao hàng thành công">Giao hàng thành công</option>
                            </select>
                    </td>
                <!-- <input type="text" name="trangthaidh" id="trangthaidh" class="form-control" value="<?php echo $row['TRANG_THAI_HD'] ?>" /></td> -->
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Cập nhật</button>
                        <a href="dsdonhang.php" id="" class="btn btn-primary" title="Trở về"
                            style="background-color:red;">
                            Trở về
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- <a class="top" href="#first" target="_top" title="Về đầu trang"><i class="fas fa-arrow-circle-up"></i></a> -->

    <!-- Liên kết JS Jquery bằng CDN -->
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

<?php
        session_start();
        include_once(__DIR__ . '/dbconnect.php');

        $mahd=$_GET['id'];

        if (isset($_POST['btnSave'])){

        $trangthaidh = $_POST['trangthaidh'];

        $connect = new mysqli($server, $username, $password, $dbname);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }

        $sql = "UPDATE `hoa_don` SET `TRANG_THAI_HD`='$trangthaidh' WHERE `MA_HD`='$mahd'";

        if ($connect->query($sql) === TRUE) {
            echo '<script language="javascript">alert("Cập nhật trạng thái đơn hàng thành công"); window.location="dsdonhang.php"</script>';
        } else {
            echo "Error updating record: " . $connect->error;
        }

        $connect->close();

        // header('location:dssanpham.php');
        }

    ?>