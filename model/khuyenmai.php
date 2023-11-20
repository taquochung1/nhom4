<?php
function listmakm() {
    $sql = "select * from khuyen_mai";
    $result_khuyen_mai = pdo_query($sql);
    return $result_khuyen_mai;

}
function  insert_km($ten_khuyen_mai,$chiet_khau,$ngay_ap_dung){
    $sql = "insert into khuyen_mai value(null,'$ten_khuyen_mai','$chiet_khau','$ngay_ap_dung')";
    pdo_execute($sql);
}

function delete_khuyenmai($id){
    $sql="delete from khuyen_mai where id_khuyen_mai=".$id;
                pdo_execute($sql);
}
function loadall_km(){
    $sql="SELECT * from khuyen_mai order by id_khuyen_mai desc";
    $listkhuyenmai=pdo_query($sql);
    return $listkhuyenmai;
}

?>