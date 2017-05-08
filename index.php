<?php
require('model/db.php');
require('model/db_register.php');
require('model/db_login.php');

$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
   $action = "show_login_page";
}
if($action == "show_login_page"){
       header("Location: login.php");
}
else if($action=='test_user')
{
      $username = $_POST['username'];
      $password = $_POST['password'];
      $suc = isUserValid($username,$password);
     
       if($suc == true){
	include_once('todo.php');
       }
        else{
 header("Location: view/badInfo.php");
        }
}

else if($action == 'register')
{

  $name = filter_input(INPUT_POST, 'username');
  $pass = filter_input(INPUT_POST, 'password');
  $firstname = filter_input(INPUT_POST, 'fname');
  $lastname = filter_input(INPUT_POST, 'lname');
  $email = filter_input(INPUT_POST, 'email');

   $user_exists = createUser($name,$pass,$firstname,$lastname,$email);
   header("Location: login.php");
}//
//else{
 //header("Location: view/badInfo.php");
   // }

else if($action == "edit"){
    $id = $_POST['item_id'];
    header("Location: edit.php");

}else if($action == "delete"){

    $id = $_POST['item_id'];
    $sql = 'delete from todos where taskid = "'.$id.'"';
    $results = runQuery($sql);

/*    $owner_id = $_COOKIE['userid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?userid=$userid&fname=$fname&lname=$lname");
*/
}else if($action == "complete"){
    $item_id = $_POST['item_id'];
    $isdone = 1;
    $sql ='UPDATE todos SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);
/*
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?userid=$userid&fname=$fname&lname=$lname");
*/
}else if($action == "incomplete"){
    $item_id = $_POST['item_id'];
    $isdone = 0;
    $sql ='UPDATE todos SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);
/*
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?userid=$userid&fname=$fname&lname=$lname");
*/
}else if($action == "add_task"){
    $userid = $_COOKIE['userid'];
    $useremail = $_COOKIE['useremail'];
    $due_date = $_POST['duedate'];
    $create_date = $_POST['createddate'];
    $task = $_POST['task'];
    $isdone = 0;
    $sql = 'INSERT INTO todos (`useremail`, `userid`, `createddate`, `duedate`, `task`, `isdone`) VALUES ("'.$useremail.'", "'.$userid.'", "'.$create_date.'", "'.$due_date.'", "'.$task.'", "'.$isdone.'")';
    $result = runQuery($sql);
/*
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?userid=$userid&fname=$fname&lname=$lname");
*/
}else if($action == 'after_edit'){
    $task = $_POST['task'];
    $duedate = $_POST['duedate'];
    $createddate = $_POST['createddate'];
    $item_id = $_POST['item_id'];
    $sql ='UPDATE todos SET `task` = "'.$task.'", `duedate` = "'.$duedate.'",`createddate` = "'.$createddate.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);
/*
    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?userid=$userid&fname=$fname&lname=$lname");
*/
}

?>