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
    <!-- Main content -->
    <div class="container">
        <h1 id="first">Danh sách Đơn hàng</h1>

        <?php
            // Truy vấn database để lấy danh sách
            include_once(__DIR__ .'/dbconnect.php');

            // $sql_lietke_dh = "SELECT * FROM `hoa_don`,`khach_hang` WHERE `hoa_don`.`MA_CCCD` = `khach_hang`.`MA_CCCD` ORDER BY `hoa_don`.`ID_HD`";
            $sql_lietke_dh = "SELECT * FROM `hoa_don` ORDER BY `ID_HD`";
            $query_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
        ?>

        <!-- Button Thêm mới -->
        <!-- <a href="themsp.php" class="btn btn-primary" title="Thêm sản phẩm">
            <i class="fas fa-plus"></i> Thêm sản phẩm
        </a> -->
        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ Giao Hàng</th>
                    <th>Ngày Lập</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_dh)) {
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['MA_HD']; ?></td>
                    <td><?php echo $row['MA_CCCD'] ?></td>
                    <td><?php echo $row['TEN_KH'] ?></td>
                    <td><?php echo $row['SDT_KH'] ?></td>
                    <td><?php echo $row['EMAIL_KH'] ?></td>
                    <td><?php echo $row['DIA_CHI_KH'] ?></td>
                    <td><?php echo $row['NGAY_LAP']; ?></td>
                    <td>
                        <?php echo $row['TRANG_THAI_HD'] ?>
                    <td>

                    <!-- <button name="capnhat" class="btn btn-primary"><i class="fas fa-save"></i>Cập nhật</button> -->
                    <a href="capnhatdh.php?id=<?php echo $row['MA_HD']; ?>" id="btnUpdate" class="btn btn-primary"
                            title="Cập nhật">
                            <i class="fas fa-edit"></i> Cập nhật
                    </a>
                    <a href="xoadonhang.php?id=<?php echo $row['MA_HD']; ?>" id="btnDelete" class="btn btn-danger"
                            title="Xóa" onclick="return confirm('Bạn có muốn xóa nó?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <a href="index.php" id="" class="btn btn-primary" title="Trở về" style="background-color:red;">
                    Trở về
                </a>
            </tbody>
        </table>

    </div>

    <a style="position: fixed;
                right: 10px;
                bottom: 5px;
                color: rgba(207, 8, 8, 0.8);
                z-index: 100;
                font-size: 3.6rem;
                float: right;" href="#first" target="_top" title="Về đầu trang"><i class="fas fa-arrow-circle-up"></i></a>

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