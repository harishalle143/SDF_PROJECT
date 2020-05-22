<?php
session_start();
if(isset($_SESSION["id"])){
	session_destroy();
}
?>

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
      <a class="navbar-brand" href="home.php"><ul class="nav navbar-nav navbar-right"><li><b>HOSPITAL MANAGEMENT SYSTEM</b></li></ul></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        		<li>
			<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:80px;height:40px">Login</button>
			<button class="button" onclick="document.getElementById('id02').style.display='block'" style="width:80px;height:40px">Sign up</button>
		<div id="id01" class="modal">
 			<form class="modal-contentl animatel" method="post" action="home_login.php">
				<div class="imgcontainerl">
					<span onclick="document.getElementById('id01').style.display='none'" class="closel" title="Close Modal">&times;</span>
					<img src="image/v1.png" alt="Avatar" class="avatarl">
				</div>

				<div class="containerl">
					<label><b>User Id</b></label>
					<input type="text" placeholder="Enter Username" name="t1" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="t2" required>
        
					<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" id="sel1" name="t3" required>
							<option>Admin</option>
							<option>Doctor</option>
							<option>Patient</option>
						</select>
					</div>
					<input type="submit" value="Login">
					
				</div>

				<div class="containerl" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtnl">Cancel</button>
				
					</div>
			</form>
		</div>
		<div id="id02" class="modal">
 			<form class="modal-contentl animatel" method="post" enctype="multipart/form-data" action="register_patient.php">
				<div class="imgcontainerl">
					<span onclick="document.getElementById('id02').style.display='none'" class="closel" title="Close Modal">&times;</span>
					<img src="image/v1.png" alt="Avatar" class="avatarl">
				</div>

				<div class="containerl">
					<label><b>User Id</b></label>
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
	
	  
	  
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="home.php" data-toggle="tooltip" title="HOSPITAL MANAGEMENT SYSTEM">Hospita Management System</a></p> 
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
