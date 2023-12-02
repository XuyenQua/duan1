<?php
extract($chi_tiet_tk);
if ($anh_tk == "") {
    $hinh = $img_path_admin . "user.jpg";
} else {
    $hinh = $img_path_admin . $anh_tk;
}
if ($dia_chi == "") {
    $dc = "Không có địa chỉ";
} else {
    $dc = $dia_chi;
}

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
                                <li class="breadcrumb-item"><a href="app-customers-list.html">Customers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Jessica Moore</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0"><?= $ho_ten ?></h1>
                    </div>
                    <!-- <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Xóa</a><a href="#" class="btn btn-primary">Sửa</a></div> -->
                </div>
            </div>
            <div class="sa-entity-layout" data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__sidebar">
                        <div class="card">
                            <div class="card-body d-flex flex-column align-items-center">
                                <div class="pt-3">
                                    <div class="sa-symbol sa-symbol--shape--circle" style="--sa-symbol--size:6rem"><img src="<?= $hinh ?>" width="96" height="96" alt="" /></div>
                                </div>
                                <div class="text-center mt-4">
                                    <div class="fs-exact-16 fw-medium"><?= $ho_ten ?></div>
                                    <div class="fs-exact-13 text-muted">
                                        <div class="mt-1"><a href="#"><?= $email ?></a></div>
                                        <div class="mt-1"><?= $so_dien_thoai ?></div>
                                    </div>
                                </div>
                                <div class="sa-divider my-5"></div>
                                <div class="w-100">
                                    <!-- <dl class="list-unstyled m-0">
                                        <dt class="fs-exact-14 fw-medium">Đơn hàng gần nhất</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">7 days ago – <a href="app-order.html">#80294</a></dd>
                                    </dl> -->
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Vai trò</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1"><?=get_vai_tro($vai_tro)?></dd>
                                    </dl>
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Đăng ký</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1"><?=$ngay_dang_ky?></dd>
                                    </dl>
                                    <dl class="list-unstyled m-0 mt-4">
                                        <dt class="fs-exact-14 fw-medium">Năm sinh</dt>
                                        <dd class="fs-exact-13 text-muted mb-0 mt-1">
                                            <?php if($nam_sinh!=""){
                                                echo $nam_sinh;
                                            }else{
                                                echo 'chưa có thông tin';
                                            }
                                            
                                            ?>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sa-entity-layout__main">
                        <!-- <div class="sa-card-area"><textarea class="sa-card-area__area" rows="2" placeholder="Notes about customer"></textarea>
                            <div class="sa-card-area__card"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg></div>
                        </div> -->
                        <div class="card ">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Hóa đơn</h2>
                                <div class="text-muted fs-exact-14 text-end"></div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table text-nowrap">
                                    <thead>
                                        <th>Mã hóa đơn</th>
                                        <th>Ngày đặt</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng tiền</th>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($hoa_don_tk as $hoa_don) :
                                            
                                            if (is_array($hoa_don)) {
                                                extract($hoa_don);
                                                
                                            }else{
                                                extract($hoa_don_tk);  
                                            }

                                        ?>
                                            <tr>
                                                <td><a href="index.php?act=app-order&id=<?= $id_hoa_don ?>">#<?= $id_hoa_don ?></a></td>
                                                <td><?= $ngay_dat_hang ?></td>
                                                <td><?=get_trang_thai($trang_thai)?></td>
                                                <td></td>
                                                <td><?=$tong_tien?> VNĐ</td>
                                            </tr>
                                        <?php endforeach;

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="sa-divider"></div>
                            <div class="px-5 py-4 text-center"><a href="index.php?act=app-orders-list&id=<?=$id?>">Xem tất cả</a></div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Địa chỉ</h2>
                                <!-- <div class="text-muted fs-exact-14"><a href="#">New address</a></div> -->
                            </div>
                            <div class="sa-divider"></div>
                            <div class="px-5 py-3 my-2 d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="text-muted fs-exact-14 mt-1"><?= $dc ?></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sa-app__body / end -->