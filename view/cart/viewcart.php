
<main class="main-content">

<!--== Start Page Header Area Wrapper ==-->
<nav aria-label="breadcrumb" class="breadcrumb-style1">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>
</nav>
<!--== End Page Header Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="section-space">
    <div class="container">
        <div class="shopping-cart-form table-responsive">
            <form action="#" method="post">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tong=0;
                        $i=0;
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh=$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '                        <tr class="tbody-item">
                            <td class="product-remove">
                                <a class="remove" href="index.php?act=delcart&idcart='.$i.'">×</a>
                            </td>
                            <td class="product-thumbnail">
                                <div class="thumb">
                                    <a href="single-product.html">
                                        <img src="'.$hinh.'" width="68" height="84" alt="Image-HasTech">
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a class="title" href="single-product.html">'.$cart[1].'</a>
                            </td>
                            <td class="product-price">
                                <span class="price">$'.$cart[3].'</span>
                            </td>
                            <td class="product-quantity">
                                <div class="pro-qty">
                                    <input type="text" class="quantity" title="Quantity" value="'.$cart[4].'">
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="price">$'.$ttien.'</span>
                            </td>
                        </tr>';
                        $i+=1;
                        }
                        ?>

                        <tr class="tbody-item-actions">
                            <td colspan="6">
                                <button type="submit" class="btn-update-cart disabled" disabled>Update cart</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="coupon-wrap">
                    <h4 class="title">Coupon</h4>
                    <p class="desc">Enter your coupon code if you have one.</p>
                    <input type="text" class="form-control" placeholder="Coupon code">
                    <button type="button" class="btn-coupon">Apply coupon</button>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="cart-totals-wrap">
                    <h2 class="title">Cart totals</h2>
                    <table>
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span class="amount">$499.00</span>
                                </td>
                            </tr>
                            <tr class="shipping-totals">
                                <th>Shipping</th>
                                <td>
                                    <ul class="shipping-list">
                                        <li class="radio">
                                            <input type="radio" name="shipping" id="radio1" checked>
                                            <label for="radio1">Flat rate: <span>$3.00</span></label>
                                        </li>
                                        <li class="radio">
                                            <input type="radio" name="shipping" id="radio2">
                                            <label for="radio2">Free shipping</label>
                                        </li>
                                        <li class="radio">
                                            <input type="radio" name="shipping" id="radio3">
                                            <label for="radio3">Local pickup</label>
                                        </li>
                                    </ul>
                                    <p class="destination">Shipping to <strong>USA</strong>.</p>
                                    <a href="javascript:void(0)" class="btn-shipping-address">Change address</a>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <span class="amount">$504.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end">
                        <a href="index.php?act=bill" class="checkout-button">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->

</main>