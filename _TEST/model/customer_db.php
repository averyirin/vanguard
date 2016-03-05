<?php
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

?>