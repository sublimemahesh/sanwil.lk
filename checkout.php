<?php
include './class/include.php';
if (!isset($_SESSION)) {
    session_start();
}
$disabled = '';
if (!isset($_SESSION["shopping_cart"])) {
    $disabled = 'disabled';
}
$_SESSION["back_url"] = '';
if (!Customer::authenticate()) {
    $_SESSION["back_url"] = 'checkout';
    redirect('login.php');
}
if (!isset($_SESSION["shopping_cart"]) || empty($_SESSION["shopping_cart"])) {
    redirect('cart.php');
}
$CUSTOMER = new Customer($_SESSION['id']);
$CITY = new City($CUSTOMER->city);
$DISTRICT = new District($CUSTOMER->district);

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
    <title>Ceylon Fine Spice | Checkout</title>
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
    <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="css/modle-login.css" rel="stylesheet" type="text/css" />
    <link href="plugins/country-code-selector/css/jquery.ccpicker.css" rel="stylesheet" type="text/css" />
    <link href="plugins/country-select/css/countrySelect.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/country-code-selector/css/intlTelInput.min.css" rel="stylesheet" type="text/css" />
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Amita:400,700|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900&amp;display=swap');

        .agree-check-box {
            margin-bottom: 10px;
        }

        .agree-check-box {
            margin-bottom: 10px;
        }

        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 50px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding-top: 0px;
        }

        .text-blue {

            color: #0066a2 !important;
            font-weight: 600;

        }

        #agree {
            z-index: -9999;
        }

        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: -3px;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #f9f9f9;
            border: 1px solid #0066a2;
            margin-left: 0px;
        }

        .checkbox-container input:checked~.checkmark::after {
            display: block;
        }

        .checkbox-container .checkmark::after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid #131111;
            border-top-width: medium;
            border-right-width: medium;
            border-bottom-width: medium;
            border-left-width: medium;
            border-top-width: medium;
            border-right-width: medium;
            border-bottom-width: medium;
            border-left-width: medium;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .checkmark::after {
            content: "";
            position: absolute;
            display: none;
        }
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
                        <h1 class="text-white">Checkout</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- contact area -->
            <div class="section-full content-inner">
                <!-- Product -->
                <div class="container">

                    <form class="shop-form booking-form" method="post" action="#" name="contact-from" id="payments">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8 col-md-12 m-b30">
                                <h3>Delivery Details</h3>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="tel" name="contact_no_1" id="txtContactNo" placeholder="Contact Number *" class="phone-field form-control" value="<?php echo $CUSTOMER->phone_number; ?>" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="contact_no_2" id="txtContactNo2" placeholder="Additional Contact Number" class="phone-field form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="address" id="txtAddress" placeholder="Address *" class="form-control" value="<?php echo $CUSTOMER->address; ?>" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select name="district" id="district" class="form-control">
                                            <option>--Select District--</option>
                                            <?php
                                            foreach (District::all() as $district) {
                                                if ($district['id'] == $CUSTOMER->district) {
                                            ?>
                                                    <option value="<?php echo $district['id']; ?>" selected dis-name="<?php echo $district['name']; ?>"><?php echo $district['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $district['id']; ?>" dis-name="<?php echo $district['name']; ?>"><?php echo $district['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="city" id="city" class="form-control">
                                        <option>--Select City--</option>
                                        <?php
                                        foreach (City::GetCitiesByDistrict($CUSTOMER->district) as $city) {
                                            if ($city['id'] == $CUSTOMER->city) {
                                        ?>
                                                <option value="<?php echo $city['id']; ?>" selected city-name="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?php echo $city['id']; ?>" city-name="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea cols="30" class="form-control" rows="14" id="txtOrderNote" name="txtOrderNote" placeholder="Order Notes"></textarea>
                                </div>

                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </form>
                    <div class="dlab-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Your Order</h3>
                            <table class="table-bordered check-tbl">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tot = 0;
                                    $items = '';
                                    if (isset($_SESSION["shopping_cart"])) {
                                        foreach ($_SESSION["shopping_cart"] as $product) {

                                            $PRODUCT = new Product($product['product_id']);

                                            if ($PRODUCT->parent  != 0) {
                                                $PARANT = new Product($PRODUCT->parent);
                                                $name = $PARANT->name . ' - ' . $product["product_name"];
                                            } else {
                                                $name =  $product["product_name"];
                                            }
                                            $price = $product['product_quantity'] * $product['product_price'];
                                            $tot += $price;
                                    ?>
                                            <tr>
                                                <td> <?php echo $name; ?>&nbsp;<span class="product-quantity">× <?php echo $product['product_quantity']; ?></span></td>
                                                <td class="product-price text-right"><span class="amount">Rs. <?php echo number_format($price, 2); ?></span> </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr class="cart_item">
                                            <td colspan="2">Your cart is empty.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td class="text-right"><strong><span class="amount">Rs. <?php echo number_format($tot, 2); ?></span></strong> </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <form class="shop-form">
                                <h3>Order Total</h3>
                                <table class="table-bordered check-tbl">
                                    <tbody>
                                        <tr>
                                            <td>Delivery Charges</td>
                                            <td class="product-price"> Rs 0.00</td>
                                        </tr>
                                        <?php
                                        $grand_total = $tot + 0;
                                        ?>
                                        <tr>
                                            <td>Total</td>
                                            <td class="product-price-total">Rs. <?php echo number_format($grand_total, 2); ?></td>
                                        </tr>
                                    </tbody>
                                </table>


                            </form>
                        </div>
                    </div>
                    <div class="terms-container">
                        <div class="condition-title">Please be kindly noted that</div>
                        <ul>
                            <li class="modle-li">
                                Deliveries will be processed within 4 days (may take up to 7 days if delayed)
                            </li>
                            <li class="modle-li">
                                If in case the stocks are not available or getting delayed the payment will be fully refunded
                            </li>
                            <li class="modle-li">
                                In case if the service will have to be suspended due to government-imposed laws in the later stage, the payments will be fully refunded
                            </li>
                            <li class="modle-li">
                                The delivery address must comply with the province, district and the city you entered on creating the account
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 agree-check-box">
                            <label class="checkbox-container">Click here to indicate that you have read and agree to the booking
                                <input type="checkbox" name="agree" id="agree"><span class="checkmark">
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="btnhover">
                        <input type="hidden" name="total_amount" id="total_amount" value="<?= $grand_total; ?>" />
                        <input type="hidden" name="member" id="member" value="<?= $_SESSION['id']; ?>" />
                        <button data-value="Place order" type="submit" id="place_order" name="woocommerce_checkout_place_order" class="btn btnhover" <?php echo $disabled; ?> prod-total="<?php echo $tot; ?>">Place order</button>

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
    <script src="js/order.js" type="text/javascript"></script>
    <script src="js/cart-form.js" type="text/javascript"></script>
    <script src="js/add-to-cart.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/city.js" type="text/javascript"></script>
    <script src="js/header.js" type="text/javascript"></script>
    <script src="plugins/country-code-selector/js/intlTelInput.min.js" type="text/javascript"></script>
    <script src="plugins/country-code-selector/js/intlTelInput-jquery.min.js" type="text/javascript"></script>
</body>


</html>