<html>
<body>
  <div class='container' align="center">

    <form method = "post" action="index.php" class="login">
      <div>
        <label><b>Username</b></label>
        <input type="text" name="reg_uname" placeholder="Enter Username" required>
      </div>
      <div>
        <label><b>Password</b></label>
        <input type="password" name="reg_password" placeholder="Enter Password" required>
        <input type ="hidden" name="action" value="test_user">
      </div>
      <div>
        <button type="submit">Login</button>     
      </div>
    </form>

    <form action="register.php" class="register">
      <div>
        <button type="submit">Sign up</button>
      </div>
    </form>

  </div>
</body>
</html>