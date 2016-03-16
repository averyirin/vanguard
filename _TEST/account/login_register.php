<?php $current_page="register";
include("../util/routing_path.php");
include("../view/header.php");
include "./login_modal.php";
?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>New account / Sign in</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo $home_path;?>index.php">Home</a>
                            </li>
                            <li>New account / Sign in</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <!-- Include new account form -->
                    <?php include("new_account.php");?>
                    <!-- Include for already existing user login -->
                    <?php include("existing_login.php");?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER *** -->
        <?php include("../view/footer.php"); ?>