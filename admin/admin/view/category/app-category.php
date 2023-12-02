<?php extract($dm) ?>
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
                        <h1 class="h3 m-0">Danh mục : <?=$ten_dm?></h1>
                    </div>
                    <div class="col-auto d-flex"><a href="index.php?act=app-categories-list" class="btn btn-secondary me-3">Danh sách danh mục</a> <a href="index.php?act=app-edit-category&id=<?=$id_dm?>" class="btn btn-primary">Sửa</a></div>
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
                                <div class="mb-4"><label for="form-category/name" class="form-label">Tên</label>
                                    <input type="text" class="form-control" name="ten_dm" value="<?=$ten_dm?>" id="form-category/name" readonly/>
                                </div>
                                <div class="mb-4"><label for="form-category/mota" class="form-label">Mô tả</label>
                                    <input type="text" class="form-control" name="mo_ta_dm" value="<?=$mo_ta_dm?>"  id="form-category/mota" readonly />
                                </div>
                                <div class="mb-4">
                                    <label for="form-category/image" class="form-label">ảnh danh mục</label><br>
                                    <img src="<?=$img_path_admin.$anh_dm?>" width="100" height="100" alt="">
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

            <div class="sa-layout__content mt-3">
                <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for categories" class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                    <table class="sa-datatables-init" data-order='[[ 1, "asc" ]]' data-sa-search-input="#table-search">
                        <thead>
                            <tr>
                                <th class="w-min" data-orderable="false">
                                    <input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." />
                                </th>
                                <th class="min-w-20x">Sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th class="w-min" data-orderable="false"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($ds_san_pham_dm as $san_pham) {
                                    extract($san_pham);
                                    $anh = get_san_pham_anh_one($id);
                                    extract($anh);

                                    //var_dump($anh);
                                    $hinh = $img_path_admin .$anh_sp;
                                    echo '
                                    <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." />
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="index.php?act=app-product&id='.$id.'" class="me-4">
                                                <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                    <img src="'.$hinh.'" width="40" height="40" alt="" />
                                                </div>
                                            </a>
                                            <div>
                                                <a href="index.php?act=app-product&id='.$id.'" class="text-reset">'.$ten_sp.'</a>
                                                <div class="sa-meta mt-0">
                                                    <ul class="sa-meta__list">
                                                        <li class="sa-meta__item">
                                                            ID:
                                                            <span title="Click to copy product ID" class="st-copy">'.$id.'</span>
                                                        </li>
                                                        <li class="sa-meta__item">
                                                            SKU:
                                                            <span title="Click to copy product SKU" class="st-copy">'.$ma_sp.'</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="index.php?act=app-category&iddm='.$id_dm.'" class="text-reset">'.$ten_dm.'</a>
                                    </td>
                                    <td>
                                        <div>'.$so_luong.'</div>
                                    </td>
                                    <td>
                                        <div class="sa-price">
                                            <span class="sa-price__integer">'.$gia_sp.'</span><span class="sa-price__symbol"> VND</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sa-muted btn-sm" type="button" id="product-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                                    <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="product-context-menu-0">
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=app-edit-product&id='.$id.'">Sửa</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Duplicate</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Add tag</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Remove tag</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-danger" href="index.php?act=app-delete-product&id='.$id.'">Xóa</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                    ';
                                }
                            
                            ?>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div><!-- sa-app__body / end -->