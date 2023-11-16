<form action="index.php?act=app-add-product" method="post" enctype="multipart/form-data">
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
                                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Thêm mới sản phẩm</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Duplicate</a><input type="submit" class="btn btn-primary" value="Lưu"></div>
                </div>
            </div>
            <div class="sa-entity-layout" data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Thông tin cơ bản</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/name" class="form-label">Tên sản phẩm</label>
                                    <input type="text" name="ten_sp" class="form-control" id="form-product/name" required />
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/hang" class="form-label">Hãng</label>
                                    <input type="text" name="thuong_hieu_sp" class="form-control" id="form-product/hang" required />
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/description" class="form-label">Mô tả sản phẩm</label>
                                    <textarea id="form-product/description" name="mo_ta_sp" class="form-control" required rows="8"></textarea>
                                </div>
                                <div>
                                    <label for="form-product/short-description" class="form-label">Mô tả ngắn</label>
                                    <textarea id="form-product/short-description" name="mo_ta_ngan_sp" class="form-control" required rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Giá</h2>
                                </div>
                                <div class="row g-4">
                                    <div class="col">
                                        <label for="form-product/price" class="form-label">Giá</label>
                                        <input type="number" class="form-control" name="gia_sp" id="form-product/price" required />
                                    </div>
                                    <div class="col"><label for="form-product/old-price" class="form-label">Giá cũ</label>
                                        <input type="number" class="form-control" name="gia_cu_sp" id="form-product/old-price" />
                                    </div>
                                </div>
                                <!-- <div class="mt-4 mb-n2"><a href="#">Schedule discount</a></div> -->
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Inventory</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/sku" class="form-label">Mã sản phẩm</label>
                                    <input type="text" class="form-control" name="ma_sp" id="form-product/sku" />
                                </div>
                                <!-- <div class="mb-4 pt-2"><label class="form-check">
                                    <input type="checkbox" class="form-check-input" />
                                    <span class="form-check-label">Enable stockmanagement</span>
                                        </label>
                                </div> -->
                                <div>
                                    <label for="form-product/quantity" class="form-label">Số lượng</label>
                                    <input type="number" name="so_luong" class="form-control" id="form-product/quantity" />
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Ảnh</h2>
                                </div>
                            </div>
                            <div class="mt-n5">
                                <div class="sa-divider"></div>
                                <div class="table-responsive">
                                    <table class="sa-table">
                                        <thead>
                                            <!-- <tr>
                                                <th class="w-min">Image</th>
                                                <th class="min-w-10x">Alt text</th>
                                                <th class="w-min">Order</th>
                                                <th class="w-min"></th>
                                            </tr> -->
                                        </thead>
                                        <tbody>
                                            <div class="p-4">
                                                <label for="formFile-1" class="form-label">Tải tệp lên</label>
                                                <input type="file" class="form-control" name="images[]" id="formFile-1" multiple />
                                            </div>
                                            <!-- <tr>
                                                <td>
                                                    <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                        <img src="view/images/products/product-16-1-40x40.jpg" width="40" height="40" alt="" />
                                                    </div>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" /></td>
                                                <td><input type="number" class="form-control form-control-sm w-4x" value="0" /></td>
                                                <td><button class="btn btn-sa-muted btn-sm mx-n3" type="button" aria-label="Delete image" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete image"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                                                            <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z">
                                                            </path>
                                                        </svg></button></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="sa-divider"></div>
                                <div class="px-5 py-4 my-2"><a href="#">Upload new image</a></div>
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
                                    <h2 class="mb-0 fs-exact-18">Danh mục</h2>
                                </div>
                                <select class="sa-select2 form-select"><!-- multiple="" -->

                                    <?php
                                    foreach ($ds_dm as $dm) {
                                        extract($dm);
                                        echo '<option value="' . $id . '">' . $ten_dm . '</option>';
                                    }
                                    ?>
                                </select>
                                <div class="mt-4 mb-n2">
                                    <a href="index.php?act=app-add-category">Thêm mới danh mục</a>
                                </div>
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