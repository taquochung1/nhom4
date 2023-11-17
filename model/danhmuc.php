<?php
function insert_danhmuc($tenloai,$trangthai){
        $sql = "insert into danh_muc(ten_dm,trang_thai) values('$tenloai','$trangthai')";
                pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danh_muc where id_dm=".$id;
                pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * from danh_muc order by id_dm desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql='select * from danh_muc where id_dm='.$id;
                $dm=pdo_query_one($sql);
                return $dm;
}
function update_danhmuc($id,$tenloai,$trangthai){
     $sql = "update danh_muc set ten_dm='".$tenloai."',trang_thai='".$trangthai." where id_dm=".$id;
            pdo_execute($sql);
}
?>