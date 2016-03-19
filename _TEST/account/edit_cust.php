<?php $current_page = "account";
include("../util/routing_path.php");
include("../view/header.php");
include "./login_modal.php";

?>


    <div id="heading-breadcrumbs" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>My Account</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">

                        <li><a href="<?php echo $home_path; ?>index.php">Home</a>
                        </li>
                        <li>My account123</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="clearfix">

        <div class="container">

            <div class="row">

                <!-- *** LEFT COLUMN ***
         _________________________________________________________ -->

                <div class="col-md-9 clearfix" id="customer-account">

                    <p class="lead">Change your personal details or your password here.</p>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas.</p>

                    <div class="box">

                        <div class="heading">
                            <h3 class="text-uppercase">Change password</h3>
                        </div>

                        <form><!-- WE NEED TO INCLUDE ACTION -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Old password</label>
                                        <input type="password" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">New password</label>
                                        <input type="password" class="form-control" id="password_1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retype new password</label>
                                        <input type="password" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save new
                                    password
                                </button>
                            </div>
                        </form>

                    </div>
                    <!-- /.box -->


                    <div class="box clearfix">
                        <div class="heading">
                            <h3 class="text-uppercase">Personal details</h3>
                        </div>

                        <form action = "customer_controller.php" method="post"><!-- NEED TO INCLUDE ACTION -->
                            <!-- first name last name row-->
                            <input type="hidden" name ="action" value ="edit_info">
                            <input type="hidden" name ="custID" value ="custID">


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" name="fName" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" name="lName" id="lastname">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" name="street" id="street">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="postal code">Postal Code</label>
                                        <input type="text" class="form-control" name="postalCode" id="postalCode">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="Province">Province</label>
                                            <select class="form-control" name="province" id="province">
                                                <option></option>
                                                <option>Ontario</option>
                                                <option>British Columbia</option>
                                                <option>Quebec</option>
                                                <option>Yukon</option>
                                                <option>P/E.I.</option>
                                                <option>Nova Scotia</option>
                                                <option>New Brunswick</option>
                                                <option>Newfoundland and Labrador</option>
                                                <option>Alberta</option>
                                                <option>Northwest Territories</option>
                                                <option>Manitoba</option>
                                                <option>Nunavut</option>
                                                <option>Saskatchewan</option>
                                            </select>
                                    </div>
                                </div>

                                </div>

                            <!-- Telephone and email-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_account">Email</label>
                                        <input type="text" class="form-control" name="email_account" id="email_account">
                                    </div>
                                </div>
                            </div>

                            <!-- submit row -->
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save
                                        changes
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->

                <!-- *** RIGHT COLUMN ***
         _________________________________________________________ -->

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->

                    <?php include("../view/cust_sidebar.php"); ?>

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <!-- *** RIGHT COLUMN END *** -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


    <!-- *** FOOTER ***
_________________________________________________________ -->
<?php include("../view/footer.php"); ?>