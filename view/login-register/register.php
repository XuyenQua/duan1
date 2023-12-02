
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Đăng ký</h1>
                    <ul>
                        <li>
                            <a href="index.php">Trang chủ </a>
                        </li>
                        <li class="active">Đăng ký</li>
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
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Đăng ký</h2>
                            <p class="desc-content">Vui lòng đăng ký bằng cách sử dụng chi tiết tài khoản dưới đây.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="#" method="post">

                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="ho_ten" required placeholder="Họ và Tên" >
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Last Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="ten_dang_nhap" required placeholder="Tên đăng nhập">
                            </div>
                            <!-- Input Last Name End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="mat_khau" required placeholder="Mật khẩu">
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox & Subscribe Label Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe-2">
                                            <label class="custom-control-label" for="rememberMe-2">Đăng ký nhận thông báo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox & Subscribe Label End -->
                            <?php if (isset($tb) && ($tb!="")) {
                                echo $tb;
                            }?>
                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">
                                <input class="btn btn btn-dark btn-hover-primary rounded-0" name="dangky" type="submit" value="Đăng ký">
                            </div>
                            <!-- Register Button End -->

                            <div class="lost-password">
                                <a href="index.php?act=login">Đăng nhập</a>
                            </div>

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Login | Register Section End -->
