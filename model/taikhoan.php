<?php
function insert_taikhoan($tendangnhap, $matkhau, $email)
{
    $sql = "insert into tai_khoan(ten_dang_nhap,mat_khau,email) values ('$tendangnhap','$matkhau','$email')";
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "delete from tai_khoan where id_kh=" . $id;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * from tai_khoan order by id_kh desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id)
{
    $sql = "select * from tai_khoan where id_dang_nhap=" . $id;
    $kt = pdo_query_one($sql);
    return $kt;
}
function update_taikhoan($id, $ten_dang_nhap, $mat_khau)
{
    $sql = "update tai_khoan set ten_dang_nhap='" . $ten_dang_nhap . "',mat_khau='" . $mat_khau . " where id_dang_nhap=" . $id;
    pdo_execute($sql);
}
