
    <!-- *** LOGIN MODAL ***
_________________________________________________________ -->
    <div aria-hidden="true" aria-labelledby="Login" class="modal fade" id=
    "login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" class="close" data-dismiss=
                    "modal" type="button">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $app_path;?>account/login-validation.php" method="get">
                        <div class="form-group">
                            <input class="form-control" id="email_modal" name="email"
                            placeholder="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="password_modal" name="password"
                            placeholder="password" type="password">
                        </div>
                        <p class="text-center"><button class=
                        "btn btn-template-main"><i class="fa fa-sign-in"></i>
                        Log in</button></p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href=
                    "<?php echo $app_path; ?>account/customer-register.php"><strong>Register now</strong></a>!
                    It is easy and done in 1&nbsp;minute and gives you access
                    to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div><!-- *** LOGIN MODAL END *** -->
