<body>

  <!-- Wrap -->
  <div id="wrap">
    <!-- header -->
    <header>
      <div class="sticky">
        <div class="container">
          <!-- Logo -->
          <div class="logo">
            <a href="index.php"><img class="img-responsive" src="viewphp/assetslayout/images/logo.png" alt="" /></a>
          </div>
          <nav class="navbar ownmenu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"><i class="fa fa-navicon"></i></span>
              </button>
            </div>

            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
              <ul class="nav">
                <li class="dropdown">
                  <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Trang chủ</a>
                </li>
                <li class="dropdown">
                  <a href="index.php?act=sanpham">Sản phẩm</a>
                </li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>

                <!-- Two Link Option -->
                <!-- MEGA MENU -->
                <li class="dropdown megamenu">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Cửa hàng</a>
                  <div class="dropdown-menu">
                    <div class="row">
                      <!-- Shop Pages -->
                      <!-- TOp Rate Products -->
                      <div class="col-md-4">
                        <h6>TOp Rate Products</h6>
                        <div class="top-rated">
                          <ul>
                            <li>
                              <div class="media-left">
                                <div class="cart-img">
                                  <a href="#">
                                    <img class="media-object img-responsive" src="viewphp/assetslayout/images/cart-img-1.jpg" alt="..." />
                                  </a>
                                </div>
                              </div>
                              <div class="media-body">
                                <h6 class="media-heading">WOOD CHAIR</h6>
                                <div class="stars">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <span class="price">129.00 USD</span>
                              </div>
                            </li>
                            <li>
                              <div class="media-left">
                                <div class="cart-img">
                                  <a href="#">
                                    <img class="media-object img-responsive" src="viewphp/assetslayout/images/cart-img-2.jpg" alt="..." />
                                  </a>
                                </div>
                              </div>
                              <div class="media-body">
                                <h6 class="media-heading">STOOL</h6>
                                <div class="stars">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <span class="price">129.00 USD</span>
                              </div>
                            </li>
                            <li>
                              <div class="media-left">
                                <div class="cart-img">
                                  <a href="#">
                                    <img class="media-object img-responsive" src="viewphp/assetslayout/images/cart-img-3.jpg" alt="..." />
                                  </a>
                                </div>
                              </div>
                              <div class="media-body">
                                <h6 class="media-heading">WOOD SPOON</h6>
                                <div class="stars">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <span class="price">129.00 USD</span>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- New Arrival -->
                      <div class="col-md-5">
                        <h5>
                          Sản phẩm mới 2023 <span>(Hàng bán chạy )</span>
                        </h5>
                        <img class="nav-img" src="viewphp/assetslayout/images/nav-img.png" alt="" />
                        <p>
                          Lorem ipsum dolor sit amet,<br />
                          consectetur adipiscing elit. <br />
                          Donec faucibus maximus<br />
                          vehicula.
                        </p>
                        <a href="#." class="btn btn-small btn-round">SHOP NOW</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="index.php?act=lienhe"> Liên hệ</a></li>
              </ul>
            </div>

            <!-- Nav Right -->
            <div class="nav-right">
              <ul class="navbar-right">
                <!-- USER INFO -->
                <li class="dropdown user-acc">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-user"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <?php
                    if (isset($_SESSION['tendangnhap'])) {
                      extract($_SESSION['tendangnhap']);
                    ?>
                      <li>
                        <h6>XIN CHÀO <?= $ten_dang_nhap ?></h6>
                      </li>
                      <li><a href="shopping-cart.php">Giỏ hàng</a></li>
                      <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                    <?php
                    } else {
                    ?>
                      <li>
                        <h6>XIN CHÀO</h6>
                      </li>
                      <li><a href="shopping-cart.php">GIỎ HÀNG</a></li>
                      <li><a href="index.php?act=dangky">ĐĂNG KÝ</a></li>
                      <li><a href="index.php?act=dangnhap">ĐĂNG NHẬP</a></li>
                    <?php } ?>
                  </ul>

                </li>


                <!-- USER BASKET -->
                <li class="dropdown user-basket">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <?php
                    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                      $hinh = $hinhpath . $cart[2];
                      $ttien = $cart[3] * $cart[4];
                      $tong += $ttien;
                      echo '
                    <li>
                      <div class="media-left">
                        <div class="cart-img">
                          <a href="#">
                            <img class="media-object img-responsive" src="' . $hinh . '" alt="..." />
                          </a>
                        </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">' . $cart[1] . '</h6>
                        <span class="price">' . $cart[3] . ' USD</span>
                        <span class="qty">QTY: 01</span>
                      </div>
                    </li>';
                    } ?>
                    <li>
                      <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                    </li>
                    <li class="margin-0">
                      <div class="row">
                        <div class="col-xs-6">
                          <a href="index.php?act=viewcart" class="btn">VIEW CART</a>
                        </div>
                        <div class="col-xs-6">
                          <a href="" class="btn">CHECK OUT</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                <!-- SEARCH BAR -->
                <li class="dropdown">
                  <a href="javascript:void(0);" class="search-open"><i class="icon-magnifier"></i></a>
                  <div class="search-inside animated bounceInUp">
                    <i class="icon-close search-close"></i>
                    <div class="search-overlay"></div>
                    <div class="position-center-center">
                      <div class="search">
                        <form>
                          <input type="search" placeholder="Search Shop" />
                          <button type="submit">
                            <i class="icon-check"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
      <!-- SLIDE Start -->
      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>
            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
              <!-- MAIN IMAGE -->
              <img src="viewphp/assetslayout/images/slide-bg-1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" />
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption font-playfair sfb tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="-200" data-speed="800" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 7;
                    font-size: 18px;
                    color: #fff;
                    max-width: auto;
                    max-height: auto;
                    white-space: nowrap;
                  ">
                The Latest Product from ecoshop
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption sfl font-extra-bold tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="-120" data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 80px;
                    color: #2d3a4b;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                <small class="font-regular">$</small>299
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="0" data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 120px;
                    color: #fff;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                featured
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="110" data-speed="800" data-start="1300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 120px;
                    color: #fff;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                cycle
              </div>
              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb tp-resizeme" data-x="left" data-hoffset="0" data-y="center" data-voffset="240" data-speed="800" data-start="2200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0" style="z-index: 8">
                <a href="#." class="btn">SHOP NOW</a>
              </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
              <!-- MAIN IMAGE -->
              <img src="viewphp/assetslayout/images/slide-bg-2.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" />
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption font-playfair sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-150" data-speed="800" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 7;
                    font-size: 18px;
                    color: #fff;
                    max-width: auto;
                    max-height: auto;
                    white-space: nowrap;
                  ">
                The Latest Product from ecoshop
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption sfr font-regular tp-resizeme letter-space-4" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-speed="800" data-start="800" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 78px;
                    color: #fff;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                look beautiful
              </div>
              <!-- LAYER NR. 2 -->
              <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4" data-x="center" data-hoffset="0" data-y="center" data-voffset="60" data-speed="800" data-start="1300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 140px;
                    color: #fff;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                this season
              </div>
              <!-- LAYER NR. 4 -->
              <div class="tp-caption sfb font-extra-bold tp-resizeme" data-x="center" data-hoffset="120" data-y="center" data-voffset="200" data-speed="800" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.07" data-endelementdelay="0.1" data-endspeed="300" style="
                    z-index: 6;
                    font-size: 60px;
                    color: #fff;
                    text-transform: uppercase;
                    white-space: nowrap;
                  ">
                <small class="font-regular">$</small> 299
              </div>
              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb tp-scrollbelowslider tp-resizeme" data-x="center" data-hoffset="-120" data-y="center" data-voffset="200" data-speed="800" data-start="2200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0" style="z-index: 8">
                <a href="#." class="btn">BUY NOW</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Content -->
    <div id="content">
      <!-- New Arrival -->
      <section class="padding-top-100 padding-bottom-100">
        <div class="container">
          <!-- Main Heading -->
          <div class="heading text-center">
            <h4>Sản phẩm mới 2023</h4>
            <span>Sản phẩm chất lượng đến từ thương hiệu nổi tiếng thế giới HHC</span>
          </div>
        </div>

        <!-- New Arrival -->
        <div class="arrival-block single-img-demos">
          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-1.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-1.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">wooden chair</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-2.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-2.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">MINIMALIST WOO TOYS</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-3.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-3.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">Concrete Shaving Kit</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-4.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-4.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">PARAGON PENDANT</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-5.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-5.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">crative lamp</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-6.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-6.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">ECO FRIENDLY</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-7.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-7.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">GEOMETRY STOOL</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>

          <!-- Item -->
          <div class="item">
            <!-- Images -->
            <img class="img-1" src="viewphp/assetslayout/images/item-img-1-8.jpg" alt="" />
            <!-- Overlay  -->
            <div class="overlay">
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
              <div class="position-center-center">
                <a href="viewphp/assetslayout/images/item-img-1-8.jpg" data-lighter><i class="icon-magnifier"></i></a>
              </div>
            </div>
            <!-- Item Name -->
            <div class="item-name">
              <a href="#.">CERAMIC STONE VASE</a>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Popular Products -->
      <section class="padding-top-50 padding-bottom-150">
        <div class="container">
          <!-- Main Heading -->
          <div class="heading text-center">
            <h4>Sản phẩm nổi bật</h4>
          </div>

          <!-- Popular Item Slide -->
          <div class="papular-block block-slide single-img-demos">
            <!-- Item -->
            <div class="item">
              <!-- Item img -->
              <div class="item-img">
                <img class="img-1" src="viewphp/assetslayout/images/product-1.jpg" alt="" />
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center">
                    <div class="inn">
                      <a href="viewphp/assetslayout/images/product-1.jpg" data-lighter><i class="icon-magnifier"></i></a>
                      <a href="#."><i class="icon-basket"></i></a>
                      <a href="#."><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name">
                <a href="#.">stone cup</a>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
            </div>

            <!-- Item -->
            <div class="item">
              <!-- Item img -->
              <div class="item-img">
                <img class="img-1" src="viewphp/assetslayout/images/product-2.jpg" alt="" />
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center">
                    <div class="inn">
                      <a href="viewphp/assetslayout/images/product-2.jpg" data-lighter><i class="icon-magnifier"></i></a>
                      <a href="#."><i class="icon-basket"></i></a>
                      <a href="#."><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name">
                <a href="#.">gray bag</a>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
            </div>

            <!-- Item -->
            <div class="item">
              <!-- Item img -->
              <div class="item-img">
                <img class="img-1" src="viewphp/assetslayout/images/product-3.jpg" alt="" />
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center">
                    <div class="inn">
                      <a href="viewphp/assetslayout/images/product-3.jpg" data-lighter><i class="icon-magnifier"></i></a>
                      <a href="#."><i class="icon-basket"></i></a>
                      <a href="#."><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name">
                <a href="#.">chiar</a>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
            </div>

            <!-- Item -->
            <div class="item">
              <!-- Item img -->
              <div class="item-img">
                <img class="img-1" src="viewphp/assetslayout/images/product-4.jpg" alt="" />
                <!-- Overlay -->
                <div class="overlay">
                  <div class="position-center-center">
                    <div class="inn">
                      <a href="viewphp/assetslayout/images/product-4.jpg" data-lighter><i class="icon-magnifier"></i></a>
                      <a href="#."><i class="icon-basket"></i></a>
                      <a href="#."><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Name -->
              <div class="item-name">
                <a href="#.">STool</a>
                <p>Lorem ipsum dolor sit amet</p>
              </div>
              <!-- Price -->
              <span class="price"><small>$</small>299</span>
            </div>
          </div>
        </div>
      </section>

      <!--======= FOOTER =========-->