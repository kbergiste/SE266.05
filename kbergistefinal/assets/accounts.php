<?php
/**
 * Created by PhpStorm.
 * User: 001315433
 * Date: 12/11/2017
 * Time: 12:34 PM
 */


function addAccount($db, $email, $phone, $heard, $contact, $comments){
    try {
        $sql = $db->prepare("INSERT INTO account VALUES(null, :email , :phone, :heard, :contact, :comments) ");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':heard', $heard);
        $sql->bindParam(':contact', $contact);
        $sql->bindParam(':comments', $comments);
        $sql->execute();
        return $sql->rowCount();

    } catch(PDOException $e){
        die("There was a problem adding the account.");
    }
}
