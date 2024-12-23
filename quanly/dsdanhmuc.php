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
        <h1>Danh sách Danh mục loại sản phẩm</h1>

        <?php
        // Truy vấn database để lấy danh sách
        include_once(__DIR__ .'/dbconnect.php');
        ?>


        <!-- Button Thêm mới -->
        <a href="themdanhmuc.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm danh mục
        </a>

        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Chỉnh Sửa - Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query_danhmuc = mysqli_query($connect, "SELECT *FROM `loai_san_pham` ORDER BY `MA_LOAI` ASC");
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                
                ?>
                <tr>
                    <td>
                        <?php echo $row_danhmuc['MA_LOAI']; ?>
                    </td>
                    <td>
                        <?php echo $row_danhmuc['TEN_LOAI']; ?>
                    </td>
                    <td>
                        <!-- Button Sửa -->
                        <a href="suadanhmuc.php?id=<?php echo $row_danhmuc['MA_LOAI']; ?>" id="btnUpdate"
                            class="btn btn-primary" title="Chỉnh sửa">
                            <i class=" fas fa-edit"></i>
                        </a>

                        <!-- Button Xóa -->
                        <a href="xoadanhmuc.php?id=<?php echo $row_danhmuc['MA_LOAI']; ?>" id="btnDelete"
                            class="btn btn-danger" title="Xóa" onclick="return confirm('Bạn có muốn xóa nó?')">
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