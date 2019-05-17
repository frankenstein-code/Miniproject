<?php
if(isset($_POST['entersubmit']))
{
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
//    $age=$_POST('age');
    $address=$_POST['address'];
//    $exp=$_POST('exp');
//    $phone=$_POST('phone');
    $summary=$_POST['summary'];
//    $occupation=$_POST('occupation');

    $db = new mysqli("localhost", "root", "", "sp");  
    $db->query("INSERT INTO professionalred (firstname,middlename,lastname,email,address,summary) VALUES ('$firstname','$middlename','$lastname','$email','$address','$summary')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Professional Registration Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    }
    
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
   background: url(img/contact.jpg) top center no-repeat ;
   background-size: cover;  
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
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="color: white"><?php
        session_start();
        echo "Welcome ",$_SESSION["username"]?></li>
        <li class="active"><a href="#">Join as a Professional</a></li>
        <li><a href="login.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container ">
    <h2><u>Professional Registration:</h2></u>
  <br>
  <form class="form-horizontal" action="" method="POST" >
    <div class="form-group" >
      <label class="control-label col-sm-2" for="fname">Firstname:</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" style="width:18%" id="fname" placeholder="Enter Firstname" name="firstname" required pattern="^[A-Za-z]+">
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="mname">Middlename:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" style="width:18%" id="mname" placeholder="Enter Middlename" name="middlename" required pattern="^[A-Za-z]+">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Lastname:</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" style="width:18%" id="lname" placeholder="Enter Lastname" name="lastname"  pattern="^[A-Za-z]+">
      </div>
    </div>
    
      
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
          <input type="email" class="form-control" style="width:28%" id="email" placeholder="Enter Email" name="email" required pattern="[^@\s]+@[^@\s]+">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age(In year):</label>
      <div class="col-sm-10">          
          <input type="text" class="form-control" style="width:8%" id="age" placeholder="Age" name="age" required >
      </div>
    </div>
      
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">          
          <input type="text" class="form-control" style="width:28%" id="address" minlength="10" placeholder="Enter address" name="address" required>
      </div>
    </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="occupation">Professional At:</label>
      <select class="form-control" style="width:18%" name="occupation" required>
        <option>-Select-</option>
        <option value="Carpenter" id="carpenter" name="carpenter">Carpenter</option>
        <option value="Plumber" id="plumber"name="plumber">Plumber</option>
        <option value="Electrician" id="electrician" name="electrician">Electrician</option>
        <option value="Cleaner" id="cleaning" name="cleaning">Cleaning</option>
        <option value="Cleaner" id="maid" name="maid">Maid Service</option>
        <option value="Cleaner" id="pest" name="pest">Pest Control</option>

      </select>
      </div>
      
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="exp">Experience of work (In years):</label>
      <div class="col-sm-10">          
          <input type="text" class="form-control" style="width:8%" id="exp" placeholder="" name="exp" required >
      </div>
    </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone No(Mobile):</label>
      <div class="col-sm-10">          
          <input type="text" class="form-control" style="width:20%" id="phone" placeholder="Enter 10 Digit Number"  maxlength="10"  minlength="10" name="phone" required pattern="^[0-9]+">
      </div>
    </div>
      
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="address">Summary:</label>
      <div class="col-sm-10">          
          <textarea class="form-control" id="summary" name="summary" placeholder="Comments" rows="3" minlength="20" style="width:50%;" required></textarea>
      </div>
    </div>

    <div class="form-group" style="padding-left:480px">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="entersubmit" class="btn btn-default">Submit</button>
        
      </div>
    </div>
  </form>
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
