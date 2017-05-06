<?php
function createUser($username, $password,$firstname,$lastname,$email){
 global $db;
 $query = 'insert into users (username,password,fname,lname,email) values (:username,:password,:firstname,:lastname,:email)';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->bindValue(':firstname',$firstname);
$statement->bindValue(':lastname',$lastname);
$statement->bindValue(':email',$email);
$statement->execute();
$statement->closeCursor();
return true;
}