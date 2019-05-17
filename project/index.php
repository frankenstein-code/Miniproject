


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
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
/*    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      width: 100%;
      position: fixed;
      margin-top:11%;
    }*/
    
     .jumbotron {
      background-color: #0C478A;
      background: url(img/c2.jpg) top center no-repeat ;
      color: white;
      text-shadow: white 0.4em 0.4em 0.4em;
      color: black;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }

/*.btn-success
{
    padding: 10px 20px;
    font-size: 20px;
    border-radius: 10px;
}
*/

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  color: #000;
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 200px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


.checked {
  color: green;
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
        <li class="active"><a href="index.php">Home</a></li>

     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#cleaning">Cleaning</a></li>
          <li><a href="#homeservices">Electrical</a></li>
          <li><a href="#homeservices">Carpenter</a></li>
          <li><a href="#cleaning">Pest Control</a></li>
          <li><a href="#homeservices">Plumbing</a></li>
          <li><a href="#cleaning">Maid</a></li>

        </ul>
      </li>
      

        <li><a href="contact.php">Contact Us</a></li>
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

<div class="jumbotron text-center">
  <!-- <img src="img/c2.jpg" style="width:100%,height:40%"> -->
  <h1>Door-to-Door Services</h1> 
  <p>We specialize in maintaining the house hold which includes Electric works, Plumbing, Beauty and health, Gardning, vehicle repair and various other services at your door step.</p> 
 

<div class="dropdown">
  <button onclick="myFunction()" class="btn btn-success">Click here to see the services -></button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">Cleaning</a>
    <a href="#contact">Electrical </a>
    <a href="#custom">Plumbing</a>
    <a href="#custom">Water works</a>
    <a href="#contact">Kitchen Work</a>
    <a href="#contact">Bathroom Work</a>
    <a href="#contact">Lighting</a>
    <a href="#contact">Water Repair</a>
    <a href="#contact">Sewage Repair</a>
    <a href="#contact">Carpenter</a>
    <a href="#contact">Fan</a>
    <a href="#contact">Washing Machine</a>
    <a href="#contact">Microwave</a>
    <a href="#contact">Fridge</a>
    <a href="pest.php">Pest Control</a>
    <a href="pest.php">Bugs</a>
    <a href="pest.php">Insects</a>
    
    
  </div>
</div>
</div>
    <center><h1>WHY US?</h1></center>

<section class="mbr-section mbr-section__container article" id="header3-1p" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 20px;">
  <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><p>Schedule a service through our friendly customer care or via email or through our interactive D2D App. The ease of doing things will turn the entire process into a breezy affair.</p></div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content2-1r" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><blockquote>With the completion of the booking process you will receive a confirmation and after that, at the appointed time, get ready to experience D2D’s professional touch.
                It is said that quality has no price, but with D2D you can get your things done at charges which are not only competitive but will also deliver maximum value for your money.</blockquote></div>
        </div>
    </div>
</section>
    <hr>

<div id="cleaning" class="container">    
              <span class="slideanim"></span>
  <h2>Cleaning Service</h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-warning">
        <div class="panel-heading">PEST CONTROL</div>
        <div class="panel-body"><a href="pest.php"><img src="img/m4.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">A completely odourless, hassle-free and safe solution for elders, kids, pets and persons with allergy.<br>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-warning">
        <div class="panel-heading">HOUSE DEEP CLEANING</div>
        <div class="panel-body" ><a href="#"><img src="img/m5.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">Cleaning solutions that ensure a healthy environment. Effective home cleaning solutions. </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-warning">
        <div class="panel-heading">MAID SERVICES</div>
        <div class="panel-body"><a href="#"><img src="img/m6.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">D2D is the best platform to hire a domestic worker.</div>
      </div>        
    </div>
  </div>
</div>
<hr>
<div id="homeservices" class="container">   
  <h2>Home Services</h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">Carpenter</div>
        <div class="panel-body"><a href="#"><img src="img/m11.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">There might be a squeaky door hinge that needs your attention or the vintage master bed may need some fixing.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-info">
        <div class="panel-heading">Electrician</div>
        <div class="panel-body"><a href="#"><img src="img/m22.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">Installation and repair services for fans, switches, wiring, and grounding.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-info">
        <div class="panel-heading">Plumber</div>
        <div class="panel-body" ><a href="#"><img src="img/m33.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
        <div class="panel-footer">Plumbing repair services for leakages in kitchen/bathroom faucets and fittings.</div>
      </div>
    </div>
  </div>
</div>
        
<hr>
<div class="container-fluid bg-3 text-center">    
  <h3>Some of Our Work:</h3><br>
  <div class="row">
    <div class="col-sm-3">
        <img src="img/i1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <img src="img/i2.jpg" class="img-responsive" style="width:100%;" alt="Image">
    </div>
    <div class="col-sm-3"> 
        <img src="img/i3.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
        <img src="img/i5.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
  </div>
<br>
<br>
  <div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
        <img src="img/i7.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
        <img src="img/i8.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
        <img src="img/i4.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
        <img src="img/i6.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

<hr>
<div class="container">
    <h3>Reviews From Our Customers:</h3>
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






<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

  <script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>



</body>
</html>
