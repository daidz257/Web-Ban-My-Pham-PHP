<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro=$_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Brancy - Cosmetic & Beauty Salon Website Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Brancy - Cosmetic & Beauty Salon Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="bootstrap, ecommerce, ecommerce html, beauty, cosmetic shop, beauty products, cosmetic, beauty shop, cosmetic store, shop, beauty store, spa, cosmetic, cosmetics, beauty salon" />
    <meta name="author" content="codecarnival" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./view/assets/images/favicon.webp">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./view/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="view/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="view/assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="view/assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="view/assets/css/plugins/nice-select.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./view/assets/css/style.min.css">

</head>

<body>
                <div class="col-lg-7">
                    <div class="nav product-details-nav" id="product-details-nav-tab" role="tablist">
                        <button class="nav-link" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">Specification</button>
                        <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">Review</button>
                    </div>
                    <div class="tab-content" id="product-details-nav-tabContent">
                        <div class="tab-pane" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                            <ul class="product-details-info-wrap">
                                <li><span>Weight</span>
                                    <p>250 g</p>
                                </li>
                                <li><span>Dimensions</span>
                                    <p>10 x 10 x 15 cm</p>
                                </li>
                                <li><span>Materials</span>
                                    <p>60% cotton, 40% polyester</p>
                                </li>
                                <li><span>Other Info</span>
                                    <p>American heirloom jean shorts pug seitan letterpress</p>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius velit corporis quo voluptate culpa soluta, esse accusamus, sunt quia omnis amet temporibus sapiente harum quam itaque libero tempore. Ipsum, ducimus. lorem</p>
                        </div>
                        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
<?php
foreach($dsbl as $bl) {
    extract($bl);
    echo '
    <div class="product-review-item">
        <!--== Start Reviews Content Item ==-->
        <div class="product-review-top">
            <div class="product-review-thumb">
                <img src="view/assets/images/shop/product-details/comment1.webp" alt="Images">
            </div>
            <div class="product-review-content">
                <span class="product-review-name">'.$TenKhachHang.'</span>
                <span class="product-review-designation">'.$NgayBinhLuan.'</span>
                <div class="product-review-icon">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
        <p class="desc">'.$NoiDung.'</p>
        <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
        <!--== End Reviews Content Item ==-->
    </div>';
}
?>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_SESSION['user'])) {
                    echo '<div class="col-lg-5">
                    <div class="product-reviews-form-wrap">
                        <h4 class="product-form-title">Leave a replay</h4>
                        <div class="product-reviews-form">
                            <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                                <input type="hidden" name="idpro" value="'.$idpro.'">
                                <div class="form-input-item">
                                    <textarea class="form-control" name="noidung" placeholder="Enter you feedback"></textarea>

                                </div>
                                <div class="form-input-item mb-0">
                                    <button type="submit" class="btn" name="guibinhluan" value="Gửi bình luận">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
                } else {
                    echo '<div class="col-lg-5">
                    <div class="product-reviews-form-wrap">
                        <h4 class="product-form-title">Cần đăng nhập để được bình luận</h4>
                    </div>
                </div>';
                }

                if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['MaKhachHang'];
                    $ngaybinhluan=date('h:i:sa d/m/Y');
                    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                    echo '<script>window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
                }
                ?>



    <!-- Vendors JS -->
    <script src="./view/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./view/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./view/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./view/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./view/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./view/assets/js/plugins/fancybox.min.js"></script>
    <script src="./view/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Custom Main JS -->
    <script src="./view/assets/js/main.js"></script>

</body>

</html>