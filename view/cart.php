<?php
$tong = 0;
?>
<form action="index.php?act=update-cart" method="post">
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Giỏ hàng</h1>
                    <ul>
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="active"> Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->
    <!-- Shopping Cart Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-12">

                    <!-- Cart Table Start -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">

                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Ảnh</th>
                                    <th class="pro-title">Tên</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Thành tiền</th>
                                    <th class="pro-remove">Xóa</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <?php
                                foreach ($_SESSION['mycart'] as $san_pham):
                                    $tong += $san_pham[3] * $san_pham[4];
                                    $id = 0;
                                    ?>
                                    <tr>
                                        <td class="pro-thumbnail"><a
                                                href="index.php?act=single-product&id=<?= $san_pham[0] ?>"><img
                                                    class="img-fluid" src="<?= $san_pham[1] ?>" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="index.php?act=single-product&id=<?= $san_pham[0] ?>">
                                                <?= $san_pham[2] ?>
                                            </a></td>
                                        <td class="pro-price"><span>
                                                <?= $san_pham[3] ?> VNĐ
                                            </span></td>
                                        <td class="pro-quantity">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="so_luong[]"
                                                        value="<?= $san_pham[4] ?>" type="text" readonly>
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>
                                                <?= $san_pham[3] * $san_pham[4] ?> VNĐ
                                            </span></td>
                                        <td class="pro-remove"><a href="index.php?act=del-cart&idcart=<?= $id ?>"><i
                                                    class="pe-7s-trash"></i></a></td>
                                    </tr>
                                    <?php
                                    $id++;
                                endforeach; ?>
                            </tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->

                    <!-- Cart Update Option Start -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">

                        <!-- Apply Coupon Wrapper Start -->
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Nhập mã giảm giá" />
                                <button class="btn btn-dark btn-hover-primary rounded-0">Áp dụng</button>
                            </form>
                        </div>
                        <!-- Apply Coupon Wrapper End -->

                        <!-- Cart Update Start -->
                        <div class="cart-update mt-sm-16">
                            <input type="submit" class="btn btn-dark btn-hover-primary rounded-0"
                                value="Cập nhật giỏ hàng">
                        </div>
                        <!-- Cart Update End -->

                    </div>
                    <!-- Cart Update Option End -->

                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 ms-auto col-custom">

                    <!-- Cart Calculation Area Start -->
                    <div class="cart-calculator-wrapper">

                        <!-- Cart Calculate Items Start -->
                        <div class="cart-calculate-items">

                            <!-- Cart Calculate Items Title Start -->
                            <h3 class="title">Tổng giỏ hàng</h3>
                            <!-- Cart Calculate Items Title End -->

                            <!-- Responsive Table Start -->
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Tổng sản phẩm</td>
                                        <td>
                                            <?= $tong ?> VNĐ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phí vận chuyển</td>
                                        <td>
                                            <?= phi_van_chuyen($tong);
                                            $tong += phi_van_chuyen($tong);
                                            ?> VNĐ
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>Tổng</td>
                                        <td class="total-amount">
                                            <?= $tong ?> VNĐ
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->

                        <!-- Cart Checktout Button Start -->
                        <a href="index.php?act=checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100">Thanh
                            toán</a>
                        <!-- Cart Checktout Button End -->

                    </div>
                    <!-- Cart Calculation Area End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Shopping Cart Section End -->
</form>