<?php
require '../model/database.php';
require '../model/customer_db.php';

$custID = filter_input(INPUT_POST, 'custID');
$firstName = filter_input(INPUT_POST, 'fName');
$lastName = filter_input(INPUT_POST, 'lName');
$street = filter_input(INPUT_POST, 'street');
$postalCode = filter_input(INPUT_POST, 'postalCode');
$province = filter_input(INPUT_POST, 'province');
$phone = filter_input(INPUT_POST, 'phone');
$email_account = filter_input(INPUT_POST, 'email_account');
$action = filter_input(INPUT_POST, 'action');
$password = filter_input(INPUT_POST, 'password');
$confirm_password = filter_input(INPUT_POST, 'confirm_password');


if ($action == "login") {
    echo "<p>TRY: ".$email_account." ".$password."</p>";
    if (is_valid_customer_login($email_account, $password)) {
        //$_SESSION['user'] = get_customer_by_email($email);
        echo "<p>Logged in</p>";
    }else{

        echo "<p>not valid</p>";
    }
} else if ($action == "register") {
    if(is_valid_customer_register($password, $confirm_password)){
        create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account, $password);
        echo "thank you for registering";
    }
} else if ($action == "edit_info") {

} else if ($action == "edit_pw") {

}
?>

