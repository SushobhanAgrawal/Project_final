<?php
function getItem($username){
 global $db;
$query = 'select * from todos where userid=:userid';
$statement = $db-> prepare($query);
$statement->bindValue(':userid',$username);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
return $result;
}
?>
