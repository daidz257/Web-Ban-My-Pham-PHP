<?php
function loadall_danhmuc(){
    $sql = "select * from tLoaiSP order by MaLoai desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
?>