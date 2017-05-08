<?php
function isUserValid($username, $password){
 global $db;
 $query = 'select * from users where username=:username and password=:password';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
$count=$statement->rowCount();
  if ($count==1)
  {
    $fullname=$result[0]['fname']." ".$result[0]['lname'];
    setcookie('login',$fullname);
    //setcookie('userid',$username)
    //setcookie('fname',$fname)
    //setcookie('lname',$lname)
    return true;
  }
  else 
  {
    return false;
  }
}