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
            <a href="index.php?act=magg" class="has-arrow"><span>Mã giảm giá</span></a>
          </li>
          <li>
            <a href="index.php?act=ctsp" class="has-arrow"><span>Chi tiết</span></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div id="main-content">

  </div>
</div>
<div id="main-content">
  <table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Tên Danh Mục </th>
        <th scope="col">Trạng Thái</th>
        <th scope="col">Chỉnh Sửa</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($listdanhmuc as $danhmuc) {
          extract($danhmuc);
          $suadm = "index.php?act=suadm&id=" . $id_dm;
          $xoadm = "index.php?act=xoadm&id=" . $id_dm;

          echo '<tr>
                
                <td>' . $id_dm . '</td>
                <td>' . $ten_dm . '</td>
                <td>' . $trang_thai . '</td>
                <td>
                  <a href="' . $suadm . '"> <input type="button" value="Sửa"></a>
                 <a href="' . $xoadm . '"> <input  type="button" value="Xóa"></a>
                </td>
                </tr>';
        } ?>

      </tr>
</div>
</table>
<div class="another-button">
  <input class="btn btn-success" type="button" value="Xóa các mục đã chọn">
  <a href="index.php?act=adddm"><input class="btn btn-success" type="button" value="Thêm loại hàng"></a>
</div>
</div>

</div>