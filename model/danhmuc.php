<?php
function insert_danhmuc($tenloai, $maloai)
{
    $sql = "INSERT INTO tloaisp(MaLoai,Loai) values('$maloai','$tenloai')";
    pdo_execute($sql);
}
function list_loaidm()
{
    $sql = "SELECT * FROM tloaisp order by maloai desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_danhmuc()
{
    $sql = "select * from tLoaiSP order by MaLoai desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function sua_loaidm($maloai)
{
    $sql = "SELECT * FROM tloaisp where maloai='".$maloai."'";
    $dm_loaisp = pdo_query_one($sql);
    return $dm_loaisp;
}
function delete_danhmuc($maloai)
{
    $sql = "DELETE  FROM tloaisp where maloai='".$maloai."'";
    $listdanhmuc = pdo_query($sql);
}
function update_dm($maloai , $tenloai) {
    $sql ="UPDATE  tloaisp set Loai='".$tenloai."' where maloai='".$maloai."'";  
    pdo_execute($sql);
 }
?>
