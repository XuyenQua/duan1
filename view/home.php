<?php
include 'slider.php';
// var_dump($ds_10_san_pham_moi);
?>
<!-- Banner Section Start -->
<div class="section section-margin">
    <div class="container">

        <!-- Banners Start -->
        <div class="row mb-n6">
            <!-- Banner Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="300">
                    <div class="banner-image">
                        <a href="#"><img src="view/images/banner/banner-1.jpg" alt=""></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title">Sun Hat</h4>
                            <h3 class="title">Get Offer <br />For Summer</h3>
                            <a href="index.php?act=shop-left-sidebar" class="btn btn-dark btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="500">
                    <div class="banner-image">
                        <a href="#"><img src="view/images/banner/banner-2.jpg" alt=""></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title">Ladies Bag</h4>
                            <h3 class="title">Buy One <br />Get One Free</h3>
                            <a href="index.php?act=shop-left-sidebar" class="btn btn-dark btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-4 col-md-6 col-12 mb-6">
                <div class="banner" data-aos="fade-up" data-aos-delay="700">
                    <div class="banner-image">
                        <a href="#"><img src="view/images/banner/banner-3.jpg" alt=""></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title">Smart Watch</h4>
                            <h3 class="title">20% Off <br />Smart Watch</h3>
                            <a href="index.php?act=shop-left-sidebar" class="btn btn-dark btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->
<!-- Feature Section Start -->
<div class="section">
    <div class="container">
        <div class="feature-wrap">
            <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="view/images/icons/feature-icon-2.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Miễn phí vận chuyển</h5>
                            <p>Miễn phí vận chuyển cho đơn hàng từ 500000 VNĐ</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="view/images/icons/feature-icon-3.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Hỗ trợ 24/7</h5>
                            <p>Hỗ trợ 24 giờ một ngày</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="view/images/icons/feature-icon-4.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Hoàn tiền</h5>
                            <p>Nếu sản phẩm lỗi do nhà sản xuất</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="view/images/icons/feature-icon-1.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Giảm giá đơn hàng</h5>
                            <p>Mỗi đơn hàng trên 2 triệu VNĐ</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- Product Section Start -->
<div class="section section-padding mt-0">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Tab Start -->
            <div class="col-12">
                <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#tab-product-all">Hàng mới</a></li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-clothings">Bán chạy</a></li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-sale">Yêu thích</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row">
            <div class="col">
                <div class="tab-content position-relative">
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper mb-n10">
                                    <?php
                                    $sp_10_moi = array();

                                    for ($i = 0; $i < (count($ds_10_san_pham_moi)); $i++) {
                                        if ($i % 2 == 0) {
                                            $mot_cap_sp = [];
                                            array_push($mot_cap_sp, $ds_10_san_pham_moi[$i]);
                                            array_push($mot_cap_sp, $ds_10_san_pham_moi[$i + 1]);

                                            array_push($sp_10_moi, $mot_cap_sp);
                                        }
                                    }

                                    for ($i = 0; $i < count($sp_10_moi); $i++) :

                                    ?>
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">
                                            <?php
                                            for ($l = 0; $l < 2; $l++) :
                                            ?>
                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="thumb">
                                                        <a href="index.php?act=single-product&id=<?= $sp_10_moi[$i][$l]['id'] ?>" class="image">
                                                            <?php
                                                            $anh_sp = get_san_pham_anh($sp_10_moi[$i][$l]['id']);
                                                            ?>
                                                            <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                            <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <div class="actions">
                                                            <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                            <!-- <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a> -->
                                                            <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $sp_10_moi[$i][$l]['id'] ?>"><?= $sp_10_moi[$i][$l]['thuong_hieu_sp'] ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_moi[$i][$l]['id'] ?>"><?= $sp_10_moi[$i][$l]['ten_sp'] ?></a></h5>
                                                        <!-- <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">(4)</span>
                                                        </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $sp_10_moi[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                            <?php
                                                            if ($sp_10_moi[$i][$l]['gia_cu_sp'] != "") {
                                                                echo '<span class="old">' . $sp_10_moi[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                            }
                                                            ?>

                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $sp_10_moi[$i][$l]['id'] ?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $sp_10_moi[$i][$l]['ten_sp'] ?>">
                                                            <input type="hidden" name="gia_sp" value="<?= $sp_10_moi[$i][$l]['gia_sp'] ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                            <?php endfor; ?>
                                        </div>
                                        <!-- Product End -->
                                    <?php endfor; ?>


                                </div>


                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-product-clothings">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper mb-n10">
                                    <?php
                                    $sp_10_ban_chay = array();

                                    for ($i = 0; $i < (count($ds_10_san_pham_ban_chay)); $i++) {
                                        if ($i % 2 == 0) {
                                            $mot_cap_sp = [];
                                            array_push($mot_cap_sp, $ds_10_san_pham_ban_chay[$i]);
                                            array_push($mot_cap_sp, $ds_10_san_pham_ban_chay[$i + 1]);

                                            array_push($sp_10_ban_chay, $mot_cap_sp);
                                        }
                                    }

                                    for ($i = 0; $i < count($sp_10_ban_chay); $i++) :

                                    ?>
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">
                                            <?php
                                            for ($l = 0; $l < 2; $l++) :
                                            ?>
                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="thumb">
                                                        <a href="index.php?act=single-product&id=<?= $sp_10_ban_chay[$i][$l]['id'] ?>" class="image">
                                                            <?php
                                                            $anh_sp = get_san_pham_anh($sp_10_ban_chay[$i][$l]['id']);
                                                            ?>
                                                            <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                            <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <div class="actions">
                                                            <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                            <!-- <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a> -->
                                                            <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $sp_10_ban_chay[$i][$l]['id'] ?>"><?= $sp_10_ban_chay[$i][$l]['thuong_hieu_sp'] ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_ban_chay[$i][$l]['id'] ?>"><?= $sp_10_ban_chay[$i][$l]['ten_sp'] ?></a></h5>
                                                        <!-- <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">(4)</span>
                                                        </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $sp_10_ban_chay[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                            <?php
                                                            if ($sp_10_ban_chay[$i][$l]['gia_cu_sp'] != "") {
                                                                echo '<span class="old">' . $sp_10_ban_chay[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                            }
                                                            ?>

                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $sp_10_ban_chay[$i][$l]['id'] ?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $sp_10_ban_chay[$i][$l]['ten_sp'] ?>">
                                                            <input type="hidden" name="gia_sp" value="<?= $sp_10_ban_chay[$i][$l]['gia_sp'] ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                            <?php endfor; ?>
                                        </div>
                                        <!-- Product End -->
                                    <?php endfor; ?>


                                </div>


                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-product-sale">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper mb-n10">
                                    <?php
                                    $sp_10_yeu_thich = array();

                                    for ($i = 0; $i < (count($ds_10_san_pham_yeu_thich)); $i++) {
                                        if ($i % 2 == 0) {
                                            $mot_cap_sp = [];
                                            array_push($mot_cap_sp, $ds_10_san_pham_yeu_thich[$i]);
                                            array_push($mot_cap_sp, $ds_10_san_pham_yeu_thich[$i + 1]);

                                            array_push($sp_10_yeu_thich, $mot_cap_sp);
                                        }
                                    }

                                    for ($i = 0; $i < count($sp_10_yeu_thich); $i++) :

                                    ?>
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">
                                            <?php
                                            for ($l = 0; $l < 2; $l++) :
                                            ?>
                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="thumb">
                                                        <a href="index.php?act=single-product&id=<?= $sp_10_yeu_thich[$i][$l]['id'] ?>" class="image">
                                                            <?php
                                                            $anh_sp = get_san_pham_anh($sp_10_yeu_thich[$i][$l]['id']);
                                                            ?>
                                                            <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                            <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <div class="actions">
                                                            <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                            <!-- <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a> -->
                                                            <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $sp_10_yeu_thich[$i][$l]['id'] ?>"><?= $sp_10_yeu_thich[$i][$l]['thuong_hieu_sp'] ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_yeu_thich[$i][$l]['id'] ?>"><?= $sp_10_yeu_thich[$i][$l]['ten_sp'] ?></a></h5>
                                                        <!-- <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">(4)</span>
                                                        </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $sp_10_yeu_thich[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                            <?php
                                                            if ($sp_10_yeu_thich[$i][$l]['gia_cu_sp'] != "") {
                                                                echo '<span class="old">' . $sp_10_yeu_thich[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                            }
                                                            ?>

                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $sp_10_yeu_thich[$i][$l]['id'] ?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $sp_10_yeu_thich[$i][$l]['ten_sp'] ?>">
                                                            <input type="hidden" name="gia_sp" value="<?= $sp_10_yeu_thich[$i][$l]['gia_sp'] ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                            <?php endfor; ?>
                                        </div>
                                        <!-- Product End -->
                                    <?php endfor; ?>


                                </div>


                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Section End -->

<!-- Banner Fullwidth Start -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="banner">
                    <div class="banner-image">
                        <a href="index.php?act=shop-left-sidebar"><img src="view/images/banner/big-banner.jpg" alt="Banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Fullwidth End -->

<!-- Product Deal Section Start -->
<div class="section section-padding mt-0 overflow-hidden">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Tab Start -->
            <div class="col-12">
                <div class="section-title-produt-tab-wrapper">
                    <div class="section-title m-0" data-aos="fade-right" data-aos-delay="300">
                        <h1 class="title">Ưu đãi hôm nay</h1>
                    </div>
                    <ul class="product-tab-nav nav mt-n3" data-aos="fade-left" data-aos-delay="300">
                        <li class="nav-item"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#product-deal-all">Hàng mới</a></li>
                        <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-clothings">Bán chạy</a></li>
                        <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-sale">Yêu thích</a></li>
                    </ul>
                </div>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row">
            <div class="col">
                <div class="tab-content position-relative">
                    <div class="tab-pane fade show active" id="product-deal-all">
                        <div class="product-deal-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($ds_10_san_pham_moi as $sanpham) :
                                        extract($sanpham);
                                        //var_dump($sanpham);
                                        if ($gia_cu_sp != "") :
                                    ?>
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">

                                                <!-- Single Product Deal Start -->
                                                <div class="product single-deal-product product-border-left">
                                                    <div class="thumb">
                                                        <?php
                                                        $anh_sp = get_san_pham_anh($id);
                                                        ?>
                                                        <a href="index.php?act=single-product&id=<?= $id ?>" class="image">
                                                            <img src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">Giá ưu đã</span>
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <!-- <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                <div class="countdown-area">
                                                    <div class="countdown-wrapper d-flex" data-countdown="2023/12/24"></div>
                                                </div> -->
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $thuong_hieu_sp ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $ten_sp ?></a></h5>
                                                        <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $gia_sp ?> VNĐ</span>
                                                            <span class="old"><?= $gia_cu_sp ?> VNĐ</span>
                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $id?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                                            <input type="hidden" name="gia_sp" value="<?=$gia_sp ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product Deal End -->

                                            </div>
                                        <?php endif; ?>
                                        <!-- Product End -->
                                    <?php endforeach; ?>


                                </div>

                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-deal-clothings">
                        <div class="product-deal-carousel">
                            <div class="swiper-container">
                            <div class="swiper-wrapper">
                                    <?php
                                    foreach ($ds_10_san_pham_ban_chay as $sanpham) :
                                        extract($sanpham);
                                        //var_dump($sanpham);
                                        if ($gia_cu_sp != "") :
                                    ?>
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">

                                                <!-- Single Product Deal Start -->
                                                <div class="product single-deal-product product-border-left">
                                                    <div class="thumb">
                                                        <?php
                                                        $anh_sp = get_san_pham_anh($id);
                                                        ?>
                                                        <a href="index.php?act=single-product&id=<?= $id ?>" class="image">
                                                            <img src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">Bán chạy</span>
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <!-- <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                <div class="countdown-area">
                                                    <div class="countdown-wrapper d-flex" data-countdown="2023/12/24"></div>
                                                </div> -->
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $thuong_hieu_sp ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $ten_sp ?></a></h5>
                                                        <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $gia_sp ?> VNĐ</span>
                                                            <span class="old"><?= $gia_cu_sp ?> VNĐ</span>
                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $id?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                                            <input type="hidden" name="gia_sp" value="<?=$gia_sp ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product Deal End -->

                                            </div>
                                        <?php endif; ?>
                                        <!-- Product End -->
                                    <?php endforeach; ?>


                                </div>
                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-deal-sale">
                        <div class="product-deal-carousel">
                            <div class="swiper-container">
                            <div class="swiper-wrapper">
                                    <?php
                                    foreach ($ds_10_san_pham_yeu_thich as $sanpham) :
                                        extract($sanpham);
                                        //var_dump($sanpham);
                                        if ($gia_cu_sp != "") :
                                    ?>
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">

                                                <!-- Single Product Deal Start -->
                                                <div class="product single-deal-product product-border-left">
                                                    <div class="thumb">
                                                        <?php
                                                        $anh_sp = get_san_pham_anh($id);
                                                        ?>
                                                        <a href="index.php?act=single-product&id=<?= $id ?>" class="image">
                                                            <img src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">Top yêu thích</span>
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <!-- <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                <div class="countdown-area">
                                                    <div class="countdown-wrapper d-flex" data-countdown="2023/12/24"></div>
                                                </div> -->
                                                        <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $thuong_hieu_sp ?></a></h4>
                                                        <h5 class="title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $ten_sp ?></a></h5>
                                                        <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                                        <span class="price">
                                                            <span class="new"><?= $gia_sp ?> VNĐ</span>
                                                            <span class="old"><?= $gia_cu_sp ?> VNĐ</span>
                                                        </span>
                                                        <form action="index.php?act=add-cart" method="post">
                                                            <input type="hidden" name="idsp" value="<?= $id?>">
                                                            <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                                            <input type="hidden" name="gia_sp" value="<?=$gia_sp ?>">
                                                            <input type="hidden" name="anh_sp" value="<?= $img_path . $anh_sp[0]['anh_sp'] ?>">
                                                            <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                            <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Single Product Deal End -->

                                            </div>
                                        <?php endif; ?>
                                        <!-- Product End -->
                                    <?php endforeach; ?>


                                </div>
                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Deal Section End -->

<!-- Banner Section Start -->
<div class="section">
    <div class="container">

        <!-- Banners Start -->
        <div class="row mb-n6 overflow-hidden">
            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6" data-aos="fade-right" data-aos-delay="300">
                <div class="banner">
                    <div class="banner-image">
                        <a href="index.php?act=shop-left-sidebar"><img src="view/images/banner/banner-4.jpg" alt="Banner Image"></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title">Up to <span>50%</span> Off</h4>
                            <h3 class="title">Office Dress</h3>
                            <a href="index.php?act=shop-left-sidebar" class="btn btn-primary btn-hover-dark btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-md-6 col-12 mb-6" data-aos="fade-left" data-aos-delay="300">
                <div class="banner">
                    <div class="banner-image">
                        <a href="index.php?act=shop-left-sidebar"><img src="view/images/banner/banner-5.jpg" alt="Banner Image"></a>
                    </div>
                    <div class="info">
                        <div class="small-banner-content">
                            <h4 class="sub-title">Up to <span>40%</span> Off</h4>
                            <h3 class="title">All Products</h3>
                            <a href="index.php?act=shop-left-sidebar" class="btn btn-primary btn-hover-dark btn-sm">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->

        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- Product List Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row mb-n8">

            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="300">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">Bán chạy</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Start -->
                <div class="product-list-carousel-2">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $sp_10_ban_chay = array();
                            for ($i = 0; $i < (count($ds_10_san_pham_ban_chay)); $i++) {
                                if (($i % 3 == 0) && ($i < 9)) {
                                    $mot_cap_sp = [];
                                    array_push($mot_cap_sp, $ds_10_san_pham_ban_chay[$i]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_ban_chay[$i + 1]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_ban_chay[$i + 2]);
                                    array_push($sp_10_ban_chay, $mot_cap_sp);
                                }
                            }
                            for ($i = 0; $i < count($sp_10_ban_chay); $i++) :

                            ?>
                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">
                                    <?php
                                    for ($l = 0; $l < 3; $l++) :
                                    ?>
                                        <!-- Single Product List Start -->
                                        <div class="single-product-list product-hover mb-6">
                                            <div class="thumb">
                                                <a href="index.php?act=single-product&id=<?= $sp_10_ban_chay[$i][$l]['id'] ?>" class="image">
                                                    <?php $anh_sp = get_san_pham_anh($sp_10_ban_chay[$i][$l]['id']) ?>
                                                    <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                    <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_ban_chay[$i][$l]['id'] ?>"><?= $sp_10_ban_chay[$i][$l]['ten_sp'] ?></a></h5>
                                                <span class="price">
                                                    <span class="new"><?= $sp_10_ban_chay[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                    <?php
                                                    if ($sp_10_ban_chay[$i][$l]['gia_cu_sp'] != "") {
                                                        echo ' <span class="old">' . $sp_10_ban_chay[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                    }
                                                    ?>
                                                </span>
                                                <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                            </div>
                                        </div>
                                        <!-- Single Product List End -->
                                    <?php endfor; ?>

                                </div>
                                <!-- Product List Wrapper End -->
                            <?php endfor; ?>
                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->
                    </div>
                </div>
                <!-- Product List End -->
            </div>
            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="500">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">Sản phẩm mới</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Start -->
                <div class="product-list-carousel-2">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $sp_10_moi = array();
                            for ($i = 0; $i < (count($ds_10_san_pham_moi)); $i++) {
                                if (($i % 3 == 0) && ($i < 9)) {
                                    $mot_cap_sp = [];
                                    array_push($mot_cap_sp, $ds_10_san_pham_moi[$i]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_moi[$i + 1]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_moi[$i + 2]);
                                    array_push($sp_10_moi, $mot_cap_sp);
                                }
                            }
                            for ($i = 0; $i < count($sp_10_moi); $i++) :

                            ?>
                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">
                                    <?php
                                    for ($l = 0; $l < 3; $l++) :
                                    ?>
                                        <!-- Single Product List Start -->
                                        <div class="single-product-list product-hover mb-6">
                                            <div class="thumb">
                                                <a href="index.php?act=single-product&id=<?= $sp_10_moi[$i][$l]['id'] ?>" class="image">
                                                    <?php $anh_sp = get_san_pham_anh($sp_10_moi[$i][$l]['id']) ?>
                                                    <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                    <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_moi[$i][$l]['id'] ?>"><?= $sp_10_moi[$i][$l]['ten_sp'] ?></a></h5>
                                                <span class="price">
                                                    <span class="new"><?= $sp_10_moi[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                    <?php
                                                    if ($sp_10_moi[$i][$l]['gia_cu_sp'] != "") {
                                                        echo ' <span class="old">' . $sp_10_moi[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                    }
                                                    ?>
                                                </span>
                                                <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                            </div>
                                        </div>
                                        <!-- Single Product List End -->
                                    <?php endfor; ?>

                                </div>
                                <!-- Product List Wrapper End -->
                            <?php endfor; ?>
                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->
                    </div>
                </div>
                <!-- Product List End -->
            </div>
            <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="700">
                <!-- Product List Title Start -->
                <div class="product-list-title">
                    <h2 class="title pb-3 mb-0">Yêu thích</h2>
                    <span></span>
                </div>
                <!-- Product List Title End -->

                <!-- Product List Start -->
                <div class="product-list-carousel-2">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $sp_10_yeu_thich = array();
                            for ($i = 0; $i < (count($ds_10_san_pham_yeu_thich)); $i++) {
                                if (($i % 3 == 0) && ($i < 9)) {
                                    $mot_cap_sp = [];
                                    array_push($mot_cap_sp, $ds_10_san_pham_yeu_thich[$i]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_yeu_thich[$i + 1]);
                                    array_push($mot_cap_sp, $ds_10_san_pham_yeu_thich[$i + 2]);
                                    array_push($sp_10_yeu_thich, $mot_cap_sp);
                                }
                            }
                            for ($i = 0; $i < count($sp_10_yeu_thich); $i++) :

                            ?>
                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">
                                    <?php
                                    for ($l = 0; $l < 3; $l++) :
                                    ?>
                                        <!-- Single Product List Start -->
                                        <div class="single-product-list product-hover mb-6">
                                            <div class="thumb">
                                                <a href="index.php?act=single-product&id=<?= $sp_10_yeu_thich[$i][$l]['id'] ?>" class="image">
                                                    <?php $anh_sp = get_san_pham_anh($sp_10_yeu_thich[$i][$l]['id']) ?>
                                                    <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                    <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="100" width="100" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="index.php?act=single-product&id=<?= $sp_10_yeu_thich[$i][$l]['id'] ?>"><?= $sp_10_yeu_thich[$i][$l]['ten_sp'] ?></a></h5>
                                                <span class="price">
                                                    <span class="new"><?= $sp_10_yeu_thich[$i][$l]['gia_sp'] ?> VNĐ</span>
                                                    <?php
                                                    if ($sp_10_yeu_thich[$i][$l]['gia_cu_sp'] != "") {
                                                        echo ' <span class="old">' . $sp_10_yeu_thich[$i][$l]['gia_cu_sp'] . ' VNĐ</span>';
                                                    }
                                                    ?>
                                                </span>
                                                <!-- <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                </span> -->
                                            </div>
                                        </div>
                                        <!-- Single Product List End -->
                                    <?php endfor; ?>

                                </div>
                                <!-- Product List Wrapper End -->
                            <?php endfor; ?>
                        </div>

                        <!-- Swiper Pagination Start -->
                        <!-- <div class="swiper-pagination d-md-none"></div> -->
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->
                    </div>
                </div>
                <!-- Product List End -->
            </div>

        </div>
    </div>
</div>
<!-- Product List End -->

<!-- Brand Logo Start -->
<div class="section">
    <div class="container">
        <div class="border-top">
            <div class="row">
                <div class="col-12">
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                    <a href="#"><img src="view/images/brand-logo/1.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="view/images/brand-logo/2.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                    <a href="#"><img src="view/images/brand-logo/3.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="600">
                                    <a href="#"><img src="view/images/brand-logo/4.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="700">
                                    <a href="#"><img src="view/images/brand-logo/5.png" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo Wrapper End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo End -->