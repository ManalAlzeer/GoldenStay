<!DOCTYPE HTML>
<html>

<head>
  <title>Golden Stay</title>
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
          
        </ul>
       
      </div>
      <div id="content">
        
      <h1>Delete Item: </h1><br>
      <form action="delete1.php" method="post">
      <label> Select a hotel from the list : <br><br>
          <select name = "name">
          <?php 
            $user='root';
            $pass='';
            $db='goldenstay';
            $con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );	  
            $q2 = "SELECT name FROM item  ";
            $result = mysqli_query($con, $q2); 

            while($row = mysqli_fetch_assoc($result)){
              print("<option value=".$row['name'].">".$row['name']."</option>");
              }

             print("</select></label>");
          ?> 
    <br><br>
    <br><br>
    <br><br>
		<input style=" height: 33px; padding: 2px 0 3px 0;  cursor: pointer;  background: #3B3B3B; color: #FFF; width: 99px; border: 0; " type="submit" name="delete" value="Delete" />
    </form></div>
    </div>

    <?php include "footer.php" ?>
  </div>
</body>
</html>