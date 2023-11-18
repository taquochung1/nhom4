<?php
if(is_array($dm)){
    extract($dm);
}
?>
  
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
                <a href="index.php?act=addsp" class="has-arrow"
                  ><span>Sản phẩm</span></a
                >
              </li>
              <li>
                <a href="index.php?act=magg" class="has-arrow"
                  ><span>Mã giảm giá</span></a
                >
              </li>
              <li>
                <a href="index.php?act=ctsp" class="has-arrow"
                  ><span>Chi tiết</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="main-content">
      
      </div>
    </div>

      <div id="main-content">
        <h1>Sửa loại hàng</h1>
        <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Mã loại">Mã loại</label>
            <input type="text" name="maloai" disabled>
          </div>
          <div class="form-group">
            <label for="Tên loại">Tên loại</label>
            <input type="text" name="tenloai"value="<?php if(isset($ten_dm)&&($ten_dm!= "" )) echo $ten_dm; ?>">
          </div>
          <div class="form-group">
            <label for="Trạng Thái">Trạng Thái</label>
            <select name="trangthai" value="<?php if(isset($trangthai)&&($trangthai!= "" )) echo $trangthai; ?>" >
                <option value="Đang hoạt động">Đang hoạt động</option>
                <option value="Nghỉ bán">Nghỉ bán</option> 
                <option value="Sản phẩm hot">Sản phẩm hot</option> 
            </select>
          </div>
          <div>
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
           <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật">
          <a href="index.php?act=listdm"><input type="button" class="btn btn-success" value="Danh sách">
          </a>
          <br>
           <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;             
           ?>
        </form>
      </div>
    </div>


