<?php
require_once("assets/dbconn.php");
require_once("assets/accounts.php");
include_once("assets/header.php");
include_once("assets/accountview.php");
$db = dbConn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? "";
$email = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? "";
$phone = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? "";
$heard = filter_input(INPUT_POST, 'heard', FILTER_VALIDATE_REGEXP,
array(
"options"=>array("regexp"=>'/^[SWO]$/')
)
) ?? "";
$contact = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? "";
$comments = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? "";
switch($action){
case "Submit":
addAccount($db, $email, $phone, $heard, $contact, $comments);
}
echo getAccountsAsTable($db);
include_once("assets/accountform.php");
include_once("assets/footer.php");

?>


