<?php $current_page="products";
$app_path="../";
?>
        <!-- NAVIGATION AND LOGIN MODAL-->
        <?php include("../view/header.php");?>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Our Products</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo $app_path; ?>index.php">Home</a>
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
                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html"><img alt="" class=
                                "img-responsive image1" src=
                                "<?php echo $app_path;?>img/product1.jpg"></a>
                            </div><!-- /.image -->
                            <div class="text">
                                <h3><a href="#">Our first sensor</a></h3>
                                <p class="caption">This sensor is our 1st sensor in
                                    the ecosystem that we have developed.</p>
                                <p class="price">$143.00</p>
                                <p class="text-center">
                                <a class="btn btn-template-main" href=
                                "shop-basket.html"><i class=
                                "fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div><!-- /.text -->
                        </div><!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html"><img alt="" class=
                                "img-responsive image1" src=
                                "<?php echo $app_path;?>img/product2.jpg"></a>
                            </div><!-- /.image -->
                            <div class="text">
                                <h3><a href="#">Our second sensor</a></h3>
                                <p class="caption">This sensor is our 2nd sensor in
                                    the ecosystem that we have developed.</p>
                                <p class="price">$162.00</p>
                                <p class="text-center">
                                <a class="btn btn-template-main" href=
                                "shop-basket.html"><i class=
                                "fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div><!-- /.text -->
                        </div><!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html"><img alt="" class=
                                "img-responsive image1" src=
                                "<?php echo $app_path;?>img/product3.jpg"></a>
                            </div><!-- /.image -->
                            <div class="text">
                                <h3><a href="#">Our third sensor</a></h3>
                                <p class="caption">This sensor is our 3rd sensor in
                                    the ecosystem that we have developed.</p>
                                <p class="price">$228.00</p>
                                <p class="text-center">
                                <a class="btn btn-template-main" href=
                                "shop-basket.html"><i class=
                                "fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div><!-- /.text -->
                        </div><!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="product">
                            <div class="image">
                                <a href="shop-detail.html"><img alt="" class=
                                "img-responsive image1" src=
                                "<?php echo $app_path;?>img/product4.jpg"></a>
                            </div><!-- /.image -->
                            <div class="text">
                                <h3><a href="#">Our fourth sensor</a></h3>
                                <p class="caption">This sensor is our 4th sensor in
                                    the ecosystem that we have developed.</p>
                                <p class="price">$97.00</p>
                                <p class="text-center">
                                <a class="btn btn-template-main" href=
                                "shop-basket.html"><i class=
                                "fa fa-shopping-cart"></i>Add to cart</a></p>
                            </div><!-- /.text -->
                        </div><!-- /.product -->
                    </div>

                </div><!-- /.products -->
                <div class="col-sm-12">
                    <div class="banner">
                        <a href="#"><img alt="" class="img-responsive" src=
                        "<?php echo $app_path;?>img/banner2.jpg"></a>
                    </div>
                    <div class="pages">
                        <p class="loadMore"><a class="btn btn-template-main"
                        href="#"><i class="fa fa-chevron-down"></i> Load
                        more</a></p>
                        <ul class="pagination">
                            <li>
                                <a href="#">&laquo;</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col-sm-12 -->
            </div><!-- /.container -->
        </div><!-- /#content -->
        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include("../view/footer.php"); ?>