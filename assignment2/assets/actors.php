<?php
/**
 * Created by PhpStorm.
 * User: 001315433
 * Date: 10/16/2017
 * Time: 8:55 AM
 */
require_once("dbconn.php");
function getActorsAsTable($db)
{
    try {
        $sql = "SELECT * FROM actors";
        $sql = $db->prepare($sql);
        $sql->execute();
        $actors = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($actors as $actor) {
                $table .= "<tr><td>" . $actor['firstname'] . "</td><td>" . $actor['lastname'] . "</td><td>" . $actor['dob'] . "</td><td>". $actor['height'] . "</td>";
                $table .= "<td><form method='post' action='#'><input type='hidden' name='id' value='". $actor['id'] ."' /><input type='submit' name='action' value='Edit' /></form></td>";
                $table .= "<td><form method='post' action='#'><input type='hidden' name='id' value='". $actor['id'] ."' /><input type='submit' name='action' value='Delete' /></form></td>";
            }
                $table .= "</table>" . PHP_EOL;
            } else {
                $table = "Life is sad. There are no actors." . PHP_EOL;
            }
            return $table;
        } catch(PDOException $e){
            die("There was a problem getting the actors.");
        }
}

