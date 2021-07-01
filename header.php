<header class="site-header header center mo-left header-style-2">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="./" class="dez-page"><img src="images/logo.png" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
                    <div class="logo-header mostion">
                        <a href="./" class="dez-page"><img src="images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav nav1">
                        <li class="active"><a href="./">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li>
                            <a href="all-products.php">Product<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php
                                $H_PRODUCT_CATEGORIES = new ProductCategories(NULL);
                                foreach ($H_PRODUCT_CATEGORIES->all() as $product_categories) {
                                ?>
                                    <li><a href="products.php?category=<?php echo $product_categories['id'] ?>"><?php echo $product_categories['name']; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav nav2">
                        <li><a href="offers.php">Offer</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <?php
                        if (isset($_SESSION['id'])) {
                        ?>
                            <li><a href="checkout.php">Oder Now</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="login.php">Oder Now</a></li>
                        <?php
                        }
                        ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>