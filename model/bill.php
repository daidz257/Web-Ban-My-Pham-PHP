<?php
function insert_bill($TenNguoiDat, $DiaChi, $SDT, $ngaydathang, $tongdonhang, $trangthai)
{
   $sql = "INSERT INTO thoadonban(TenNguoiDat,DiaChiGH,SoDienThoaiGH,NgayHoaDon,TongDonHang,TrangThaiDH) values('$TenNguoiDat','$DiaChi','$SDT','$ngaydathang','$tongdonhang','$trangthai')";
   pdo_execute($sql);
}
function xoa_bill($MaHoaDon)
{
   $sql = "DELETE  FROM tchitiethdb where mahoadon=" . $MaHoaDon;
   $listdanhmuc = pdo_query($sql);
   $sql = "DELETE  FROM thoadonban where mahoadon=" . $MaHoaDon;
   $listdanhmuc = pdo_query($sql);
}
function list_bill()
{
   $sql = "SELECT * FROM thoadonban order by mahoadon desc";
   $listdanhmuc = pdo_query($sql);
   return $listdanhmuc;
}

function sua_bill($MaHoaDon)
{
   $sql = "SELECT * FROM thoadonban where mahoadon=" . $MaHoaDon;
   $dm_loaisp = pdo_query_one($sql);
   return $dm_loaisp;
}
function  update_bill($MaHoaDon, $TenNguoiDat, $DiaChi, $SDT, $ngaydathang, $tongdonhang, $trangthai)
{
   $sql = "UPDATE  thoadonban set MaHoaDon='" . $MaHoaDon . "' , TenNguoiDat='" . $TenNguoiDat . "',DiaChiGH='" . $DiaChi . "', SoDienThoaiGH='" . $SDT . "', NgayHoaDon='" . $ngaydathang . "',TongDonHang ='" . $tongdonhang . "', TrangThaiDH='" . $trangthai . "'  where MaHoaDon=" . $MaHoaDon;
   pdo_execute($sql);
}
