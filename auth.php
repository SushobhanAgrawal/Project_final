<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>

/*

<?php
session_start();
if(!session_is_registered(username)){ header("location:index.php"); 
}
 $username = $_SESSION['username'];
?>


*/