<?php
include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
}
$PRODUCT = new Product($_GET['id']);

$CAT = new ProductCategories($PRODUCT->category);
$discount1 = $PRODUCT->price * ($PRODUCT->discount / 100);
$price1 = $PRODUCT->price - $discount1;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="description" content="RestroKing - Cakery & Bakery HTML5 Template"/>
        <meta property="og:title" content="RestroKing - Cakery & Bakery HTML5 Template"/>
        <meta property="og:description" content="RestroKing - Cakery & Bakery HTML5 Template"/>
        <meta property="og:image" content="social-image.png" />
        <meta name="format-detection" content="telephone=no">
        <!-- FAVICONS ICON -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <!-- PAGE TITLE HERE -->
        <title>Sanwil Product | <?php echo $PRODUCT->name; ?> </title>
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
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link href="css/modle-login.css" rel="stylesheet" type="text/css"/>
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <!-- Google Font -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Amita:400,700|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900&amp;display=swap');
        </style>

    </head>
    <body id="bg">
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
                            <h1 class="text-white"><?php echo $PRODUCT->name; ?> </h1>
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                    <li><?php echo $PRODUCT->name; ?> </li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>
                    </div>
                </div>
                <!-- contact area -->
                <div class="content-block">
                    <!-- Product details -->
                    <div class="section-full content-inner-1 bg-gray-light">
                        <div class="container woo-entry">
                            <div class="row">
                                <div class="col-lg-6 m-b30">
                                    <div class="product-gallery on-show-slider lightgallery" id="lightgallery"> 
                                        <div class="dlab-box">
                                            <?php
                                            $PRODUCT_PHOTO = new ProductPhoto(null);
                                            foreach ($PRODUCT_PHOTO->getProductPhotosById($PRODUCT->id) as $product_photo) {
                                                ?>
                                                <div class="dlab-thum-bx">
                                                    <img src="upload/product-categories/sub-category/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt="image" alt="">
                                                    <span data-exthumbimage="upload/product-categories/sub-category/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt="image" data-src="upload/product-categories/sub-category/product/photos/gallery/<?php echo $product_photo['image_name'] ?>" alt="image" class="check-km" title="Image | <?php echo $PRODUCT->name; ?>">		
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b30">
                                    <form method="post" class="cart sticky-top">
                                        <div class="dlab-post-title">
                                            <h4 class="post-title"><?php echo $PRODUCT->name; ?></h4>
                                            <p class="m-b10"><?php echo substr($PRODUCT->short_description, 0, 100), '...'; ?></p>
                                            <div class="dlab-divider bg-gray tb15">
                                                <i class="icon-dot c-square"></i>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <?php
                                            if ($PRODUCT->discount == 0) {
                                                ?>
                                                <h3 class="m-tb10">Rs. <?php echo number_format($PRODUCT->price, 2); ?></h3>
                                                <?php
                                            } else {
                                                $discount = $PRODUCT->price * $PRODUCT->discount / 100;
                                                $price = $PRODUCT->price - $discount;
                                                ?>
                                                <h3 class="m-tb10">Rs. <?php echo number_format($PRODUCT->price, 2); ?></h3>
                                                <?php
                                            }
                                            ?>
                                        </div>

                                        <div class="dlab-divider bg-gray tb15">
                                            <i class="icon-dot c-square"></i>
                                        </div>
                                        <div class="row">

                                            <div class="m-b30 col-md-5 col-sm-4">
                                                <h6>Select quantity</h6>
                                                <div class="quantity btn-quantity style-2">
                                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btnhover">
                                            <?php
                                            if ($PRODUCT->in_stock == 1) {
                                                ?>
                                                <div id="<?php echo $PRODUCT->id; ?>"  min-qty="<?php echo $PRODUCT->min_qty; ?>" max-qty="<?php echo $PRODUCT->max_qty; ?>"><i class="fa fa-shopping-cart"></i> Add to Cart</div>
                                                <?php
                                            } else {
                                                ?>
                                                <div><i class="fa fa-shopping-cart"></i> Not in Stock</div>
                                                <?php
                                            }
                                            ?>


                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dlab-tabs product-description tabs-site-button m-t30">
                                        <ul class="nav nav-tabs">
                                            <li><a data-toggle="tab" href="#web-design-1" class="active"> Description</a></li>
                                            <li><a data-toggle="tab" href="#developement-1"> Additional Information</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="web-design-1" class="tab-pane active">
                                                <?php echo $PRODUCT->description; ?>
                                            </div>
                                            <div id="developement-1" class="tab-pane">
                                                <?php
                                                if ($PRODUCT->discount == 0) {
                                                    ?>
                                                    <p>Price           : Rs. <?php echo number_format($PRODUCT->price, 2); ?></p>

                                                    <?php
                                                } else {
                                                    $discount = $PRODUCT->price * $PRODUCT->discount / 100;
                                                    $price = $PRODUCT->price - $discount;
                                                    ?>
                                                    <p>Price           : Rs. <?php echo number_format($PRODUCT->price, 2); ?></p>
                                                    <?php
                                                }
                                                ?>

                                                <p>Categories      : <?php echo ($PRODUCT->category); ?></p>
                                                                                             
                                                <p> Order Limit    : Minimum <?php echo ($PRODUCT->min_qty); ?> & Maximum <?php echo ($PRODUCT->max_qty); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product details -->
                    <!-- Shop -->
                    <div class="section-full related-products content-inner bg-gray-light">
                        <div class="container">
                            <h2 class="title">Related products</h2>
                            <div class="products-carousel owl-carousel owl-btn-center-lr owl-btn-3">
                                <?php
                                $PRODUCT = new Product(NULL);
                                foreach ($PRODUCT->all() as $product) {
                                    ?>
                                    <div class="item">
                                        <div class="item-box shop-item">
                                            <div class="item-img">
                                                <a href="view-product.php?id=<?php echo $product['id']; ?>"><img src="upload/product-categories/sub-category/product/photos/<?php echo $product['image_name'] ?>" alt=""></a>
                                                <div class="price">
                                                    <?php
                                                    if ($product['discount'] == 0) {
                                                        ?>
                                                        <span>Rs. <?php echo number_format($product['price'], 2); ?></span>
                                                        <?php
                                                    } else {
                                                        $discount = $product['price'] * $product['discount'] / 100;
                                                        $price = $product['price'] - $discount;
                                                        ?>
                                                        <del>Rs. <?php echo number_format($price, 2); ?></del>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="item-info text-center">
                                                <h4 class="item-title"><a href="view-product.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>



                                                <div class="btn btnhover"><i class="fa fa-shopping-cart m-r5"></i> Add to Cart</div>


                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Shop End -->
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
            jQuery(document).ready(function () {
                setCookie('themeFullColor_value', 'css/skin/skin-1', 1);
                setCookie('logo_value', 'images/logo.png', 1);
                setCookie('header', 'header_v1', 1);
                setCookie('footer', 'footer_v1', 1);
            });	/*ready*/
        </script>
        <script src="plugins/switcher/switcher.min.js"></script><!-- CUSTOM FUCTIONS  -->

        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
        <script src="js/header.js" type="text/javascript"></script>
        <script src="js/add-to-cart.js" type="text/javascript"></script>
    </body>


</html>