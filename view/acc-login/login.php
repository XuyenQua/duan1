<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Đăng nhập | Đăng ký</h1>
                <ul>
                    <li>
                        <a href="index.php">Trang chủ </a>
                    </li>
                    <li class="active"> Đăng nhập | Đăng ký</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Login | Register Section Start -->
<div class="section section-margin">
    <div class="container">
        <?php

        ?>
        <div class="row mb-n10">
            <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper">

                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">Đăng nhập</h2>
                        <p class="desc-content">Vui lòng đăng nhập bằng tài khoản đã đăng ký</p>
                    </div>
                    <!-- Login Title & Content End -->

                    <!-- Form Action Start -->
                    <form action="index.php?act=dangnhap" method="post">

                        <!-- Input Email Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Email hoặc tên người dùng" name="tai_khoan">
                        </div>
                        <!-- Input Email End -->

                        <!-- Input Password Start -->
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Nhập mật khẩu" name="mat_khau">
                        </div>
                        <!-- Input Password End -->

                        <!-- Checkbox/Forget Password Start -->
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                                        <label class="custom-control-label" for="rememberMe">Nhớ tài khoản</label>
                                    </div>
                                </div>
                                <a href="#" class="forget-pwd mb-3">Quên mật khẩu</a>
                            </div>
                        </div>
                        <!-- Checkbox/Forget Password End -->

                        <!-- Login Button Start -->
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0">Đăng
                                nhập</button>
                        </div>
                        <!-- Login Button End -->

                        <!-- Lost Password & Creat New Account Start -->
                        <div class="lost-password">
                            <a href="login.php">Tạo tài khoản</a>
                        </div>
                        <!-- Lost Password & Creat New Account End -->

                    </form>
                    <!-- Form Action End -->

                </div>
                <!-- Login Wrapper End -->
            </div>
            <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                <!-- Register Wrapper Start -->
                <div class="register-wrapper">

                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">Tạo tài khoản</h2>
                        <p class="desc-content">Vui lòng đăng ký bằng cách sử dụng chi tiết tài khoản dưới đây.</p>
                    </div>
                    <!-- Login Title & Content End -->

                    <!-- Form Action Start -->
                    <form action="#" method="post">

                        <!-- Input First Name Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Tên">
                        </div>
                        <!-- Input First Name End -->

                        <!-- Input Last Name Start -->
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Họ">
                        </div>
                        <!-- Input Last Name End -->

                        <!-- Input Email Or Username Start -->
                        <div class="single-input-item mb-3">
                            <input type="email" placeholder="Email hoặc tên người dùng">
                        </div>
                        <!-- Input Email Or Username End -->

                        <!-- Input Password Start -->
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Vui lòng nhập mật khẩu">
                        </div>
                        <!-- Input Password End -->

                        <!-- Checkbox & Subscribe Label Start -->
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberMe-2">
                                        <label class="custom-control-label" for="rememberMe-2">Subscribe Our
                                            Newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkbox & Subscribe Label End -->

                        <!-- Register Button Start -->
                        <div class="single-input-item mb-3">
                            <button class="btn btn btn-dark btn-hover-primary rounded-0">Đăng ký</button>
                        </div>
                        <!-- Register Button End -->

                    </form>
                    <!-- Form Action End -->

                </div>
                <!-- Register Wrapper End -->
            </div>
        </div>

    </div>
</div>
<!-- Login | Register Section End -->