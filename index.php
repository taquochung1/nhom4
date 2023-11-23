<?php 
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php"; 
include "viewphp/header.php"; 
include "global.php";
$spnew = loadall_sanpham_detail();
$dsdm=loadall_danhmuc();
if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act){
        case 'gioithieu':
            # code...
            include "viewphp/about-us_01.php";
            break;
        case 'gioithieu':
            # code...
            include "viewphp/about-us_01.php";
            break;
        case 'lienhe':
            # code...
            include "viewphp/contact.php";
            break;
        case 'sanphamct':
            # code...
            include "viewphp/product-detail.php";
            break;
        case 'sanpham':
            if(isset($_POST['kyw']) && $_POST['kyw']>0){
                $kyw=$_POST['kyw'];

            } else {
                $kyw="";
            }
            if(isset($_GET['iddm']) && $_GET['iddm']>0){
                $iddm=$_GET['iddm'];
                
            } else {
               $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            # code...
            include "viewphp/shop_02.php";
            break;
        case 'giohang':
            # code...
            include "viewphp/shopping-cart.php";
            break;
        
        default:
            # code...
            break;
    }
}
include "viewphp/home.php";
include "viewphp/footer.php";
?>