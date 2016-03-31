<?php
//customer login
function is_valid_password($password, $confirm)
{
    $valid = ($password == $confirm);
    return $valid;
}

//customer login
function is_valid_customer_login($email, $password)
{
    global $db;
    // $password = sha1($email . $password);
    $query = '
        SELECT * FROM vanguard_customers AS C
        JOIN vanguard_pwd AS P
        ON C.id = P.cust_id
        WHERE C.email = :email AND P.password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':password', $password, PDO::PARAM_STR);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

//create customer
function create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account, $password)
{
    try {
        global $db;
        //comment
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers
        (first_name, last_name, street, province, email, postal_code, tel)
        VALUES (:firstName,:lastName,:street,:province,:email,:postalCode,:tel)';


        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $statement->bindValue(':street', $street, PDO::PARAM_STR);
        $statement->bindValue(':province', $province, PDO::PARAM_STR);
        $statement->bindValue(':email', $email_account, PDO::PARAM_STR);
        $statement->bindValue(':postalCode', $postalCode, PDO::PARAM_STR);
        $statement->bindValue(':tel', $phone, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();

        $id = $db->lastInsertId();
        //insert password
        $query = '
        INSERT INTO vanguard_pwd (cust_id, password)
        VALUES (:id,:password)';


        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();

        return true;

    } catch (Exception $error) {
        return false;

    }
}

//update info
function update_customer_info($id, $firstName, $lastName, $street, $postalCode, $province, $phone, $email_account)
{
    try {
        global $db;
        // $password = sha1($email . $password);
        $query = '
        UPDATE vanguard_customers
        SET ( first_name  =:firstName,
              last_name   =:lastName,
              street      =:street,
              province    =:province,
              email       =:email,
              postal_code =:postalCode,
              tel         =:tel)                                    )
        WHERE (id = :id)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $statement->bindValue(':street', $street, PDO::PARAM_STR);
        $statement->bindValue(':province', $province, PDO::PARAM_STR);
        $statement->bindValue(':email', $email_account, PDO::PARAM_STR);
        $statement->bindValue(':postalCode', $postalCode, PDO::PARAM_STR);
        $statement->bindValue(':tel', $phone, PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();

        return true;

    } catch (Exception $error) {
        return false;

    }
}

//update password
function update_customer_password($id, $password)
{
    try {
        global $db;

        $query = '
        UPDATE vanguard_pwd
        SET ( password  =:password)                                    )
        WHERE (id = :id)';

        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);
        $statement->bindValue(':password', $password, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    } catch (Exception $error) {
        return false;
    }
}

?>