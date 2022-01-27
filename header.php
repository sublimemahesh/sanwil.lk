<header class="site-header header center mo-left header-style-2">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->

                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav2 nav-width">
                        <a href="./"> <img src="images/logos/1.png"/></a>

                    </ul>
                    <ul class="nav navbar-nav nav1" style="width: 100%;">
                        <li class="active"><a href="./" class="header2-a">Home</a></li>
                        <li><a href="about-us.php" class="header2-a">About Us</a></li>
                        <li>
                            <a href="#" class="header2-a">Product<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu tab-content">
                                <?php
                                $H_PRODUCT_CATEGORIES = new ProductCategories(NULL);
                                foreach ($H_PRODUCT_CATEGORIES->all() as $product_categories) {
                                    ?>
                                    <li>
                                        <a href="products.php?category=<?php echo $product_categories['id'] ?>"><?php echo $product_categories['name']; ?> <i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu product-menu">
                                            <?php
                                            $HPRODUCT = new Product(NULL);
                                            foreach ($HPRODUCT->getProductsByCategory($product_categories['id']) as $product) {
                                                ?>

                                                <li><a href="product.php?id=<?php echo $product['id']; ?>"> <?php echo $product['name']; ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="offers.php" class="header2-a">Offer</a></li>
                        <li><a href="contact-us.php" class="header2-a">Contact Us</a></li>
                        <?php
                        if (isset($_SESSION['id'])) {
                            ?>
                        <li><a href="checkout.php" class="header2-a"><i class="fa fa-cart"></i>Order Now</a></li>
                            <?php
                        } else {
                            ?>
                            <li><a href="login.php" class="header2-a "><i class="fa fa-cart"></i>Order Now</a></li>
                            <?php
                        }
                        ?>
                        <li><a href="cart.php" class="header2-a hoder-btn"><i class="ti-shopping-cart h-cart"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>