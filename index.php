<?php 
  session_start();
include "model/taikhoan.php";
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
         case 'dangky':
             if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $email=$_POST['email'];
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                insert_taikhoan($tendangnhap,$matkhau,$email);
                $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng ";
             }
            include "layoutlogin/dangky.php";
            // include "index.php?act=dangky";
            break;
            
             case 'dangnhap':
             if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                $checkuser=checkuser($tendangnhap,$matkhau);
                if(is_array($checkuser)){
                    $_SESSION['tendangnhap']=$checkuser;
                    header('location: index.php ');
                    $thongbao="Đã đăng nhập thành công. ";
                  } else {
                    $thongbao="Tài khoản không tồn tại . Vui lòng kiểm tra lại";
                }

             }
             include "layoutlogin/dangnhap.php";
            break;
            // case 'edit_taikhoan':
            //  if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            //     $user=$_POST['user'];
            //     $pass=$_POST['pass'];
            //     $email=$_POST['email'];
            //     $address=$_POST['address'];
            //     $tel=$_POST['tel'];
            //     $id=$_POST['id'];
            //      update_taikhoan($id,$user,$pass,$email,$address,$tel);
            //      $_SESSION['user']= checkuser($user,$pass);
            //      header('location:index.php?action=edit_taikhoan');
            //  }
            // include "view/taikhoan/edit_taikhoan.php";
            // break;
            // case 'quenmk':
            //  if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
            //     $email=$_POST['email'];
            //     $checkemail=checkemail($email);
            //     if(is_array($checkemail)){
            //         $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
            //     } else {
            //         $thongbao="Email này ko tồn tại";
            //     }
                 
                 
            //  }
            // include "view/taikhoan/quenmk.php";
            // break;                        
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
            include "viewphp/shop_02.php";
            break;
        case 'giohang':
            include "viewphp/shopping-cart.php";
            break;
        
        default:
            break;
    }
} else {
    include "viewphp/home.php";
    include "viewphp/footer.php";
    
}



?>