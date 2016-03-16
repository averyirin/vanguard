
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li <?php if($current_page =="orders")echo "class='active'";?>>
                                        <a href="<?php echo $home_path;?>account/customer-orders.php"><i class="fa fa-list"></i> My orders</a>
                                    </li>
                                    <li <?php if($current_page =="account")echo "class='active'";?>>
                                        <a href="<?php echo $home_path;?>account/customer-account.php"><i class="fa fa-user"></i> My account</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $home_path;?>index.php"><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->