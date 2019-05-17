<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="jquery.tabledit.min.js.js"></script>
  <script src="jquery.tabledit.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

     .jumbotron {
      background-color: #0C478A;
      background: url(img/pro.jpg) top center no-repeat ;
      color: white;
      text-shadow: white 0.4em 0.4em 0.4em;
      color: black;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  
.show {display: block;}
.checked {color: green;}

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
          <li class="active"><a href="adminpage.php">Home</a></li>
        <li><a href="professionallist.php">Professional List</a></li>
        <li><a href="comments.php">Comments List</a></li>
        <li><a href="users.php">Users List</a></li>
        <!--<li><a href="about.php">About Us</a></li>-->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="login.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Door-to-Door Services</h1> 
  <!--<p>We specialize in maintaining the house hold which includes Electric works, Plumbing, Beauty and health, Gardning, vehicle repair and various other services at your door step.</p>--> 
  <h2>ADMIN PAGE</h2>
</div>
<hr>










<div class="container">
    <h3>Reviews from customers About Us:</h3>
    <br>
 <div class="row">
        <div class="col-sm-2 text-center">
          <img src="img/p1.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Snow <small>Apr 02, 2019, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! Great Service, Now my home is neat and clean. Thanks to Door-to-Door. :)</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <br>
        </div>


        <div class="col-sm-2 text-center">
          <img src="img/p2.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Cersi <small>Jan 25, 2019, 3:23 PM</small></h4>
          <p>I am so happy finally water connection got fixed. Thanks to you guys. Cheers!!</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <br>         
        </div>


        <div class="col-sm-2 text-center">
          <img src="img/p3.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Jack Sparrow <small>Feb 12, 2019, 11:25 AM</small></h4>
          <p>Great service. Service was Right on time and completed with perfection.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <br>         
        </div>

       <div class="col-sm-2 text-center">
          <img src="img/p4.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Hodor <small>Jan 11, 2019, 10:05 PM</small></h4>
          <p>Good Experience working with door-to-door.So convenient and easy to work with.</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <br>         
        </div>
</div>

</div>
<hr>

  
 <!-- Footer -->
        <footer class="page-footer font-small">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="index.php"> door-to-door.com</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->






<!--<script>
    $(document).ready(function)(){
        $('#editable_table').Tabledit({
        url:'action.php',
        columns:{
            identifier:[0,"id"],
            editable:[[1,'firstname'],[2,'middlename'],[3,'lastname'],[4,'email'],[5,'age'],[6,'exp'],[7,'phone'],[8,summary]]
        },
        restoreButton:false,
        onSuccess:function(data,testStatus,jqXHR)
        {
            if(data.action == 'delete')
            {
                $('#'+data.id).remove();
            }
        }
    });
        
    });
</script>-->



</body>
</html>
