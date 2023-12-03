   <!-- Breadcrumb Section Start -->
   <div class="section">

       <!-- Breadcrumb Area Start -->
       <div class="breadcrumb-area bg-light">
           <div class="container-fluid">
               <div class="breadcrumb-content text-center">
                   <?php
                    if (isset($dm) && ($dm != '')) {
                        $tieu_de = $dm['ten_dm'];
                    } else {
                        $tieu_de = "Tất cả sản phẩm";
                    }
                    ?>
                   <h1 class="title"><?= $tieu_de ?></h1>
                   <ul>
                       <li>
                           <a href="index.php">Trang chủ </a>
                       </li>
                       <li class="active"><?= $tieu_de ?></li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Breadcrumb Area End -->

   </div>
   <!-- Breadcrumb Section End -->

   <!-- Shop Section Start -->
   <div class="section section-margin">
       <div class="container">
           <div class="row flex-row-reverse">
               <div class="col-lg-9 col-12 col-custom">

                   <!--shop toolbar start-->
                   <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                       <!-- Shop Top Bar Left start -->
                       <div class="shop-top-bar-left mb-md-0 mb-2">
                           <div class="shop-top-show">
                               <span>Showing 1–12 of 39 results</span>
                           </div>
                       </div>
                       <!-- Shop Top Bar Left end -->

                       <!-- Shopt Top Bar Right Start -->
                       <div class="shop-top-bar-right">
                           <div class="shop-short-by mr-4">
                               <select class="nice-select" aria-label=".form-select-sm example">
                                   <option selected>Show 24</option>
                                   <option value="1">Show 24</option>
                                   <option value="2">Show 12</option>
                                   <option value="3">Show 15</option>
                                   <option value="3">Show 30</option>
                               </select>
                           </div>

                           <div class="shop-short-by mr-4">
                               <select class="nice-select" aria-label=".form-select-sm example">
                                   <option selected>Short by Default</option>
                                   <option value="1">Short by Popularity</option>
                                   <option value="2">Short by Rated</option>
                                   <option value="3">Short by Latest</option>
                                   <option value="3">Short by Price</option>
                                   <option value="3">Short by Price</option>
                               </select>
                           </div>

                           <div class="shop_toolbar_btn">
                               <button data-role="grid_3" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                               <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                           </div>
                       </div>
                       <!-- Shopt Top Bar Right End -->

                   </div>
                   <!--shop toolbar end-->

                   <!-- Shop Wrapper Start -->
                   <div class="row shop_wrapper grid_3">
                       <?php
                        foreach ($ds_san_pham as $san_pham) :
                            extract($san_pham);
                        ?>
                           <!-- Single Product Start -->
                           <div class="col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                               <div class="product-inner">
                                   <div class="thumb">
                                       <a href="index.php?act=single-product&id=<?= $id ?>" class="image">
                                           <?php
                                            $anh_sp = get_san_pham_anh($id);
                                            ?>
                                           <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                           <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="269" alt="Product" />
                                       </a>

                                       <div class="actions">
                                           <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                           <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                           <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                       </div>
                                   </div>
                                   <div class="content">
                                       <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $thuong_hieu_sp ?></a></h4>
                                       <h5 class="title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $ten_sp ?></a></h5>
                                       <!-- <span class="ratings">
                                           <span class="rating-wrap">
                                               <span class="star" style="width: 100%"></span>
                                           </span>
                                           <span class="rating-num">(4)</span>
                                       </span> -->
                                       <p><?= $mo_ta_ngan_sp ?></p>
                                       <span class="price">
                                           <span class="new"><?= $gia_sp ?> VNĐ</span>
                                           <?php
                                            if ($gia_cu_sp != "") {
                                                echo '<span class="old">' . $gia_cu_sp . ' VNĐ</span>';
                                            }
                                            ?>
                                       </span>
                                       <div class="shop-list-btn">
                                           <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                           <form action="index.php?act=add-cart" method="post">
                                               <input type="hidden" name="idsp" value="<?= $id ?>">
                                               <input type="hidden" name="ten_sp" value="<?= $ten_sp  ?>">
                                               <input type="hidden" name="gia_sp" value="<?= $gia_sp ?>">
                                               <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                               <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                               <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                           </form>
                                           <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button> -->

                                           <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- Single Product End -->
                       <?php endforeach; ?>


                   </div>
                   <!-- Shop Wrapper End -->

                   <!--shop toolbar start-->
                   <div class="shop_toolbar_wrapper mt-10">

                       <!-- Shop Top Bar Left start -->
                       <div class="shop-top-bar-left">
                           <div class="shop-short-by mr-4">
                               <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                                   <option selected>Show 12 Per Page</option>
                                   <option value="1">Show 12 Per Page</option>
                                   <option value="2">Show 24 Per Page</option>
                                   <option value="3">Show 15 Per Page</option>
                                   <option value="3">Show 30 Per Page</option>
                               </select>
                           </div>
                       </div>
                       <!-- Shop Top Bar Left end -->

                       <!-- Shopt Top Bar Right Start -->
                       <div class="shop-top-bar-right">
                           <nav>
                               <ul class="pagination">
                                   <li class="page-item disabled">
                                       <a class="page-link" href="#" aria-label="Previous">
                                           <span aria-hidden="true">&laquo;</span>
                                       </a>
                                   </li>
                                   <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                                   <li class="page-item">
                                       <a class="page-link" href="#" aria-label="Next">
                                           <span aria-hidden="true">&raquo;</span>
                                       </a>
                                   </li>
                               </ul>
                           </nav>
                       </div>
                       <!-- Shopt Top Bar Right End -->

                   </div>
                   <!--shop toolbar end-->

               </div>
               <div class="col-lg-3 col-12 col-custom">
                   <form action="index.php?act=shop-left-sidebar" method="get">
                       <!-- Sidebar Widget Start -->
                       <aside class="sidebar_widget mt-10 mt-lg-0">
                           <div class="widget_inner" data-aos="fade-up" data-aos-delay="200">
                               <div class="widget-list mb-10">
                                   <h3 class="widget-title mb-4">Search</h3>
                                   <div class="search-box">
                                       <input type="text" class="form-control" name="tu_khoa" placeholder="Search Our Store" aria-label="Search Our Store">
                                       <button class="btn btn-dark btn-hover-primary" name="tim_kiem" type="submit">
                                           <i class="fa fa-search"></i>
                                       </button>
                                   </div>
                               </div>
                               <div class="widget-list mb-10">
                                   <h3 class="widget-title mb-4">Danh mục</h3>
                                   <!-- Widget Menu Start -->
                                   <nav>
                                       <ul class="category-menu mb-n3">
                                           <li class="menu-item-has-children pb-4">
                                               <a href="#">Nữ <i class="fa fa-angle-down"></i></a>
                                               <ul class="dropdown">
                                                   <?php
                                                    $ds_dm_nu = get_danh_muc_theo_dm_lon('nữ');
                                                    // var_dump($ds_dm_nu);
                                                    if (count($ds_dm_nu) > 0) {
                                                        foreach ($ds_dm_nu as $dm_nu) {
                                                            extract($dm_nu);
                                                            echo '<li><a href="index.php?act=shop-left-sidebar&iddm=' . $id . '">' . $ten_dm . '</a></li>';
                                                        }
                                                    }
                                                    ?>
                                               </ul>
                                           </li>
                                           <li class="menu-item-has-children pb-4">
                                               <a href="#">Nam <i class="fa fa-angle-down"></i></a>
                                               <ul class="dropdown">
                                               <?php
                                                    $ds_dm_nam = get_danh_muc_theo_dm_lon('nam');
                                                    // var_dump($ds_dm_nam);
                                                    if (count($ds_dm_nam) > 0) {
                                                        foreach ($ds_dm_nam as $dm_nam) {
                                                            extract($dm_nam);
                                                            echo '<li><a href="index.php?act=shop-left-sidebar&iddm=' . $id . '">' . $ten_dm . '</a></li>';
                                                        }
                                                    }
                                                    ?>
                                               </ul>
                                           </li>
                                           
                                       </ul>
                                   </nav>
                                   <!-- Widget Menu End -->
                               </div>
                               <div class="widget-list mb-10">
                                   <h3 class="widget-title mb-5">Price Filter</h3>
                                   <!-- Widget Menu Start -->
                                   <form action="#">
                                       <div id="slider-range"></div>
                                       <button class="slider-range-submit" type="submit">Filter</button>
                                       <input class="slider-range-amount" type="text" name="text" id="amount" />
                                   </form>
                                   <!-- Widget Menu End -->
                               </div>
                               <div class="widget-list mb-10">
                                   <h3 class="widget-title">Sản phẩm</h3>
                                   <div class="sidebar-body">
                                       <ul class="sidebar-list">
                                           <li><a href="index.php?act=shop-left-sidebar">Tất cả sản phẩm</a></li>
                                           <li><a href="#">Bán chạy</a></li>
                                           <li><a href="#">Sản phẩm mới</a></li>
                                       </ul>
                                   </div>
                               </div>
                               <!-- <div class="widget-list mb-10">
                                   <h3 class="widget-title">Color</h3>
                                   <div class="sidebar-body">
                                       <ul class="checkbox-container categories-list">
                                           <li>
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                   <label class="custom-control-label" for="customCheck12">black (20)</label>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                   <label class="custom-control-label" for="customCheck13">red (6)</label>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                   <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                   <label class="custom-control-label" for="customCheck11">green (5)</label>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                   <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                               </div>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="widget-list mb-10">
                                   <h3 class="widget-title mb-4">Tags</h3>
                                   <div class="sidebar-body">
                                       <ul class="tags mb-n2">
                                           <li><a href="#">Men</a></li>
                                           <li><a href="#">Women</a></li>
                                           <li><a href="#">Fashion</a></li>
                                           <li><a href="#">Watch</a></li>
                                           <li><a href="#">Handmade</a></li>
                                           <li><a href="#">Lather</a></li>
                                           <li><a href="#">Fabrics</a></li>
                                       </ul>
                                   </div>
                               </div> -->
                               <div class="widget-list">
                                   <!-- <h3 class="widget-title mb-4">Recent Products</h3>
                                <div class="sidebar-body product-list-wrapper mb-n6"> -->
                                   <!-- Single Product List Start -->
                                   <!-- <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="view/images/products/small-product/1.jpg" alt="Product" />
                                                <img class="second-image" src="view/images/products/small-product/5.jpg" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div> -->
                                   <!-- Single Product List End -->

                                   <!-- </div> -->
                               </div>
                           </div>
                       </aside>
                       <!-- Sidebar Widget End -->
                   </form>

               </div>
           </div>
       </div>
   </div>
   <!-- Shop Section End -->