<!DOCTYPE html>
<html>
<head>
  <title>puplisher view</title>
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

 
 $email = $_POST["email"];
 $uname= $_POST["uname"];
 $psw = $_POST["psw"];
	   

 $q2 = "INSERT INTO admin (username , password, email) VALUES ('$uname' , '$psw', '$email')";

if (! mysqli_query($con,$q2))

{

print( "<p>Could not execute query!</p>" ); 
die( mysqli_error() );
}

print("<h1> Welcome " .$uname. " To GoldenStay WebSite </h1> ");
print("<a href = 'controlPanel.php'><h3> Go to Control panel </h3></a> ");


mysqli_close( $con );
?>
    </div>
    <?php include "footer.php" ?>
  </div>

</body>
</html>