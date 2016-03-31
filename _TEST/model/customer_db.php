<?php
//salt
$salt ="";
//valid password
function is_valid_password($password, $confirm)
{
    $valid = ($password == $confirm);
    return $valid;
}

function get_id_from_email($email){
    global $db;
    $query = '
        SELECT id FROM vanguard_customers AS C
        WHERE C.email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $id = $statement->fetchAll();
    $statement->closeCursor();
    return $id;
}
//customer login
function is_valid_customer_login($email, $password)
{
    global $db;

    $loginPassword = hash_login(get_id_from_email($email),$password);
    // $password = sha1($email . $password);
    $query = '
        SELECT * FROM vanguard_customers AS C
        JOIN vanguard_pwd AS P
        ON C.id = P.cust_id
        WHERE C.email = :email AND P.password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':password', $loginPassword, PDO::PARAM_STR);
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
        global $salt;

        $newPassword = hash_password($password);

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
        $statement->bindValue(':password',$newPassword, PDO::PARAM_STR);
        $statement->execute();

        //insert SALT
        $query = '
        INSERT INTO vanguard_auth (cust_id, mac_address)
        VALUES (:id,:mac_address)';


        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_STR);
        $statement->bindValue(':mac_address',$salt, PDO::PARAM_STR);
        $statement->execute();

        return true;

    } catch (Exception $error) {
        // $e->getMessage();
        return false;

    } finally{
        if(isset($statement)){
            $statement->closeCursor();
        }
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


//hash login
function hash_login($id, $password){
    global $db;
    $query = '
        SELECT mac_address FROM vanguard_auth AS A
        WHERE A.cust_id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_STR);
    $statement->execute();
    $loginSalt = $statement->fetchAll();
    $statement->closeCursor();
    //hashed password
    return hash("sha256",$password.$loginSalt);
}

//hash password
function hash_password($password){
    global $salt;
    define("MAX_LENGTH",6);
    $intermediateSalt = md5(uniqid(rand(),true));
    $salt = substr($intermediateSalt,0,MAX_LENGTH);
    //hashed password
    return hash("sha256",$password.$salt);
}
?>