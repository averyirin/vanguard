<?php $current_page="orders";
include("../util/routing_path.php");
include("../view/header.php");
include "../account/login_modal.php";
?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>My orders</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?php echo $home_path;?>index.php">Home</a>
                            </li>
                            <li>My orders</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">


                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9" id="customer-orders">

                        <p class="text-muted lead">If you have any questions, please feel free to <a href="../contact.php">contact us</a>, our customer service center is working for you 24/7.</p>

                        <div class="box">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td><a href="<?php echo $home_path;?>order/order_detail.php" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-info">Being prepared</span>
                                            </td>
                                            <td><a href="<?php echo $home_path;?>order/order_detail.php" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-success">Received</span>
                                            </td>
                                            <td><a href="<?php echo $home_path;?>order/order_detail.php" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-danger">Cancelled</span>
                                            </td>
                                            <td><a href="<?php echo $home_path;?>order/order_detail.php" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 1735</th>
                                            <td>22/06/2013</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-warning">On hold</span>
                                            </td>
                                            <td><a href="<?php echo $home_path;?>order/order_detail.php" class="btn btn-template-main btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <?php include("../view/cust_sidebar.php");?>

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->

                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER *** -->
        <?php include("../view/footer.php"); ?>