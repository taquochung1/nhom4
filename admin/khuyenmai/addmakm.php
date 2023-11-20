<!-- 
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
                <a href="index.php?act=addmakm" class="has-arrow"
                  ><span>Mã khuyến mại</span></a
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
        <h1>Thêm mã giảm giá</h1>
        <form action="index.php?act=addmakm" method="post" enctype="multipart/form-data">
        </div>
          <div class="form-group">
            <label for="Tên sản phẩm" >Tên khuyến mãi</label>
            <input type="text" name="ten_khuyen_mai">
          </div>
          <div class="form-group">
            <label for="Tên loại" >chiết khấu</label>
            <input type="text" name="chiet_khau">
          </div>
          <div class="form-group">
            <label for="Ngày áp dụng" >Ngày áp dụng</label>
            <input type="file" name="ngay_ap_dung">
          </div>
          <input type="submit" class="btn btn-success" name="themmoi" value="Thêm khuyến mãi mới">
          <a href="index.php?act=listmakm"><input type="button" class="btn btn-success"  value="Danh sách">
          </a>
          <br>
        
      </div>
    </div> -->
    

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
                <a href="index.php?act=addmakm" class="has-arrow"
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
        <h1>Thêm mã khuyến mại</h1>
        <form action="index.php?act=addmakm" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Mã loại">Mã loại</label>
            <input type="text" name="maloai" disabled>
          </div>
          <div class="form-group">
            <label for="Tên loại" >Tên khuyến mãi</label>
            <input type="text" name="ten_khuyen_mai">
          </div>
          <div class="form-group">
            <label for="Tên loại" >chiết khấu</label>
            <input type="text" name="chiet_khau">
          </div>
          <div class="form-group">
            <label for="Ngày áp dụng" >Ngày áp dụng</label>
            <input type="date" name="ngay_ap_dung">
          </div>
        
           <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mã">
          <a href="index.php?act=listmakm"><input type="button" class="btn btn-success"  value="Danh sách">
          </a>
          <br>
          <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;             
          ?>
        </form>
      </div>
    </div>