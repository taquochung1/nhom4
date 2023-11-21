<?php
if(is_array($tk)){
    extract($tk);
}
?>


<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="tendangnhap" value="<?php if(isset($ten_dang_nhap)&&($ten_dang_nhap!="")) echo $ten_dang_nhap ; ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="text" name="matkhau" value="<?php if(isset($mat_khau)&&($mat_khau!="")) echo $mat_khau  ; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_dang_nhap" value="<?php if(isset($id_dang_nhap)&&($id_dang_nhap>0)) echo $id_dang_nhap ; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                       <a href="index.php?act=listtk"> <input type="button" value="DANH SÁCH"></a>
                    </div>
                        <?php
                            if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                      
                        ?>
                </form>
            </div>
        </div>
    </div>