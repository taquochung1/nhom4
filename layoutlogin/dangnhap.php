<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 15:12:12 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="layoutlogin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="layoutlogin/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="layoutlogin/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="layoutlogin/css/iofrm-theme9.css">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <!-- <a href="index.html"> -->
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="index.php?act=dangnhap" class="active">Đăng nhập</a>
                            <a href="index.php?act=dangky">Đăng ký</a>
                            <?php
                            if (isset($_SESSION['tendangnhap'])) {
                                extract($_SESSION['tendangnhap'])
                            ?>
                                 <div>Xin chào <?='$tendangnhap'?>></div>
                                 <div></div>
                               
                               

                            <?php
                            } else {

                            ?>
                        </div>
                        <form>
                            <input class="form-control" type="text" name="tendangnhap" placeholder="Tên đăng nhập" required>
                            <input class="form-control" type="password" name="matkhau" placeholder="Password" required>
                            <div class="form-button">
                                <!-- <button id="submit" type="submit" class="ibtn">Đăng nhập</button> -->
                                <input type="submit" value="Đăng nhập " name="dangnhap">
                                <a href="forget9.html">Quên mật khẩu</a>
                            </div>
                            <h2 class="thongbao">
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) {
                                    echo $thongbao;
                                }

                                ?>
                            </h2>
                        </form>

                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    <?php }  ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 15:12:23 GMT -->

</html>