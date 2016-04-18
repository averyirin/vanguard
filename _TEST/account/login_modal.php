
    <!-- *** LOGIN MODAL ***
_______________________________________________________ -->


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
                    <?php include  "existing_login.php"; ?>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href=
                    "<?php echo $home_path; ?>account/login_register.php"><strong>Register now</strong></a>!
                    It is easy and done in 1&nbsp;minute and gives you access
                    to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div><!-- *** LOGIN MODAL END *** -->
