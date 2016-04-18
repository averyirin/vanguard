<?php
if(ISSET($_COOKIE['email'])){
  $email = filter_input(INPUT_COOKIE,'email');
}
?>

<form action="<?php echo $home_path;?>account/customer_controller.php" method="post">
    <input type="hidden" value="login" name="action">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email_account" value="<?php echo $email; ?>" id="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">

        <label>
            <input type="checkbox" name="remember" id="remember"
            <?php if(isset($email))echo "checked"; ?>   > Remember Me</label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
    </div>
</form>