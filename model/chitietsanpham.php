<?php
function  insert_ctsanpham($mactsp, $masp, $makhoiluong, $mamausac, $hinh, $nsx, $hsd, $soluong, $soluongton)
{
   $sql = "INSERT INTO tchitietsp(MaChiTietSP,MaSP,MaKhoiLuong,MaMauSac,AnhDaiDien,NSX,HSD,SoLuong,SoLuongTon) values('$mactsp','$masp','$makhoiluong','$mamausac','$hinh','$nsx','$hsd','$soluong', '$soluongton')";
   pdo_execute($sql);
}
function delete_ctsanpham($mactsp)
{
   $sql = "DELETE FROM tchitietsp where MaChiTietSP='" . $mactsp."'";
   $listsanpham = pdo_query($sql);
}
function list_ctloaisp()
{
   $sql = "SELECT * FROM tchitietsp order by MaChiTietSP desc";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}

function sua_ctsp($mactsp)
{
   $sql = "SELECT * FROM tchitietsp where MaChiTietSP='" . $mactsp."'";
   $dm_loaisp = pdo_query_one($sql);
   return $dm_loaisp;
}
function   update_ctsp($mactsp, $masp, $makhoiluong, $mamausac, $hinh, $nsx, $hsd, $soluong, $soluongton)
{

   $sql = "UPDATE tchitietsp SET MaSP='" . $masp . "', MaKhoiLuong='" . $makhoiluong . "', MaMauSac='" . $mamausac . "', AnhDaiDien='" . $hinh . "', NSX='" . $nsx . "',HSD='" . $hsd . "',SoLuong='" . $soluong . "',SoLuongTon='" . $soluongton . "' WHERE MaChiTietSP='" . $mactsp."'";
   pdo_execute($sql);
}
?>

?>