<?php
include("../model/database.php");
include("../model/customer_db.php");
        // Check email and password in database
		$email = $_GET['email'];
		$password = $_GET['password'];

		echo "EMAIL: ".$email." PASSWORD:".$password;

		
        if (is_valid_customer_login($email, $password)) {
            //$_SESSION['user'] = get_customer_by_email($email);
            echo "<p>YOU ARE LOGGED IN!</p>";
        } else {
            //include 'account/account_login_register.php';
            echo "<p>Login failed. Invalid email or password.</p>";
            
        }
?>