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
          <li ><a href="login.php">Login</a></li>
          <li><a href="all.php">Hotel List</a></li>
          <li class="selected"><a href="contact.php">About Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
	  <div id="content">
	  
	  
        <h1>About our website </h1>
		
        <p> <strong>Our Goal </strong>
           Is Help travelers to view hotels around the city and choose the best for them to meet
            their requirements by providing photos, small details and people's opinions and rate
            their experience</p>
      </div>
	  
        <h1>Contact Us</h1>
        <p>*****************************</p>

        <?php

          $user='root';
          $pass='';
          $db='goldenstay';
          $con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
          
          if(isset($_POST['insert'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $msg = $_POST['msg'];
          
          $q ="INSERT INTO contact (Name , email , Message ) VALUES ('$name' ,'$email' , '$msg') ";
              
          if (! mysqli_query($con,$q))
          
          {
          
          print( "<p>There is something Error !</p>" ); 
          die( mysqli_error() );
          }
          
          print("<h1> thanks for your message ! </h1> ");
          
        }
          mysqli_close( $con );
          ?>
          
        <form action="contact.php" method="post" enctype="multipart/form-data">
          <div class="form_settings">
            <p><span>Name : </span><input class="contact" type="text" placeholder="Enter Your Username" name="name" required /></p>
            <p><span>Email Address : </span><input class="contact" type="email" placeholder="Enter Your Email" name="email" required /></p>
            <p><span>Message : </span>
			<textarea class="contact textarea" rows="8" cols="50" name="msg"></textarea></p>
            <input style=" height: 33px; padding: 2px 0 3px 0;  cursor: pointer;  background: #3B3B3B; color: #FFF; width: 99px; border: 0; " type="submit" name="insert" value="Send" />
		
          </div></form>

          
		  
		  
		  <div id="div">
		  <ul>
				<li>
					<a href="#" ><img style ="width: 50px; height: 50px; " src ="images\icon-twitter.jpg"></a>
				</li>
				<li>
					<a href="#" ><img style ="width: 50px; height: 50px; " src ="images\icon-facebook.jpg"></a>
				</li>

				<li>
					<a href="#"><img  style ="width: 50px; height: 50px; "src ="images\icon-pinterest.jpg"></a>
				</li>
			</ul></div>
		  <br>
		  
	
        
		
      
		
	  
	
    </div>
	</div>
	<?php include "footer.php" ?>
  </div>
</body>
</html>
