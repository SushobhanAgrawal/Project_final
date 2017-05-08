<?php
require('model/db.php');
require('model/db_register.php');
require('model/db_login.php');
require('runq.php');

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
       $result = getItem($username);   
	     include('newtask.php');
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
}/*
else{
 header("Location: view/badInfo.php");
     }*/ 

else if($action == "edit"){
    $id = $_POST['taskid'];
    header("Location: edit.php");

}else if($action == "delete"){

    $id = $_POST['taskid'];
    $sql = 'delete from todos where taskid = "'.$id.'"';
//    $results = runQuery($sql);

    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    header("Location: newtask.php?userid=$userid&fname=$fname");
    
}else if($action == "complete"){
    $item_id = $_POST['taskid'];
    $isdone = 1;
    $sql ='UPDATE todos SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
//    $result = runQuery($sql);

    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    header("Location: newtask.php?userid=$userid&fname=$fname");
    
}else if($action == "incomplete"){
    $item_id = $_POST['taskid'];
    $isdone = 0;
    $sql ='UPDATE todos SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
 //   $result = runQuery($sql);

    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    header("Location: newtask.php?userid=$userid&fname=$fname");
    
}else if($action == "add_task"){
    $userid = $_COOKIE['userid'];
    $useremail = $_COOKIE['login'];
    $due_date = $_POST['duedate'];
    $create_date = $_POST['createddate'];
    $task = $_POST['task'];
    $isdone = 0;
    addItem($userid, $useremail, $create_date, $task, $due_date, $isdone);
     $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    $result = getItem($userid);   
    include("newtask.php?userid=$userid&fname=$fname&result=$result");
    
}else if($action == 'after_edit'){
    $task = $_POST['task'];
    $duedate = $_POST['duedate'];
    $createddate = $_POST['createddate'];
    $item_id = $_POST['item_id'];
    $sql ='UPDATE todos SET `task` = "'.$task.'", `duedate` = "'.$duedate.'",`createddate` = "'.$createddate.'" WHERE taskid = "'.$item_id.'"';
//    $result = runQuery($sql);

    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    header("Location: newtask.php?userid=$userid&fname=$fname");
}

?>