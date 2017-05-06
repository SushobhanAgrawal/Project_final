<?php
require('model/db.php');
require('model/db_register.php');
//require('model/login_db.php');

$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
 $action = "show_login_page";
}
if($action == "show_login_page")
{
 include('view/login.php');
}


else if($action=='test_user'){




//$category_id = filter_input(INPUT_POST, 'category_id', 
  //          FILTER_VALIDATE_INT);
    //$code = filter_input(INPUT_POST, 'code');




$username = $_POST['reg_uname'];
$password = $_POST['reg_password'];





$suc = isUserValid($username,$password);
$userExists = isUserExist($username);

if($userExists == true){
   if($suc == true){
	//echo $_COOKIE['my_id'];
	$result = getTodoItems($_COOKIE['my_id']);
	//echo $result;
	include("todo_manager/list.php");
   }else{

 header("Location: view/loginError.php");

   }


}else{
 header("Location: view/badInfo.php");
}

/*if($suc == true )
{
$result = getTodoItems($_COOKIE['my_id']);
include("view/list.php");

}else{
 header("Location: view/badInfo.php");
}*/



}else if($action == 'register')
{

  $name = filter_input(INPUT_POST, 'username');
  $pass = filter_input(INPUT_POST, 'password');
  $firstname = filter_input(INPUT_POST, 'fname');
  $lastname = filter_input(INPUT_POST, 'lname');
  $email = filter_input(INPUT_POST, 'email');
  
  
   $user_exists = createUser($name,$pass,$firstname,$lastname,$email);
   header("Location: login.php");

 echo "we want to create a registrar";
 }
 
 
 
 
 /*if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
 
 
 /* $name = filter_input(INPUT_POST, 'reg_uname');
  $pass = filter_input(INPUT_POST, 'reg_password');
  $firstname = filter_input(INPUT_POST, 'reg_firstname');
  $lastname = filter_input(INPUT_POST, 'reg_lastname');
  $email = filter_input(INPUT_POST, 'reg_email');
  $phonenumber = filter_input(INPUT_POST, 'reg_phonenumber');
  //$birthday = filter_input(INPUT_POST, 'reg_birthday');
  //$birthmonth = filter_input(INPUT_POST, 'reg_birthmonth');
 // $birthyear = filter_input(INPUT_POST, 'reg_birthyear');
  
  $date = filter_input(INPUT_POST, 'reg_birthdate');
// $birthdate = $_POST['reg_birthyear'] . '-' . $_POST['reg_birthmonth'] . '-' . $_POST['reg_birthday'];
$birthdate =  date("Y-m-d", strtotime($date));
$gender = filter_input(INPUT_POST, 'reg_gender');

//$date = "07/12/2010";
//$your_date = date("Y-m-d", strtotime($date));

   if(isset($name) )
	  //and isset($lastname) and isset($firstname) and isset($email) and isset($phonenumber) 
	  //and isset($birthday) and isset($birthmonth) and isset($birthyear) and isset(gender) and isset($pass)) 
  {
    //$pass = filter_input(INPUT_POST, 'reg_password');
   // $user_exists = createUser($name,$pass,$firstname,$lastname,$email,$phonenumber,$birthday,$birthmonth,$birthyear,$gender);
    $user_exists = createUser($name,$pass,$firstname,$lastname,$email,$phonenumber,$birthdate,$gender);
    if($user_exists == true)
    {
   include('view/user_exists.php');
    }else{
		header("Location: view/login.php");
    }

  }

}else if($action == 'add')
{
  if(isset($_POST['description']) and $_POST['description']!='' ){
   addTodoItem($_COOKIE['my_id'],$_POST['description']);
  }
  $result = getTodoItems($_COOKIE['my_id']);
  include('todo_manager/list.php');
}else if($action == 'delete'){
 if(isset($_POST['item_id'])){
 $selected = $_POST['item_id'];
 deleteTodoItem($_COOKIE['my_id'],$selected);

 }
 $result = getTodoItems($_COOKIE['my_id']);
 include('todo_manager/list.php');
}*/
?>
