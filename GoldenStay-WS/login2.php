<!DOCTYPE html>
<html>
<head>
<title>puplisher view </title>
<?php include "header.php" ?>
</head>

<body>
  <div id="main">
    <div id="header">
    <?php include "logoheader.php" ?>
      <div id="menubar">
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li class="selected"><a href="login.php">Login</a></li>
          <li><a href="all.php">Hotel List</a></li>
          <li><a href="contact.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
<?php
$user='root';
$pass='';
$db='goldenstay';
$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );

$uname= $_POST["uname"];
$psw = $_POST["psw"];

$q2 = "SELECT username FROM admin WHERE username = '$uname' and password = '$psw' ";

$result = mysqli_query($con, $q2);

if($row = mysqli_fetch_assoc($result)){
	foreach ( $row as $key );
print("<h1> Welcome $key Again </h1> ");
header('location: controlPanel.php');}

else{
	echo '<h1>Username or Password is wrong!</h1>';
    }


 
?>
<?php

mysqli_close( $con );
?>
    </div>
    <?php include "footer.php" ?>
  </div>
</body>
</html>