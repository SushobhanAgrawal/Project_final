<?php
include_once("view/vlogin.php");
?>
<html>
<body>

  <div class='container' align="center">
      <h1>Login Page</h1>
    <form method = "post" action="todo.php" class="login">
      <div>
        <label><b>Username</b></label>
        <input type="text" name="username" placeholder="Enter Username" required>
      </div>
      <div>
        <label><b>Password</b></label>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type ="hidden" name="action" value="test_user">
      </div>
      <div>
        <button type="submit">Login</button>     
      </div>
    </form>

//    <form action="view/register.php" class="register">
      <div>
<p>Not registered yet? &nbsp<a href = 'view/register.php'>Create an account</a></p>
      </div>
//    </form>

  </div>
</body>
</html>

/*

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>