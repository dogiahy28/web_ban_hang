<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý - Admin</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
</head>

<body>

    <div class="container">
        <div class="jumbotron">

            <a href="../index.php" style="font-size: 3rem" onclick="return confirm('Bạn chắc chắn muốn quay về Trang chủ?')">
                <i class="fas fa-home" title="Trang chủ"></i>
                <!-- <img width="80" height="80" src="./uploads/logo.png" alt="" id="logo" title="Trang chủ"> -->
            </a>

            <h1 class="display-4">Quản Lý - Admin</h1>
            <p class="lead">Thêm - Chỉnh Sửa - Xóa dữ liệu</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="dsdanhmuc.php" role="button">Danh Mục (Loại Sản Phẩm)</a>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="dssanpham.php" role="button">Sản Phẩm</a>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="dsdonhang.php" role="button">Đơn Hàng</a>

        </div>
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