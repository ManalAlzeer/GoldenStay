<!DOCTYPE HTML>
<html>
<head>
 <title>Profile Page</title>
 <?php include "header.php" ?>
</head>
<body>
  <div id="main">
    <div id="header">
    <?php include "logoheader.php" ?>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li ><a href="login.php">Login</a></li>
          <li class="selected"><a href="all.php">Hotel List</a></li>
          <li><a href="contact.php">About Us</a></li>
        </ul>
      </div>
    </div>
<div id="site_content">
<div id="content">
<div class="form_settings">

<!-- start Display Hotel -->
 <table border = "0">             
<?php 
$user='root';
$pass='';
$db='goldenstay';
$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );	  
  
if(isset($_POST['selected'])){
$selected = $_POST['selected'];
}else{
  $selected=$_POST['hotel'];}

$q = "SELECT id , name , logo , description  FROM item WHERE id = '$selected' ";
$result = mysqli_query($con, $q);    
while($row = mysqli_fetch_assoc($result))
 {
 //  display results
 print( "<tr>" );
 print ("<td><p><h2> Hotel ID : ".$row['id']."</h2>");
  print ("<h1>".$row['name']."</h1></p></td></tr>");
 print ("<tr><td><img style ='width: 400px; height: 300px;' src='images/".$row['logo']."' ></td></tr>");
 print ("<tr><td><p><h2> Description : </h2> ".$row['description']."</p></td></tr>");
 
 }
?>
</table>
<!-- end Display Hotel -->

<!-- start overall Hotel -->
<?php
$qavg="SELECT avg(rating) AS average from review WHERE item_id='$selected'";
$results=mysqli_query($con,$qavg);


if($rows = mysqli_fetch_assoc($results)){
	foreach ( $rows as $key );
print("<h1> Average Rating : $key  </h1> ");}
?>
<!-- end overall Hotel -->



<!-- start Display Comment -->
<table style="width:100%; border-spacing:0;">
<tr><th>Name</th><th>Comment</th><th>Rating</th></tr>
<?php 
$q3 = "SELECT  name , body , rating FROM review where item_id='$selected'";
$result2 = mysqli_query($con,$q3);
while($row2 = mysqli_fetch_assoc($result2)){
      	echo "<tr><td>".$row2['name']."</td><td>".$row2['body']."</td><td>".$row2['rating']."</td></tr>";	
}?>
</table>
<!-- end Display Comment -->

<!-- start code php insert -->

<?php 

if(isset($_POST['insert'])){
  $idh = $_POST['hotel'];
  $name = $_POST['name'];
  $textarea = $_POST['textarea'];
  $reting = $_POST['points'];
  $qr ="INSERT INTO review (item_id , name , body , rating) VALUES ( '$idh' , '$name' , '$textarea' , '$reting' )";
  mysqli_query($con,$qr);

   }
  else{print("");}
  ?>

<!--end code php insert -->    
     


<!-- start Insert Comment -->		 
<form method ="POST" action="profile.php" enctype="multipart/form-data"  > 
<p><span>HotelID : </span><input type="text" name="hotel" /></p>
<p><span>UserName : </span><input type="text" name="name" /></p>
<p><span>YourComment : </span>
<textarea rows="8" cols="50" name="textarea"></textarea></p>
<p><span>YourRating : </span><input type="number" name="points" step="1" min="0" max="10"></p>
<?php
echo "<input type ='hidden' name='$selected' value='".$row['$selected']."'> ";
?>
<br><br><input style=" height: 33px; padding: 2px 0 3px 0;  cursor: pointer;  background: #3B3B3B; color: #FFF; width: 99px; border: 0; " type="submit" name="insert" value="Enter" />
</form>	
<!-- end Insert Comment -->

</div>
</div>
</div>
<?php include "footer.php" ?>
  </div>
</body>
</html>