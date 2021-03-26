<!DOCTYPE HTML>
<html>

<head>
  <title>Edit items</title>
  <?php include "header.php" ?>
</head>

<body>
  <div id="main">
    <div id="header">
    <?php include "logoheader.php" ?>
      <div id="menubar">
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li><a href="all.php">Hotel List</a></li>
          <li class="selected"><a href="controlPanel.php">Control Panel</a></li>
          <li><a href="contact.php">About Us</a></li>
          <li ><a href="index.php">LogOut</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
	  <h1>Most searched hotels</h1>
        <ul>
          <li><a href="#">The four seasons hotel</a></li>
          <li><a href="#">The Ritz carlton hotel</a></li>
          <li><a href="#">Holiday inn</a></li>
          
        </ul></div>
		
		<div id="content">
        <div class="form_settings">
         <?php
$user='root';
$pass='';
$db='goldenstay';
$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
if(isset($_POST['edit'])){
$lname = $_POST['lname'];
$name = $_POST['name'];
$image = $_FILES['image']['name'];
$target = "images/".basename($image);
  
$description = $_POST['description'];
$categoryID = $_POST['categoryID'];

$q=	"UPDATE item SET name='$name' , logo='$image' , description='$description' , categoryID='$categoryID' WHERE name = '$lname'" ;

if(mysqli_query($con,$q)){


$q2 = "SELECT name , logo , description  FROM item WHERE name = '$name' ";
$result = mysqli_query($con, $q2);    
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "";
  	}else{
  		$msg = "Failed to upload image";
  	}
while($row = mysqli_fetch_assoc($result))
 {
 // build table to display results
 print( "<div> " );
  print ("<p><h1>".$row['name']."</h1></p>");
 print ("<img style ='width: 400px; height: 300px;' src='images/".$row['logo']."' >");
 print ("<p><h2> Description : </h2> ".$row['description']."</p>");
 print( " </div>" );	  }
}
else{
	print(" There is Error in Youre Edit");
}}
else {print(" There is Error in Youre Edit");}
// Close connection
mysqli_close($con);
?>

		 
		 </div>
		 </div>
<?php include "footer.php" ?>
  </div>
  </div>
</body>
</html>