<!DOCTYPE HTML>
<html>

<head>
  <title>Add Items</title>
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
    <?php
    $user='root';
    $pass='';
    $db='goldenstay';
    $con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
    

    if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
      
    $description = $_POST['description'];
    $categoryID = $_POST['categoryID'];
    
    $q ="INSERT INTO item (name , logo , description , categoryID) VALUES ('$name' ,'$image' , '$description', '$categoryID' )";
        
    mysqli_query($con,$q);
    
    
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
     print( " </div>" );	  
    
     }}
     
    ?>
	  <form method ="POST" action="add.php" enctype="multipart/form-data" >
	  <div>
	  
		<div class="form_settings">
       
	   <h1>Add item</h1><br>
		
		<div><p> Name Hotel: <input type="text" name="name"></p></div>
        
		<br><br>
		
			<div><p> Add Image: <input type="file" name="image" ></p></div>
        
		<br><br>
		
		<div> description: <br>
		<textarea name ="description" rows="20" cols="40" placeholder = " Say something About This Image ..."></textarea></div>
		 <br><br>
		 
		 
		 
        </div>
		<div> 
		      High Price :<input type="radio" name="categoryID" value="1"><br>
			  Medium Price:<input type="radio" name="categoryID" value="2"><br>
			  Low Price :<input type="radio" name="categoryID" value="3"><br>
		      
		 </div><br>
		<input style=" height: 33px; padding: 2px 0 3px 0;  cursor: pointer;  background: #3B3B3B; color: #FFF; width: 99px; border: 0; " type="submit" name="insert" value="Insert" />
		
		
    </div></form>

  
  
  
  </div>
	
		 
  </div>	 
  <?php include "footer.php" ?>
  </div>
  </div>
</body>
</html>