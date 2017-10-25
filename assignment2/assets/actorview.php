<?php
/**
 * Created by PhpStorm.
 * User: 001315433
 * Date: 10/25/2017
 * Time: 9:40 AM
 */
require_once("./dbconn.php");
require_once("./actors.php");
include_once("./header.php");
$db = dbConn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? "";
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING) ?? "";
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING) ?? "";
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING) ?? "";
$height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_STRING) ?? "";

switch($action){
    case "Add":
        addActor($db, $firstname, $lastname, $dob, $height);
}
echo getActorsAsTable($db);
include_once("./footer.php");
