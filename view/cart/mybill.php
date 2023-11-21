
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
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listcart as $cart){
                            extract($cart);
                            $img = $img_path.$cart['AnhDaiDien'];
                            echo '                        <tr class="tbody-item">
                            <td class="product-thumbnail">
                                <div class="thumb">
                                    <a href="single-product.html">
                                        <img src="'.$img.'" width="68" height="84" alt="Image-HasTech">
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a class="title" href="single-product.html">'.$cart['TenSP'].'</a>
                            </td>
                            <td class="product-price">
                                <span class="price">$'.$cart['DonGiaBan'].'</span>
                            </td>
                            <td class="product-quantity">
                                <div class="pro-qty">
                                    <input type="text" class="quantity" title="Quantity" value="'.$cart['SoLuongBan'].'">
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="price">$'.$cart['SoLuongBan']*$cart['DonGiaBan'].'</span>
                            </td>
                        </tr>';
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
    </div>
</section>
<!--== End Product Area Wrapper ==-->

</main>