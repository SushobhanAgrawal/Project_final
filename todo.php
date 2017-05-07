<?php
include_once("db.php");
//include('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Todo List</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php
  echo "<div style='text-align:right'><h2>Welcome ".$_COOKIE['login']." !!</h2></div>";
  ?><hr>
  <h1> To-do list : </h1>
      
  <p><a href="index.php">Home</a></p>
  <a href="logout.php">Logout</a>
  </div>
</body>
</html>