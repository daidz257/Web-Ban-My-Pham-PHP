<?php

function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name, $email,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$note)
{
    $sql = "insert into thoadonban(MaKhachHang,TenNguoiDat,EmailGH,DiaChiGH,SoDienThoaiGH,PhuongThucThanhToan,NgayHoaDon,
    TongTienHD,GhiChu) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang','$note')";
    return pdo_execute_return_lastInsertId($sql);
}
function update_soluong($idpro,$soluong){
    $sql = "UPDATE tchitietsp SET SoLuongTon = SoLuongTon - ".$soluong." WHERE MaChiTietSP = '".$idpro."'";
    return pdo_execute($sql);
}
function insert_cart($idpro, $price,$soluong,$idbill)
{
    $sql = "insert into tchitiethdb(MaChiTietSP,DonGiaBan,SoLuongBan,MaHoaDon)
     values('$idpro','$price','$soluong','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * from thoadonban where MaHoaDon='" . $id . "'";
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart_bill($iduser,$idhd)
{
    $sql = "SELECT tchitiethdb.*, thoadonban.*, tchitietsp.AnhDaiDien, tdanhmucsp.TenSP
    FROM tchitiethdb
    JOIN thoadonban ON tchitiethdb.MaHoaDon = thoadonban.MaHoaDon
    JOIN tchitietsp ON tchitiethdb.MaChiTietSP = tchitietsp.MaChiTietSP
    JOIN tdanhmucsp ON tchitietsp.MaSP = tdanhmucsp.MaSP
    WHERE thoadonban.MaKhachHang = '".$iduser."' AND thoadonban.MaHoaDon = '".$idhd."'";
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "SELECT tchitiethdb.*, tchitietsp.*,tdanhmucsp.TenSP FROM tchitiethdb 
    INNER JOIN tchitietsp ON tchitietsp.MaChiTietSP = tchitiethdb.MaChiTietSP
    INNER JOIN tdanhmucsp ON tdanhmucsp.MaSP = tchitietsp.MaSP 
    where tchitiethdb.MaHoaDon=".$idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT tchitiethdb.*, tchitietsp.*,tdanhmucsp.TenSP FROM tchitiethdb 
    INNER JOIN tchitietsp ON tchitietsp.MaChiTietSP = tchitiethdb.MaChiTietSP
    INNER JOIN tdanhmucsp ON tdanhmucsp.MaSP = tchitietsp.MaSP 
    where tchitiethdb.MaHoaDon=".$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($iduser)
{
    $sql = "SELECT * from thoadonban where MaKhachHang='" . $iduser . "'";
    $listbill = pdo_query($sql);
    return $listbill;
}

function bill_chi_tiet($listbill){
    echo '    <tbody class="table-body">';
    $tong = 0;
    $i=0;
    foreach ($listbill as $cart) {
        $hinh = $cart['AnhDaiDien'];
        $ttien = $cart['SoLuongBan'] * $cart['DonGiaBan'];
        $tong += $ttien;

        echo '<tr class="cart-item">
        <td class="product-name">'.$cart['TenSP'].' <span class="product-quantity">× ' . $cart['SoLuongBan'] . '</span></td>
        <td class="product-total">£' . $ttien . 'đ</td>
        </tr>';
    }
    $i+=1;
    echo '</tbody>
    <tfoot class="table-foot">
        <tr class="cart-subtotal">
            <th>Subtotal</th>
            <td>'.$tong.'đ</td>
        </tr>
        <tr class="shipping">
            <th>Shipping</th>
            <td>Flat rate: 30000đ</td>
        </tr>
        <tr class="order-total">
            <th>Total </th>
            <td>'.$tong.'</td>
        </tr>
    </tfoot>';

}
function get_ttdh($n){
    switch($n){
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;
        case '3':
            $tt="Hoàn tất";
            break;
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
?>