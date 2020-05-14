
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./std/bootstrap/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="image/main.css" />
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="HOMEPAGE.php"><ul class="nav navbar-nav navbar-right"><li><b>HOSPITAL MANAGEMENT SYSTEM</b></li></ul></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        		<li>
			<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:80px;height:40px">LOGIN</button>
			<button class="button" onclick="document.getElementById('id02').style.display='block'" style="width:80px;height:40px">SIGN UP</button>
		<div id="id01" class="modal">
 			<form class="modal-contentl animatel" method="post" action="SELECT_HOME.php">
				<div class="imgcontainerl">
					<span onclick="document.getElementById('id01').style.display='none'" class="closel" title="Close Modal">&times;</span>
					<img src="image/SP1.png" alt="Avatar" class="avatarl">
				</div>

				<div class="containerl">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="t1" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="t2" required>
        
					<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" id="sel1" name="t3" required>
							<option>Admin</option>
							<option>DOCTOR</option>
							<option>PATIENT</option>
						</select>
					</div>
					<input type="submit" value="Login">
					<input type="checkbox" checked="checked"> Remember me
				</div>

				<div class="containerl" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtnl">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
					</div>
			</form>
		</div>
		<div id="id02" class="modal">
 			<form class="modal-contentl animatel" method="post" enctype="multipart/form-data" action="register_home.php">
				<div class="imgcontainerl">
					<span onclick="document.getElementById('id02').style.display='none'" class="closel" title="Close Modal">&times;</span>
					<img src="image/SP1.png" alt="Avatar" class="avatarl">
				</div>

				<div class="containerl">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="t1" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="t2" required>
					
					<div>
						<input style="margin: 20px;width: auto" type="file" name="i" required />
					</div>
					<input type="submit" value="submit" name="submit">
				</div>

				<div class="containerl" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnl">Cancel</button>
					</div>
			</form>
		</div>

		</li>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/p1.jpg" alt="New York" width="1200em" height="700em">
        <div class="carousel-caption">
          <h5>HOSPITAL MANAGEMENT SYSTEM</h5>
        </div>      
      </div>
	
	  
	  
	 	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) 
<div id="band" class="container text-center">
  <h3>HOSPITAL MANAGEMENT SYSTEM</h3>
    <br>
  <div class="row">
    <div class="col-sm-3">
       <a href="#demo" data-toggle="collapse">
        <img src="image/CCC.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-3">
      
      <a href="#demo2" data-toggle="collapse">
        <img src="image/EE.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-3">
     
      <a href="#demo3" data-toggle="collapse">
        <img src="image/mec.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
	<div class="col-sm-3">
      
      <a href="#demo4" data-toggle="collapse">
        <img src="image/vvv.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div> -->

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>	
  <div class="row">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>HOSPITAL MANAGEMENT SYSTEM,HYDERABAD,INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: </p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: hospitalmanagement@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  </div>
</div>

<!-- Add Google Maps -->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="home.php" data-toggle="tooltip" title="HOSPITAL MANAGEMENT SYSTEM">Hospital Management System</a></p> 
</footer>

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

var modal = document.getElementById('id01');
var modals = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modals) {
        modals.style.display = "none";
    }

}

</script>

</body>
</html>
