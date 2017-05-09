<!DOCTYPE html>
<?php
include_once("../model/db_register.php");
include_once("../model/db.php");
?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<hr size="100">
<div class="form">
<h1>Registration Form</h1><hr><br>
<form name="registration" action="../index.php" method="post">
<input type = "hidden" name="action" value="register"/>
First Name : <input type="text" name="fname" placeholder="Enter first name" required /><br><br>
Last Name : <input type="text" name="lname" placeholder="Enter last name" required /><br><br>
Gender : <br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female<br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male<br><br>
Phone Number : <br><input type="number" name="pnum" placeholder="Enter phone number" required /><br><br>
Birth Date : <br><input type="date" name="bday" required /><br><br>
User Name : <input type="text" name="username" placeholder="Enter Username" required /><br><br>
Email : <br><input type="email" name="email" placeholder="Enter Email" required /><br><br>
Password : <input type="password" name="password" placeholder="Enter Password" required /><br><br>
<input type="submit" name="submit" value="REGISTER" /> OR <a href = '../login.php'>LOGIN</a>
</form>
</div>
</html>