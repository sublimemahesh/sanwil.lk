<?php
include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['member'])) {
    $return = 'member';
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
    <meta name="description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:title" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:description" content="RestroKing - Cakery & Bakery HTML5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- PAGE TITLE HERE -->
    <title>Ceylon Fine Spice | Login</title>
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
    <link href="css/login-css.css" rel="stylesheet" type="text/css" />
    <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="css/modle-login.css" rel="stylesheet" type="text/css" />

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
                        <h1 class="text-white">Login</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="section-full content-inner shop-account">
                <!-- Product -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="m-t0 m-b40 m-md-b20">Already Registered?</h2>
                        </div>
                    </div>
                    <div class="row align-content-stretch">
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="p-a30 border-1 h100 radius-sm">
                                <div class="tab-content">
                                    <h3 class="m-b10">New Customer</h3>
                                    <p class="m-b15">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                    <a class="btn btnhover" href="register.php">Create An Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="p-a30 border-1 radius-sm">
                                <div class="tab-content tab-form nav">
                                    <form id="login-form" class="tab-pane active col-12 p-a0 ">
                                        <h3 class="m-b5">Login</h3>
                                        <p>If you have an account with us, please log in.</p>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="login-submit" id="login" class="btn btnhover btn-lg btn-block login-btn">Login</button>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <a href="forget-password.php" class="m-l5"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product END -->
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
    <script src="js/add-to-cart.js" type="text/javascript"></script>

</body>


</html>