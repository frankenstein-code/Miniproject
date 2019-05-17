<?php
$connect=mysqli_connect("localhost","root","","sp");
$query= "SELECT * FROM contactpage ORDER BY id DESC";
$result= mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oomments List Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="css/jquery.tabledit.min.js.js"></script>
  <script src="css/jquery.tabledit.js"></script>
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
          <li><a href="adminpage.php">Home</a></li>
          <li><a href="professionallist.php">Professional List</a></li>
        <li class="active"><a href="comments.php">Comments List</a></li>
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
  <h2>COMMENTS PAGE</h2>
</div>
<hr>





<div class="container">
    <br>
    <br>
    <br>
    <div class="table-responsive">
        <h3 align="center">List Of Professionals </h3><br>
        <table id="editable_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comments</th>
                        <th>    </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["comment"].'</td> 
                        </tr>'                       
                        ;  
                    }
                    ?>
                    
                    
                    
                </tbody>
            </table>

        </h3>
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






<script>
    $(document).ready(function)(){
        $('#editable_table').Tabledit({
        url:'action.php',
        columns:{
            identifier:[0,"id"],
            editable:[[1,'username'],[2,'email'],[3,'comment']]
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
</script>



</body>
</html>
