<!DOCTYPE html>
<?php
include_once("model/db_register.php");
include_once("model/db.php");
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="../index.php" method="post">
<input type = "hidden" name="action" value="register"/>
First Name : &nbsp<input type="text" name="fname" placeholder="Fname" required /><br><br>
Last Name : &nbsp<input type="text" name="lname" placeholder="Lname" required /><br><br>
User Name : <input type="text" name="username" placeholder="Username" required /><br><br>
Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp<input type="email" name="email" placeholder="Email" required /><br><br>
Password&nbsp&nbsp : &nbsp<input type="password" name="password" placeholder="Password" required /><br><br>
<input type="submit" name="submit" value="Register" /><br>
</form>
</div>
</html>