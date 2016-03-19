
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">New account</h2>

                            <p class="lead">Not our registered customer yet?</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <p class="text-muted">If you have any questions, please feel free to <a href="<?php echo $home_path;?>contact.php">contact us</a>, our customer service center is working for you 24/7.</p>

                            <hr>
                            <form action = "customer_controller.php" method="get"><!-- NEED TO INCLUDE ACTION -->
                                <input type="text" value="register" name="action">
                                <!-- first name last name row-->
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