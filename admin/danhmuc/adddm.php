
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
                <a href="danhmuc.html" class="has-arrow"
                  ><span>Danh mục</span></a
                >
              </li>
              <li>
                <a href="sanpham.html" class="has-arrow"
                  ><span>Sản phẩm</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div id="main-content">
        <h1>Thêm loại hàng</h1>
        <form action="them.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Mã loại">Mã loại</label>
            <input type="text" id="maLoai" name="maLoai" class="form-control" />
          </div>
          <div class="form-group">
            <label for="Tên loại">Tên loại</label>
            <input
              type="text"
              id="tenLoai"
              name="tenLoai"
              class="form-control"
            />
          </div>
          <button class="btn btn-success">Thêm loại hàng</button>
          <button class="btn btn-success">Danh sách loại hàng</button>
        </form>
      </div>
    </div>