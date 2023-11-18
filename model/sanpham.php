<?php
function insert_sanpham($tensp,$gia,$img,$mota,$iddm){
     $sql = "insert into san_pham(ten_sp,gia,img,mo_ta,id_dm) values('$tensp','$gia','$img','$mota','$iddm')";
            pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from san_pham where id_sp=".$id;
                pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="SELECT * from san_pham where 1 order by id_sp desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="SELECT * from san_pham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="SELECT * from san_pham where 1";
    if($kyw!=""){
        $sql.=" and ten_sp LIKE '%".$kyw."%'";
    } 
    if($iddm>0){
        $sql.=" and id_dm ='".$iddm."'";
    }
    $sql.=" order by id_sp desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql="select * from san_pham where id_sp=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
    $sql="select * from danh_muc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $ten_sp;
    } else {
        return "";
    }
   
}
function loadone_sanpham_cungloai($id,$iddm){
    $sql="select * from san_pham where iddm=".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function  update_sanpham($id,$id_dm,$ten_sp,$gia,$mo_ta,$hinh){
    if($hinh!="")
    $sql = "update san_pham set iddm='".$id_dm."', tensp='".$ten_sp."',gia='".$gia."',mota='".$mo_ta."',img='".$hinh."' where id=".$id;
    else
    $sql = "update san_pham set iddm='".$id_dm."', tensp='".$ten_sp."',gia='".$gia."',mota='".$mo_ta."' where id=".$id;
    
    pdo_execute($sql);
}
?>