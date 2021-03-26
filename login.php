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
		  
          <li class="selected"><a href="login.php">Login</a></li>
          
          <li><a href="all.php">Hotel List</a></li>
          <li><a href="contact.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
<div class="sidebar">
<h1>Or Register</h1>
<form method="post" action="login1.php" >
<label style = "margin : 4px ;"><p>Email:</p><input type="email" placeholder="Enter Your Email" name="email" required></label><br>

<label style = "margin : 4px ;"><p>Username:</p><input type="text" placeholder="Enter Your Username" name="uname" required></label><br>

<label style = "margin : 4px ;" ><p>Password:</p><input type="password" placeholder="Enter Password" name="psw" required></label><br>
    <br>
<input type = "submit" value = "Register">
</form></div>
	   
<div id="content">
<form method="post" action="login2.php" >
<h1>Sign In</h1>
<label style = "margin : 4px ;"><p>Username:</p><input type="text" placeholder="Enter Your Username" name="uname" required></label><br>  
<label style = "margin : 4px ;"><p>Password:</p><input type="password" placeholder="Enter Password" name="psw" required></label>
<br>
<br>
<label><p style="padding-top: 15px"><input class="submit" type = "submit" value = "SignIn"></label>
      </div>
    </div>
    <?php include "footer.php" ?>
  </div>
</body>
</html>
