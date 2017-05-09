<?php
function createUser($username, $password,$firstname,$lastname,$email,$pnum,$bday,$gender){
 global $db;
 $query = 'insert into users (username,password,fname,lname,email, pnum, bday, gender) values (:username,:password,:firstname,:lastname,:email,:pnum,:bday,:gender)';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->bindValue(':firstname',$firstname);
$statement->bindValue(':lastname',$lastname);
$statement->bindValue(':email',$email);
$statement->bindValue(':pnum',$pnum);
$statement->bindValue(':bday',$bday);
$statement->bindValue(':gender',$gender);
$statement->execute();
$statement->closeCursor();
return true;
}