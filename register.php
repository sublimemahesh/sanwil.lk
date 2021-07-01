<?php
include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
}
$checkout = '';
if (isset($_GET['checkout'])) {
    $checkout = 'checkout';
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
        <title>Ceylon Fine Spice | Register</title>
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
        <link href="css/login-css.css" rel="stylesheet" type="text/css"/>
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/modle-login.css" rel="stylesheet" type="text/css"/>

        <!-- Google Font -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Amita:400,700|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900&amp;display=swap');
        </style>

    </head>
    <body id="bg">
        <div class="page-wraper">
            <!-- <div id="loading-area">
                <div class="ball-pulse-rise">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div> -->
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
                            <h1 class="text-white">Register</h1>
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>
                    </div>
                </div>
                <!-- contact area -->
                <div class="section-full content-inner-2 shop-account">
                    <!-- Product -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="m-b40 m-md-b20">Create An Account</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-a30 border-1 max-w500 m-auto radius-sm">
                                    <div class="tab-content">
                                        <form id="register-form" action=" " method="post" role="form" autocomplete="off" class="tab-pane active">
                                            <h3 class="m-b5">Personal Information</h3>
                                            <p>If you have an account with us, please log in.</p>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                            </div> 
                                            <div class="form-group">
                                                <input type="text" name="phone_number" id="phone_number" tabindex="1" class="form-control" placeholder="Contact Number (07x xxx xxxx)" value="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <select class="form-control" type="text" id="district" autocomplete="off" name="district">
                                                    <option class="active light-c" value=""> -- Please  Select a District -- </option>
                                                    <?php
                                                    $DISTRICT = new District(NULL);
                                                    foreach ($DISTRICT->all() as $key => $district) {
                                                        ?>
                                                        <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>

                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" autocomplete="off" type="text" id="city" autocomplete="off" name="city"  >
                                                    <option value=""> -- Please Select a City -- </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" tabindex="2"  class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="hidden" name="back_url" id="back_url" value="<?php echo $checkout; ?>" >
                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn  btnhover" value="Register Now">
                                                    </div>
                                                </div>
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
        <script src="js/combining1.js"></script><!-- CONTACT JS  -->
        <!-- <script>
            jQuery(document).ready(function () {
                setCookie('themeFullColor_value', 'css/skin/skin-1', 1);
                setCookie('logo_value', 'images/logo.png', 1);
                setCookie('header', 'header_v1', 1);
                setCookie('footer', 'footer_v1', 1);
            });	/*ready*/
        </script> -->
        <!-- <script src="plugins/switcher/switcher.min.js"></script> -->
        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/registration.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
        <script src="js/header.js" type="text/javascript"></script>
        <script src="js/add-to-cart.js" type="text/javascript"></script>
        <script src="js/city.js" type="text/javascript"></script>
    </body>


</html>