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
    $id=$result[0]['id'];
    setcookie('login',$fullname);
    setcookie('userid',$username);
    setcookie('id',$id);
    

    return true;
  }
  else 
  {
     unset($_COOKIE['login']);
     unset($_COOKIE['userid']);
     unset($_COOKIE['id']);
     setcookie('login', false);
     setcookie('userid', false);
     setcookie('id', false);
     return false;    
  }
}

function addItem($id, $useremail, $createddate, $task, $duedate, $isdone)
{
 global $db;
 $query = 'INSERT INTO todos (userid, useremail, createdate, task, duedate, isdone) VALUES (:userid, :useremail, :createdate, :task, :duedate, :isdone)';
$statement = $db-> prepare($query);
$statement->bindValue(':userid',$id);
$statement->bindValue(':useremail',$useremail);
$statement->bindValue(':createdate',$createdate);
$statement->bindValue(':task',$task);
$statement->bindValue(':duedate',$duedate);
$statement->bindValue(':isdone',$isdone);
$statement->execute();
$result=$statement->fetchAll();
$statement->closeCursor();
}

function editItem($task,$date,$createdate,$item_id)
{
global $db;
 $query = 'UPDATE todos SET task = :task, duedate = :duedate,createdate = :createddate WHERE taskid = :item_id';
  $statement = $db-> prepare($query);
  $statement->bindValue(':task',$task);
  $statement->bindValue(':duedate',$date);
  $statement->bindValue(':createddate',$createdate);
  $statement->bindValue(':item_id',$item_id);
  $statement->execute();
  $statement->closeCursor();
}

function deleteItem($id){
  global $db;
  $query= 'delete from todos where taskid = :id';

   $statement = $db-> prepare($query);
     $statement->bindValue(':id',$id);
       $statement->execute();
       $statement->closeCursor();

}

function completeItem($taskid,$isdone)
{
global $db;
 $query = 'UPDATE todos SET isdone = :isdone WHERE taskid = :taskid';
  $statement = $db-> prepare($query);
  $statement->bindValue(':isdone',$isdone);
  $statement->bindValue(':taskid',$taskid);
  
  $statement->execute();
  $statement->closeCursor();
}

?>