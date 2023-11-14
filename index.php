<?php 

    include 'view/header.php';
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'about':
                include 'view/about.php';
                break;
            case 'contact':
                include 'view/contact.php'; 
                break;
            case 'blog':
                include 'view/blog.php';
                break;
            case 'wishlist':
                include 'view/wishlist.php';
                break;
            case 'cart':
                include 'view/cart.php';
                break;
            case 'checkout':
                include 'view/checkout.php';
                break;
            case 'login-register':
                include 'view/login-register.php';
                break;
            case 'shop-grid':
                include 'view/shop-grid.php';
                break;
            case 'compare':
                include 'view/compare.php'; 
                break;
            case 'single-product-sale':
                include 'view/single-product-sale.php';
                break;
            case 'single-product':
                include 'view/single-product.php';
                break;
            case 'faq':
                include 'view/faq.php';
                break;
            case 'single-product-normal':
                include 'view/single-product-normal.php';
                break;
            case 'blog-details':
                include 'view/blog-details.php';
                break;
            case 'my-account':
                include 'view/my-account.php';  
                break;
            case 'single-product-group':
                include 'view/single-product-group.php';
                break;
            case 'single-product-affiliate':
                include 'view/single-product-affiliate.php';
                break;
            case 'single-product-slider':
                include 'view/single-product-slider.php';
                break;
            case 'single-product-gallery-left':
                include 'view/single-product-gallery-left.php';
                break;
            case 'single-product-tab-style-left':
                include 'view/single-product-tab-style-left.php';
                break;
            case 'single-product-tab-style-right':
                include 'view/single-product-tab-style-right.php';
                break;
            case 'single-product-sticky-left':
                include 'view/single-product-sticky-left.php';
                break;
            case 'single-product-sticky-right':
                include 'view/single-product-sticky-right.php'; 
                break;
            case 'blog-left-sidebar':
                include 'view/blog-left-sidebar.php';   
                break;
            case 'blog-right-sidebar':
                include 'view/blog-right-sidebar.php';
                break;
            case 'blog-details-sidebar':
                include 'view/blog-details-sidebar.php';
                break;
            case 'shop-left-sidebar':
                include 'view/shop-left-sidebar.php';
                break;
            case 'shop-right-sidebar':
                include 'view/shop-right-sidebar.php';
                break;
            case 'shop-list-fullwidth':
                include 'view/shop-list-fullwidth.php';
                break;
            case 'shop-list-left-sidebar':
                include 'view/shop-list-left-sidebar.php';
                break;
            case 'shop-list-right-sidebar':
                include 'view/shop-list-right-sidebar.php';
                break;
            case 'value':
                include '';
                break;
            
            
            default:
                include 'view/home.php';
                break;
        }
    }else{
        include 'view/home.php';
    }
    

    include 'view/footer.php';
