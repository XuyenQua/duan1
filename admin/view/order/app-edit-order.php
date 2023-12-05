<?php
extract($hoa_don);
?>
<form action="index.php?act=app-update-order" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_hoa_don" value=<?= $id ?>>
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
                                    <li class="breadcrumb-item"><a href="app-products-list.html">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thêm mới sản phẩm</li>
                                </ol>
                            </nav>
                            <h1 class="h3 m-0">Sửa sản phẩm</h1>
                        </div>
                        <div class="col-auto d-flex"><a href="index.php?act=app-orders-list"
                                class="btn btn-secondary me-3">Danh sách hóa đơn</a><input type="submit"
                                class="btn btn-primary" name="capnhat" value="Lưu"></div>
                    </div>
                </div>
                <div class="sa-entity-layout"
                    data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                    <div class="sa-entity-layout__body">
                        <div class="sa-entity-layout__main">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Thông tin cơ bản</h2>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/name" class="form-label">Tên khách hàng</label>
                                        <input type="text" name="ten_khach_hang" class="form-control"
                                            value="<?= $ten_khach_hang ?>" id="form-product/name" required />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/so_dien_thoai" class="form-label">Số điện thoại</label>
                                        <input type="text" name="so_dien_thoai" class="form-control"
                                            value="<?= $so_dien_thoai ?>" id="form-product/so_dien_thoai" required />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/email" class="form-label">email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $email ?>"
                                            id="form-product/email" required />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/dia_chi" class="form-label">Địa chỉ</label>
                                        <input type="text" name="dia_chi" class="form-control" value="<?= $dia_chi ?>"
                                            id="form-product/dia_chi" required />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/pttt" class="form-label">Phương thức thanh toán</label>
                                        <input type="text" class="form-control" value="<?= get_ten_pttt($pttt) ?>"
                                            id="form-product/pttt" readonly />
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/description" class="form-label">Ghi chú</label>
                                        <textarea id="form-product/description" name="ghi_chu" class="form-control"
                                            rows="8"><?= $ghi_chu ?></textarea>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Giá</h2>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col">
                                            <label for="form-product/price" class="form-label">Giá</label>
                                            <input type="number" class="form-control" name="gia_sp" value="" id="form-product/price" required />
                                        </div>
                                        <div class="col"><label for="form-product/old-price" class="form-label">Giá cũ</label>
                                            <input type="number" class="form-control" name="gia_cu_sp" value="" id="form-product/old-price" />
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-n2"><a href="#">Schedule discount</a></div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Kho</h2>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-product/sku" class="form-label">Mã sản phẩm</label>
                                        <input type="text" class="form-control" name="ma_sp" value="" id="form-product/sku" />
                                    </div>
                                    <div class="mb-4 pt-2"><label class="form-check">
                                    <input type="checkbox" class="form-check-input" />
                                    <span class="form-check-label">Enable stockmanagement</span>
                                        </label>
                                </div>
                                    <div>
                                        <label for="form-product/quantity" class="form-label">Số lượng</label>
                                        <input type="number" name="so_luong" value="" class="form-control" id="form-product/quantity" />
                                    </div>
                                </div>
                            </div> -->
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Sản phẩm</h2>
                                    </div>
                                </div>
                                <div class="mt-n5">
                                    <div class="sa-divider"></div>
                                    <div class="table-responsive">
                                        <table class="sa-table">
                                            <thead>
                                                <tr>
                                                    <th class="w-min ">Ảnh sản phẩm</th>
                                                    <th class="w-min">tên sản phẩm</th>
                                                    <th class="w-min">Giá sẩn phẩm</th>
                                                    <th class="w-min">Số Lượng</th>
                                                    <th class="w-min"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                foreach ($ds_sp_hoa_don as $san_pham):
                                                    extract($san_pham);
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                                <img src="<?= '../' . $anh_sp ?>" width="40" height="40"
                                                                    alt="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?= $ten_sp ?>
                                                        </td>
                                                        <td>
                                                            <?= $gia_sp ?> VNĐ
                                                        </td>
                                                        <td>
                                                            <input type="hidden" name="id_san_pham_hoa_don[]"
                                                                value="<?= $id ?>">
                                                            <input type="hidden" name="gia_sp[]" value="<?= $gia_sp ?>">
                                                            <input type="number" name="so_luong[]" min="1"
                                                                value="<?= $so_luong ?>"
                                                                class="form-control form-control-sm" />
                                                        </td>

                                                        <!-- <td>
                                                            <a onclick="return confirm('bạn có muốn xóa hay không')" href="&id_sp_del">
                                                            <button class="btn btn-sa-muted btn-sm mx-n3" type="button" aria-label="Delete image" data-bs-toggle="tooltip" data-bs-placement="right" title="xóa sản phẩm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                                            <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
                                                            </svg>
                                                            </button>
                                                            </a>
                                                        </td> -->
                                                    </tr>
                                                    <?php
                                                endforeach;
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="sa-divider"></div>
                                    <!-- <div class="px-5 py-4 my-2"><a href="#">Upload new image</a></div> -->
                                </div>
                            </div>
                            <!-- <div class="card mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                    <div class="mt-3 text-muted">Provide information that will help improve the snippet
                                        and bring your product to the top of search engines.</div>
                                </div>
                                <div class="mb-4"><label for="form-product/seo-title" class="form-label">Page
                                        title</label><input type="text" class="form-control" id="form-product/seo-title" /></div>
                                <div><label for="form-product/seo-description" class="form-label">Meta
                                        description</label><textarea id="form-product/seo-description" class="form-control" rows="2"></textarea></div>
                            </div>
                        </div> -->
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <!-- <div class="card w-100">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Visibility</h2>
                                </div>
                                <div class="mb-4"><label class="form-check"><input type="radio" class="form-check-input" name="status" /><span class="form-check-label">Published</span></label><label class="form-check"><input type="radio" class="form-check-input" name="status" checked="" /><span class="form-check-label">Scheduled</span></label><label class="form-check mb-0"><input type="radio" class="form-check-input" name="status" /><span class="form-check-label">Hidden</span></label></div>
                                <div><label for="form-product/seo-title" class="form-label">Publish date</label><input type="text" class="form-control datepicker-here" id="form-product/publish-date" data-auto-close="true" data-language="en" /></div>
                            </div>
                        </div> -->
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Trạng thái</h2>
                                    </div>
                                    <select class="sa-select2 form-select" name="trang_thai"><!-- multiple="" -->
                                        <?php
                                        foreach ($ds_trang_thai as $ten_trang_thai) {
                                            extract($ten_trang_thai);
                                            if ($id == $trang_thai) {
                                                $sl = 'selected';
                                            } else {
                                                $sl = '';
                                            }
                                            echo '<option value="' . $id . '" ' . $sl . '>' . $ten_tt . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <!-- <div class="mt-4 mb-n2">
                                        <a href="index.php?act=app-add-category">Thêm mới danh mục</a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="card w-100 mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Tags</h2>
                                </div><select class="sa-select2 form-select" data-tags="true" multiple="">
                                    <option selected="">Universe</option>
                                    <option selected="">Sputnik</option>
                                    <option selected="">Steel</option>
                                    <option selected="">Rocket</option>
                                </select>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sa-app__body / end -->
</form>