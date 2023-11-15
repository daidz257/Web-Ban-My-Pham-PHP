<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$spnew = loadall_sanpham_home();
$dsdm =  loadall_danhmuc();
$dstopsale = loadall_sanpham_topsale();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] != null)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] != null)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanphamcungloai($id, $MaLoai);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangkydangnhap':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Email đã tồn tại. Vui lòng chọn một email khác!";
                } else {
                    insert_taikhoan($email, $pass);
                    $thongbao = "Đã đăng ký thành công!";
                }
            }
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($email, $pass);
                $checkemail = checkemail($email);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    extract($_SESSION['user']);
                    if ($LoaiUser==0){
                        echo '<script>window.location.href = "index.php";</script>';
                    };
                    //include "view/taikhoan/my-account.php";
                } else if (is_array($checkemail)) {
                    $thongbao = "Sai mật khẩu!";
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangkydangnhap.php";
            break;
        case 'my-account':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $email = $_POST['email'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pass = $_POST['pass'];
                $id = $_POST['id'];

                update_taikhoan($id, $name, $address, $tel, $pass);
                $_SESSION['user'] = checkuser($email, $pass);
                echo '<script>window.location.href = "index.php?act=my-account";</script>';
            }
            include "view/taikhoan/my-account.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien=$soluong * $price;
                $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                array_push($_SESSION['mycart'],$spadd);
                
            }
            include 'view/cart/viewcart.php';
            break;
        case 'delcart':
            if(isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            echo '<script>window.location.href = "index.php?act=viewcart";</script>';
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            //tao bill
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $pttt=$_POST['pttt'];
                $note=$_POST['note'];
                $ngaydathang=$_POST['h:i:sa d/m/Y'];
                $tongdonhang=tongdonhang();

                $idbill=insert_bill($name, $email,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$note,$ttien);

                //insert into cart: $session['mycart']&idbill
            }
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'thoat':
            session_unset();
            echo '<script>window.location.href = "index.php";</script>';
            break;
        case 'about-us':
            include "view/about-us.php";
            break;
        case 'danhmucsp';
            include "view/danhmucsp.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
