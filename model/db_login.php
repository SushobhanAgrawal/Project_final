<?php
function isUserValid($username, $password){
 global $db;
 $query = 'select * from users where username=:username and password=:password';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->execute();
$statement->closeCursor();
$count=$statement->rowCount();
  if (count==1)
  {
    return true;
  }
  else 
  {
    return false;
  }
}