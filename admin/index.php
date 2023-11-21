<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/chitietsanpham.php";
include "../model/bill.php";
include "../model/thongke.php";
include "home.php";
include "footer.php";
include "header.php";

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'adddm':
      // kiểm tra xem người dùng có kích vào nút add hay không 

      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $tenloai = $_POST['tenloai'];
        $maloai = $_POST['maloai'];
        insert_danhmuc($tenloai, $maloai);
        $thongbao = 'them thanh cong';
      }
      include "danhmuc/add.php";
      break;
    case 'listdm':
      $listdanhmuc = list_loaidm();
      include "danhmuc/list.php";
      break;

    case 'xoadm':
      if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
        delete_danhmuc($_GET['maloai']);
      }
      $listdanhmuc = list_loaidm();
      include "danhmuc/list.php";
      break;
      // chỉ dẫn đến trang sửa 
    case 'suadm':
      if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
        $dm_loaidm = sua_loaidm($_GET['maloai']);
      }
      include "danhmuc/update.php";
      break;
    case 'updatedm':

      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $tenloai = $_POST['tenloai'];
        $maloai = $_POST['maloai'];
        update_dm($maloai, $tenloai);
        $thongbao = 'cập nhật thành công';
      }
      $listdanhmuc = list_loaidm();
      include "danhmuc/list.php";
      break;



      //sản phẩm 
    case 'addsp':
      // kiểm tra xem người dùng có kích vào nút add hay không 
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $mahangsx = $_POST['hangsx'];
        $maloai = $_POST['maloai'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../Upload/";
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          //echo "Sorry, there was an error uploading your file.";
        }
        $giasp = $_POST['giasp'];


        insert_sanpham($masp, $tensp, $mahangsx, $maloai, $hinh, $giasp);
        $thongbao = 'them thanh cong';
      }
      include "sanpham/add.php";
      break;
    case 'listsp':
      $listsanpham = list_loaisp();
      include "sanpham/list.php";
      break;

    case 'xoasp':
      if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
        delete_sanpham($_GET['masp']);
      }
      $listsanpham = list_loaisp();
      include "sanpham/list.php";
      break;
      // chỉ dẫn đến trang sửa 
    case 'suasp':
      if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
        $masp = $_GET['masp'];
        $sanpham = sua_loaisp($masp);
      }
      $listdanhmuc = list_loaidm();

      include "sanpham/update.php";
      break;
    case 'updatesp':

      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $mahangsx = $_POST['hangsx'];
        $maloai = $_POST['maloai'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../Upload/";
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          //echo "Sorry, there was an error uploading your file.";
        }
        $giasp = $_POST['giasp'];
        update_sp($masp, $tensp, $mahangsx, $maloai, $hinh, $giasp);
        $thongbao = 'cập nhật thành công';
      }
      $listsanpham = list_loaisp();
      $listdanhmuc = list_loaidm();
      include "sanpham/list.php";
      break;


      //chi tiết sản phẩm 
    case 'addctsp':
      // kiểm tra xem người dùng có kích vào nút add hay không 
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $mactsp = $_POST['mactsp'];
        $masp = $_POST['masp'];
        $makhoiluong = $_POST['makl'];
        $mamausac = $_POST['mamausac'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../Upload/";
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          //echo "Sorry, there was an error uploading your file.";
        }
        $nsx = $_POST['NSX'];
        $hsd = $_POST['HSD'];
        $soluong = $_POST['SL'];
        $soluongton = $_POST['SLTon'];


        insert_ctsanpham($mactsp, $masp, $makhoiluong, $mamausac, $hinh, $nsx, $hsd, $soluong, $soluongton);
        $thongbao = 'them thanh cong';
      }
      include "chitietsanpham/add.php";
      break;
    case 'listctsp':
      $listsanpham = list_ctloaisp();
      include "chitietsanpham/list.php";
      break;

    case 'xoactsp':
      if (isset($_GET['machitietsp']) && ($_GET['machitietsp'] > 0)) {
        delete_ctsanpham($_GET['machitietsp']);
      }
      $listsanpham = list_ctloaisp();
      include "chitietsanpham/list.php";
      break;
      // chỉ dẫn đến trang sửa 
    case 'suactsp':
      if (isset($_GET['machitietsp']) && ($_GET['machitietsp'] > 0)) {
        $mactsp = $_GET['machitietsp'];
        $sanpham = sua_ctsp($mactsp);
      }
      $listdanhmuc = list_loaidm();

      include "chitietsanpham/update.php";
      break;
    case 'updatectsp':

      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $mactsp = $_POST['mactsp'];
        $masp = $_POST['masp'];
        $makhoiluong = $_POST['makl'];
        $mamausac = $_POST['mamausac'];
        $hinh = $_FILES['hinh']['name'];
        $target_dir = "../Upload/";
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          //echo "Sorry, there was an error uploading your file.";
        }
        $nsx = $_POST['NSX'];
        $hsd = $_POST['HSD'];
        $soluong = $_POST['SL'];
        $soluongton = $_POST['SLTon'];
        update_ctsp($mactsp, $masp, $makhoiluong, $mamausac, $hinh, $nsx, $hsd, $soluong, $soluongton);
        $thongbao = 'cập nhật thành công';
      }
      $listsanpham = list_ctloaisp();
      $listdanhmuc = list_loaidm();
      include "chitietsanpham/list.php";
      break;




      //bill
    case 'addbill':
      // kiểm tra xem người dùng có kích vào nút add hay không 

      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

        $TenNguoiDat = $_POST['tennguoidat'];
        $DiaChi = $_POST['address'];
        $SDT = $_POST['sdt'];
        $ngaydathang = $_POST['ngaydathang'];
        $tongdonhang = $_POST['tongdonhang'];
        $trangthai = $_POST['trangthai'];


        insert_bill($TenNguoiDat, $DiaChi, $SDT, $ngaydathang, $tongdonhang, $trangthai);
        $thongbao = 'them thanh cong';
      }
      include "bill/add.php";
      break;
    case 'listbill':
      $listdanhmuc = list_bill();
      include "bill/list.php";
      break;

    case 'xoabill':
      if (isset($_GET['mahoadon'])) {
        xoa_bill($_GET['mahoadon']);
      }
      $listdanhmuc = list_bill();
      include "bill/list.php";
      break;
      // chỉ dẫn đến trang sửa 
    case 'suabill':
      if (isset($_GET['mahoadon']) && ($_GET['mahoadon'] > 0)) {
        $bill = sua_bill($_GET['mahoadon']);
      }
      include "bill/update.php";
      break;
    case 'updatebill':

      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $MaHoaDon = $_POST['mahoadon'];
        $TenNguoiDat = $_POST['tennguoidat'];
        $DiaChi = $_POST['address'];
        $SDT = $_POST['sdt'];
        $ngaydathang = $_POST['ngaydathang'];
        $tongdonhang = $_POST['tongdonhang'];
        $trangthai = $_POST['trangthai'];


        update_bill($MaHoaDon, $TenNguoiDat, $DiaChi, $SDT, $ngaydathang, $tongdonhang, $trangthai);
        $thongbao = 'cập nhật thành công';
      }
      $listdanhmuc = list_bill();
      include "bill/list.php";
      break;

      //
    case 'thongke':
      $listthongke = list_thongke();
      include "thongke/list.php";
      break;
    case 'bieudo':
      $listthongke = list_thongke();
      include "thongke/bieudo.php";
      break;
    default:
      include "home.php";
      break;
  }
} else {
  include "home.php";
}
