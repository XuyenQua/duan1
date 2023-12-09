<style>
    .slider {
        width: 100%;
        height: 200px;
        position: relative;
        margin: auto;
        overflow-x: scroll;
        overflow-y: hidden;
    }

    .slider::-webkit-scrollbar {
        display: none;
    }

    .slider .slide {
        display: flex;
        position: absolute;
        left: 0;
        transition: 0.3s left ease-in-out;
    }

    .slider .item {
        margin-right: 10px;
    }

    .slider .item:last-child {
        margin-right: 0;
    }

    .ctrl {
        text-align: center;
        margin-top: 5px;
    }

    .ctrl-btn {
        padding: 20px 20px;
        min-width: 50px;
        background: #fff;
        border: none;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        outline: none;

        position: absolute;
        top: 50%;
        margin-top: -27.5px;
    }

    .ctrl-btn.pro-prev {
        left: 0;
    }

    .ctrl-btn.pro-next {
        right: 0;
    }
</style>
<?php
extract($san_pham);
$id_sp = $id;

?>
<input type="hidden" name="id_sp" value=<?= $id ?>>
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
                        <h1 class="h3 m-0">Sản phẩm :<?= $ten_sp ?></h1>
                    </div>
                    <div class="col-auto d-flex"><a href="index.php?act=app-products-list" class="btn btn-secondary me-3">Danh sách sản phẩm</a><a href="index.php?act=app-edit-product&id=<?= $id ?>" class="btn btn-primary">Sửa</a> </div>
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
                                    <input type="text" name="ten_sp" class="form-control" value="<?= $ten_sp ?>" id="form-product/name" readonly />
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/ten_dm" class="form-label">Danh mục sản phẩm</label>
                                    <?php
                                    foreach ($ds_dm as $dm) {
                                        extract($dm);
                                        if ($id == $id_dm) {
                                            echo '<input type="text" name="ten_dm" class="form-control" value="' . $ten_dm . '" id="form-product/ten_dm" readonly />';
                                        }
                                    }
                                    ?>

                                </div>
                                <div class="mb-4">
                                    <label for="form-product/hang" class="form-label">Hãng</label>
                                    <input type="text" name="thuong_hieu_sp" class="form-control" value="<?= $thuong_hieu_sp ?>" id="form-product/hang" readonly />
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/description" class="form-label">Mô tả sản phẩm</label>
                                    <textarea id="form-product/description" name="mo_ta_sp" class="form-control" readonly rows="8"><?= $mo_ta_sp ?></textarea>
                                </div>
                                <div>
                                    <label for="form-product/short-description" class="form-label">Mô tả ngắn</label>
                                    <textarea id="form-product/short-description" name="mo_ta_ngan_sp" class="form-control" readonly rows="2"><?= $mo_ta_ngan_sp ?></textarea>
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
                                        <input type="number" class="form-control" name="gia_sp" value="<?= $gia_sp ?>" id="form-product/price" readonly />
                                    </div>
                                    <div class="col"><label for="form-product/old-price" class="form-label">Giá cũ</label>
                                        <input type="number" class="form-control" name="gia_cu_sp" value="<?= $gia_cu_sp ?>" readonly id="form-product/old-price" />
                                    </div>
                                </div>
                                <!-- <div class="mt-4 mb-n2"><a href="#">Schedule discount</a></div> -->
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Kho</h2>
                                </div>
                                <div class="mb-4">
                                    <label for="form-product/sku" class="form-label">Mã sản phẩm</label>
                                    <input type="text" class="form-control" name="ma_sp" value="<?= $ma_sp ?>" readonly id="form-product/sku" />
                                </div>
                                <!-- <div class="mb-4 pt-2"><label class="form-check">
                                    <input type="checkbox" class="form-check-input" />
                                    <span class="form-check-label">Enable stockmanagement</span>
                                        </label>
                                </div> -->
                                <div>
                                    <label for="form-product/quantity" class="form-label">Số lượng</label>
                                    <input type="number" name="so_luong" value="<?= $so_luong ?>" class="form-control" readonly id="form-product/quantity" />
                                </div>
                                <div>
                                    <label for="form-product/quantity" class="form-label">Đã bán</label>
                                    <input type="number" name="so_luong" value="<?= $da_ban ?>" class="form-control" readonly id="form-product/quantity" />
                                </div>
                                <div>
                                    <label for="form-product/quantity" class="form-label">Lượt xem</label>
                                    <input type="number" name="so_luong" value="<?= $luot_xem ?>" class="form-control" readonly id="form-product/quantity" />
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
                                <!-- <div class="sa-divider"></div>
                                <div class="table-responsive">
                                    <table class="sa-table">
                                        <thead>
                                            <tr>
                                                <th class="w-min-10x ">Image</th>
                                                <th class="min-w">Alt text</th>
                                                <th class="w-min">Order</th>
                                                <th class="w-min"></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div class="p-4">
                                                    <label for="formFile-1" class="form-label">Tải tệp lên</label>
                                                    <input type="file" class="form-control" name="images[]" id="formFile-1" multiple />
                                            </div>
                                            

                                        </tbody>
                                    </table>
                                </div>
                                <div class="sa-divider"></div>
                                <div class="px-5 py-4 my-2"><a href="#">Upload new image</a></div> -->

                                <div class="slider" id="slider">
                                    <div class="slide" id="slide">
                                        <?php foreach ($ds_anh_sp as $anh_sp) {
                                            extract($anh_sp);
                                            $link_anh_sp = $img_path_admin.$anh_sp;
                                        ?>
                                        <img class="item" width="200" height="200" src="<?=$link_anh_sp?>">
                                        <?php } ?>
                                    </div>
                                    <button class="ctrl-btn pro-prev"><</button>
                                    <button class="ctrl-btn pro-next">></button>
                                </div>

                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="mb-3 p-5">
                                <h2 class="mb-0 fs-exact-18">Bình luận</h2>
                            </div>
                            <div class="p-4"><input type="text" placeholder="Start typing to search for categories" class="form-control form-control--search mx-auto" id="table-search" /></div>
                            <div class="sa-divider"></div>
                            <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]" data-sa-search-input="#table-search">
                                <thead>
                                    <tr>
                                        <th class="w-min" data-orderable="false"><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                                        <th class="min-w-5x">Tài khoản</th>
                                        <th>Nội dung bình luận</th>
                                        <th>Ngày bình luận</th>
                                        <th class="w-min" data-orderable="false"></th>
                                    </tr>
                                </thead>
                                <img src="" alt="">
                                <tbody>
                                    <?php
                                    foreach ($ds_binh_luan as $bl) :
                                        extract($bl);
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></td>
                                            <td><?= $ten_dang_nhap ?>'</td>
                                            <td><?= $noi_dung ?></td>
                                            <td><?= $ngay_binh_luan ?></td>

                                            <td>
                                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button" id="category-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                                            <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                                                        </svg></button>
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="category-context-menu-0">
                                                        <li><a class="dropdown-item text-danger" onclick="xoaKhong('index.php?act=app-product&id=<?= $id_sp ?>&idbl=<?= $id_bl ?>')" href="#">Xóa</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

                </div>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->
<script>
    "use strict";

    productScroll();

    function productScroll() {
        let slider = document.getElementById("slider");
        let next = document.getElementsByClassName("pro-next");
        let prev = document.getElementsByClassName("pro-prev");
        let slide = document.getElementById("slide");
        let item = document.getElementById("slide");

        for (let i = 0; i < next.length; i++) {
            //refer elements by class name

            let position = 0; //slider postion

            prev[i].addEventListener("click", function() {
                //click previos button
                if (position > 0) {
                    //avoid slide left beyond the first item
                    position -= 1;
                    translateX(position); //translate items
                }
            });

            next[i].addEventListener("click", function() {
                if (position >= 0 && position < hiddenItems()) {
                    //avoid slide right beyond the last item
                    position += 1;
                    translateX(position); //translate items
                }
            });
        }

        function hiddenItems() {
            //get hidden items
            let items = getCount(item, false);
            let visibleItems = slider.offsetWidth / 210;
            return items - Math.ceil(visibleItems);
        }
    }

    function translateX(position) {
        //translate items
        slide.style.left = position * -210 + "px";
    }

    function getCount(parent, getChildrensChildren) {
        //count no of items
        let relevantChildren = 0;
        let children = parent.childNodes.length;
        for (let i = 0; i < children; i++) {
            if (parent.childNodes[i].nodeType != 3) {
                if (getChildrensChildren)
                    relevantChildren += getCount(parent.childNodes[i], true);
                relevantChildren++;
            }
        }
        return relevantChildren;
    }
</script>