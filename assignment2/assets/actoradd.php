<?php
/**
 * Created by PhpStorm.
 * User: 001315433
 * Date: 10/23/2017
 * Time: 10:12 AM
 */
require_once("./dbconn.php");
require_once("./actors.php");
include_once("./header.php");
require_once("actorform.php");
function addActor($db, $firstname, $lastname, $dob, $height){
    try {
        $sql = $db->prepare("INSERT INTO actors VALUES (null, :firstname, :lastname, :dob, :height)");
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':dob', $dob);
        $sql->bindParam(':height', $height);
        $sql->execute();
        return $sql->rowCount();
    } catch(PDOException $e){
        die("There was a problem adding the actor.");
    }
}

include_once("./footer.php");