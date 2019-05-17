<!DOCTYPE html>


<?php

if(isset($_POST['clicksubmit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comments=$_POST['comments'];
    
    $db = new mysqli("localhost", "root", "", "sp");
    
    $db->query("INSERT INTO contactpage (name, email, comment) VALUES ('$name', '$email', '$comments')");
}

?>
<html lang="en">
<head>
  <title>Contact Us Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
   
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      width: 100%;
      position: fixed;
      margin-top:11%;
    }
    .main{
        padding-top: 10%;
    }
    body{
        background-image: url("img/professional.jpg");
        background-size: cover;
    }
    .about{
        color: black;
        font-size: 20px;
    }
  </style>  
</head>
<body>
    
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="#">Door-2-Door Services</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">   
        <li style="color: white"><?php
        session_start();
        echo "Welcome ",$_SESSION["username"]?></li>
        <li><a href="professionalReg.php">Join as a Professional</a></li>
        <li><a href="login.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Contact Section) -->
<div id="contact" class="main container bg-grey">
    <h1 class="text-center"><b>CONTACT US:</b></h1>
  <br>
  <br>
  <div class="row">
    <div class="about col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, IN</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8197222291</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mail2pruthvi22@gmail.com</p>
    </div>
      <form action="" method="POST">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" pattern="[^@\s]+@[^@\s]+" title="Enter valid email" required>
        </div>
      </div>
        
        
        
        <textarea class="form-control" id="comments" name="comments" placeholder="Please Submit YOur Queries" rows="5" minlength="20" required></textarea><br>
        
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="clicksubmit">Send</button>
        </div>
      </div>
    </div>
      </form>
  </div>
</div>


  
 <!-- Footer -->
        <footer class="page-footer font-small">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="index.php"> door-to-door.com</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
</body>
</html>