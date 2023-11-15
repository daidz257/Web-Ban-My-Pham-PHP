<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "insert into tbinhluan(NoiDung,MaKhachHang,MaChiTietSP,NgayBinhLuan) 
    values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT tbinhluan.*, tkhachhang.* FROM tbinhluan 
    INNER JOIN tkhachhang ON tbinhluan.MaKhachHang = tkhachhang.MaKhachHang 
    WHERE MaChiTietSP='".$idpro."' order by MaBinhLuan desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
?>