<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý - Hydanz</title>
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1 id="first">Danh sách Sản Phẩm</h1>

        <?php
        // Truy vấn database để lấy danh sách
        include_once(__DIR__ .'/dbconnect.php');
        ?>


        <!-- Button Thêm mới -->
        <a href="themsp.php" class="btn btn-primary" title="Thêm sản phẩm">
            <i class="fas fa-plus"></i> Thêm sản phẩm
        </a>

        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Mã Loại</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Mô Tả Sản Phẩm</th>
                    <th>Mã NCC</th>
                    <th>Số Lượng</th>
                    <th>Trạng Thái</th>
                    <th>Giá Gốc</th>
                    <th>Giá Bán</th>

                    <th>Chỉnh Sửa - Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query_sp = mysqli_query($connect, "SELECT *FROM `san_pham` ORDER BY `MA_SP` ASC");
                    while ($row_sp = mysqli_fetch_array($query_sp)) {
                ?>
                <tr>
                    <td><?php echo $row_sp['MA_SP']; ?></td>
                    <td><?php echo $row_sp['MA_LOAI']; ?></td>
                    <td><?php echo $row_sp['TEN_SP']; ?></td>
                    <td>
                        <img src="../img/<?php echo $row_sp['HINH_ANH_SP'] ?>" style="width:200px">
                        <!-- <?php echo $row_sp['HINH_ANH_SP']; ?> -->
                    </td>
                    <td style="min-width:230px"><?php echo $row_sp['MO_TA_SP']; ?></td>
                    <td><?php echo $row_sp['MA_NCC']; ?></td>
                    <td><?php echo $row_sp['SO_LUONG']; ?></td>
                    <td>
                        <p><?php 
                                if ($row_sp['SO_LUONG'] > 0) {
                                    echo "Còn hàng";
                                } else {
                                    echo "Hết hàng";
                                }
                                ?></p>
                    </td>
                    <td><?php echo number_format($row_sp['GIA_GOC'],0,".",".") ?>đ</td>
                    <td><?php echo number_format($row_sp['GIA_BAN'],0,".",".") ?>đ</td>
                    
                    <td>
                        <!-- Button Sửa -->
                        <a href="suasp.php?id=<?php echo $row_sp['MA_SP']; ?>" id="btnUpdate" class="btn btn-primary"
                            title="Chỉnh sửa">
                            <i class="fas fa-edit"></i>
                        </a>

                        <!-- Button Xóa -->
                        <a href="xoasp.php?id=<?php echo $row_sp['MA_SP']; ?>" id="btnDelete" class="btn btn-danger"
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