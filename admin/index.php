<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        /*CRUD danh mục*/
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                $trangthai=$_POST['trangthai'];
                insert_danhmuc($tenloai,$trangthai);
                $thongbao = "thêm thành công";
             }
            include "danhmuc/adddm.php";
            break;
            case 'listdm':
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $sql="select * from danh_muc order by ten_dm";
            $listdanhmuc=pdo_query($sql);   
            include "danhmuc/listdm.php";
            break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
              }
             include "danhmuc/updatedm.php";
            break;
            case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            $tenloai=$_POST['tenloai'];
            $trangthai=$_POST['trangthai'];
            $id=$_POST['id'];
            update_danhmuc($id,$tenloai,$trangthai);
            $thongbao="Cập nhật thành công";
            }
            
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break; 

            /*CRUD sản phẩm */
            case 'addsp':
                // KIểm tra xem người dùng có click vào nut add hay k
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $ten_sp=$_POST['ten_sp'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../admin/upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }

                    insert_sanpham($ten_sp,$gia,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/addsp.php";
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