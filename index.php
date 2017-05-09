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
        $id= $_COOKIE['id'];
       $result = getItem($id);   
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
    $id = $_POST['item_id'];
    include("edit.php");

}else if($action == "delete"){

    $id = $_POST['item_id'];
    deleteItem($id);
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    $id= $_COOKIE['id'];
    $result = getItem($id);  
    include("newtask.php");
        
}else if($action == "complete"){
    $item_id = $_POST['item_id'];
    $isdone = 1;
    completeItem($item_id,$isdone);
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    $id= $_COOKIE['id'];
    $result = getItem($id);  
    include("newtask.php");
       
}else if($action == "incomplete"){
    $item_id = $_POST['taskid'];
    $isdone = 0;
    $sql ='UPDATE todos SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    header("Location: newtask.php?userid=$userid&fname=$fname");
    
}else if($action == "add_task"){
    $userid = $_COOKIE['userid'];
    $useremail = $_COOKIE['login'];
    $id= $_COOKIE['id'];
    $due_date = $_POST['duedate'];
    $create_date = $_POST['createddate'];
    $task = $_POST['task'];
    $isdone = 0;
    echo $id;
   // addItem($userid, $useremail, $create_date, $task, $due_date, $isdone, $id);
    addItem($id, $useremail, $create_date, $task, $due_date, $isdone);
   $result = getItem($id);   
    include("newtask.php");
       
}else if($action == 'after_edit'){
    $task = $_POST['task'];
    $duedate = $_POST['duedate'];
    $createddate = $_POST['createddate'];
    $item_id = $_POST['item_id'];
    editItem($task,$duedate,$createddate,$item_id);
    $userid = $_COOKIE['userid'];
    $fname = $_COOKIE['login'];
    $id= $_COOKIE['id'];
    $result = getItem($id);  
    include("newtask.php");
}

?>