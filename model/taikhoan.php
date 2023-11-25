<?php
function insert_taikhoan($tendangnhap, $matkhau, $email)
{
    $sql = "insert into tai_khoan(ten_dang_nhap,mat_khau,email) values ('$tendangnhap','$matkhau','$email')";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from tai_khoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return  $listtaikhoan;
}
function checkuser($tendangnhap, $matkhau)
{
    $sql = "select * from tai_khoan where ten_dang_nhap='" . $tendangnhap . "' AND mat_khau='" . $matkhau . "'";
    $sp = pdo_query_one($sql);
    return  $sp;
}
// function checkemail($email)
// {
//     $sql = "select * from tai_khoan where email='" . $email . "'";
//     $sp = pdo_query_one($sql);
//     return  $sp;
// }
// function update_taikhoan($id, $user, $pass, $email, $address, $tel)
// {

//     $sql = "update tai_khoan set user='" . $user . "', pass='" . $pass . "', email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
//     pdo_execute($sql);
// } ?> 
