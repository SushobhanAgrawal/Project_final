<?php
include_once("db.php");
//include("auth.php");
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
  echo "<div style='text-align:right'><h1>Welcome ". $_SESSION['fname']."!</h1></div>";
  ?>
  <h2> Todo list : </h2>
  <div class="wrap">
  <div class="task-list">
    <ul>
         <?php require("includes/connect.php"); ?>
    <?ul>



  <p><a href="todo.php">Home</a></p>
  <a href="logout.php">Logout</a>
  </div>
</body>
</html>