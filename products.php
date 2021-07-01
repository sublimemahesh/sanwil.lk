<?php
include './class/include.php';

if (!isset($_SESSION)) {

    session_start();
}
$id = '';
if (isset($_GET['category'])) {
    $id = $_GET['category'];
}

$PRODUCT_CATEGORIES = new ProductCategories($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:title" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- PAGE TITLE HERE -->
    <title>Nutshut | <?php echo $PRODUCT_CATEGORIES->name; ?></title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link href="css/modle-login.css" rel="stylesheet" type="text/css" />
    <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Amita:400,700|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900&amp;display=swap');
    </style>

</head>

<body id="bg" class="products-page">
    <div class="page-wraper">
        <div id="loading-area">
            <div class="ball-pulse-rise">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- header -->
        <?php
        include './header.php';
        ?>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content bg-white">
            <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg); background-size:cover;">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white"><?php echo $PRODUCT_CATEGORIES->name; ?></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="./"><i class="fa fa-home"></i></a></li>
                                <li><a href="product-categories.php">Product Categories</a></li>
                                <li>Products</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="section-full bg-white pizza-full-menu">
                <div class="content-inner">
                    <div class="container-fluid tab-content" id="myTabContent">
                        <div class="row tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
                            <?php
                            $PRODUCT = new Product(NULL);
                            $PRODUCT = $PRODUCT->getProductsByCategory($id);
                            foreach ($PRODUCT as $key => $product) {
                                $sub_r_products = Product::getSubProductsByParent($product['id']);
                                if (count($sub_r_products) > 0) {
                                    $min_price = Product::getMinimumPrice($product['id']);
                                    $discount = ($min_price['price'] * $min_price['discount']) / 100;
                                    $price = $min_price['price'] - $discount;
                                    $old_price = $min_price['price'];
                                } else {
                                    $discount = ($product['price'] * $product['discount']) / 100;
                                    $price = $product['price'] - $discount;
                                    $old_price = $product['price'];
                                }
                            ?>
                                <div class="dz-col col m-b30 ">
                                    <div class="item-box shop-item style2 product-box-h">
                                        <div class="item-img">
                                            <a href="product.php?id=<?php echo $product['id']; ?>"> <img src="upload/product-categories/sub-category/product/photos/<?php echo $product['image_name'] ?>" alt=""></a>
                                        </div>
                                        <div class="item-info text-center">
                                            <a href="product.php?id=<?php echo $product['id']; ?>">
                                                <h4 class="item-title"> <?php echo $product['name']; ?></h4>
                                            </a>
                                            <div class="price">
                                                <span>Rs. <?php echo number_format($price, 2); ?></span>
                                                <?php
                                                if ($discount != 0) {
                                                ?>
                                                    <del>Rs. <?php echo number_format($old_price, 2); ?></del>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            if ($product['in_stock'] == 1) {
                                            ?>
                                                <input type="hidden" id="name<?= $product['id']; ?>" value="<?= $product['name']; ?>" />
                                                <input type="hidden" id="price<?= $product['id']; ?>" value="<?= $price; ?>" />
                                                <input type="hidden" id="quantity<?= $product['id']; ?>" value="1" />
                                                <div class="cart-btn ">
                                                    <!-- <div id="<?php echo $product['id']; ?>" min-qty="<?php echo $product['min_qty']; ?>" max-qty="<?php echo $product['max_qty']; ?>" class="add_to_cart btn btnhover radius-xl"><i class="fa fa-shopping-cart"></i> Add to Cart</div> -->
                                                    <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btnhover radius-xl"><i class="fa fa-eye"></i> View Product</a>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btnhover radius-xl"><i class="fa fa-eye"></i> View Product</a>
                                                <!-- <div class="cart-btn "><i class="ti-shopping-cart"></i> Not in Stock</div> -->

                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Content END-->
        <!-- Footer -->
        <?php
        include './footer.php';
        ?>
        <!-- Footer END -->
        <button class="scroltop icon-up" type="button"><i class="fa fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="js/combining.js"></script><!-- CONTACT JS  -->
    <script>
        jQuery(document).ready(function() {
            setCookie('themeFullColor_value', 'css/skin/skin-1', 1);
            setCookie('logo_value', 'images/logo.png', 1);
            setCookie('header', 'header_v1', 1);
            setCookie('footer', 'footer_v1', 1);
        }); /*ready*/
    </script>
    <script src="plugins/switcher/switcher.min.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/header.js" type="text/javascript"></script>
    <script src="js/add-to-cart.js" type="text/javascript"></script>
</body>


</html>