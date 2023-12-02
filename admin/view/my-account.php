<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Tài khoản của tôi</h1>
                <ul>
                    <li>
                        <a href="index.php">Trang chủ </a>
                    </li>
                    <li class="active"> Tài khoản của tôi</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- My Account Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#account" class="active" data-bs-toggle="tab"><i class="fa fa-user"></i></i>
                                    Thông tin tài khoản</a>
                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Đơn hàng</a>
                                <!-- <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a> -->
                                <!-- <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a> -->
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-user"></i> Đổi thông tin </a>
                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Mật khẩu</a>
                                <a href="index.php?act=dangxuat"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="account" role="tabpanel">
                                    <div class="myaccount-content">

                                        <h3 class="title">Thông tin tài khoản</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">Tên đăng nhập</label>
                                                            <input type="text" id="first-name" value="<?= $_SESSION['e_user']['ten_dang_nhap'] ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6">
                                                    <div class="single-input-item mb-3">
                                                        <label for="last-name" class="required mb-1">Last Name</label>
                                                        <input type="text" id="last-name" placeholder="Last Name" />
                                                    </div>
                                                </div> -->
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Họ và Tên</label>
                                                    <input type="text" id="display-name" value="<?= $_SESSION['e_user']['ho_ten'] ?>" readonly />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Email</label>
                                                    <input type="email" id="email" value="<?= $_SESSION['e_user']['email'] ?>" readonly />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Số điện thoại</label>
                                                    <input type="text" id="sodienthoai" value="<?= $_SESSION['e_user']['so_dien_thoai'] ?>" readonly />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Địa chỉ</label>
                                                    <input type="text" id="sodienthoai" value="<?= $_SESSION['e_user']['dia_chi'] ?>" readonly />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Ngày sinh</label>
                                                    <input type="text" id="email" value="<?= $_SESSION['e_user']['nam_sinh'] ?>" readonly />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label  class="required mb-1">Ngày đăng ký</label>
                                                    <input type="text"  value="<?= $_SESSION['e_user']['ngay_dang_ky'] ?>" readonly />
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Đơn hàng</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Đơn hàng</th>
                                                        <th>Ngày</th>
                                                        <th>Trạng thái</th>
                                                        <th>Tổng</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if (count($ds_hoa_don_tai_khoan) != 0) :
                                                        foreach ($ds_hoa_don_tai_khoan as $hoa_don) :
                                                            extract($hoa_don);
                                                    ?>
                                                            <tr>
                                                                <td><?= $id_hoa_don ?></td>
                                                                <td><?= $ngay_dat_hang ?></td>
                                                                <td>
                                                                    <?= get_trang_thai($trang_thai); ?>
                                                                </td>
                                                                <td><?= $tong_tien ?> VNĐ</td>
                                                                <td><a href="index.php?act=chi_tiet_hoa_don&id=<?= $id_hoa_don ?>" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Xem</a></td>
                                                            </tr>
                                                    <?php
                                                        endforeach;
                                                    endif;

                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <!-- <div class="tab-pane fade" id="download" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3 class="title">Downloads</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>Aug 22, 2023</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2023</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <!-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3 class="title">Payment Method</h3>
                                    <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                </div>
                            </div> -->
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">thay đổi thông tin tài khoản</h3>
                                        <form action="index.php?act=my-account" method="post">
                                            <div class="single-input-item mb-3">
                                                <label for="display-name" class="required mb-1">Họ và Tên</label>
                                                <input type="text" id="display-name" value="<?=$_SESSION['e_user']['ho_ten']?>" name="ho_ten"  />
                                            </div>
                                            <div class="single-input-item mb-3">
                                                <label for="email" class="required mb-1">Email</label>
                                                <input type="email" id="email"  value="<?=$_SESSION['e_user']['email']?>" name="email" />
                                            </div>
                                            <div class="single-input-item mb-3">
                                                <label for="email" class="required mb-1">Số điện thoại</label>
                                                <input type="text" name="so_dien_thoai" value="<?=$_SESSION['e_user']['so_dien_thoai']?>" />
                                            </div>
                                            <div class="single-input-item mb-3">
                                                <label for="email" class="required mb-1">Địa chỉ</label>
                                                <input type="text" name="dia_chi" value="<?=$_SESSION['e_user']['dia_chi']?>" />
                                            </div>
                                            <div class="single-input-item mb-3">
                                                <label for="email" class="required mb-1">Ngày sinh</label>
                                                <input type="date" name="nam_sinh" value="<?=$_SESSION['e_user']['nam_sinh']?>" />
                                            </div>
                                            
                                            <div class="single-input-item single-item-button">
                                                <input type="submit" name="doi_thong_tin" class="btn btn btn-dark btn-hover-primary rounded-0" value="Lưu">
                                                <!-- <button class="btn btn btn-dark btn-hover-primary rounded-0">Lưu</button> -->
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Mật khẩu</h3>
                                        <div class="account-details-form">
                                            <form action="index.php?act=my-account" method="post">
                                                <fieldset>
                                                    <legend>Đổi mật khẩu</legend>
                                                    <div class="single-input-item mb-3">
                                                        <label for="current-pwd" class="required mb-1">Mật khẩu hiện tại</label>
                                                        <input type="password" name="mat_khau_cu" id="current-pwd" placeholder="Nhập mật khẩu cũ" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="new-pwd" class="required mb-1">Nhập mật khẩu mới</label>
                                                                <input type="password" name="mat_khau_moi" id="new-pwd" placeholder="Nhập mật khẩu mới" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-6">
                                                        <div class="single-input-item mb-3">
                                                            <label for="confirm-pwd" class="required mb-1">Nhập xác nhận mật khẩu mới</label>
                                                            <input type="password" id="confirm-pwd" placeholder="Nhập xác nhận mật khẩu mới" />
                                                        </div>
                                                    </div> -->
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button">
                                                    <input type="submit" name="doi_mat_khau" class="btn btn btn-dark btn-hover-primary rounded-0" value="Lưu">
                                                    <!-- <button class="btn btn btn-dark btn-hover-primary rounded-0">Lưu</button> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->

            </div>
        </div>

    </div>
</div>
<!-- My Account Section End -->