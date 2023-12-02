<?php
extract($san_pham);
?>
<!-- Single Product Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">

                <!-- Product Details Image Start -->
                <div class="product-details-img">

                    <!-- Single Product Image Start -->
                    <div class="single-product-img swiper-container gallery-top">
                        <div class="swiper-wrapper popup-gallery">
                            <?php
                            foreach ($ds_anh_sp as $anh_sp) :
                                extract($anh_sp);
                                $link = $img_path . $anh_sp;
                            ?>
                                <a class="swiper-slide w-100" href="<?= $link ?>">
                                    <img class="w-100" height="470" src="<?= $link ?>" alt="Product">
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- Single Product Image End -->

                    <!-- Single Product Thumb Start -->
                    <div class="single-product-thumb swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($ds_anh_sp as $anh_sp) :
                                extract($anh_sp);
                                $link = $img_path . $anh_sp;
                            ?>
                                <div class="swiper-slide">
                                    <img src="<?= $link ?>" height="110" alt="Product">
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <!-- Next Previous Button Start -->
                        <div class="swiper-button-horizental-next  swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-button-horizental-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->

            </div>
            <div class="col-lg-7 col-custom">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">

                    <!-- Product Head Start -->
                    <div class="product-head mb-3">
                        <h2 class="product-title"><?= $ten_sp ?></h2>
                    </div>
                    <!-- Product Head End -->

                    <!-- Price Box Start -->
                    <div class="price-box mb-2">
                        <span class="regular-price"><?= $gia_sp ?> VNĐ</span>
                        <?php
                        if ($gia_cu_sp == "") {
                            echo "";
                        } else {
                            echo '<span class="old-price"><del> ' . $gia_cu_sp . ' VNĐ</del></span>';
                        }
                        ?>

                    </div>
                    <!-- Price Box End -->

                    <!-- Rating Start -->
                    <!-- <span class="ratings justify-content-start">
                                <span class="rating-wrap">
                                    <span class="star" style="width: 100%"></span>
                        </span>
                        <span class="rating-num">(4)</span>
                        </span> -->
                    <!-- Rating End -->

                    <!-- SKU Start -->
                    <div class="sku mb-3">
                        <span>SKU: <?= $ma_sp ?></span>
                    </div>
                    <!-- SKU End -->

                    <!-- Description Start -->
                    <p class="desc-content mb-5"><?= $mo_ta_ngan_sp ?></p>
                    <!-- Description End -->

                    <!-- Product Meta Start -->
                    <div class="product-meta mb-3">
                        <!-- Product Size Start -->
                        <!-- <div class="product-size">
                                <span>Size :</span>
                                <a href="#"><strong>S</strong></a>
                                <a href="#"><strong>M</strong></a>
                                <a href="#"><strong>L</strong></a>
                                <a href="#"><strong>XL</strong></a>
                            </div> -->
                        <!-- Product Size End -->
                    </div>
                    <!-- Product Meta End -->

                    <!-- Product Color Variation Start -->
                    <!-- <div class="product-color-variation mb-3">
                            <button type="button" class="btn bg-danger"></button>
                            <button type="button" class="btn bg-primary"></button>
                            <button type="button" class="btn bg-dark"></button>
                            <button type="button" class="btn bg-success"></button>
                        </div> -->
                    <!-- Product Color Variation End -->

                    <!-- Product Meta Start -->
                    <div class="product-meta mb-5">
                        <!-- Product Metarial Start -->
                        <!-- <div class="product-metarial">
                                <span>Metarial :</span>
                                <a href="#"><strong>Metal</strong></a>
                                <a href="#"><strong>Resin</strong></a>
                                <a href="#"><strong>Lather</strong></a>
                                <a href="#"><strong>Polymer</strong></a>
                            </div> -->
                        <!-- Product Metarial End -->
                    </div>
                    <!-- Product Meta End -->
                    <form action="index.php?act=add-cart" method="post">
                    <!-- Quantity Start -->
                    <div class="quantity mb-5">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" name="so_luong" value="1" readonly type="text">
                            <div class="dec qtybutton"></div>
                            <div class="inc qtybutton"></div>
                        </div>
                    </div>
                    <!-- Quantity End -->

                    <!-- Cart & Wishlist Button Start -->
                    <div class="cart-wishlist-btn mb-4">
                        <div class="add-to_cart">
                            
                                <?php
                                $anh_sp = get_san_pham_anh_one($id);
                                $link_anh_sp = $img_path . $anh_sp['anh_sp']
                                ?>
                                <input type="hidden" name="idsp" value="<?= $id ?>">
                                <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                <input type="hidden" name="gia_sp" value="<?= $gia_sp ?>">
                                
                                <input type="hidden" name="anh_sp" value="<?= $link_anh_sp ?>">
                                <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                <input type="submit" class="btn btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                            
                        </div>
                        <div class="add-to-wishlist">
                            <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Thêm vào yêu thích</a>
                        </div>
                    </div>
                    </form>
                    <!-- Cart & Wishlist Button End -->

                    <!-- Social Shear Start -->
                    <div class="social-share">
                        <span>Share :</span>
                        <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                        <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                    </div>
                    <!-- Social Shear End -->

                    <!-- Product Delivery Policy Start -->
                    <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                        <li> <i class="fa fa-check-square"></i> <span>Chính sách bảo mật</span></li>
                        <li><i class="fa fa-truck"></i><span>Chính sách giao hàng</span></li>
                        <li><i class="fa fa-refresh"></i><span>Chính sách hoàn trả</span></li>
                    </ul>
                    <!-- Product Delivery Policy End -->

                </div>
                <!-- Product Summery End -->

            </div>
        </div>

        <div class="row section-margin">
            <!-- Single Product Tab Start -->
            <div class="col-lg-12 col-custom single-product-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Mô tả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Bình luận ( <?=count($ds_binh_luan)?> )</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Chính sách vận chuyển</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">bảng kích cỡ</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content border p-3">
                            <!-- <p class="mb-3">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p> -->
                            <!-- <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p> -->
                            <p><?= $mo_ta_sp ?></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content  border p-3">
                            <!-- Start Single Review -->
                            <div class="single-review d-flex mb-4">

                                <!-- Review Thumb Start -->
                                <!-- <div class="review_thumb">
                                    <img alt="review images" src="view/images/review/1.jpg">
                                </div> -->
                                <!-- Review Thumb End -->
                            <?php
                                foreach ($ds_binh_luan as $binh_luan ) :
                                    if (count($binh_luan)>0) {
                                        extract($binh_luan);
                                    }
                            ?>
                                <!-- Review Details Start -->
                                <div class="review_details">
                                    <div class="review_info mb-2">

                                        <!-- Rating Start -->
                                        <!-- <span class="ratings justify-content-start mb-3">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                        </span> -->
                                        <!-- Rating End -->

                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex">
                                            <h5 class="title"><?=$ten_dang_nhap?> - </h5><span> <?=$ngay_binh_luan?></span>
                                        </div>
                                        <!-- Review Title & Date End -->

                                    </div>
                                    <p><?=$noi_dung?></p>
                                </div>
                                <!-- Review Details End -->
                            <?php endforeach; ?>
                            </div>
                            <!-- End Single Review -->

                            <!-- Rating Wrap Start -->
                            <div class="rating_wrap">
                                <h5 class="rating-title mb-2">Thêm bình luận </h5>
                                <!-- <p class="mb-2">Your email address will not be published. Required fields are marked *</p>
                                <h6 class="rating-sub-title mb-2">Your Rating</h6> -->

                                <!-- Rating Start -->
                                <!-- <span class="ratings justify-content-start mb-3">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(2)</span>
                                </span> -->
                                <!-- Rating End -->

                            </div>
                            <!-- Rating Wrap End -->

                            <!-- Comments ans Replay Start -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 col-custom">
                                        <?php if(isset($_SESSION['e_user'])&&($_SESSION['e_user']!="")){?>
                                        <!-- Comment form Start -->
                                        <form action="index.php?act=single-product&id=<?=$id?>" class="comment-form-area" method="post">
                                            <div class="row comment-input">

                                                <!-- Input Name Start -->
                                                <!-- <div class="col-md-6 col-custom comment-form-author mb-3">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="Name">
                                                </div> -->
                                                <!-- Input Name End -->

                                                <!-- Input Email Start -->
                                                <!-- <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email">
                                                </div> -->
                                                <!-- Input Email End -->

                                            </div>
                                            <!-- Comment Texarea Start -->
                                            <div class="comment-form-comment mb-3">
                                                <label>Nội dung</label>
                                                <textarea class="comment-notes" name="noi_dung"  placeholder="Nhập nội dung " required="required"></textarea>
                                            </div>
                                            <!-- Comment Texarea End -->

                                            <!-- Comment Submit Button Start -->
                                            <div class="comment-form-submit">
                                                <input class="btn btn-dark btn-hover-primary" name="binh_luan" type="submit" value="Lưu">
                                                <!-- <button class="btn btn-dark btn-hover-primary">Lưu</button> -->
                                            </div>
                                            <!-- Comment Submit Button End -->

                                        </form>
                                        <!-- Comment form End -->
                                        <?php }else{?>
                                            <div>
                                                <p>Vui lòng <a href="index.php?act=login">đăng nhập</a> để bình luận</p>
                                            </div>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>
                            <!-- Comments ans Replay End -->

                        </div>
                        <!-- End Single Content -->
                    </div>
                    <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Shipping Policy Start -->
                        <div class="shipping-policy mb-n2">
                            <h4 class="title-3 mb-4">Chính sách vận chuyển của cửa hàng chúng tôi</h4>
                            <p class="desc-content mb-2">XĐQ SHOP miễn phí giao hàng trên toàn quốc với đơn hàng trị giá trên 700.000VND. Với các đơn hàng trị giá dưới 300.000VND, Shop sẽ hỗ trợ khách hàng phần lớn chi phí vận chuyển để đảm bảo sản phẩm đến tay khách hàng một cách nhanh nhất. XĐQ SHOP sử dụng các DỊCH VỤ VẬN CHUYỂN CHUYÊN NGHIỆP để để đảm bảo quyền lợi của khách hàng:</p>
                            <ul class="policy-list mb-2">
                                <li>Khu vực nội thành: TP Hà Nội, TPHCM (2-3 ngày).</li>
                                <li>Ngoại thành TP Hà Nội, TPHCM và các thành phố lớn (3-4 ngày).</a></li>
                                <li>Các khu vực khác (4-5 ngày).</li>
                                <li>Hỗ trợ 24/7.</li>
                                <li>Miễn phí với đơn hàng trên 700.000VND.</li>
                                <li>30.000VND với đơn hàng dưới 500.000VND.</li>
                            </ul>
                            <h2>Phương thức thanh toán</h2>
                            <p class="desc-content mb-2">Nhằm mang đến quý khách những trải nghiệm mua sắm trực tuyến tuyệt vời nhất tại XDQ SHOP. Chúng tôi đưa ra nhiều phương thức thanh toán để quý khách dễ dàng lựa chọn:</p>
                            <ul class="policy-list mb-2">
                                <li>Thanh toán trực tiếp (COD)</li>
                                <li>Chuyển khoản trực tiếp qua số tài khoản Shop</a></li>
                            </ul>
                            <p>- Tk TP BANK : 17327576789 - Chủ TK : Nguyễn Thế Thành Đô </p>
                            <p>- TK MB BANK : 0375325575 - Chủ TK : Trần Minh Quang</p>
                            <p>- TK TP BANK : 07236852601 - Chủ TK : Nguyễn Trung Xuyên</p>
                        </div>
                        <!-- Shipping Policy End -->
                        
                    </div>
                    <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                        <div class="size-tab table-responsive-lg">
                            <h4 class="title-3 mb-4">Size Chart</h4>
                            <table class="table border mb-0">
                                <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>

        <!-- Products Start -->
        <div class="row">

            <div class="col-12">
                <!-- Section Title Start -->
                <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Gợi ý sản phẩm</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col">
                <div class="product-carousel">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($ds_sp_cung_dm as $sp) :
                                extract($sp);
                            ?>
                                <!-- Product Start -->
                                <div class="swiper-slide product-wrapper">
                                    <!-- Single Product Start -->
                                    <div class="product product-border-left" data-aos="fade-up" data-aos-delay="300">
                                        <div class="thumb">
                                            <a href="index.php?act=single-product&id=<?= $id ?>" class="image">
                                                <?php $anh_sp = get_san_pham_anh($id); ?>

                                                <img class="first-image" src="<?= $img_path . $anh_sp[0]['anh_sp'] ?>" height="269" alt="Product" />
                                                <img class="second-image" src="<?= $img_path . $anh_sp[1]['anh_sp'] ?>" height="269" alt="Product" />
                                            </a>
                                            <div class="actions">
                                                <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                                <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="sub-title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $thuong_hieu_sp ?></a></h4>
                                            <h5 class="title"><a href="index.php?act=single-product&id=<?= $id ?>"><?= $ten_sp ?></a></h5>
                                            <!-- <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                        </span> -->
                                            <span class="price">
                                                <span class="new"><?= $gia_sp ?> VNĐ</span>
                                                <?php if ($gia_cu_sp == "") {
                                                    echo "";
                                                } else {
                                                    echo ' <span class="old">' . $gia_cu_sp . ' VNĐ</span>';
                                                } ?>

                                            </span>
                                            <form action="index.php?act=add-cart" method="post">
                                                <?php
                                                $anh_sp = get_san_pham_anh_one($id);
                                                $link_anh_sp = $img_path . $anh_sp['anh_sp']
                                                ?>
                                                <input type="hidden" name="idsp" value="<?= $id ?>">
                                                <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                                                <input type="hidden" name="gia_sp" value="<?= $gia_sp ?>">
                                                <input type="hidden" name="anh_sp" value="<?= $link_anh_sp ?>">
                                                <!-- <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button> -->
                                                <input type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary" name="them_vao_gio_hang" value="Thêm vào giỏ hàng">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->

                                </div>
                                <!-- Product End -->
                            <?php endforeach; ?>


                        </div>

                        <!-- Swiper Pagination Start -->
                        <div class="swiper-pagination d-md-none"></div>
                        <!-- Swiper Pagination End -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Products End -->

    </div>
</div>
<!-- Single Product Section End -->