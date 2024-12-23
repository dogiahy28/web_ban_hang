<!-- <?php
    session_start();
    include_once('../db/connect.php');

    //Cong so luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong']+1;
                if($cart_item['soluong']<=19){
                    $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$tangsoluong, 'giasp'=>$cart_item['giasp']);
                }else{
                    $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("location: giohangdn.php?id=$_SESSION[id_kh]#first_cart");
    }

    //Tru so luong
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                $_SESSION['cart'] = $product;
            }else{
                $giamsoluong = $cart_item['soluong']-1;
                if($cart_item['soluong']>1){
                    $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$giamsoluong, 'giasp'=>$cart_item['giasp']);
                }else{
                    $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header("location: giohangdn.php?id=$_SESSION[id_kh]#first_cart");
    }

    //Xoa tung san pham
    if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
            }
        $_SESSION['cart'] = $product;
        header("location: giohangdn.php?id=$_SESSION[id_kh]#first_cart");
        }
    }
    //Xoa tat ca san pham trong gio hang
    if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header("location: giohangdn.php?id=$_SESSION[id_kh]");
    }

    //Them san pham vao gio hang
    if(isset($_POST['themgiohang'])){
        // session_destroy();

        $id=$_GET['id'];
        $soluong=$_POST['soluong'];
        $sql = mysqli_query($connect,"SELECT * FROM `san_pham` WHERE `MA_SP` = '".$id."' LIMIT 1");
        $row=mysqli_fetch_array($sql);

        if($row){
            $new_product=array(array('id'=>$id, 'hinhanh' => $row['HINH_ANH_SP'], 'tensanpham' => $row['TEN_SP'],  'soluong'=>$soluong, 'giasp' => $row['GIA_BAN']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found=false;
            foreach($_SESSION['cart'] as $cart_item){
                //Neu trung san pham
                if($cart_item['id']==$id){
                    $product[]= array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp']);
                    $found = true;
                }else{
                //Neu khong trung san pham
                    $product[]= array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                }
            }
            if($found == false){
                //Lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
        }

header('location: chitietspdn.php?id='.$id.'');
    }


    //Mua ngay sản phẩm
    if(isset($_POST['muangay'])){
        // session_destroy();

        $id=$_GET['id'];
        $soluong=$_POST['soluong'];
        $sql = mysqli_query($connect,"SELECT * FROM `san_pham` WHERE `MA_SP` = '".$id."' LIMIT 1");
        $row=mysqli_fetch_array($sql);

        if($row){
            $new_product=array(array('id'=>$id, 'hinhanh' => $row['HINH_ANH_SP'], 'tensanpham' => $row['TEN_SP'],  'soluong'=>$soluong, 'giasp' => $row['GIA_BAN']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found=false;
            foreach($_SESSION['cart'] as $cart_item){
                //Neu trung san pham
                if($cart_item['id']==$id){
                    $product[]= array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp']);
                    $found = true;
                }else{
                //Neu khong trung san pham
                    $product[]= array('id'=>$cart_item['id'], 'hinhanh'=>$cart_item['hinhanh'], 'tensanpham'=>$cart_item['tensanpham'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp']);
                }
            }
            if($found == false){
                //Lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
        }

    header("location: giohangdn.php?id=$_SESSION[id_kh]");
    }
?>