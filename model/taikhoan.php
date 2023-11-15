<?php
function insert_taikhoan($email, $pass)
{
    $sql = "insert into tuser(username,passwords) values('$email','$pass')";
    pdo_execute($sql);
    $sql = "insert into tkhachhang(username) values('$email')";
    pdo_execute($sql);
}
function checkuser($email,$pass)
{
    $sql = "SELECT tuser.*, tkhachhang.* FROM tuser 
    INNER JOIN tkhachhang ON tuser.username = tkhachhang.username 
    WHERE tuser.username='".$email."' AND passwords='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from tuser where username='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $name, $address, $tel, $pass)
{
    $sql = "UPDATE tkhachhang
        INNER JOIN tuser ON tkhachhang.username = tuser.username
        SET tkhachhang.TenKhachHang = '".$name."',
            tkhachhang.DiaChi = '".$address."',
            tkhachhang.SoDienThoai = '".$tel."',
            tuser.passwords = '".$pass."'
        WHERE tkhachhang.MaKhachHang = '".$id."'";
    pdo_execute($sql);
}
?>
