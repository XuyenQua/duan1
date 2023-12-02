<?php
extract($hoa_don);
?>
<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="app-orders-list.html">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order #<?= $id ?></li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Hóa Đơn #<?= $id ?></h1>
                    </div>
                    <div class="col-auto d-flex"><a href="index.php?act=app-delete-order&iddel=<?=$id?>" onclick="return confirm('bạn có muốn xóa hay không')"  class="btn btn-secondary me-3">Xóa</a><a href="index.php?act=app-edit-order&id=<?=$id?>" class="btn btn-primary">Sửa</a></div>
                </div>
            </div>
            <div class="sa-page-meta mb-5">
                <div class="sa-page-meta__body">
                    <div class="sa-page-meta__list">
                        <div class="sa-page-meta__item"><?= $ngay_dat_hang ?></div>
                        <div class="sa-page-meta__item"><?=count($ds_sp_hoa_don)?> sản phẩm</div>
                        <div class="sa-page-meta__item">Tổng <?= $tong_tien ?> VNĐ</div>
                        <div class="sa-page-meta__item d-flex align-items-center fs-6"><?= get_trang_thai($trang_thai) ?></div>
                    </div>
                </div>
            </div>
            <div class="sa-entity-layout" data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        <div class="sa-card-area"><textarea class="sa-card-area__area" rows="2" readonly placeholder=""><?= $ghi_chu ?></textarea>
                            <div class="sa-card-area__card"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg></div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Sản phẩm</h2>
                                <div class="text-muted fs-exact-14">
                                    <!-- <a href="#">Sủa sản phẩm</a> -->
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table">
                                    <tbody>
                                        <?php
                                        $tong_gio_hang = 0;
                                        foreach ($ds_sp_hoa_don as $san_pham) :
                                            extract($san_pham);
                                            $thanh_tien = $so_luong*$gia_sp;
                                            $tong_gio_hang += $thanh_tien;
                                        ?>
                                            <tr>
                                                <td class="min-w-20x">
                                                    <div class="d-flex align-items-center"><img src="<?= '../' . $anh_sp ?>" class="me-4" width="40" height="40" alt="" /><a href="index.php?act=app-product&id=<?= $id_san_pham ?>" class="text-reset"><?= $ten_sp ?></a></div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="sa-price"><span class="sa-price__symbol"><?= $gia_sp ?></span><span class="sa-price__integer"> VNĐ</span>
                                                    </div>
                                                </td>
                                                <td class="text-end"><?= $so_luong ?></td>
                                                <td class="text-end">
                                                    <div class="sa-price"><span class="sa-price__symbol"><?= $thanh_tien ?></span><span class="sa-price__integer"> VNĐ</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tbody class="sa-table__group">
                                        <tr>
                                            <td colSpan="3">Tổng giỏ hàng</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"><?= $tong_gio_hang ?></span><span class="sa-price__integer"> VNĐ</span></div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td colSpan="3">Store Credit</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">-20</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td colSpan="3">Phí vận chuyển<div class="text-muted fs-exact-13"></div>
                                            </td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"><?= phi_van_chuyen($tong_gio_hang) ?></span><span class="sa-price__integer"> VNĐ</span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colSpan="3">Tổng</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"><?= $tong_tien ?></span><span class="sa-price__integer"> VNĐ</span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Transactions</h2>
                                <div class="text-muted fs-exact-14"><a href="#">Add transaction</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Payment<div class="text-muted fs-exact-13">via PayPal</div>
                                            </td>
                                            <td>October 7, 2020</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">2,000</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment<div class="text-muted fs-exact-13">from account balance</div>
                                            </td>
                                            <td>November 2, 2020</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">50</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Refund<div class="text-muted fs-exact-13">to PayPal</div>
                                            </td>
                                            <td>December 10, 2020</td>
                                            <td class="text-end text-danger">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span class="sa-price__integer">-325</span><span class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Phương thức thanh toán</h2>
                            </div>
                            <table class="sa-table">
                                <tbody class="sa-table__group">
                                    <tr>
                                        <td>Phương thức</td>
                                        <td class="text-end">
                                            <div class="sa-price">
                                                <span class="sa-price__symbol">
                                                    <?=get_ten_pttt($pttt)?>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sa-entity-layout__sidebar">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Khách hàng</h2>
                                <!-- <a href="#" class="fs-exact-14">Sửa</a> -->
                            </div>
                            <div class="card-body d-flex align-items-center pt-4">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg">
                                    <!-- <img src="" width="40" height="40" alt="" /> -->
                                </div>
                                <div class="ms-3 ps-2">
                                    <div class="fs-exact-14 fw-medium"><?= $ten_khach_hang ?></div>
                                    <!-- <div class="fs-exact-13 text-muted">This is a first order</div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0"></h2><a href="#" class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                <div>Jessica Moore</div>
                                <div class="mt-1"><a href="#">moore@example.com</a></div>
                                <div class="text-muted mt-1">+38 (094) 730-24-25</div>
                            </div>
                        </div> -->
                        <!-- <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0"></h2><a href="#" class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">Jessica Moore<br />Random Federation<br />115302, Moscow<br />ul. Varshavskaya, 15-2-178</div>
                        </div> -->
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Thông tin liên hệ</h2>
                                <!-- <a href="#" class="fs-exact-14">Sứa</a> -->
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                Tên khách hàng:<?= $ten_khach_hang ?><br>
                                Số điện thoại:<?= $so_dien_thoai ?><br>
                                Email :<?= $so_dien_thoai ?><br>
                                Địa chỉ:<?= $dia_chi ?><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->