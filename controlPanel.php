<!DOCTYPE HTML>
<html>
<head>
  <title>Control panel</title>
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
        
        
      </div>
      <div id="content">
		  
        <h1>Control panel</h1>
		<a href="add.php"> Add item </a>
		<br><br><br><br>
		<a href="Edit.php"> Edit item </a>
		<br><br><br><br>
		<a href="delete.php"> Delete item </a>
		
         </div>
    </div>
    <?php include "footer.php" ?>
  </div>
</body>
</html>
