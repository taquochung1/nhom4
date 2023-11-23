<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/khuyen-mai.php";
include "../model/khuyenmai.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /*CRUD danh mục*/
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $trangthai = $_POST['trangthai'];
                insert_danhmuc($tenloai, $trangthai);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/adddm.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $sql = "select * from danh_muc order by ten_dm";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/updatedm.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $trangthai = $_POST['trangthai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai, $trangthai);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;

            /*CRUD sản phẩm */
        case 'addsp':
            // KIểm tra xem người dùng có click vào nut add hay k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $ten_sp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../admin/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($ten_sp, $gia, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/addsp.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/listsp.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $sql = "select * from san_pham order by ten_sp";
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/listsp.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/updatesp.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $ten_sp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $mo_ta = $_POST['mo_ta'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../admin/upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $ten_sp, $gia, $mo_ta, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            include "sanpham/updatesp.php";
            break;

        case 'addmakm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                $chiet_khau = $_POST['chiet_khau'];
                $ngay_ap_dung = $_POST['ngay_ap_dung'];
                insert_km($ten_khuyen_mai, $chiet_khau, $ngay_ap_dung);
                header('Location: index.php?act=listmakm');
            }
            include 'khuyenmai/addmakm.php';
            break;
        case 'listmakm':
            $listmakm = loadall_km();
            include "khuyenmai/listmakm.php";
            break;

        case 'xoamakm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_khuyenmai($_GET['id']);
            }
            $sql = "select * from khuyen_mai order by ten_khuyen_mai";
            $listmakm = pdo_query($sql);
            include "khuyenmai/listmakm.php";
            break;
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
            $listtk = loadall_taikhoan();
            $listkm = loadall_km();
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
        
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
