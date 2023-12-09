<?php
session_start();
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include '../model/hoadon.php';
include '../model/magiamgia.php';
include '../global.php';
if ($_SESSION['user']['vai_tro'] == 3 || $_SESSION['user']['vai_tro'] == 2) {
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
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $id_dm = $_GET['iddm'];
                    $dm = get_dm_one($id_dm);
                    $ds_san_pham_dm = get_san_pham_all_dm($id_dm);
                }

                include 'view/category/app-category.php';
                break;
            case 'app-chat':
                include 'view/app-chat.php';
                break;
            case 'app-add-coupon':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $ma_giam_gia = $_POST['ma_giam_gia'];
                    $gia_tri = $_POST['gia_tri'];
                    $so_luong = $_POST['so_luong'];
                    insert_ma_giam_gia($ma_giam_gia, $gia_tri, $so_luong);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã thêm thành công mã giảm giá",
                        icon: "success"
                      });
                    </script>';
                }
                include 'view/coupon/app-add-coupon.php';
                break;
            case 'app-del-coupon':
                if (isset($_GET['iddel']) && ($_GET['iddel'] > 0)) {
                    $iddel = $_GET['iddel'];
                    delete_ma_giam_gia($iddel);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã xóa thành công mã giảm giá",
                        icon: "success"
                      });
                    </script>';
                }
                $ds_ma_giam_gia = get_ma_giam_gia_all();
                include 'view/coupon/app-coupons-list.php';
                break;
            case 'app-edit-coupon':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $ma_giam_gia = get_ma_giam_gia_one($id);
                }
                include 'view/coupon/app-edit-coupon.php';
                break;

            case 'app-update-coupon':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $ma_giam_gia = $_POST['ma_giam_gia'];
                    $gia_tri = $_POST['gia_tri'];
                    $so_luong = $_POST['so_luong'];
                    update_ma_giam_gia($ma_giam_gia,$gia_tri,$so_luong,$id);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã sửa thành công mã giảm giá",
                        icon: "success"
                      });
                    </script>';
                }

                $ds_ma_giam_gia = get_ma_giam_gia_all();
                include 'view/coupon/app-coupons-list.php';
                break;
            case 'app-coupon':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $ma_giam_gia = get_ma_giam_gia_one($id);
                }
                include 'view/coupon/app-coupon.php';
                break;

            case 'app-coupons-list':
                $ds_ma_giam_gia = get_ma_giam_gia_all();
                include 'view/coupon/app-coupons-list.php';
                break;
            case 'app-customer':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];

                    $chi_tiet_tk = get_chi_tiet_tai_khoan($id);
                    $hoa_don_tk = get_hoa_don_tai_khoan($id);
                }


                include 'view/account/app-customer.php';
                break;
            case 'app-employee-list':
                $ds_tai_khoan = get_tai_khoan_all(2);
                include 'view/account/app-employee-list.php';
                break;
            case 'app-customers-list':
                $ds_tai_khoan = get_tai_khoan_all(1);

                include 'view/account/app-customers-list.php';
                break;
            case 'app-admin-list':
                $ds_tai_khoan = get_tai_khoan_all(3);

                include 'view/account/app-admin-list.php';
                break;
            case 'app-delete-customers-list':
                if (isset($_GET['iddel']) && ($_GET['iddel'] > 0)) {
                    $id_del = $_GET['iddel'];
                    delete_tai_khoan($id_del);
                }
                $ds_tai_khoan = get_tai_khoan_all(1);

                include 'view/account/app-customers-list.php';
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
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $hoa_don = get_hoa_don_one($id);
                    $ds_sp_hoa_don = get_san_pham_hoa_don($id);
                }

                include 'view/order/app-order.php';
                break;
            case 'app-edit-order':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $hoa_don = get_hoa_don_one($id);
                    $ds_sp_hoa_don = get_san_pham_hoa_don($id);
                }
                if (isset($_GET['id_sp_del']) && ($_GET['id_sp_del'] > 0)) {
                }
                $ds_trang_thai = get_trang_thai_all();
                include 'view/order/app-edit-order.php';
                break;
            case 'app-update-order':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id_hoa_don = $_POST['id_hoa_don'];
                    $ten_khach_hang = $_POST['ten_khach_hang'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $ghi_chu = $_POST['ghi_chu'];
                    $id_san_pham_hoa_don = $_POST['id_san_pham_hoa_don'];
                    $so_luong = $_POST['so_luong'];
                    $gia_sp = $_POST['gia_sp'];
                    $tong_gio_hang = 0;

                    for ($i = 0; $i < count($id_san_pham_hoa_don); $i++) {
                        update_so_luong_san_pham_hoa_don($id_san_pham_hoa_don[$i], $id_hoa_don, $so_luong[$i]);
                        $tong_gio_hang += $gia_sp[$i] * $so_luong[$i];
                    }
                    
                    $tong_tien = $tong_gio_hang + phi_van_chuyen($tong_gio_hang);
                    $trang_thai = $_POST['trang_thai'];
                    update_hoa_don($id_hoa_don, $ten_khach_hang, $so_dien_thoai, $dia_chi, $email, $trang_thai, $tong_tien, $ghi_chu);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã sửa thành công đơn hàng",
                        icon: "success"
                      });
                    </script>';
                }

                $ds_hoa_don = get_hoa_don_all(0);
                include 'view/order/app-orders-list.php';
                break;
            case 'app-delete-order':
                if (isset($_GET['iddel']) && ($_GET['iddel'] > 0)) {
                    $iddel = $_GET['iddel'];
                    delete_hoa_don($iddel);
                }
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                } else {
                    $id = 0;
                }
                $ds_hoa_don = get_hoa_don_all($id);
                include 'view/order/app-orders-list.php';
                break;

            case 'app-orders-list':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                } else {
                    $id = 0;
                }
                $ds_hoa_don = get_hoa_don_all($id);
                include 'view/order/app-orders-list.php';
                break;
            case 'app-product':
                if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                    $idbl = $_GET['idbl'];
                    delele_binh_luan($idbl);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã xóa thành công bình luận",
                        icon: "success"
                      });
                    </script>';
                }
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];

                    $san_pham = get_san_pham_one($id);
                    $ds_anh_sp = get_san_pham_anh($id);
                    $ds_binh_luan = get_binh_luan_san_pham($id);
                }

                $ds_dm = get_ds_dm_all();
                include 'view/product/app-product.php';
                break;
            case 'app-products-list':

                $ds_san_pham =  get_san_pham_all();

                include 'view/product/app-products-list.php';
                break;
            case 'app-delete-product':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_san_pham($id);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã xóa thành công sản phẩm",
                        icon: "success"
                      });
                    </script>';
                }
                $ds_san_pham =  get_san_pham_all();
                include 'view/product/app-products-list.php';
                break;

            case 'app-edit-product':
                if (isset($_GET['id_del_anh']) && ($_GET['id_del_anh'] > 0)) {
                    $id_del_anh = $_GET['id_del_anh'];
                    detele_san_pham_anh($id_del_anh);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã xóa thành công ảnh",
                        icon: "success"
                      });
                    </script>';
                }
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];

                    $san_pham = get_san_pham_one($id);
                    $ds_anh_sp = get_san_pham_anh($id);
                }

                $ds_dm = get_ds_dm_all();
                include 'view/product/app-edit-product.php';
                break;

            case 'app-update-product':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id_sp'];
                    $ma_sp = $_POST['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $gia_sp = $_POST['gia_sp'];
                    $gia_cu_sp = $_POST['gia_cu_sp'];
                    $so_luong = $_POST['so_luong'];
                    $thuong_hieu_sp = $_POST['thuong_hieu_sp'];
                    $mo_ta_sp = $_POST['mo_ta_sp'];
                    $mo_ta_ngan_sp = $_POST['mo_ta_ngan_sp'];
                    $id_dm = $_POST['id_dm'];
                    for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
                        $basename = basename($_FILES["images"]["name"][$i]);
                        $targetFilePath = "../upload/" . $basename;
                        if (!empty($_FILES)   && ($_FILES['images'] != "")) {
                            // Kiểm tra xem file đã tồn tại chưa
                            if (!file_exists($targetFilePath)) {
                                // Di chuyển file từ thư mục tạm thời đến thư mục upload
                                move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath);
                            }
                        }
                        insert_san_pham_anh($id, $basename);
                    }


                    update_san_pham($id, $ma_sp, $ten_sp, $gia_sp, $gia_cu_sp, $so_luong, $thuong_hieu_sp, $mo_ta_sp, $mo_ta_ngan_sp, $id_dm);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã sửa thành công sản phẩm",
                        icon: "success"
                      });
                    </script>';
                }
                $ds_san_pham =  get_san_pham_all();
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
                    $dest = "../upload/" . $basename;
                    $filetem = $_FILES["image"]["tmp_name"];
                    move_uploaded_file($filetem, $dest);
                    insert_dm($_POST['ten_dm'], $basename, $_POST['mo_ta_dm']);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã thêm thành công danh mục",
                        icon: "success"
                      });
                    </script>';
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
                // var_dump($_POST);
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $tenfile = $_FILES["image"]["name"];
                    $basename = basename($tenfile);
                    $dest = "../upload/" . $basename;
                    $filetem = $_FILES["image"]["tmp_name"];
                    move_uploaded_file($filetem, $dest);
                    update_dm($_POST['ten_dm'], $basename, $_POST['mo_ta_dm'], $_POST['id']);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã sửa thành công danh mục",
                        icon: "success"
                      });
                    </script>';
                }
                // echo $_POST['ten_dm'], $_POST['mo_ta_dm'], $_POST['id'];

                $ds_dm = get_ds_dm_all();
                include 'view/category/app-categories-list.php';
                break;
            case 'app-delete-category':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_dm($id);
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã xóa thành công danh mục",
                        icon: "success"
                      });
                    </script>';
                }
                $ds_dm = get_ds_dm_all();
                include 'view/category/app-categories-list.php';
                break;
            case 'app-add-product':
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $ma_sp = $_POST['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $gia_sp = $_POST['gia_sp'];
                    $gia_cu_sp = $_POST['gia_cu_sp'];
                    $so_luong = $_POST['so_luong'];
                    $thuong_hieu_sp = $_POST['thuong_hieu_sp'];
                    $mo_ta_sp = $_POST['mo_ta_sp'];
                    $mo_ta_ngan_sp = $_POST['mo_ta_ngan_sp'];
                    $id_dm = $_POST['id_dm'];
                    $id_san_pham = insert_sanpham($ma_sp, $ten_sp, $gia_sp, $gia_cu_sp, $so_luong, $thuong_hieu_sp, $mo_ta_sp, $mo_ta_ngan_sp, $id_dm);

                    for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
                        $basename = basename($_FILES["images"]["name"][$i]);
                        $targetFilePath = "../upload/" . $basename;
                        // Kiểm tra xem file đã tồn tại chưa
                        if (!file_exists($targetFilePath)) {
                            // Di chuyển file từ thư mục tạm thời đến thư mục upload
                            move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath);
                        }
                        insert_san_pham_anh($id_san_pham, $basename);
                    }
                    //$tb = "thêm thành công";
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã thêm thành công sản phẩm",
                        icon: "success"
                      });
                    </script>';
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
