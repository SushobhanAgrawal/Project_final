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
       include('login.php');
}
else if($action=='test_user')
{

      $username = $_POST['username'];
      $password = $_POST['password'];
      echo $username.$password;
      $suc = isUserValid($username,$password);
       if($suc == true){

//	$result = getTodoItems($_COOKIE['my_id']);

	include('todo.php');
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
}
else{
 header("Location: view/badInfo.php");
    }

?>