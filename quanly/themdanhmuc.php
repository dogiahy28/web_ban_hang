<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh Mục - Admin</title>
    <link rel="shortcut icon" href="./uploads/admin.ico" type="image/ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <!-- Main content -->
    <div class="container">

        <h1>Form Thêm mới Danh Mục Loại Sản Phẩm</h1>

        <form name="frmCreate" method="POST" action="" class="form">
            <table class="table">
                <tr>
                    <td>Mã Loại</td>
                    <td><input type="text" name="maloai" id="maloai" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Tên Loại</td>
                    <td><input type="text" name="tenloai" id="tenloai" class="form-control" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ
                            liệu</button>

                        <a href="dsdanhmuc.php" id="" class="btn btn-primary" title="Trở về"
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
        $tenloai = $_POST['tenloai'];

        $sql = "SELECT * FROM `loai_san_pham` WHERE `MA_LOAI` = '$maloai'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Nếu email đã tồn tại, hiển thị thông báo
            // echo "Mã loại trùng lặp! Vui lòng nhập mã khác";
            echo '<script language="javascript">alert("Mã loại trùng lặp! Vui lòng nhập mã khác."); window.location="themdanhmuc.php";</script>';
        } else {
            // Nếu email chưa tồn tại, thực hiện các thao tác khác
            //...
        

        $errors = [];

        // --- Kiểm tra Mã nhà cung cấp (validate)
        // required (bắt buộc nhập <=> không được rỗng)
        if (empty($maloai)) {
            $errors['MA_LOAI'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $maloai,
                'msg' => 'Vui lòng nhập vào Mã Loại'
            ];
        }
        // minlength 1 (tối thiểu 1 ký tự)
        if (!empty($maloai) && strlen($maloai) < 1) {
            $errors['maloai'][] = [
                'rule' => 'minlength',
                'rule_value' => 3,
                'value' => $maloai,
                'msg' => 'Mã Nhà cung cấp phải có ít nhất 3 ký tự'
            ];
        }
        // maxlength 6 (tối đa 6 ký tự)
        if (!empty($maloai) && strlen($maloai) > 6) {
            $errors['maloai'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $maloai,
                'msg' => 'Mã Loại không được vượt quá 6 ký tự'
            ];
        }

        // --- Kiểm tra Tên nhà cung cấp (validate)
        // required (bắt buộc nhập <=> không được rỗng)
        if (empty($tenloai)) {
            $errors['TEN_LOAI'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $tenloai,
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
        if (!empty($tenloai) && strlen($tenloai) > 50) {
            $errors['TEN_LOAI'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $tenloai,
                'msg' => 'Tên Loại Sản Phẩm không được vượt quá 50 ký tự'
            ];
        }

        // 5. Thông báo lỗi cụ thể người dùng mắc phải (nếu vi phạm bất kỳ quy luật kiểm tra ràng buộc)
        // dd($errors);
        if (!empty($errors)) {
            // In ra thông báo lỗi
            // kèm theo dữ liệu thông báo lỗi
            foreach($errors as $errorField) {
                foreach($errorField as $error) {
                    // echo $error['msg'] . '<br />';
                    echo '<script language="javascript">alert("'.$error['msg'].'"); window.location="themdanhmuc.php";</script>';
                }
            }
            return;
        }

        // 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
        // Câu lệnh INSERT
       
        $sqlInsert = "INSERT INTO `loai_san_pham`(`MA_LOAI`, `TEN_LOAI`)
                        VALUES ('$maloai', '$tenloai')";


        // Code dùng cho DEBUG
        // var_dump($sqlInsert); die;
        
        // Thực thi INSERT
        mysqli_query($connect, $sqlInsert);
        echo '<script language="javascript">alert("Thêm danh mục thành công");</script>';
        // Đóng kết nối
        mysqli_close($connect);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
        // header('location:dsdanhmuc.php');   
    }
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