<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Quên mật khẩu</h1>
                <ul>
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li class="active"> Quên mật khẩu</li>
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
                            <h2 class="title mb-2">Quên mật khẩu</h2>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="index.php?act=quen-mat-khau" method="post">

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-3">
                                <input type="email" name="email" required placeholder="nhập email" >
                            </div>
                            <!-- Input Email End -->
                            <?php if (isset($tb) && ($tb!="")) {
                                echo $tb;
                            }?>
                            <!-- Login Button Start -->
                            <div class="single-input-item mb-3">
                                <input type="submit" class="btn btn btn-dark btn-hover-primary rounded-0" name="quen_mat_khau" value="Gửi mail">
                            </div>
                            <!-- Login Button End -->
                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Login Wrapper End -->
                </div>
            </div>
       

    </div>
</div>
<!-- Login | Register Section End -->