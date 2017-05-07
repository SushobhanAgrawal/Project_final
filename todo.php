<?php
//require('db.php');
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
  <main>

      <h1> To-do list : </h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
    </table>

    <h2>Add Task</h2>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List</a></p>

</main>
    
  <p><a href="todo.php">Home</a></p>
  <a href="logout.php">Logout</a>
  </div>
</body>
</html>