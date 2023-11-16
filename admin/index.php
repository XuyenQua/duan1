<?php
session_start();
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/taikhoan.php';
include 'global.php';
if ($_SESSION['user']['vai_tro'] == 3) {
    include 'view/header.php';
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'app-analytics':
                include 'view/app-analytics.php';
                break;
            case 'app-calendar':
                include 'view/app-calendar.php';
                break;
            case 'app-categories-list':
                $ds_dm = get_ds_dm_all();
                include 'view/category/app-categories-list.php';
                break;
            case 'app-category':

                include 'view/category/app-category.php';
                break;
            case 'app-chat':
                include 'view/app-chat.php';
                break;
            case 'app-coupon':
                include 'view/app-coupon.php';
                break;
            case 'app-coupons-list':
                include 'view/app-coupons-list.php';
                break;
            case 'app-customer':
                include 'view/app-customer.php';
                break;
            case 'app-customers-list':
                include 'view/app-customers-list.php';
                break;
            case 'app-file-manager':
                include 'view/app-file-manager.php';
                break;
            case 'app-inbox-conversation':
                include 'view/app-inbox-conversation.php';
                break;
            case 'app-inbox-list':
                include 'view/app-inbox-list.php';
                break;
            case 'app-order':
                include 'view/app-order.php';
                break;
            case 'app-orders-list':
                include 'view/app-orders-list.php';
                break;
            case 'app-product':
                include 'view/product/app-product.php';
                break;
            case 'app-products-list':
                include 'view/product/app-products-list.php';
                break;
            case 'app-settings-form':
                include 'view/app-settings-form.php';
                break;
            case 'app-settings-toc':
                include 'view/app-settings-toc.php';
                break;
            case 'auth-email-confirmation':
                include 'view/auth-email-confirmation.php';
                break;
            case 'auth-forgot-password':
                include 'view/auth-forgot-password.php';
                break;
            case 'auth-reset-password':
                include 'view/auth-reset-password.php';
                break;
            case 'auth-sign-in':
                include 'view/auth-sign-in.php';
                break;
            case 'auth-sign-up':
                include 'view/auth-sign-up.php';
                break;
            case 'charts':
                include 'view/charts.php';
                break;
            case 'components-accordion':
                include 'view/components-accordion.php';
                break;
            case 'components-alerts':
                include 'view/components-alerts.php';
                break;
            case 'components-badge':
                include 'view/components-badge.php';
                break;
            case 'components-breadcrumb':
                include 'view/components-breadcrumb.php';
                break;
            case 'components-button-group':
                include 'view/components-button-group.php';
                break;
            case 'components-buttons':
                include 'view/components-buttons.php';
                break;
            case 'components-cards':
                include 'view/components-cards.php';
                break;
            case 'components-carousel':
                include 'view/components-carousel.php';
                break;
            case 'components-collapse':
                include 'view/components-collapse.php';
                break;
            case 'components-dropdowns':
                include 'view/components-dropdowns.php';
                break;
            case 'components-list-group':
                include 'view/components-list-group.php';
                break;
            case 'components-modal':
                include 'view/components-modal.php';
                break;
            case 'components-navs':
                include 'view/components-navs.php';
                break;
            case 'components-nouislider':
                include 'view/components-nouislider.php';
                break;
            case 'components-offcanvas':
                include 'view/components-offcanvas.php';
                break;
            case 'components-pagination':
                include 'view/components-pagination.php';
                break;
            case 'components-placeholders':
                include 'view/components-placeholders.php';
                break;
            case 'components-popovers':
                include 'view/components-popovers.php';
                break;
            case 'components-progress':
                include 'view/components-progress.php';
                break;
            case 'components-scrollspy':
                include 'view/components-scrollspy.php';
                break;
            case 'components-spinners':
                include 'view/components-spinners.php';
                break;
            case 'components-symbols':
                include 'view/components-symbols.php';
                break;
            case 'components-tabs':
                include 'view/components-tabs.php';
                break;
            case 'components-toasts':
                include 'view/components-toasts.php';
                break;
            case 'components-tooltips':
                include 'view/components-tooltips.php';
                break;
            case 'forms-air-datepicker':
                include 'view/forms-air-datepicker.php';
                break;
            case 'forms-checks-and-radios':
                include 'view/forms-checks-and-radios.php';
                break;
            case 'forms-file':
                include 'view/forms-file.php';
                break;
            case 'forms-help-text':
                include 'view/forms-help-text.php';
                break;
            case 'forms-input-group':
                include 'view/forms-input-group.php';
                break;
            case 'forms-layout':
                include 'view/forms-layout.php';
                break;
            case 'forms-quill':
                include 'view/forms-quill.php';
                break;
            case 'forms-range':
                include 'view/forms-range.php';
                break;
            case 'forms-select':
                include 'view/forms-select.php';
                break;
            case 'forms-select2':
                include 'view/forms-select2.php';
                break;
            case 'forms-text-area':
                include 'view/forms-text-area.php';
                break;
            case 'forms-text-box':
                include 'view/forms-text-box.php';
                break;
            case 'forms-validation':
                include 'view/forms-validation.php';
                break;
            case 'icons':
                include 'view/icons.php';
                break;
            case 'page-404':
                include 'view/page-404.php';
                break;
            case 'page-faq':
                include 'view/page-faq.php';
                break;
            case 'page-help-center':
                include 'view/page-help-center.php';
                break;
            case 'page-invoice':
                include 'view/page-invoice.php';
                break;
            case 'page-pricing-table':
                include 'view/page-pricing-table.php';
                break;
            case 'page-terms':
                include 'view/page-terms.php';
                break;
            case 'tables-basic-tables':
                include 'view/tables-basic-tables.php';
                break;
            case 'tables-datatables':
                include 'view/tables-datatables.php';
                break;
            case 'tables-datatables':
                include 'view/tables-datatables.php';
                break;
            case 'app-add-category':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenfile = $_FILES["image"]["name"];
                    $basename = basename($tenfile);
                    $dest = "upload/" . $basename;
                    $filetem = $_FILES["image"]["tmp_name"];
                    move_uploaded_file($filetem, $dest);
                    insert_dm($_POST['ten_dm'], $basename, $_POST['mo_ta_dm']);
                }
                include 'view/category/app-add-category.php';
                break;
            case 'app-edit-category':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $dm = get_dm_one($id);
                }
                include 'view/category/app-edit-category.php';
                break;
            case 'app-update-category':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenfile = $_FILES["image"]["name"];
                    $basename = basename($tenfile);
                    $dest = "upload/" . $basename;
                    $filetem = $_FILES["image"]["tmp_name"];
                    move_uploaded_file($filetem, $dest);
                    update_dm($_POST['ten_dm'], $basename, $_POST['mo_ta_dm'], $_POST['id']);
                }
                $ds_dm = get_ds_dm_all();
                include 'view/category/app-categories-list.php';
                break;
            case 'app-delete-category':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_dm($id);
                }
                $ds_dm = get_ds_dm_all();
                include 'view/category/app-categories-list.php';
                break;
            case 'app-add-product':
                if(isset($_POST['themmoi'])&& $_POST['themmoi']){
                    
                }else{

                }
                $ds_dm = get_ds_dm_all();
                include 'view/product/app-add-product.php';
                break;
            case 'logout':
                dangxuat();
                if (isset($_SESSION['user'])) {
                    echo '<script> location.replace("index.php"); </script>';
                }
                break;
            case '':
                include 'view/';
                break;

            default:
                include 'view/home.php';
                break;
        }
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
} else {
    header('Location: login.php');
}
