<?php
//require('db.php');
//require('db_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Todo List</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <hr size="100">
  <?php
  echo "<div style='text-align:right'><h2>Welcome ".$_COOKIE['login']." !!</h2></div>";
  ?><hr>
    
  <p><a href="newtask.php?userid=$userid&fname=$fname&lname=$lname">Todo List</a></p>
  <a href="logout.php">Logout</a>
  </div>
</body>
</html>