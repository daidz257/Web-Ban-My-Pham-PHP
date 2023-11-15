<div class="col-xl-3">
                            <div class="product-sidebar-widget">
                                <div class="product-widget-search">
                                    <form action="index.php?act=sanpham" method="post">
                                        <input type="search" placeholder="Search Here" name="kyw">
                                        <button type="submit" name = "timkiem"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="product-widget">
                                    <h4 class="product-widget-title">Price Filter</h4>
                                    <div class="product-widget-range-slider">
                                        <div class="slider-range" id="slider-range"></div>
                                        <div class="slider-labels">
                                            <span id="slider-range-value1"></span>
                                            <span>—</span>
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <h4 class="product-widget-title">Categoris</h4>
                                    <ul class="product-widget-category">
                                        <?php
                                        foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=".$MaLoai;
                                            echo '
                                            <li><a href="'.$linkdm.'">'.$Loai.' <span>(5)</span></a></li>
                                            ';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="product-widget mb-0">
                                    <h4 class="product-widget-title">Popular Tags</h4>
                                    <ul class="product-widget-tags">
                                        <li><a href="blog.html">Beauty</a></li>
                                        <li><a href="blog.html">MakeupArtist</a></li>
                                        <li><a href="blog.html">Makeup</a></li>
                                        <li><a href="blog.html">Hair</a></li>
                                        <li><a href="blog.html">Nails</a></li>
                                        <li><a href="blog.html">Hairstyle</a></li>
                                        <li><a href="blog.html">Skincare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>