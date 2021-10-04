<?php
include './class/include.php';

if (!isset($_SESSION)) {
    session_start();
    $ABOUTUS = new Page(1);
}
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
        <title>Sanwil Products</title>
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
            include './header_2.php';
            ?>
            <!-- header END -->
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- contact area -->
                <div class="content-block">
                    <!-- Slider -->
                    <?php
                    include './slider.php';
                    ?>
                    <!-- Slider END -->

                    <!-- Services -->
                    <div class="section-full" style="background-image:url(images/background/bg5.jpg);  background-size:100%;">
                        <div class="container">
                            <div class="row service-area1">
                                <div class="blog-carousel owl-none owl-carousel">
                                    <?php
                                    $PRODUCT_CATEGORIES = new ProductCategories(NULL);
                                    foreach ($PRODUCT_CATEGORIES->all() as $product_categories) {
                                        ?>
                                        <div class="">
                                            <div class="icon-bx-wraper text-center service-box1" style="background-image: url(upload/product-categories/icon/<?php echo $product_categories['icon']; ?>)">
                                                <div class="icon-content">
                                                    <h2 class="dlab-tilte text-white"><?php echo $product_categories['name']; ?></h2>

                                                    <div class="dlab-separator style1 bg-primary"></div>
                                                    <a href="products.php?category=<?php echo $product_categories['id'] ?>" class="btn btnhover">More details <i class="fa fa-angle-double-right m-l5"></i></a>
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
                    <!-- Services End -->
                    <div class="section-full food-about content-inner-2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-12">
                                    <div class="section-head food-head m-b30">
                                        <h2 class="title">About <?php echo $ABOUTUS->title ?></h2>
                                        <p><?php echo $ABOUTUS->description ?> </p>
                                        <a href="about-us.php" class="btn outline outline-2">ABOUT US</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="img-frame m-t80">
                                        <img src="upload/page/<?php echo $ABOUTUS->image_name ?>" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="img-frame m-b80">
                                        <img src="images/about/pic9.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About End -->

                    <!-- Counters -->
                    <div class="section-full bg-white" style="background-image:url(images/background/bg5.jpg); background-size:100%;">
                        <div class="container content-inner">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-head text-center">

                                        <h3>OFFERS</h3>
                                        <p>More than 2000+ customers trusted us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                    <div class="counter-style-1 text-center">
                                        <div class="counter-num text-primary">
                                            <span class="counter">53</span>
                                            <small>+</small>
                                        </div>
                                        <span class="counter-text">Years of Experience</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                    <div class="counter-style-1 text-center">
                                        <div class="counter-num text-primary">
                                            <span class="counter">102</span>
                                        </div>
                                        <span class="counter-text">Awards Wins</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                    <div class="counter-style-1 text-center">
                                        <div class="counter-num text-primary">
                                            <span class="counter">36</span>
                                            <small>k</small>
                                        </div>
                                        <span class="counter-text">Happy Clients</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                    <div class="counter-style-1 text-center">
                                        <div class="counter-num text-primary">
                                            <span class="counter">99</span>
                                        </div>
                                        <span class="counter-text">Perfect Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row m-lr0 about-area1">
                                <div class="col-lg-6 p-lr0">
                                    <img class="img-cover" src="images/about/pic3.jpg" alt="">
                                </div>
                                <?php
                                $OFFER = new Offer(NULL);
                                foreach ($OFFER->all() as $key => $offer) {
                                    if ($key < 1) {
                                        ?>
                                        <div class="col-lg-6 p-lr0 d-flex align-items-center text-center">
                                            <div class="about-bx">
                                                <div class="section-head text-center text-white">
                                                    <h4 class="text-white"><?php echo $offer['title']; ?></h4>

                                                    <div class="icon-bx">
                                                        <h5 class="text-white">
                                                            <?php
                                                            $date = date_create($offer['date']);
                                                            echo date_format($date, 'd-M-Y');
                                                            ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <p><?php echo substr($offer['short_description'], 0, 120), '...'; ?></p>
                                                <a href="view-offer.phpid=<?php echo $offer['id']; ?>" class="btn-secondry white btnhover btn-md"><i class="fa fa-cart"></i>GET NOW</a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="section-full bg-white content-inner-2" style="background-image:url(images/overlay/pt1.jpg)">
                        <div class="container">
                            <div class="section-head style-2 text-center">
                                <h4 class="sub-title">Testimonial</h4>
                                <h2 class="title">Client Review</h2>
                            </div>
                            <div class="testimonial-one owl-loaded owl-theme owl-carousel pizza-testimonial owl-btn-center-lr owl-btn-3">
                                <?php
                                $COMMENT = new Comments(NULL);
                                foreach ($COMMENT->all() as $comment) {
                                    ?>
                                    <div class="item">
                                        <div class="testimonial-1">
                                            <div class="testimonial-text">
                                                <p><?php echo $comment['comment']; ?></p>
                                            </div>
                                            <div class="testimonial-pic radius"><img src="upload/comments/<?php echo $comment['image_name']; ?>" width="100" height="100" alt=""></div>
                                            <div class="testimonial-detail"> <strong class="testimonial-name"><?php echo $comment['name']; ?></strong> <span class="testimonial-position"><?php echo $comment['title']; ?></span> </div>
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