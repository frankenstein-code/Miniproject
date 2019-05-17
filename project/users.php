<?php
$connect=mysqli_connect("localhost","root","","sp");
$query= "SELECT * FROM client ORDER BY id DESC";
$result= mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Professional List Page</title>
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
          <li><a href="adminpage.php">Home</a></li>
          <li><a href="professionallist.php">Professional List</a></li>
        <li><a href="comments.php">Comments List</a></li>
        <li  class="active"><a href="users.php">Users List</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="login.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Door-to-Door Services</h1> 
  <h2>PROFESSIONAL LIST</h2>
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
                        <th>UserName</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo '<tr>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["email"].'</td>
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
</script>



</body>
</html>
