 <?php
session_start();
session_destroy();



setcookie('login',false);
 unset($_COOKIE['login']);

 
setcookie('userid',false);
 unset($_COOKIE['userid']);
 
 
 
setcookie('id',false);
 unset($_COOKIE['id']);





// Redirecting To Home Page
header("Location: login.php");
exit;
?>
