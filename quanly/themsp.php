<?php 
    include_once(__DIR__ .'/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm - Admin</title>
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <!-- Main content -->
    <div class="container">
        <h1>Form thêm mới Sản Phẩm</h1>

        <form name="frmCreate" method="POST" action="" class="form" enctype="multipart/form-data">
            <table class=" table">
                <!-- <tr>
                    <td>Mã Sản Phẩm</td>
                    <td><input type="text" name="masp" id="masp" class="form-control" /></td>
                </tr> -->
                <tr>
                    <td>Mã Loại</td>
                    <td>
                        <select name="maloai" id="maloai">
                            <?php
                                $sql_sanpham = "SELECT *FROM `loai_san_pham` ORDER BY `MA_LOAI` ASC";
                                $query_sanpham = mysqli_query($connect, $sql_sanpham);
                                while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            ?>
                            <option value="<?php echo $row_sanpham['MA_LOAI'] ?>">
                                <?php echo $row_sanpham['MA_LOAI'] ?> -
                                <?php echo $row_sanpham['TEN_LOAI'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tên Sản Phẩm</td>
                    <td><input type="text" name="tensp" id="tensp" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Mô Tả Sản Phẩm</td>
                    <td><input type="text" name="motasp" id="motasp" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Mã Nhà Cung Cấp</td>
                    <td>
                        <select name="tenncc" id="tenncc">
                            <?php
                                $sql_sanpham = "SELECT *FROM `nha_cung_cap` ORDER BY `MA_NCC` ASC";
                                $query_sanpham = mysqli_query($connect, $sql_sanpham);
                                while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            ?>
                            <option value="<?php echo $row_sanpham['MA_NCC'] ?>">
                                <?php echo $row_sanpham['MA_NCC'] ?> -
                                <?php echo $row_sanpham['TEN_NCC'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <!-- <td><input type="text" name="tenncc" id="tenncc" class="form-control" value="<?php echo $row_sanpham['TEN_NCC'] ?>"/></td> -->
                </tr>
                <tr>
                    <td>Tên Nhà Cung Cấp</td>
                    <td>
                        <select name="ten_ncc" id="tenncc">
                            <?php
                                $sql_sanpham = "SELECT *FROM `nha_cung_cap` ORDER BY `MA_NCC` ASC";
                                $query_sanpham = mysqli_query($connect, $sql_sanpham);
                                while ($row_sanpham = mysqli_fetch_array($query_sanpham)) {
                            ?>
                            <option value="<?php echo $row_sanpham['MA_NCC'] ?>">
                                
                                <?php echo $row_sanpham['TEN_NCC'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <!-- <td><input type="text" name="tenncc" id="tenncc" class="form-control" value="<?php echo $row_sanpham['TEN_NCC'] ?>"/></td> -->
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td>
                    <input aria-label="quantity" class="input-qty" max="500" min="1" name="soluong" value="100"
                                type="number" style="width: 100px;height: 30px; font-size: 15px; text-align: center;">
                    </td>
                </tr>
                <!-- <tr>
                    <td>Trạng Thái</td>
                    <td><input type="text" name="trangthai" id="trangthai" class="form-control" value="Còn hàng" />
                    </td>
                </tr> -->
                <tr>
                    <td>Giá Gốc</td>
                    <td><input type="text" name="giagoc" id="giagoc" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Giá Khuyến Mãi</td>
                    <td><input type="text" name="giakm" id="giakm" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Hình Ảnh</td>
                    <td><input type="file" name="hinhanh" id="hinhanh" class="form-control" /></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ
                            liệu</button>

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
    // Truy vấn database để lấy danh sách
        include_once(__DIR__ .'/dbconnect.php');

    if(isset($_POST['btnSave'])) {
        $maloai = $_POST['maloai'];
        $tensp = $_POST['tensp'];
        $motasp = $_POST['motasp'];
        $tenncc = $_POST['tenncc'];
        $ten_ncc = $_POST['ten_ncc'];
        $soluong = $_POST['soluong'];
        //$trangthai = $_POST['trangthai'];
        $giagoc = $_POST['giagoc'];
        $giakm = $_POST['giakm'];

        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        // $hinhanh = time(). '' .$hinhanh;

        // $hinhanh = $_FILES['hinhanh']['name'];
        // // $image_size = $_FILES['image']['size'];
        // $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        // // $image_folter = 'uploaded_img/' . $image;

        $errors = [];

        // --- Kiểm tra Mã nhà cung cấp (validate)
        // required (bắt buộc nhập <=> không được rỗng)
        // if (empty($masp)) {
        //     $errors['MA_SP'][] = [
        //         'rule' => 'required',
        //         'rule_value' => true,
        //         'value' => $masp,
        //         'msg' => 'Vui lòng nhập vào mã Sản Phẩm'
        //     ];
        // }
        // minlength 1 (tối thiểu 1 ký tự)
        // if (!empty($masp) && strlen($masp) < 1) {
        //     $errors['maloai'][] = [
        //         'rule' => 'minlength',
        //         'rule_value' => 3,
        //         'value' => $masp,
        //         'msg' => 'Mã Sản Phẩm phải có ít nhất 3 ký tự'
        //     ];
        // }
        // // maxlength 6 (tối đa 6 ký tự)
        // if (!empty($masp) && strlen($masp) > 6) {
        //     $errors['masp'][] = [
        //         'rule' => 'maxlength',
        //         'rule_value' => 50,
        //         'value' => $masp,
        //         'msg' => 'Mã Sản Phẩm không được vượt quá 6 ký tự'
        //     ];
        // }

        // --- Kiểm tra Tên nhà cung cấp (validate)
        // required (bắt buộc nhập <=> không được rỗng)
        if (empty($maloai)) {
            $errors['MA_LOAI'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $maloai,
                'msg' => 'Vui lòng nhập vào Tên Loại'
            ];
        }
        // minlength 3 (tối thiểu 3 ký tự)
        // //if (!empty($description) && strlen($description) < 3) {
        //     $errors['description'][] = [
        //         'rule' => 'minlength',
        //         'rule_value' => 3,
        //         'value' => $description,
        //         'msg' => 'Mô tả loại sản phẩm phải có ít nhất 3 ký tự'
        //     ];
        // }
        // maxlength 50 (tối đa 50 ký tự)
        // if (!empty($tenloai) && strlen($tenloai) > 50) {
        //     $errors['TEN LOAI'][] = [
        //         'rule' => 'maxlength',
        //         'rule_value' => 50,
        //         'value' => $tenloai,
        //         'msg' => 'Tên Loại Sản Phẩm không được vượt quá 50 ký tự'
        //     ];
        // }

        // 5. Thông báo lỗi cụ thể người dùng mắc phải (nếu vi phạm bất kỳ quy luật kiểm tra ràng buộc)
        // dd($errors);
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

        if (isset($_FILES['hinhanh']))
            {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if ($_FILES['hinhanh']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    // Upload file
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], '../img/'.$_FILES['hinhanh']['name']);
                    echo '<script language="javascript">alert("Thêm sản phẩm thành công");</script>';
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
            }

    // 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
    // Câu lệnh INSERT

    $sqlInsert = "INSERT INTO `san_pham`(`MA_LOAI`, `TEN_SP`, `MO_TA_SP`, `MA_NCC`, `TEN_NCC`, `SO_LUONG`, `GIA_GOC`, `GIA_BAN`, `HINH_ANH_SP`)
                    VALUES ('$maloai', '$tensp', '$motasp', '$tenncc', '$ten_ncc', '$soluong', '$giagoc', '$giakm', '$hinhanh')";

    mysqli_query($connect, $sqlInsert);

    // move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    }
    ?>

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