<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Danh sách đơn hàng </h1>
                    </div>
                    <!-- <div class="col-auto d-flex"><a href="app-order.html" class="btn btn-primary">New order</a></div> -->
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for orders" class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init text-nowrap" data-order="[[ 1, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th>Mã hóa đơn</th>
                            <th>Ngày đặt hàng</th>
                            <th>Khách hàng</th>
                            <th>Phương thanh toán</th>
                            <th>Trạng thái</th>

                            <th>Tổng</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ds_hoa_don as $hoa_don) :
                            extract($hoa_don);

                        ?>

                            <tr>

                                <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></td>
                                <td><a href="index.php?act=app-order&id=<?= $id ?>" class="text-reset">#<?= $id ?></a></td>
                                <td><?= $ngay_dat_hang ?></td>
                                <td><a href="#" class="text-reset"><?= $ten_khach_hang ?></a></td>
                                <td>
                                    <?php
                                    $ds_pttt = get_pttt();
                                    foreach ($ds_pttt as $pttt_get) {
                                        if ($pttt_get['id'] == $pttt) {
                                            echo $pttt_get['ten_pttt'];
                                        }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="d-flex fs-6">
                                        <div class="badge <?=mau_trang_thai($trang_thai)?>">
                                            <?= get_trang_thai($trang_thai); ?>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="sa-price"><span class="sa-price__symbol"><?= $tong_tien ?></span><span class="sa-price__integer"> VNĐ</span></div>
                                </td>
                                <td>
                                    <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button" id="order-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                                <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                                            </svg></button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="order-context-menu-0">
                                            <li><a class="dropdown-item" href="index.php?act=app-edit-order&id=<?= $id ?>">Sửa</a></li>
                                            <!-- <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                        <li><a class="dropdown-item" href="#">Add tag</a></li>
                                        <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li> -->
                                            <!-- <li><a class="dropdown-item text-danger" href="index.php?act=app-delete-order&iddel="">Delete</a></li> -->
                                        </ul>
                                    </div>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->