<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Đăng nhập</h1>
                <ul>
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li class="active"> Đăng nhập</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Login | Register Section Start -->
<div class="section section-margin">
    <div class="container ">
            <div class="row mb-n10 justify-content-center">
                <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                    <!-- Login Wrapper Start -->
                    <div class="login-wrapper ">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Đăng nhập</h2>
                            <p class="desc-content">Đăng nhập tài khoản để có thêm ưu đãi</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="index.php?act=login" method="post">

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="ten_dang_nhap" required placeholder="Tên đăng nhập" >
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="mat_khau" required placeholder="Nhập mật khẩu">
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Giữ đăng nhập</label>
                                        </div>
                                    </div>
                                    <a href="index.php?act=quen-mat-khau" class="forget-pwd mb-3">Quên mệt khẩu?</a>
                                </div>
                            </div>
                            <!-- Checkbox/Forget Password End -->
                            <?php if (isset($tb) && ($tb!="")) {
                                echo $tb;
                            }?>
                            <!-- Login Button Start -->
                            <div class="single-input-item mb-3">
                                <input type="submit" class="btn btn btn-dark btn-hover-primary rounded-0" name="dangnhap" value="Đăng nhập">
                            </div>
                            <!-- Login Button End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="index.php?act=register">Đăng ký tài khoản</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Login Wrapper End -->
                </div>
            </div>
       

    </div>
</div>
<!-- Login | Register Section End -->