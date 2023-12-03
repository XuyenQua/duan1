 <!-- Breadcrumb Section Start -->
 <div class="section">

     <!-- Breadcrumb Area Start -->
     <div class="breadcrumb-area bg-light">
         <div class="container-fluid">
             <div class="breadcrumb-content text-center">
                 <h1 class="title">Cảm ơn</h1>
                 <ul>
                     <li>
                         <a href="index.php">Trang chủ</a>
                     </li>
                     <li class="active"> Cảm ơn</li>
                 </ul>
             </div>
         </div>
     </div>
     <!-- Breadcrumb Area End -->

 </div>
 <!-- Breadcrumb Section End -->

 <!-- Checkout Section Start -->
 <div class="section section-margin">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <!-- Coupon Accordion Start -->
                 <div class="coupon-accordion">

                     <!-- Title Start -->
                     <!-- <h3 class="title">Returning customer? <span id="showlogin">Click here to login</span></h3> -->
                     <!-- Title End -->

                     <!-- Checkout Login Start -->
                     <div id="checkout-login" class="coupon-content">
                         <div class="coupon-info">
                             <p class="coupon-text mb-2">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>

                             <!-- Form Start -->
                             <form action="#">
                                 <!-- Input Email Start -->
                                 <p class="form-row-first">
                                     <label>Username or email <span class="required">*</span></label>
                                     <input type="text">
                                 </p>
                                 <!-- Input Email End -->

                                 <!-- Input Password Start -->
                                 <p class="form-row-last">
                                     <label>Password <span class="required">*</span></label>
                                     <input type="password">
                                 </p>
                                 <!-- Input Password End -->

                                 <!-- Remember Password Start -->
                                 <p class="form-row mb-2">
                                     <input type="checkbox" id="remember_me">
                                     <label for="remember_me" class="checkbox-label">Remember me</label>
                                 </p>
                                 <!-- Remember Password End -->

                                 <!-- Lost Password Start -->
                                 <p class="lost-password"><a href="#">Lost your password?</a></p>
                                 <!-- Lost Password End -->

                             </form>
                             <!-- Form End -->

                         </div>
                     </div>
                     <!-- Checkout Login End -->

                     <!-- Title Start -->
                     <!-- <h3 class="title">Có phiếu giảm giá? <span id="showcoupon">Bấm vào đây để nhập mã của bạn</span></h3> -->
                     <!-- Title End -->

                     <!-- Checkout Coupon Start -->
                     <!-- <div id="checkout_coupon" class="coupon-checkout-content">
                         <div class="coupon-info">
                             <form action="#">
                                 <p class="checkout-coupon d-flex">
                                     <input placeholder="Coupon code" type="text">
                                     <input class="btn btn-dark btn-hover-primary rounded-0" value="Apply Coupon" type="submit">
                                 </p>
                             </form>
                         </div>
                     </div> -->
                     <!-- Checkout Coupon End -->

                 </div>
                 <!-- Coupon Accordion End -->
             </div>
         </div>
         <div class="row mb-n4">
             <div class="col-lg-6 col-12 mb-4">

                 <!-- Checkbox Form Start -->
                 <form action="#">
                     <div class="checkbox-form">

                         <!-- Checkbox Form Title Start -->
                         <h3 class="title">Chi tiết thanh toán</h3>
                         <!-- Checkbox Form Title End -->

                         <div class="row">

                             <!-- Select Country Name Start -->
                             <!-- <div class="col-md-12 mb-6">
                            <div class="country-select">
                                <label>Country <span class="required">*</span></label>
                                <select class="myniceselect nice-select wide rounded-0">
                                    <option data-display="Bangladesh">Bangladesh</option>
                                    <option value="uk">London</option>
                                    <option value="rou">Romania</option>
                                    <option value="fr">French</option>
                                    <option value="de">Germany</option>
                                    <option value="aus">Australia</option>
                                </select>
                            </div>
                        </div> -->
                             <!-- Select Country Name End -->

                             <!-- First Name Input Start -->
                             <div class="col-md-12">
                                 <div class="checkout-form-list">
                                     <label>Họ và Tên <span class="required">*</span></label>
                                     <input name="ten_khach_hang" value="<?= $ten_khach_hang ?>" readonly placeholder="Nhập họ và tên" type="text">
                                 </div>
                             </div>
                             <!-- First Name Input End -->

                             <!-- Last Name Input Start -->
                             <!-- <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Last Name <span class="required">*</span></label>
                                <input placeholder="" type="text">
                            </div>
                        </div> -->
                             <!-- Last Name Input End -->

                             <!-- Company Name Input Start -->
                             <div class="col-md-12">
                                 <div class="checkout-form-list">
                                     <label>Số điện thoại<span class="required">*</span></label>
                                     <input name="so_dien_thoai" value="<?= $so_dien_thoai ?>" readonly placeholder="Nhập số điện thoại" type="text">
                                 </div>
                             </div>
                             <!-- Company Name Input End -->

                             <!-- Address Input Start -->
                             <div class="col-md-12">
                                 <div class="checkout-form-list">
                                     <label>Địa chỉ <span class="required">*</span></label>
                                     <input name="dia_chi" value="<?= $dia_chi ?>" readonly placeholder="Nhập địa chỉ" type="text">
                                 </div>
                             </div>
                             <!-- Address Input End -->

                             <!-- Optional Text Input Start -->
                             <!-- <div class="col-md-12">
                            <div class="checkout-form-list">
                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                            </div>
                        </div> -->
                             <!-- Optional Text Input End -->

                             <!-- Town or City Name Input Start -->
                             <!-- <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text">
                            </div>
                        </div> -->
                             <!-- Town or City Name Input End -->

                             <!-- State or Country Input Start -->
                             <!-- <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>State / County <span class="required">*</span></label>
                                <input placeholder="" type="text">
                            </div>
                        </div> -->
                             <!-- State or Country Input End -->

                             <!-- Postcode or Zip Input Start -->
                             <!-- <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Postcode / Zip <span class="required">*</span></label>
                                <input placeholder="" type="text">
                            </div>
                        </div> -->
                             <!-- Postcode or Zip Input End -->

                             <!-- Email Address Input Start -->
                             <div class="col-md-12">
                                 <div class="checkout-form-list">
                                     <label>Email <span class="required">*</span></label>
                                     <input value="<?= $email ?>" readonly placeholder="Nhập email của bạn" type="email">
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="checkout-form-list">
                                     <label>Phương thức thanh toán <span class="required">*</span></label></br>

                                     <input type="text" name="" value="<?php
                                                                        $ds_pttt = get_pttt();
                                                                        foreach ($ds_pttt as $pttt_get) {
                                                                            if ($pttt_get['id'] == $pttt) {
                                                                                echo $pttt_get['ten_pttt'];
                                                                            }
                                                                        }
                                                                        ?>" id="" readonly>
                                 </div>
                             </div>
                             <!-- Email Address Input End -->

                             <!-- Phone Number Input Start -->
                             <!-- <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Phone <span class="required">*</span></label>
                                <input type="text">
                            </div>
                        </div> -->
                             <!-- Phone Number Input End -->

                             <!-- Checkout Form List checkbox Start -->
                             <!-- <div class="col-md-12">
                            <div class="checkout-form-list create-acc">
                                <input id="cbox" type="checkbox">
                                <label for="cbox" class="checkbox-label">Create an account?</label>
                            </div>
                            <div id="cbox-info" class="checkout-form-list create-account">
                                <p class="mb-2">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                <label>Account password <span class="required">*</span></label>
                                <input placeholder="Password" type="password">
                            </div>
                        </div> -->
                             <!-- Checkout Form List checkbox End -->

                         </div>

                         <!-- Different Address Start -->
                         <div class="different-address">
                             <!-- Ship Different Title Checkbox Start -->
                             <!-- <div class="ship-different-title">
                            <div>
                                <input id="ship-box" type="checkbox">
                                <label for="ship-box" class="checkbox-label">Ship to a different address?</label>
                            </div>
                        </div> -->
                             <!-- Ship Different Title Checkbox End -->

                             <!-- Ship Box Info Start -->
                             <div id="ship-box-info" class="row mt-2">

                                 <!-- Select Country Name Start -->
                                 <!-- <div class="col-md-12">
                                <div class="myniceselect country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="myniceselect nice-select wide rounded-0">
                                        <option data-display="Bangladesh">Bangladesh</option>
                                        <option value="uk">London</option>
                                        <option value="rou">Romania</option>
                                        <option value="fr">French</option>
                                        <option value="de">Germany</option>
                                        <option value="aus">Australia</option>
                                    </select>
                                </div>
                            </div> -->
                                 <!-- Select Country Name End -->

                                 <!-- First Name Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>First Name <span class="required">*</span></label>
                                         <input placeholder="" type="text">
                                     </div>
                                 </div>
                                 <!-- First Name Input End -->

                                 <!-- Last Name Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Last Name <span class="required">*</span></label>
                                         <input placeholder="" type="text">
                                     </div>
                                 </div>
                                 <!-- Last Name Input End -->

                                 <!-- Company Name Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Company Name</label>
                                         <input placeholder="" type="text">
                                     </div>
                                 </div>
                                 <!-- Company Name End -->

                                 <!-- Address Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Address <span class="required">*</span></label>
                                         <input placeholder="Street address" type="text">
                                     </div>
                                 </div>
                                 <!-- Address Input End -->

                                 <!-- Optional Text Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                     </div>
                                 </div>
                                 <!-- Optional Text End -->

                                 <!-- Town or City Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Town / City <span class="required">*</span></label>
                                         <input type="text">
                                     </div>
                                 </div>
                                 <!-- Town or City Input End -->

                                 <!-- State or Country Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>State / County <span class="required">*</span></label>
                                         <input placeholder="" type="text">
                                     </div>
                                 </div>
                                 <!-- State or Country Input End -->

                                 <!-- Postcode or Zip Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Postcode / Zip <span class="required">*</span></label>
                                         <input placeholder="" type="text">
                                     </div>
                                 </div>
                                 <!-- Postcode or Zip Input End -->

                                 <!-- Email Address Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Email Address <span class="required">*</span></label>
                                         <input placeholder="" type="email">
                                     </div>
                                 </div>
                                 <!-- Email Address Input End -->

                                 <!-- Phone Number Input Start -->
                                 <div class="col-md-12">
                                     <div class="checkout-form-list">
                                         <label>Phone <span class="required">*</span></label>
                                         <input type="text">
                                     </div>
                                 </div>
                                 <!-- Phone Number Input End -->

                             </div>
                             <!-- Ship Box Info End -->

                             <!-- Order Notes Textarea Start -->
                             <div class="order-notes mt-3 mb-n2">
                                 <div class="checkout-form-list checkout-form-list-2">
                                     <label>Ghi chú đơn hàng</label>
                                     <textarea id="checkout-mess" readonly name="ghi_chu" cols="30" rows="10" placeholder="Nhập ghi chú"><?= $ghi_chu ?></textarea>
                                 </div>
                             </div>
                             <!-- Order Notes Textarea End -->

                         </div>
                         <!-- Different Address End -->
                     </div>
                 </form>
                 <!-- Checkbox Form End -->

             </div>

             <div class="col-lg-6 col-12 mb-4">

                 <!-- Your Order Area Start -->
                 <div class="your-order-area border">

                     <!-- Title Start -->
                     <h3 class="title">Đơn hàng của bạn</h3>
                     <!-- Title End -->

                     <!-- Your Order Table Start -->
                     <div class="your-order-table table-responsive">
                         <table class="table">

                             <!-- Table Head Start -->
                             <thead>
                                 <tr class="cart-product-head">
                                     <th class="cart-product-name text-start">Sản phẩm</th>
                                     <th class="cart-product-total text-end">Tổng</th>
                                 </tr>
                             </thead>
                             <!-- Table Head End -->

                             <!-- Table Body Start -->
                             <tbody>
                                 <?php
                                    $tong_gio_hang = 0;
                                    
                                    foreach ($ds_sp_hoa_don as $san_pham) :
                                        extract($san_pham);
                                        // var_dump($san_pham);
                                    ?>
                                     <tr class="cart_item">
                                         <td class="cart-product-name text-start ps-0"><?= $ten_sp ?><strong class="product-quantity"> × <?= $so_luong?></strong></td>
                                         <td class="cart-product-total text-end pe-0"><span class="amount"><?= $thanh_tien = $gia_sp * $so_luong ?> VNĐ</span></td>
                                     </tr>
                                    <?php
                                        $tong_gio_hang += $thanh_tien;

                                    endforeach;
                                    $tong = $tong_gio_hang + phi_van_chuyen($tong_gio_hang);
                                    ?>
                             </tbody>
                             <!-- Table Body End -->

                             <!-- Table Footer Start -->
                             <tfoot>
                                 <tr class="cart-subtotal">
                                     <th class="text-start ps-0">Tổng của giỏ hàng</th>
                                     <td class="text-end pe-0"><span class="amount"><?= $tong_gio_hang ?> VNĐ</span></td>
                                 </tr>
                                 <tr class="cart-subtotal">
                                     <th class="text-start ps-0">Phí vận chuyển</th>
                                     <td class="text-end pe-0"><span class="amount"><?= phi_van_chuyen($tong_gio_hang) ?> VNĐ</span></td>
                                 </tr>
                                 <tr class="order-total">
                                     <th class="text-start ps-0">Tổng đơn hàng</th>
                                     <td class="text-end pe-0"><strong><span class="amount"><?= $tong_tien ?> VNĐ</span></strong></td>
                                 </tr>
                             </tfoot>
                             <!-- Table Footer End -->

                         </table>
                     </div>
                     <!-- Your Order Table End -->

                     <!-- Payment Accordion Order Button Start -->
                     <div class="payment-accordion-order-button">
                         <!-- <div class="payment-accordion">
                        <div class="single-payment">
                            <h5 class="panel-title mb-3">
                                <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Direct Bank Transfer.
                                </a>
                            </h5>
                            <div class="collapse show" id="collapseExample">
                                <div class="card card-body rounded-0">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-payment">
                            <h5 class="panel-title mb-3">
                                <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-2" aria-expanded="false" aria-controls="collapseExample-2">
                                    Cheque Payment.
                                </a>
                            </h5>
                            <div class="collapse" id="collapseExample-2">
                                <div class="card card-body rounded-0">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-payment">
                            <h5 class="panel-title mb-3">
                                <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-3" aria-expanded="false" aria-controls="collapseExample-3">
                                    Paypal.
                                </a>
                            </h5>
                            <div class="collapse" id="collapseExample-3">
                                <div class="card card-body rounded-0">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                         <!-- <div class="order-button-payment">
                             <button class="btn btn-dark btn-hover-primary rounded-0 w-100">Đặt hàng</button>
                         </div> -->
                     </div>
                     <!-- Payment Accordion Order Button End -->
                 </div>
                 <!-- Your Order Area End -->
             </div>
         </div>
     </div>
 </div>
 <!-- Checkout Section End -->