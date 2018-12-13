<?php
include("db.php");

session_start(); 

$username=($_POST['username']);
$password=($_POST['password']);

$result=mysql_query("SELECT count(*) FROM data WHERE username='$username' and password='$password'");

$count=mysql_fetch_array($result);

if($count==0){
  session_register("username");
  session_register("password");
  header("location:p.html");
} else {
  echo 'Wrong Username or Password! Return to <a href="index.html">login</a>';
  }
?>
