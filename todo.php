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
  echo "<div style='text-align:right'><h1>Welcome ".$_COOKIE['login']."!</h1></div>";
  ?><hr>
  <h1> To-do list : </h1>
      <div class="wrap">
 <div class="task-list">
     <ul>
                <?php require("includes/connect.php"); ?>
     </ul>
 </div>
  <form class="add-new-task" autocomplete="off">
      <input type="text" name="new-task" placeholder="Add a new item..." />
 </form>
      </div>
  <p><a href="todo.php">Home</a></p>
  <a href="logout.php">Logout</a>
  </div>
</body>
</html>