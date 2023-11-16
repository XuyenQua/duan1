<?php
 session_start();
 include 'model/pdo.php';
 include 'model/taikhoan.php';

 if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['tai_khoan'];
    $pass = $_POST['mat_khau'];
    $checkuser = kiem_tra_tk($user,$pass);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $checkuser;
        if ($_SESSION['user']['vai_tro']==3) {
            $thongbao = 'đăng nhập  thành công';
            header('Location: index.php');
        }else{
            $thongbao = 'Thông tin sai';
        }
        
        //header('Loacation: index.php');
    } else {
        $thongbao = 'Thông tin sai';
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
<!-- Mirrored from stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 12:59:12 GMT -->

<head>
    <meta charSet="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Stroyka Admin - eCommerce Dashboard Template</title><!-- icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" /><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" /><!-- css -->
    <link rel="stylesheet" href="view/vendor/bootstrap/css/bootstrap.ltr.css" />
    <link rel="stylesheet" href="view/vendor/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="view/vendor/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="view/vendor/quill/quill.snow.css" />
    <link rel="stylesheet" href="view/vendor/air-datepicker/css/datepicker.min.css" />
    <link rel="stylesheet" href="view/vendor/select2/css/select2.min.css" />
    <link rel="stylesheet" href="view/vendor/datatables/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="view/vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="view/vendor/fullcalendar/main.min.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <form action="login.php" method="post">
        <div class="min-h-100 p-0 p-sm-6 d-flex align-items-stretch">
            <div class="card w-25x flex-grow-1 flex-sm-grow-0 m-sm-auto">
                <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
                    <h1 class="mb-0 fs-3">Đăng nhập ADMIN</h1>
                    <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">Đăng nhập vào tài khoản của bạn để tiếp tục.</div>
                    <div class="mb-4">
                        <label for="username"  class="form-label">Tên đăng nhập</label>
                        <input type="text" name="tai_khoan" id="username" class="form-control form-control-lg" required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input id="password" name="mat_khau" type="password" class="form-control form-control-lg" required/>
                    </div>
                    <div class="mb-4 row py-2 flex-wrap">
                        <div class="col-auto me-auto"><label class="form-check mb-0"><input type="checkbox" class="form-check-input" /><span class="form-check-label">Remember me</span></label></div>
                        <div class="col-auto d-flex align-items-center"><a href="#">Forgot password?</a></div>
                    </div>
                    <div class="mb-4 py-2">
                        <?php if (isset($thongbao)&&($thongbao!='')) {
                            echo $thongbao;
                        } ?>
                    </div>
                    
                    <div>
                        <input type="submit" class="btn btn-primary btn-lg w-100" name="dangnhap" value="Đăng Nhập" >
                    </div>
                </div>
            </div>
        </div>

    </form>
    


    <!-- scripts -->
    <script src="view/vendor/jquery/jquery.min.js"></script>
    <script src="view/vendor/feather-icons/feather.min.js"></script>
    <script src="view/vendor/simplebar/simplebar.min.js"></script>
    <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="view/vendor/highlight.js/highlight.pack.js"></script>
    <script src="view/vendor/quill/quill.min.js"></script>
    <script src="view/vendor/air-datepicker/js/datepicker.min.js"></script>
    <script src="view/vendor/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="view/vendor/select2/js/select2.min.js"></script>
    <script src="view/vendor/fontawesome/js/all.min.js" data-auto-replace-svg="" async=""></script>
    <script src="view/vendor/chart.js/chart.min.js"></script>
    <script src="view/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="view/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="view/vendor/nouislider/nouislider.min.js"></script>
    <script src="view/vendor/fullcalendar/main.min.js"></script>
    <script src="view/js/stroyka.js"></script>
    <script src="view/js/custom.js"></script>
    <script src="view/js/calendar.js"></script>
    <script src="view/js/demo.js"></script>
    <script src="view/js/demo-chart-js.js"></script>
</body>
<!-- Mirrored from stroyka-admin.html.themeforest.scompiler.ru/variants/ltr/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 12:59:12 GMT -->

</html>