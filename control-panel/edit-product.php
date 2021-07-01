<?php
//
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$category = '';
if (isset($_GET['category'])) {
    $category = $_GET['category'];
}

$PRODUCT = new Product($id);
$sub_products = $PRODUCT->getSubProductsByParent($id);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Product</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <?php
    include './navigation-and-header.php';
    ?>

    <section class="content">
        <div class="container-fluid">
            <?php
            $vali = new Validator();

            $vali->show_message();
            ?>
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Product
                            </h2>
                            <ul class="header-dropdown">
                                <li class="">
                                    <a href="view-products.php?id=<?php echo $category ?>">
                                        <i class="material-icons">list</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="post-and-get/product.php" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control" autocomplete="off" id="category" name="category" required="true">
                                                <option> -- Please Select the Category -- </option>
                                                <?php
                                                $CATEGORY = new ProductCategories(NULL);
                                                foreach ($CATEGORY->all() as $key => $category) {
                                                    if ($category['id'] == $PRODUCT->category) {
                                                ?>
                                                        <option selected="" value="<?php echo $category['id']; ?>" required="true"> <?php echo $category['name'] ?></option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="<?php echo $category['id']; ?>" required="true"> <?php echo $category['name'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 hidden">
                                    <div class="form-group form-float">
                                        <div class="form-line" id="sub_category_bar">
                                            <select class="form-control" autocomplete="off" id="sub_category" name="sub_category" required="true">
                                                <option> -- Please Select the Sub Category -- </option>
                                                <?php
                                                $SUBCAT = new SubCategory(NULL);
                                                foreach ($SUBCAT->getSubCategoriesByCategory($PRODUCT->category) as $key => $sub_category) {
                                                    if ($sub_category['id'] == $PRODUCT->sub_category) {
                                                ?>
                                                        <option selected="" value="<?php echo $sub_category['id']; ?>" required="true"> <?php echo $sub_category['name'] ?></option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="<?php echo $sub_category['id']; ?>" required="true"> <?php echo $sub_category['name'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 hidden">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control" autocomplete="off" id="brand" name="brand" required="true">
                                                <option> -- Please Select the Brand -- </option>
                                                <?php
                                                $BRAND = new Brand(NULL);
                                                foreach ($BRAND->all() as $key => $brand) {
                                                    if ($brand['id'] == $PRODUCT->brand) {
                                                ?>
                                                        <option selected="" value="<?php echo $brand['id']; ?>" required="true"> <?php echo $brand['name'] ?></option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="<?php echo $brand['id']; ?>" required="true"> <?php echo $brand['name'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control" value="<?php echo $PRODUCT->name; ?>" name="name" required="TRUE">
                                            <label class="form-label">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $m_checked = '';
                                $s_checked = '';
                                $m_hidden = '';
                                $s_hidden = '';
                                if (count($sub_products) > 0) {
                                    $s_checked = 'checked';
                                    $m_hidden = 'hidden';
                                } else {
                                    $m_checked = 'checked';
                                    $s_hidden = 'hidden';
                                }
                                ?>
                                <div class="col-md-12">
                                    <div class="form-group form-float">

                                        <div class="">
                                            <input type="radio" id="parent-product" class="form-control" name="product_type" style="top: -28px; z-index:9999;" value="parent" <?= $m_checked; ?> />
                                            <label class="form-label">Main Product Only</label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="sub-product" class="form-control" name="product_type" style="top: 2px; z-index:9999;" value="sub" <?= $s_checked; ?> />
                                            <label class="form-label">Sub Products</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-md-12 <?= $m_hidden; ?>" id="parent-product-section">
                                    <fieldset>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" id="price" class="form-control" autocomplete="off" name="price" min="0" value="<?= $PRODUCT->price; ?>">
                                                    <label class="form-label">Price (Rs)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="number" id="discount" class="form-control" autocomplete="off" name="discount" min="0" value="<?= $PRODUCT->discount; ?>">
                                                    <label class="form-label">Discount (%)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="row col-md-12  <?= $s_hidden; ?>" id="sub-product-section">
                                    <fieldset class="sub-product-section">
                                        <?php
                                        $no_of_sub_products = 1;
                                        if (count($sub_products) > 0) {
                                            foreach ($sub_products as $key => $sub_product) {
                                                $key++;
                                                $no_of_sub_products = $key;
                                        ?>
                                                <div class="row col-md-12">
                                                    <hr />
                                                    <h6>Product <?= $key; ?></h6>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" id="sub-name-<?= $key; ?>" class="form-control" autocomplete="off" name="sub_name_<?= $key; ?>" value="<?= $sub_product['name']; ?>">
                                                                <label class="form-label">Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="number" id="price-<?= $key; ?>" class="form-control" autocomplete="off" name="price_<?= $key; ?>" value="<?= $sub_product['price']; ?>" min="0">
                                                                <label class="form-label">Price (Rs)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    if ($key == 1) {
                                                    ?>
                                                        <div class="col-md-3">
                                                        <?php
                                                    } else {
                                                        ?>
                                                            <div class="col-md-4">
                                                            <?php
                                                        }
                                                            ?>
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="number" id="discount-<?= $key; ?>" class="form-control" autocomplete="off" name="discount_<?= $key; ?>" value="<?= $sub_product['discount']; ?>" min="0">
                                                                    <label class="form-label">Discount (%)</label>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <input id="sub_pro_id" name="sub_pro_id_<?= $key; ?>" type="hidden" value="<?= $sub_product['id']; ?>" />
                                                        <!-- <input id="no-of-sub-products" name="no_of_sub_products" type="hidden" value="<?= $key; ?>" /> -->
                                                        <?php
                                                        if ($key == 1) {
                                                        ?>
                                                            <div class="col-md-1">
                                                                <div class="form-group">

                                                                    <button id="add-row" type="button" class="btn btn-primary">Add Row</button>
                                                                </div>
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <h6>Product 01</h6>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" id="sub-name-1" class="form-control" autocomplete="off" name="sub_name_1">
                                                                <label class="form-label">Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="number" id="price-1" class="form-control" autocomplete="off" name="price_1" min="0">
                                                                <label class="form-label">Price (Rs)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="number" id="discount-1" class="form-control" autocomplete="off" name="discount_1" min="0">
                                                                <label class="form-label">Discount (%)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <!-- <input id="no-of-sub-products" name="no_of_sub_products" type="hidden" value="1" /> -->
                                                            <button id="add-row" class="btn btn-primary">Add Row</button>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <input id="no-of-sub-products" name="no_of_sub_products" type="hidden" value="<?= $no_of_sub_products; ?>" />
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="unite" class="form-control" value="<?php echo $PRODUCT->unit; ?>" name="unite" required="TRUE">
                                            <label class="form-label">Unit</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="filled-in chk-col-pink" type="checkbox" <?php if ($PRODUCT->in_stock == 1) {
                                                                                                    echo 'checked';
                                                                                                } ?> name="in_stock" value="1" id="rememberme" />
                                        <label for="rememberme">In Stock</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" id="min_qty" class="form-control" value="<?php echo $PRODUCT->min_qty; ?>" autocomplete="off" name="min_qty" required="true" min="0" step="0.5">
                                            <label class="form-label">Min Quantity</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" id="max_qty" class="form-control" value="<?php echo $PRODUCT->max_qty; ?>" autocomplete="off" name="max_qty" required="true" min="0" step="0.5">
                                            <label class="form-label">Max Quantity</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">

                                        <input type="file" id="image" class="form-control" value="<?php echo $PRODUCT->image_name; ?>" name="image">
                                        <img src="../upload/product-categories/sub-category/product/photos/<?php echo $PRODUCT->image_name; ?>" class="  img img-responsive img-thumbnail" alt="old image" width="20%">

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="short_description" class="form-control" value="<?php echo $PRODUCT->short_description; ?>" name="short_description">
                                            <label class="form-label">Short Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="description">Description</label>
                                    <div class="form-line">
                                        <textarea id="description" name="description" class="form-control" rows="5"><?php echo $PRODUCT->description; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" id="oldImageName" value="<?php echo $PRODUCT->image_name; ?>" name="oldImageName" />
                                    <input type="hidden" id="id" value="<?php echo $PRODUCT->id; ?>" name="id" />
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="update" value="update">Save Changes</button>
                                </div>
                                <div class="row clearfix"> </div>
                                <hr />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="plugins/node-waves/waves.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/products.js" type="text/javascript"></script>
    <script src="js/admin-js/sub-category.js" type="text/javascript"></script>

    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "#description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });
    </script>
</body>

</html>