<body class="theme-orange">
  <div id="wrapper">
    <div id="left-sidebar" class="sidebar">
      <div class="navbar-brand">
        <a href="index.html"><img src="https://wrraptheme.com/templates/hexabit/html/assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo" /><span>HexaBit</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right">
          <i class="lnr lnr-menu fa fa-chevron-circle-left"></i>
        </button>
      </div>
      <div class="sidebar-scroll">

        <nav id="left-sidebar-nav" class="sidebar-nav">
          <ul id="main-menu" class="metismenu">
            <li class="active">
              <a href="index.php"><i class="icon-home"></i><span>Trang chủ</span></a>
            </li>
            <li>
              <a href="index.php?act=adddm" class="has-arrow"><span>Danh mục</span></a>
            </li>
            <li>
              <a href="index.php?act=addsp" class="has-arrow"><span>Sản phẩm</span></a>
            </li>
            <li>
              <a href="index.php?act=addmakm" class="has-arrow"><span>Mã khuyến mại</span></a>
            </li>
            <li>
              <a href="index.php?act=ctsp" class="has-arrow"><span>Chi tiết</span></a>
            </li>
            <li>
              <a href="index.php?act=addtk" class="has-arrow"><span>Tài Khoản </span></a>
            </li>
            <li>
              <a href="index.php?act=addbl" class="has-arrow"><span>Bình Luận </span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div id="main-content">

    </div>
  </div>

    <div id="main-content">

    </div>
</div>

<div id="main-content">
    <h1>Thêm tài khoản</h1>
    <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Mã loại">Mã loại</label>
            <input type="text" name="maloai" disabled>
        </div>
        <div class="form-group">
            <label for="tendangnhap">Tên Đăng Nhập</label>
            <input type="text" name="tendangnhap">
        </div>
        <div class="form-group">
            <label for="matkhau">Mật Khẩu</label>
            <input type="text" name="matkhau">
        </div>
        <div>
            <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới">
            <a href="index.php?act=listtk"><input type="button" class="btn btn-success" value="Danh sách">
            </a>
            <br>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
    </form>
</div>
</div>