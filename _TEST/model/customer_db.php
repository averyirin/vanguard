<?php

//customer login
function is_valid_customer_login($email, $pw) {
    global $db;
   // $password = sha1($email . $password);
    $password = $pw;
    $query = '
        SELECT * FROM users
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email,PDO::PARAM_STR);
    $statement->bindValue(':password', $password,PDO::PARAM_STR);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

//create customer
function create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers (first_name, last_name, street, province, email, postal_code, tel)
        VALUES (:firstName,:lastName,:street,:province,:email,:postalCode,:tel)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName,PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastName,PDO::PARAM_STR);
        $statement->bindValue(':street', $street,PDO::PARAM_STR);
        $statement->bindValue(':province', $province,PDO::PARAM_STR);
        $statement->bindValue(':email', $email_account,PDO::PARAM_STR);
        $statement->bindValue(':postalCode', $postalCode,PDO::PARAM_STR);
        $statement->bindValue(':tel', $phone,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

//update info
function update_customer_info($name, $address, $email, $password) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers (name, email)
        VALUES (firstName = :firstName,
            email = :email)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $name,PDO::PARAM_STR);
        $statement->bindValue(':email', $email,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

//update password
function update_customer_password(){

}

?>