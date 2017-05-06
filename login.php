<?php
include_once("view/vlogin.php");
?>
<html>
<body>

  <div class='container' align="center">
      <h1>Login Page</h1>
    <form method ="post" action="index.php" class="login">
    <input type="hidden" name="action" value="test_user">
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