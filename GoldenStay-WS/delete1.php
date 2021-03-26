<!DOCTYPE html>
<html>
<head>
  <title>Delete Item </title>
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


$name = $_POST['name'];

$sql = "DELETE FROM item WHERE name = '$name'";
		

if(mysqli_query($con, $sql)){
    echo "Records deleted successfully.";
	print ("<a href = 'index.php'><h2> Go home </h2></a>");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>
	   

    </div>
    <?php include "footer.php" ?>
  </div>

</body>
</html>