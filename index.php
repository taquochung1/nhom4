<?php 
include "viewphp/header.php";
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