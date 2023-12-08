<?php
session_start();
include 'model/pdo.php';
include 'model/taikhoan.php';
include 'model/hoadon.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/binhluan.php';
include 'model/magiamgia.php';
include 'global.php';


if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
if (!isset($_SESSION['ma_giam_gia'])) {
    $_SESSION['ma_giam_gia'] = [];
}

include 'view/header.php';

$ds_10_san_pham_moi = get_10_san_pham_moi();
$ds_10_san_pham_ban_chay = get_10_san_pham_ban_chay();
$ds_10_san_pham_yeu_thich = get_10_san_pham_yeu_thich();

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
        case 'add-cart':
            if (isset($_POST['them_vao_gio_hang']) && ($_POST['them_vao_gio_hang'])) {
                $id = $_POST['idsp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $anh_sp = $_POST['anh_sp'];
                if (isset($_POST['so_luong']) && ($_POST['so_luong'])) {
                    $sl = $_POST['so_luong'];
                } else {
                    $sl = 1;
                }
                $index  = array_search($id, array_column($_SESSION['mycart'], 0));
                if ($index !== false) {
                    $_SESSION['mycart'][$index][4] += $sl;
                } else {
                    $so_luong = $sl;
                    $spadd = [$id, $anh_sp, $ten_sp, $gia_sp, $so_luong];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
            echo '<script> location.replace("index.php?act=cart"); </script>';
            include 'view/cart.php';
            break;

        case 'del-cart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                //unset($_SESSION['mycart'][$idcart]);
                array_splice($_SESSION['mycart'], $idcart, 1);
                //array_slice($_SESSION['mycart'],$idcart,1);
            } else {
                $_SESSION['mycart'] = [];
            }
            //  var_dump($_SESSION['mycart']);
            echo '<script> location.replace("index.php?act=cart"); </script>';
            include 'view/cart.php';
            break;
        case 'update-cart':
            if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
                $so_luong = $_POST['so_luong'];
                // var_dump($so_luong);
                for ($i = 0; $i < count($_SESSION['mycart']); $i++) {
                    $_SESSION['mycart'][$i][4] = $so_luong[$i];
                }
            }

            if (isset($_POST['ap_dung']) && ($_POST['ap_dung'])) {
                $ma_giam_gia = $_POST['ma_giam_gia'];
                $ktra = kt_ma_giam_gia($ma_giam_gia);
                if (is_array($ktra)) {
                    if ( $_SESSION['mycart']!=[]) {
                        $_SESSION['ma_giam_gia'] = $ktra;
                    echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã áp dụng mã giảm giá thành công",
                        icon: "success"
                      });
                    </script>';
                    }else{
                        echo '<script>
                        Swal.fire({
                            title: "Không Thành Công",
                            text: "Bạn  chưa thêm sản phẩm vào  giỏ hàng",
                            icon: "error",
                          });
                        </script>';
                    }
                } else {
                    echo '<script>
                    Swal.fire({
                        title: "Không Thành Công",
                        text: "Mã giảm giá không tồn tại",
                        icon: "error",
                      });
                    </script>';
                }
            }
            // var_dump($_SESSION['ma_giam_gia']);
            // var_dump($_SESSION['mycart']);
            include 'view/cart.php';
            break;
        case 'cart':
            // var_dump($_SESSION['mycart']);
            include 'view/cart.php';
            break;
        case 'checkout':
            $ds_pttt = get_pttt();
            include 'view/checkout.php';
            break;

        case 'thankyou':
            if (isset($_POST['dat_hang']) && ($_POST['dat_hang'])) {
                if (isset($_SESSION['e_user']) && ($_SESSION['e_user'] != '')) {
                    $id_tai_khoan = $_SESSION['e_user']['id'];
                } else {
                    $id_tai_khoan = 0;
                }
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $ngay_dat_hang = date('Y-m-d');
                $ghi_chu = $_POST['ghi_chu'];
                $tong_tien = $_POST['tong_tien'];
                if ($_SESSION['ma_giam_gia']!=[]) {
                    $ma_giam_gia = $_SESSION['ma_giam_gia']['ma_giam_gia'];
                    $giam_gia = $_SESSION['ma_giam_gia']['giam_gia'];
                }else{
                    $ma_giam_gia = "";
                    $giam_gia = "";
                }
                su_dung_ma($_SESSION['ma_giam_gia']['id_giamgia']);
                $id_hoa_don = insert_hoa_don($id_tai_khoan,$ten_khach_hang,$so_dien_thoai,$dia_chi,$email,$pttt,$ma_giam_gia,$giam_gia,$tong_tien,$ngay_dat_hang,$ghi_chu);

                foreach ($_SESSION['mycart'] as $cart) {
                    extract($cart);
                    $id_san_pham = $cart[0];
                    $anh_sp = $cart[1];
                    $ten_sp = $cart[2];
                    $gia_sp = $cart[3];
                    $so_luong = $cart[4];
                    $thanh_tien = $cart[3] * $cart[4];
                    insert_san_pham_hoa_don($id_hoa_don, $id_san_pham, $anh_sp, $ten_sp, $gia_sp, $so_luong, $thanh_tien);
                    san_pham_da_ban($id_san_pham, $so_luong);
                }

                $_SESSION['mycart'] = [];
                $_SESSION['ma_giam_gia'] = [];
                $ds_sp_hoa_don = get_san_pham_hoa_don($id_hoa_don);
                echo '<script>
                    Swal.fire({
                        title: "Thành Công",
                        text: "Đã đặt hàng thành công",
                        icon: "success"
                      });
                    </script>';
            }

            $ds_pttt = get_pttt();

            include 'view/thankyou.php';
            break;
        case 'chi_tiet_hoa_don':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $hoa_don =  get_hoa_don_one($id);
                $ds_sp_hoa_don = get_san_pham_hoa_don($id);
            }

            include 'view/chi_tiet_hoa_don.php';
            break;
        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                $ngay_dang_ky = date("Y-m-d");
                $taikhoan = kiem_tra_tk($ten_dang_nhap);
                if (is_array($taikhoan)) {
                    echo '<script>
                    Swal.fire({
                        title: "Không thành công",
                        text: "Tài khoản tồn tại",
                        icon: "error",  
                      });</script>';
                } else {
                    dang_ky_tai_khoan($ten_dang_nhap, $mat_khau, $email, $ho_ten, $ngay_dang_ky);
                    echo '<script>
                    Swal.fire({
                        title: "Thành công",
                        text: "đăng ký tài khoản thành công",
                        icon: "success"
                      });</script>';
                }
            }
            include 'view/login-register/register.php';
            break;
        case 'login':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['ten_dang_nhap'];
                $pass = $_POST['mat_khau'];
                $tai_khoan = kiem_tra_tk($user, $pass);
                if (is_array($tai_khoan)) {
                    $_SESSION['e_user'] = $tai_khoan;
                    echo '<script>
                    Swal.fire({
                        title: "Thành công",
                        text: "đăng nhập tài khoản thành công",
                        icon: "success"
                      });</script>';
                } else {
                    echo '<script>
                    Swal.fire({
                        title: "Không thành công",
                        text: "Tài khoản hoặc mật khẩu sai",
                        icon: "error",  
                      });</script>';
                }
                if (isset($_SESSION['e_user'])) {
                    echo '<script> location.replace("index.php"); </script>';
                }
            }
            include 'view/login-register/login.php';
            break;
        case 'quen-mat-khau':
            if (isset($_POST['quen_mat_khau']) && ($_POST['quen_mat_khau'])) {
                $tb = guiMail($_POST['email']);
                echo '<script>
                    Swal.fire({
                        title: "Đã gửi mail ",
                        text: "Vui lòng kiểm tra Mail",
                        icon: "success"
                      });
                    </script>';
            }
            include 'view/login-register/quen-mat-khau.php';
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
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $san_pham = get_san_pham_one($id);
                $ds_anh_sp = get_san_pham_anh($id);
                $ds_sp_cung_dm = get_san_pham_cung_danh_muc($san_pham['id_dm']);
                san_pham_luot_xem($id);
            }
            if (isset($_POST['binh_luan']) && ($_POST['binh_luan'])) {
                $noi_dung = $_POST['noi_dung'];
                $id_san_pham = $_GET['id'];
                $id_tai_khoan = $_SESSION['e_user']['id'];
                $ngay_binh_luan = date('Y-m-d');
                insert_binh_luan($id_tai_khoan, $id_san_pham, $noi_dung, $ngay_binh_luan);
            }

            $ds_binh_luan = get_binh_luan_san_pham($_GET['id']);
            include 'view/single-product.php';
            break;
        case 'faq':
            include 'view/faq.php';
            break;
        case 'search':
            $kyw = $_POST['tim_kiem'];
            $ds_san_pham = tim_kiem_san_pham($kyw);
            include 'view/search.php';
            break;
        case 'single-product-normal':
            include 'view/single-product-normal.php';
            break;
        case 'blog-details':
            include 'view/blog-details.php';
            break;
        case 'my-account':
            if (isset($_POST['doi_mat_khau']) && ($_POST['doi_mat_khau'])) {
                $mat_khau_cu = $_POST['mat_khau_cu'];
                $mat_khau_moi = $_POST['mat_khau_moi'];
                $tai_khoan =  get_chi_tiet_tai_khoan($_SESSION['e_user']['id']);
                if ($tai_khoan['mat_khau'] == $mat_khau_cu) {
                    doi_mat_khau($_SESSION['e_user']['id'], $mat_khau_moi);
                    echo '<script>   Swal.fire({
                        title: "Thành công ",
                        text: "Đổi mật khẩu thành công",
                        icon: "success"
                      }); </script>';
                } else {
                    echo '<script>   Swal.fire({
                        title: "Không thành công",
                        text: "mật khẩu sai",
                        icon: "error",  
                      }); </script>';
                }
            }
            if (isset($_POST['doi_thong_tin']) && ($_POST['doi_thong_tin'])) {
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];
                $nam_sinh = $_POST['nam_sinh'];
                doi_thong_tin($ho_ten, $email, $so_dien_thoai, $dia_chi, $nam_sinh, $_SESSION['e_user']['id']);

                $_SESSION['e_user']['ho_ten'] = $ho_ten;
                $_SESSION['e_user']['email'] = $email;
                $_SESSION['e_user']['so_dien_thoai'] = $so_dien_thoai;
                $_SESSION['e_user']['dia_chi'] = $dia_chi;
                $_SESSION['e_user']['nam_sinh'] = $nam_sinh;
                echo '<script>   Swal.fire({
                    title: "Thành công ",
                    text: "Đổi thông tin thành công",
                    icon: "success"
                  }); </script>';
            }
            if(isset($_GET['huy']) && (($_GET['huy'])>0)){
                $id = $_GET['huy'];
                huy_don_hang($id);
            }
            if(isset($_GET['xacnhan']) && (($_GET['xacnhan'])>0)){
                $id = $_GET['xacnhan'];
                xac_nhan_don_hang($id);
            }
            
            $ds_hoa_don_tai_khoan = get_hoa_don_tai_khoan($_SESSION['e_user']['id']);
            include 'view/my-account.php';
            break;
        case 'dangxuat':
            if (isset($_SESSION['e_user'])) {
                echo '<script> location.replace("index.php"); </script>';
            }
            dangxuat();
            include 'view/home.php';
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

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $id_dm = $_GET['iddm'];
                $ds_san_pham = get_san_pham_all_dm($id_dm);
                $dm = get_dm_one($id_dm);
            }else if(isset($_GET['web']) && ($_GET['web'] !="")){
                switch ($_GET['web']) {
                    case 'banchay':
                        $ds_san_pham = $ds_10_san_pham_ban_chay;
                        break;
                    case 'yeuthich':
                        $ds_san_pham = $ds_10_san_pham_yeu_thich;
                        break;  
                    default:
                        # code...
                        break;
                }
            }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (isset($_POST['tim_kiem']) && ($_POST['tim_kiem'])) {
                    $kyw = $_POST['tu_khoa'];
                    $ds_san_pham = loc_san_pham($kyw,$gia_min=0,$gia_max=0);
                   
                }
                if (isset($_POST['loc']) && ($_POST['loc'])) {
                    $min = $_POST['min'];
                    $max = $_POST['max'];
                    $ds_san_pham = loc_san_pham($kyw="",$min,$max);
                }
            }else {

                $ds_san_pham = get_san_pham_all();
            }
          //  var_dump($ds_san_pham);
            // echo $kyw;
            // echo $min;
            // echo $max;

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
} else {
    include 'view/home.php';
}


include 'view/footer.php';
