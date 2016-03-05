<?php
include("model/database.php");
include("model/contact_db.php");
        // Check email and password in database
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName= filter_input(INPUT_POST, 'lastName');
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
$subject= filter_input(INPUT_POST, 'subject');
$message= filter_input(INPUT_POST, 'message');

		echo "Subject: ".$subject;
        echo "<p>Message: ".$message."</p>";

		try{
            if (insert_contact($firstName, $lastName, $email, $subject, $message)) {
            //$_SESSION['user'] = get_customer_by_email($email);
            echo "<p>Message sent!</p>";
            } else { 
            //include 'account/account_login_register.php';
            echo "<p>Sending failed.</p>";
            
            }
        }catch(Exception $error){
            echo $error->getMessage();
        }
        
?>