<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../admin/upload/".$img;
                if(is_file($hinhpath)){
                  $hinh ="<img src='".$hinhpath."' height='80' >";
                } else {
                  $hinh ="no photo";
                }
?>
  
  <body class="theme-orange">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
      <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
          <a href="index.html"
            ><img
              src="https://wrraptheme.com/templates/hexabit/html/assets/images/icon-dark.svg"
              alt="HexaBit Logo"
              class="img-fluid logo"
            /><span>HexaBit</span></a
          >
          <button
            type="button"
            class="btn-toggle-offcanvas btn btn-sm btn-default float-right"
          >
            <i class="lnr lnr-menu fa fa-chevron-circle-left"></i>
          </button>
        </div>
        <div class="sidebar-scroll">
          <div class="user-account">
            <div class="user_div">
              <img
                src="../assets/images/user.png"
                class="user-photo"
                alt="User Profile Picture"
              />
            </div>
            <div class="dropdown">
              <span>Welcome</span>
              <a
                href="javascript:void(0);"
                class="dropdown-toggle user-name"
                data-toggle="dropdown"
                ><strong>Christy Wert</strong></a
              >
            </div>
          </div>
          <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
              <li class="active">
                <a href="index.php"
                  ><i class="icon-home"></i><span>Trang chủ</span></a
                >
              </li>
              <li>
                <a href="index.php?act=adddm" class="has-arrow"
                  ><span>Danh mục</span></a
                >
              </li>
              <li>
                <a href="index.php?act=listdm" class="has-arrow"
                  ><span>Sản phẩm</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="main-content">
        <h1>Cập nhật sản phẩm</h1>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                               <?php foreach($listdanhmuc as $danh_muc){
                                if($iddm==$danh_muc['id_sp'])
                                 echo '<option value="'.$danh_muc['id_sp'].'"  selected>'.$danh_muc['ten_sp'].'</option>';
                                 else 
                                  echo '<option value="'.$danh_muc['id_sp'].'">'.$danh_muc['ten_sp'].'</option>';
                                }
                                 ?>
                                       
                        </select>
          </div>
        <div class="form-group">
            <label for="Mã loại">Mã loại</label>
            <input type="text" name="maloai" disabled>
          </div>
          <div class="form-group">
            <label for="Tên loại">Tên sản phẩm</label>
            <input type="text" name="tenloai"value="<?=$ten_sp?>">
          </div>
          <div class="form-group">
            <label for="Giá sản phẩm">Giá sản phẩm</label>
            <input type="text" name="giasp" value="<?=$gia?>"> 
          </div>
          <div class="form-group">
            <label for="Hình ảnh sản phẩm">Hình ảnh sản phẩm</label>
            <input type="file" name="hinh"> 
            <?=$hinh?>
          </div>
          <div class="form-group">
            <label for="Mô tả">Mô tả sản phẩm</label>
            <textarea name="mota"  cols="30" rows="10"><?=$mo_ta?></textarea> 
          </div>
          <div>
            <input type="hidden" name="id" value="<?=$id_sp ?>">
           <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật">
          <a href="index.php?act=listdm"><input type="button" class="btn btn-success" value="Danh sách"></a>
          <br>
          </div>
           <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;             
           ?>
        </form>
      </div>
    </div>


