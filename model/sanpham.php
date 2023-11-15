<?php

function loadall_sanpham_home()
{
    $sql = "SELECT tchitietsp.*, tdanhmucsp.* FROM tchitietsp 
    INNER JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP
    where 1 ORDER BY tdanhmucsp.MaSP desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "SELECT tchitietsp.MaChiTietSP, tdanhmucsp.* FROM tchitietsp 
    INNER JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP where 1";
    if ($kyw != "") {
        $sql .= " and TenSP like '%" . $kyw . "%'";
    }
    if ($iddm != 0) {
        $sql .= " and MaLoai = '" . $iddm . "'";
    }
    $sql .= " order by MaSP desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm != null) {
        $sql = "SELECT * from tloaisp where MaLoai='" . $iddm . "'";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $Loai;
    } else {
        return "";
    }
}
function loadall_sanpham_topsale()
{
    $sql = "SELECT tchitietsp.*, tdanhmucsp.* FROM tchitietsp 
    INNER JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP
    ORDER BY (tchitietsp.SoLuong - tchitietsp.SoLuongTon) DESC 
    LIMIT 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "SELECT tchitietsp.*, tdanhmucsp.* FROM tchitietsp 
    INNER JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP where MaChiTietSP='" . $id . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanphamcungloai($id, $iddm)
{
    $sql = "SELECT tchitietsp.*, tdanhmucsp.* FROM tchitietsp 
    INNER JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP where tdanhmucsp.MaLoai = '" . $iddm . "' AND MaChiTietSP!='" . $id . "'
    LIMIT 0,3";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
