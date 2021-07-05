<?php
include './class/include.php';

if (!isset($_SESSION)) {

    session_start();
}
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$OFFER = new Offer($id);
$date = new DateTime($OFFER->created_at);
$result = $date->format('D, M d, Y');
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
    <title>Sanwil Products | <?php echo $OFFER->title; ?></title>
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
                        <h1 class="text-white"><?php echo $OFFER->title; ?></h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li><a href="offers.php">Offers</a></li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8 m-b30">
                            <!-- blog start -->
                            <div class="blog-post blog-single sidebar">
                                <div class="dlab-post-media dlab-img-effect zoom-slow radius-sm">
                                    <?php
                                    $OFFER_PHOTO = new OfferPhoto(null);
                                    foreach ($OFFER_PHOTO->getOfferPhotosById($OFFER->id) as $offer_photo) {
                                    ?>
                                        <img src="upload/offer/gallery/<?php echo $offer_photo['image_name'] ?>" alt="">
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-title">
                                        <h2 class="post-title"><?php echo $OFFER->title; ?></h2>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p class="text-justify"><?php echo $OFFER->description; ?>

                                    </div>

                                </div>
                            </div>

                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <div class="col-lg-4 sticky-top">
                            <aside class="side-bar">

                                <div class="widget recent-posts-entry">
                                    <h5 class="widget-title style-1">Recent Offers</h5>
                                    <div class="widget-post-bx">
                                        <?php
                                        $OFFER = new Offer(NULL);
                                        $r_offers = $OFFER->all();
                                        if (count($r_offers) > 1) {
                                            foreach ($OFFER->all() as $key => $offer) {
                                                if ($key < 6) {
                                                    if ($offer['id'] != $id) {
                                                        $date1 = new DateTime($offer['date']);
                                                        $result1 = $date1->format('D, M d, Y');
                                        ?>
                                                        <div class="widget-post clearfix">
                                                            <a href="view-offer.php?id=<?php echo $offer['id']; ?>">
                                                                <div>
                                                                    <div class="dlab-post-media">
                                                                        <img src="upload/offer/<?php echo $offer['image_name']; ?>" width="200" height="143" alt="">
                                                                    </div>
                                                                    <div class="dlab-post-info">
                                                                        <div class="dlab-post-meta">
                                                                            <ul>
                                                                                <li class="post-date">
                                                                                    <?= $result1; ?>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="dlab-post-header">
                                                                            <h6 class="post-title"><?php echo substr($offer['title'], 0, 30), '...'; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                            <?php
                                                    }
                                                }
                                            }
                                        } else {
                                            ?>
                                            <h6>No any related offers</h6>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                            </aside>
                        </div>
                        <!-- Side bar END -->
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