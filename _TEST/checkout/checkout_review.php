<?php $current_page="checkout_review";
include("../util/routing_path.php");
require_once ("../model/database.php");
include ("../model/product_db.php");
include("../view/header.php");
include ("../account/login_modal.php");
?>



        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Checkout - Order review</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?php echo $app_path;?>index.php">Home</a>
                            </li>
                            <li>Checkout - Order review</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="box">
                            <form method="post" action="checkout_review.php">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="delivery_address.php"><i class="fa fa-map-marker"></i><br>Address</a>
                                    </li>
                                    <li><a href="shop-checkout2.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                    </li>
                                    <li><a href="shop-checkout3.php"><i class="fa fa-money"></i><br>Payment Method</a>
                                    </li>
                                    <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit price</th>
                                                    <th>Discount</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="<?php echo $app_path;?>img/detailsquare.jpg" alt="White Blouse Armani">
                                                        </a>
                                                    </td>
                                                    <td><a href="#">White Blouse Armani</a>
                                                    </td>
                                                    <td>2</td>
                                                    <td>$123.00</td>
                                                    <td>$0.00</td>
                                                    <td>$246.00</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="<?php echo $app_path;?>img/basketsquare.jpg" alt="Black Blouse Armani">
                                                        </a>
                                                    </td>
                                                    <td><a href="#">Black Blouse Armani</a>
                                                    </td>
                                                    <td>1</td>
                                                    <td>$200.00</td>
                                                    <td>$0.00</td>
                                                    <td>$200.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5">Total</th>
                                                    <th>$446.00</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.content -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="shop-checkout3.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Payment method</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Place an order<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">

                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>$446.00</th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <th>$10.00</th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <th>$0.00</th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th>$456.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include("../view/footer.php"); ?>
