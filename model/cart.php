<?php

function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}
function insert_bill($name, $email,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$note,$ttien)
{
    $sql = "insert into thoadonban(TenNguoiDat,EmailGH,DiaChiGH,SoDienThoaiGH,PhuongThucThanhToan,NgayDatHang,
    TongDonHang,GhiChu,TongTienHD) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang','$note','$ttien',)";
    return pdo_execute_return_lastInsertId($sql);
}
?>