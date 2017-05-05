<?php
$dsn = 'mysql:host=sql1.njit.edu;dbname=sa929';
    $username = 'sa929';
    $password = 'zjjLfAnH';
try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>