<?php
$current_page="products";
include("../util/routing_path.php");
require_once ("../model/database.php");
include ("../model/product_db.php");
include("../view/header.php");
include ("../account/login_modal.php");
$sensors = list_products();
?>


        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Our Products</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo $home_path; ?>index.php">Home</a>
                            </li>
                            <li>Catalog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <p class="text-muted lead text-center">In our Internet of Everything department
                we offer wide selection of the best products we have created and patented.</p>
                <div class="row products">

                    <?php foreach($sensors as $sensor){?>
                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html"><img alt="" class=
                                "img-responsive image1" src=
                                "<?php echo $home_path.'img/'.$sensor['image_source'];?>"></a>
                            </div><!-- /.image -->
                            <div class="text">
                                <h3><a href="#"><?php echo $sensor['name'];?></a></h3>
                                <p class="caption"><?php echo $sensor['description'];?></p>
                                <p class="price"><?php echo $sensor['price'];?></p>
                                <p class="text-center">
                                <?php if(isset($_SESSION['cart'])){?>
                                <form action="<?php echo $home_path;?>cart/cart_controller.php" method="post">
                                    <label class="sr-only" for="quantity">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" value="1">
                                    <input type="hidden" name="product_id" value="<?php echo $sensor['id']; ?>">
                                    <input type="hidden" name="action" value="add_product">

                                    <button tye="submit" class="btn btn-template-main"
                                            href="<?php echo $home_path;?>cart/shop-cart.php">
                                        <i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </form>
                                <?php }else{ ?>
                                    <button class="btn btn-template-main" data-target="#login-modal" data-toggle="modal"
                                       href="#"><i class="fa fa-sign-in"></i> <span class=
                                                                                    "hidden-xs text-uppercase">Sign in</span></button>
                                <?php } ?>
                            </p>
                            </div><!-- /.text -->
                        </div><!-- /.product -->
                    </div>
                    <?php } ?>


                </div><!-- /.products -->
            </div><!-- /.container -->
        </div><!-- /#content -->
        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include("../view/footer.php"); ?>