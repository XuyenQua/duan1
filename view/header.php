<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/destry/destry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 06:16:26 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XĐQ-SHOP</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="view/images/favicon.ico">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="view/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="view/css/vendor/pe-icon-7-stroke.min.css">


    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="view/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="view/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="view/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="view/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="view/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="view/css/plugins/lightgallery.min.css" />


    <!-- Main Style CSS -->


    <link rel="stylesheet" href="view/css/style.css" />
</head>

<body>
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-light">
            <div class="container">
                <div class="row row-cols-xl-2 align-items-center">

                    <!-- Header Top Language, Currency & Link Start -->
                    <div class="col d-none d-lg-block">
                        <div class="header-top-lan-curr-link">
                            <div class="header-top-lan dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">Việt Nam </button>
                                <!-- thẻ i trong thẻ btn việt nam <i class="fa fa-angle-down"></i> -->
                                <!-- <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Japanese</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Romanian</a></li>
                                </ul> -->
                            </div>
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">VNĐ </button>
                                <!-- <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">Pound</a></li>
                                </ul> -->
                            </div>
                            <div class="header-top-links">
                                <span>Điện thoại</span><a href="#"> 0359956926</a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Top Language, Currency & Link End -->

                    <!-- Header Top Message Start -->
                    <div class="col">
                        <!-- <p class="header-top-message">Ends Monday: $100 off any dining table + 2 sets of chairs. <a href="index.php?act=shop-grid">Shop Now</a></p> -->
                    </div>
                    <!-- Header Top Message End -->

                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-logo">
                                <a href="index.php"><img src="view/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-xl-8 d-none d-xl-block">
                            <div class="main-menu position-relative">
                                <ul>
                                    <li class="has-children">
                                        <a href="index.php"><span>Trang chủ</span> </a>
                                        <!-- <i class="fa fa-angle-down"></i> -->
                                        <!-- <ul class="sub-menu">
                                            <li><a href="index.php">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="has-children position-static">
                                        <a href="#"><span>Danh mục</span> <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu row-cols-2">
                                            <!-- của thẻ ul class="mega-menu row-cols-1" -->
                                            <li class="col">
                                                <h4 class="mega-menu-title">Nữ</h4>
                                                <ul class="mb-n2">
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
                                            <li class="col">
                                                <h4 class="mega-menu-title">Nam</h4>
                                                <ul class="mb-n2">
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
                                                    <!-- <li><a href="index.php?act=shop-left-sidebar&iddm=">Single Product Slider</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="index.php?act=shop-left-sidebar"><span>Sản phẩm</span></a>
                                    </li>
                                    <li><a href="index.php?act=about"><span>Giới thiệu</span></a></li>
                                    <li class="has-children">
                                        <a href="#"><span>Liên hệ</span> <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php?act=contact">Liên Hệ</a></li>
                                            <li><a href="index.php?act=faq">Các câu hỏi thường gặp</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-actions">

                                <!-- Search Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i class="pe-7s-search"></i></a>
                                <!-- Search Header Action Button End -->

                                <!-- User Account Header Action Button Start -->
                                <?php

                                if (isset($_SESSION['e_user'])) {
                                    $link = "index.php?act=my-account";
                                } else {
                                    $link = "index.php?act=login";
                                }
                                echo ' <a href="' . $link . '" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>';

                                ?>

                                <!-- User Account Header Action Button End -->

                                <!-- Wishlist Header Action Button Start -->
                                <a href="index.php?act=wishlist" class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Wishlist Header Action Button End -->

                                <!-- Shopping Cart Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num"><?= count($_SESSION['mycart']) ?></span>
                                </a>
                                <!-- Shopping Cart Header Action Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="index.php">Trang chủ </a>
                                <!-- <i class="fa fa-angle-down"></i> -->
                                <!-- <ul class="dropdown">
                                    <li><a href="index.php">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul> -->
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.php?act=shop-grid">Shop Grid</a></li>
                                    <li><a href="index.php?act=shop-left-sidebar">Shop Left Sidebar</a></li>
                                    <li><a href="index.php?act=shop-right-sidebar">Shop Right Sidebar</a></li>
                                    <li><a href="index.php?act=shop-list-fullwidth">Shop List Fullwidth</a></li>
                                    <li><a href="index.php?act=shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                    <li><a href="index.php?act=shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                    <li><a href="index.php?act=wishlist">Wishlist</a></li>
                                    <li><a href="index.php?act=cart">Shopping Cart</a></li>
                                    <li><a href="index.php?act=checkout">Checkout</a></li>
                                    <li><a href="index.php?act=compare">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.php?act=single-product">Single Product</a></li>
                                    <li><a href="index.php?act=single-product-sale">Single Product Sale</a></li>
                                    <li><a href="index.php?act=single-product-group">Single Product Group</a></li>
                                    <li><a href="index.php?act=single-product-normal">Single Product Normal</a></li>
                                    <li><a href="index.php?act=single-product-affiliate">Single Product Affiliate</a></li>
                                    <li><a href="index.php?act=single-product-slider">Single Product Slider</a></li>
                                    <li><a href="index.php?act=single-product-gallery-left">Gallery Left</a></li>
                                    <li><a href="index.php?act=single-product-gallery-right">Gallery Right</a></li>
                                    <li><a href="index.php?act=single-product-tab-style-left">Tab Style Left</a></li>
                                    <li><a href="index.php?act=single-product-tab-style-right">Tab Style Right</a></li>
                                    <li><a href="index.php?act=single-product-sticky-left">Sticky Left</a></li>
                                    <li><a href="index.php?act=single-product-sticky-right">Sticky Right</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.php?act=about">Về chúng tôi</a></li>
                                    <li><a href="index.php?act=contact">Liên Hệ</a></li>
                                    <li><a href="index.php?act=faq">Câu hỏi thường gặp</a></li>

                                </ul>
                            </li>
                            <li><a href="index.php?act=about">Giới thiệu</a></li>
                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr mb-6">
                    <h2 class="title">Languages</h2>
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">Việt Nam</button>
                            <!-- <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul> -->
                        </div>
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">VNĐ </button>
                            <!-- <i class="fa fa-angle-down"></i>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> 0359956926</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#">xdq@xdqshop.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="index.php?act=search" method="post">
                    <input type="text" name="tim_kiem" placeholder="Nhập tên sản phẩm" class="offcanvas-search-input">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Cart Content Start -->
                <div class="offcanvas-cart-content">
                    <!-- Offcanvas Cart Title Start -->
                    <h2 class="offcanvas-cart-title mb-10">Giỏ hàng</h2>
                    <!-- Offcanvas Cart Title End -->
                    <?php
                    $id = 0;
                    $tong = 0;
                    if (isset($_SESSION['mycart']) && ($_SESSION['mycart'] != "")) {
                        foreach ($_SESSION['mycart'] as $san_pham) :
                            extract($san_pham);
                            $tong += $san_pham[3] * $san_pham[4];
                    ?>
                            <!-- Cart Product/Price Start -->
                            <div class="cart-product-wrapper mb-6">

                                <!-- Single Cart Product Start -->
                                <div class="single-cart-product">
                                    <div class="cart-product-thumb">
                                        <a href="index.php?act=single-product"><img src="<?= $san_pham[1] ?>" alt="Cart Product"></a>
                                    </div>
                                    <div class="cart-product-content">
                                        <h3 class="title"><a href="index.php?act=single-product"><?= $san_pham[2] ?></a></h3>
                                        <span class="price">
                                            <span class="new"><?= $san_pham[3] ?> VNĐ</span>
                                            <!-- <span class="old">$40.00</span> -->

                                        </span><br>
                                        <span>số lượng:<?= $san_pham[4] ?></span>
                                    </div>
                                </div>
                                <!-- Single Cart Product End -->

                                <!-- Product Remove Start -->
                                <div class="cart-product-remove">
                                    <a href="index.php?act=del-cart&idcart=<?= $id ?>"><i class="fa fa-trash"></i></a>
                                </div>
                                <!-- Product Remove End -->

                            </div>
                            <!-- Cart Product/Price End -->
                    <?php
                            $id++;
                        endforeach;
                    } else {
                        echo "chưa có sản phẩm ";
                    }
                    ?>
                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total">
                        <span class="value">Phí vận chuyển</span>

                        <span class="price"><?= phi_van_chuyen($tong);
                                            $tong += phi_van_chuyen($tong) ?> VNĐ</span>
                    </div>
                    <div class="cart-product-total">
                        <span class="value">Tổng</span>
                        <span class="price"><?= $tong ?> VNĐ</span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="index.php?act=cart" class="btn btn-dark btn-hover-primary rounded-0 w-100">Xem giỏ hàng</a>
                        <a href="index.php?act=checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Thanh toán</a>
                    </div>
                    <!-- Cart Product Button End -->

                </div>
                <!-- Offcanvas Cart Content End -->

            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>