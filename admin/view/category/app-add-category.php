<form action="index.php?act=app-add-category" method="post" enctype="multipart/form-data">
    <!-- sa-app__body -->
    <div id="top" class="sa-app__body">
        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ul class="breadcrumb breadcrumb-sa-simple">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="app-categories-list.html">Categories</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                                </ul>
                            </nav>
                            <h1 class="h3 m-0">Thêm mới danh mục</h1>
                        </div>
                        <div class="col-auto d-flex"><a href="index.php?act=app-categories-list" class="btn btn-secondary me-3">Danh sách danh mục</a><input type="submit" class="btn btn-primary" name="themmoi" value="Lưu"></div>
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
                                    <div class="mb-4"><label for="form-category/name"  class="form-label">Tên</label>
                                        <input type="text" class="form-control" name="ten_dm" id="form-category/name" required />
                                    </div>
                                    <div class="mb-4"><label for="form-category/mota" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" name="mo_ta_dm" id="form-category/mota" required />
                                    </div>
                                    <div class="mb-4"><label for="form-category/image" class="form-label">Tải ảnh lên</label>
                                        <div class="file-upload-wrapper">
                                            <input type="file" id="form-category/image" name="image" class="file-upload" required />
                                        </div>
                                    </div>
                                    <div>
                                        <?php if(isset($tb)&&($tb!='')){
                                            echo $tb;
                                        }?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                        <div class="mt-3 text-muted">Provide information that will help improve the snippet and bring your category to the top of search engines.</div>
                                    </div>
                                    <div class="mb-4"><label for="form-category/seo-title" class="form-label">Page title</label><input type="text" class="form-control" id="form-category/seo-title" /></div>
                                    <div><label for="form-category/seo-description" class="form-label">Meta description</label><textarea id="form-category/seo-description" class="form-control" rows="2"></textarea></div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card w-100">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Visibility</h2>
                                    </div>
                                    <div class="mb-4"><label class="form-check"><input type="radio" class="form-check-input" name="status" /><span class="form-check-label">Published</span></label><label class="form-check"><input type="radio" class="form-check-input" name="status" checked="" /><span class="form-check-label">Scheduled</span></label><label class="form-check mb-0"><input type="radio" class="form-check-input" name="status" /><span class="form-check-label">Hidden</span></label></div>
                                    <div><label for="form-category/seo-title" class="form-label">Publish date</label><input type="text" class="form-control datepicker-here" id="form-category/publish-date" data-auto-close="true" data-language="en" />
                                        <div class="form-text">The category will not be visible until the specified date.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Parent category</h2>
                                    </div><select class="sa-select2 form-select">
                                        <option>[None]</option>
                                        <option selected="">Tools</option>
                                        <option>Screwdrivers</option>
                                        <option>Chainsaws</option>
                                        <option>Hand tools</option>
                                        <option>Machine tools</option>
                                        <option>Power machinery</option>
                                        <option>Measurements</option>
                                        <option>Power tools</option>
                                    </select>
                                    <div class="form-text">Select a category that will be the parent of the current one.</div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Image</h2>
                                    </div>
                                    <div class="border p-4 d-flex justify-content-center">
                                        <div class="max-w-20x"><img src="view/images/products/product-7-320x320.jpg" class="w-100 h-auto" width="320" height="320" alt="" /></div>
                                    </div>
                                    <div class="mt-4 mb-n2"><a href="#" class="me-3 pe-2">Replace image</a><a href="#" class="text-danger me-3 pe-2">Remove image</a></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- sa-app__body / end -->

</form>