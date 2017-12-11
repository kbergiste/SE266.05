<?php
/**
 * Created by PhpStorm.
 * User: 001315433
 * Date: 12/11/2017
 * Time: 1:56 PM
 */
require_once("dbconn.php");
include_once("header.php");
function getAccountsAsTable($db)
{
    try {
        $sql = "SELECT * FROM account";
        $sql = $db->prepare($sql);
        $sql->execute();
        $accounts = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($accounts as $account) {
                $table .= "<tr><td>" . $account['email'] . "</td><td>" . $account['phone'] . "</td><td>" . $account['heard'] . "</td><td>". $account['contact'] . "</td><td>" . $account['comments'] . "</td>";

            }
            $table .= "</table>" . PHP_EOL;
        } else {
            $table = "There are no accounts." . PHP_EOL;
        }
        return $table;
    } catch(PDOException $e){
        die("There was a problem getting the accounts.");
    }
}
