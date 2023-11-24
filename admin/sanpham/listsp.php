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
  <form action="index.php?act=listsp" method="post">
    <div class="">
      <h1>Danh sách loại hàng</h1>
    </div>
    <input type="text" name="kyw">
    <select name="iddm">
      <option value="0" selected>Tất cả</option>
      <?php foreach ($listdanhmuc as $danhmuc) {
        extract($danhmuc);
        echo '<option value="' . $id_dm . '">' . $ten_dm . '</option>';
      } ?>

    </select>
    <input type="submit" name="listok" value="Ok">
  </form>
  <table class="table">
    <thead class="thead-dark">
      <tr>

        <th scope="col"></th>
        <th scope="col">Mã loại</th>
        <th scope="col">Tên sản phẩm </th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Chỉnh sửa</th>

      </tr>
    </thead>
    <?php foreach ($listsanpham as $sanpham) {
      extract($sanpham);
      $suasp = "index.php?act=suasp&id=" . $id_sp;
      $xoasp = "index.php?act=xoasp&id=" . $id_sp;
      $hinhpath = "../admin/upload/" . $img;
      if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' height='80' >";
      } else {
        $hinh = "no photo";
      }

      echo '<tr> <td><input type="checkbox" name="name" id=""></td>
                <td>' . $id_dm . '</td>
                <td>' . $ten_sp . '</td>
                <td>' . $hinh . '</td>
                <td>' . $gia . '</td>
                
                <td>
                 <a href="' . $suasp . '"> <input type="button" value="Sửa"></a>
                 <a href="' . $xoasp . '"> <input  type="button" value="Xóa"></a>
                </td>
                </tr>';
    } ?>
  </table>
  <div class="another-button">
    <input class="btn btn-success" type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=addsp"><input class="btn btn-success" type="button" value="Thêm loại hàng"></a>
  </div>

</div>

</div>