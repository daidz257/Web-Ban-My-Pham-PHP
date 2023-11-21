<main class="main-content">

<!--== Start Page Header Area Wrapper ==-->
<nav aria-label="breadcrumb" class="breadcrumb-style1">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div>
</nav>
<!--== End Page Header Area Wrapper ==-->

<!--== Start Shopping Checkout Area Wrapper ==-->
<section class="shopping-checkout-wrap section-space">
    <div class="container">
        <div class="checkout-page-coupon-wrap">
            <!--== Start Checkout Coupon Accordion ==-->
            <div class="coupon-accordion" id="CouponAccordion">
                <div class="card">
                    <h3>
                        <i class="fa fa-info-circle"></i>
                        Have a Coupon?
                        <a href="#/" data-bs-toggle="collapse" data-bs-target="#couponaccordion">Click here to enter your code</a>
                    </h3>
                    <div id="couponaccordion" class="collapse" data-bs-parent="#CouponAccordion">
                        <div class="card-body">
                            <div class="apply-coupon-wrap">
                                <p>If you have a coupon code, please apply it below.</p>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Coupon code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn-coupon">Apply coupon</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Checkout Coupon Accordion ==-->
        </div>
        <div class="row">
        <form action="index.php?act=billconfirm" method="post">
            <div class="col-lg-6">
                <!--== Start Billing Accordion ==-->
                <div class="checkout-billing-details-wrap">
                    <h2 class="title">Billing details</h2>
                    <div class="billing-form-wrap">

                            <div class="row">
                                <?php
                                if(isset($_SESSION['user'])){
                                    $name=$_SESSION['user']['TenKhachHang'];
                                    $address=$_SESSION['user']['DiaChi'];
                                    $email=$_SESSION['user']['Email'];
                                    $tel=$_SESSION['user']['SoDienThoai'];
                                }else{
                                    $name="";
                                    $address="";
                                    $email="";
                                    $tel="";
                                }
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_name">Name <abbr class="required" title="required">*</abbr></label>
                                        <input id="f_name" value="<?=$name?>" type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street-address">Address <abbr class="required" title="required">*</abbr></label>
                                        <input id="street-address" value="<?=$address?>" name="address" type="text" class="form-control" placeholder="House number and street name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone (optional)</label>
                                        <input id="phone" value="<?=$tel?>" type="text" class="form-control" name="tel">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email address <abbr class="required" title="required">*</abbr></label>
                                        <input id="email" value="<?=$email?>" type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label for="order-notes">Order notes (optional)</label>
                                        <textarea id="order-notes" name="note" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!--== End Billing Accordion ==-->
            </div>
            <div class="col-lg-6">
                <!--== Start Order Details Accordion ==-->
                <div class="checkout-order-details-wrap">
                    <div class="order-details-table-wrap table-responsive">
                        <h2 class="title mb-25">Your order</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            

                            <tbody class="table-body">
                            <?php
                        $tong=0;
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh=$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '                                <tr class="cart-item">
                            <td class="product-name">'.$cart[1].' <span class="product-quantity">× '.$cart[4].'</span></td>
                            <td class="product-total">£'.$ttien.'đ</td>
                        </tr>';
                        }
                        ?>
                            </tbody>
                            <tfoot class="table-foot">
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><?=$tong?>đ</td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td>Flat rate: 30000đ</td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total </th>
                                    <td><?=$tong+30000?>đ</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="shop-payment-method">
                            <div id="PaymentMethodAccordion">
                                <div class="card">
                                    <div class="card-header" id="check_payments">
                                        <h5 data-bs-toggle="collapse" data-bs-target="#itemOne" aria-controls="itemOne" aria-expanded="true"><input type="radio" value="1" name="pttt" checked> Trả tiền khi nhận hàng</h5>
                                    </div>
                                    <div id="itemOne" class="collapse show" aria-labelledby="check_payments" data-bs-parent="#PaymentMethodAccordion">
                                        <div class="card-body">
                                            <p>Trả tiền mặt khi nhận hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="check_payments3">
                                        <h5 data-bs-toggle="collapse" data-bs-target="#itemThree" aria-controls="itemTwo" aria-expanded="false"><input type="radio" value="2" name="pttt"> Chuyển khoản ngân hàng</h5>
                                    </div>
                                    <div id="itemThree" class="collapse" aria-labelledby="check_payments3" data-bs-parent="#PaymentMethodAccordion">
                                        <div class="card-body">
                                            <p>Chuyển khoản trực tiếp qua tài khoản ngân hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="check_payments4">
                                        <h5 data-bs-toggle="collapse" data-bs-target="#itemFour" aria-controls="itemTwo" aria-expanded="false"><input type="radio" value="3" name="pttt"> Thanh toán online</h5>
                                    </div>
                                    <div id="itemFour" class="collapse" aria-labelledby="check_payments4" data-bs-parent="#PaymentMethodAccordion">
                                        <div class="card-body">
                                            <p>Thanh toán online qua ví PayPal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="p-text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#/">privacy policy.</a></p>
                            <div class="agree-policy">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="privacy" class="custom-control-input visually-hidden">
                                    <label for="privacy" class="custom-control-label">I have read and agree to the website terms and conditions <span class="required">*</span></label>
                                </div>
                            </div>
                            <button value="Đồng ý đặt hàng" name="dongydathang" type="submit" href="account.html" class="btn-place-order">Place order</button>
                        </div>
                    </div>
                </div>
                <!--== End Order Details Accordion ==-->
            </div></form>
        </div>
    </div>
</section>
<!--== End Shopping Checkout Area Wrapper ==-->

</main>