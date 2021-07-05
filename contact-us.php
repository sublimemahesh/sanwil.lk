<?php
include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
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
        <title>Sanwil Products | Contact Us</title>
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
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                            <h1 class="text-white">Contact Us</h1>
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                    <li>Contact us</li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>
                    </div>
                </div>
                <!-- contact area -->
                <div class="content-block">
                    <div class="section-full content-inner-2 contact-form bg-white" style="background-image:url(images/background/bg5.jpg); background-size:100%;">
                        <div class="container">
                            <div class="row">
                                <!-- right part start -->
                                <div class="col-xl-4 col-lg-6 col-md-6 m-md-b30 m-lg-b30">
                                    <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm bg-white">
                                        <h3 class="m-b5">Quick Contact</h3>
                                        <p>If you have any questions simply use the following contact details.</p>
                                        <ul class="no-margin">
                                            <li class="icon-bx-wraper left m-b30">
                                                <a href="javascript:void(0);" >
                                                    <div class="icon-bx-xs border-1 text-primary"><i class="ti-location-pin icon-cell"></i> </div>
                                                    <div class="icon-content">
                                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                                        <p class="contact-p">Sanwil Products, No 624/A/31, Ranawaka Mw, Thundhahena, Korathota.</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="icon-bx-wraper left  m-b30">
                                                <a href="mailto:sanwilproducts@gmail.com" >
                                                    <div class="icon-bx-xs border-1 text-primary"> <i class="ti-email icon-cell"></i> </div>
                                                    <div class="icon-content">
                                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                                        <p class="contact-p">sanwilproducts@gmail.com</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="icon-bx-wraper left">
                                                <div class="icon-bx-xs border-1 text-primary"> <i class="ti-mobile icon-cell"></i></div>
                                                <div class="icon-content">
                                                    <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                                    <a href="tel:+94779917890" class=""><p class="contact-p">+94 77 991 7890</p></a>
                                                    <a href="tel:+94722800233" class=""><p class="contact-p">+94 72 280 0233</p></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="m-t20">
                                            <ul class="dlab-social-icon dlab-social-icon-lg">
                                                <li><a href="#" class="fa fa-facebook bg-primary" target="_blank"></a></li>
                                                <li><a href="https://api.whatsapp.com/send?phone=94779917890" class="fa fa-whatsapp bg-primary" target="_blank"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary" target="_blank"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary" target="_blank"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary" target="_blank"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- right part END -->
                                <div class="col-lg-8 col-md-12 m-b30">
                                    <h2 class="m-tb5">Contact Us</h2>
                                    <div class="dlab-separator bg-black"></div>
                                    <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue.</p>
                                    <div class="dzFormMsg"></div>
                                    <div method="post" class="dzForm" id="contactForm">
                                        <input type="hidden" value="Contact" name="dzToDo" >
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" name="name" id="txtFullName" placeholder="Full Name *" class="form-control" >
                                                        <span id="spanFullName"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group"> 
                                                        <input type="text" name="email" id="txtEmail" placeholder="Email *" class="form-control" >
                                                        <span id="spanEmail"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" name="phone" id="txtPhone" placeholder="Phone Number *" class="form-control" >
                                                        <span id="spanPhone"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" name="subject" id="txtSubject" placeholder="Subject *" class="form-control" >
                                                        <span id="spanSubject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea class="form-control" name="message" cols="30" rows="8" id="txtMessage" placeholder="Message *"></textarea>
                                                        <span id="spanMessage"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group recaptcha-bx">
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" placeholder="Security Code" name="captchacode" id="captchacode" />
                                                        <span id="capspan"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php
                                                include ("./contact-form/captchacode-widget.php");
                                                ?>
                                                <img id="checking" src="contact-form/img/checking.gif" alt=""/>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <button name="submit" type="submit" value="Submit" id="btnSubmit" class="btn btnhover"> <span>SUBMIT</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 contact-us-button">
                                        <div id="dismessage" align="center" class="msg-success"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 d-flex m-b10">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3885259867925!2d80.08899021403734!3d6.843939321255665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25314e4a78809%3A0x2b12180581075ec8!2sCeylon%20Spices!5e0!3m2!1sen!2slk!4v1623735764471!5m2!1sen!2slk" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:400px; height:100%;" allowfullscreen></iframe>
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
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>
        <script src="js/header.js" type="text/javascript"></script>
        <script src="js/add-to-cart.js" type="text/javascript"></script>
    </body>


</html>