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
    $username=$result[0]['username'];
    setcookie('login',$fullname);
    setcookie('userid',$username);
    return true;
  }
  else 
  {
     unset($_COOKIE['login']);
     unset($_COOKIE['userid']);
        setcookie('login', false);
        setcookie('userid', false);
        return false;    
  }
}

function addItem($userid, $useremail, $createddate, $task, $duedate, $isdone)
{
 global $db;
 $query = 'INSERT INTO todos (userid, useremail, createdate, task, duedate, isdone) VALUES (:userid, :useremail, :createdate, :task, :duedate, :isdone)';
$statement = $db-> prepare($query);
$statement->bindValue(':userid',$userid);
$statement->bindValue(':useremail',$useremail);
$statement->bindValue(':createdate',$createdate);
$statement->bindValue(':task',$task);
$statement->bindValue(':duedate',$duedate);
$statement->bindValue(':isdone',$isdone);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
}
?>