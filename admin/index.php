<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "thêm thành công";
             }
            include "danhmuc/adddm.php";
            break;
            case 'listdm':
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;

                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
include "footer.php";

?>