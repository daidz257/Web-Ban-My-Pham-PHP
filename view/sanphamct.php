<?php
extract($onesp);
?>
<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Product Detail</li>
                        </ol>
                        <h2 class="page-header-title">Product Detail</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing Single Product</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Details Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row product-details">
                <div class="col-lg-6">
                    <div class="product-details-thumb">
                        <?php

                        $img = $img_path . $AnhDaiDien;
                        echo '<img src="' . $img . '" width="570" height="693" alt="Image">
                    ';
                        ?>
                        <span class="flag-new">new</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <h5 class="product-details-collection">Premioum collection</h5>
                        <?php
                        echo '<h3 class="product-details-title">' . $TenSP . '</h3>';
                        ?>
                        <div class="product-details-review mb-7">
                            <div class="product-review-icon">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <button type="button" class="product-review-show">150 reviews</button>
                        </div>
                        <p class="mb-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut veniam sequi amet consectetur.</p>
                        <div class="product-details-pro-qty">
                            <div class="pro-qty">
                                <input type="text" title="Quantity" value="01">
                            </div>
                        </div>
                        <div class="product-details-shipping-cost">
                            <input class="form-check-input" type="checkbox" value="" id="ShippingCost" checked>
                            <label class="form-check-label" for="ShippingCost">Shipping from USA, Shipping Fees $4.22</label>
                        </div>
                        <div class="product-details-action">
                            <?php
                            echo '<h4 class="price">$' . $GiaSP . '</h4>';
                            ?>

                            <div class="product-details-cart-wishlist">
                                <button type="button" class="btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: '<?=$MaChiTietSP?>'});
                                });
                            </script>
            <div class="row" id="binhluan"></div>
        </div>
    </section>
    <!--== End Product Details Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <div class="container">
        <!--== Start Product Category Item ==-->
        <a href="product.html" class="product-banner-item">
            <img src="view/assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
        </a>
        <!--== End Product Category Item ==-->
    </div>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Related Products</h2>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n10">
                <div class="col-12">
                    <div class="swiper related-product-slide-container">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                                extract($sp_cung_loai);
                                $linksp = "index.php?act=sanphamct&idsp=" . $MaChiTietSP;
                                $img = $img_path . $AnhDaiDien;
                                echo '                        <div class="swiper-slide mb-10">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="' . $linksp . '">
                                        <img src="' . $img . '" width="370" height="450" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new">new</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="reviews">150 reviews</div>
                                    </div>
                                    <h4 class="title"><a href="' . $linksp . '">' . $TenSP . '</a></h4>
                                    <div class="prices">
                                        <span class="price">$210.00</span>
                                        <span class="price-old">300.00</span>
                                    </div>
                                    <div class="product-action">
                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <span>Add to cart</span>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

</main>