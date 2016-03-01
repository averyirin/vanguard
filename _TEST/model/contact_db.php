<?php
function insert_contact($firstName, $lastName, $email, $subject, $message) {

    try{
    global $db;
   // $password = sha1($email . $password);
    $query = '
        INSERT INTO contact (firstName, lastName, email, subject, message)
        VALUES (firstName = :firstName,
            lastName = :lastName, 
            email = :email, 
            subject = :subject, 
            message = :message)';

    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName,PDO::PARAM_STR);
    $statement->bindValue(':lastName', $lastName,PDO::PARAM_STR);
    $statement->bindValue(':email', $email,PDO::PARAM_STR);
    $statement->bindValue(':subject', $subject,PDO::PARAM_STR);
    $statement->bindValue(':message', $message,PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor();
    return true;

    }catch(Exception $error){
    return false;

    }
}

?>