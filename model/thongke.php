<?php
function list_thongke() {
    $sql = "SELECT tloaisp.MaLoai as maloai , tloaisp.Loai as tenloai ,
    count(tdanhmucsp.masp) as soluong ,     min(tdanhmucsp.GiaSP) as mingiaSP, 
    max(tdanhmucsp.GiaSP) as maxgiaSP,avg(tdanhmucsp.GiaSP) as avggiaSP ";
    $sql .= "FROM tloaisp LEFT JOIN tdanhmucsp ON tdanhmucsp.MaLoai = tloaisp.MaLoai ";
    $sql .= "GROUP BY tloaisp.MaLoai ORDER BY tloaisp.MaLoai DESC";
    $listtk = pdo_query($sql);
    return $listtk;


     
} 
?>