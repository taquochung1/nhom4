<div class="row">
    <div class="title">
        <h1>THÊM LOẠI HÀNG MỚI</h1>
    </div>
    <div class="content">
        <form action="index.php?act=adddm" method="post">
            <div class="detail">
                Mã loại hàng <br>
                <input type="text" name="maLoai">
            </div>
            <div class="detail">
                Tên loại hàng <br>
                <input type="text" name="tenLoai">
            </div>
            <div class="detail">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href=""><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!= "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>