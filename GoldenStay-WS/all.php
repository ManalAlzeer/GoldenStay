<!DOCTYPE HTML>
<html>

<head>
  <title>All items</title>
  <?php include "header.php" ?>
</head>

<body>
  <div id="main">
    <div id="header">
    <?php include "logoheader.php" ?>
      <div id="menubar">
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li ><a href="login.php">Login</a></li>
          <li class="selected"><a href="all.php">Hotel List</a></li>
          <li><a href="contact.php">About Us</a></li>
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
        </ul>
       
      </div>
      <div id="content">
	  <?php 
	  $user='root';
          $pass='';
          $db='goldenstay';
          $con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
      ?>
	  <!-- start High Price Hotels -->
      <h1 style = "color: #D97A1B; font-size : 300% "><strong>High Price</strong></h1>
	  <br>
		<form method ="POST" action="profile.php" enctype="multipart/form-data" >
		<table border = "0">
		<?php
		$q ="SELECT id, name , logo  FROM item WHERE categoryID = '1' ";
        $result = mysqli_query($con, $q); 
		while($row = mysqli_fetch_assoc($result))
          {
        print ("<tr><td><h1>".$row['name']."</h1>");
        print ("<img style ='width: 400px; height: 300px;' src='images/".$row['logo']."' ></td></tr>");
        print ("<tr><td><button type='submit' name='selected' value='".$row['id']."'> select </botton></td></tr>");
	    }?>
		</table></form>
		  
		<!-- end High Price Hotels -->
		
		
		<!-- start Medium Price Hotels -->
		<h1 style = "color: #D97A1B; font-size : 300% "><strong>Medium Price</strong></h1>
		<br>
	    <form method ="POST" action="profile.php" enctype="multipart/form-data" >
        <table border = "0">
		<?php
		$q ="SELECT id, name , logo  FROM item WHERE categoryID = '2' ";
        $result = mysqli_query($con, $q); 
		while($row = mysqli_fetch_assoc($result))
        {
        print ("<tr><td><h1>".$row['name']."</h1>");
        print ("<img style ='width: 400px; height: 300px;' src='images/".$row['logo']."' ></td></tr>");
        print ("<tr><td><button type='submit' name='selected' value='".$row['id']."'> select </botton></td></tr>");
	    }?>
		</table>
		</form>
		<!-- end Medium Price Hotels -->  	

		<!-- start Low Price Hotels -->
		<h1 style = "color: #D97A1B; font-size : 300% "><strong>Low Price</strong></h1>
		<br>
		<form method ="POST" action="profile.php" enctype="multipart/form-data" >
        <table border = "0">
		<?php
		$q ="SELECT id, name , logo  FROM item WHERE categoryID = '3' ";
        $result = mysqli_query($con, $q); 
		while($row = mysqli_fetch_assoc($result))
        {
        print ("<tr><td><h1>".$row['name']."</h1>");
        print ("<img style ='width: 400px; height: 300px;' src='images/".$row['logo']."' ></td></tr>");
        print ("<tr><td><button type='submit' name='selected' value='".$row['id']."'> select </botton></td></tr>");
	    }?>
		</table>
		</form>
	   </div>
    </div>
    <?php include "footer.php" ?>
  </div>
</body>
</html>