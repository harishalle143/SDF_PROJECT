<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>

<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Book An Appointment
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="patient.php">Patient</a></li>
			<li class="active">Book Appointment</li>
		  </ol>
		</section>
		<section class="content">
		<div class="row">
			<div class="col-xs-8">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Details of Doctors Availabilty</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<form class="modal-contentl animatel" method="post">
						<div class="containerl">
						<div class="form-group">
							<label for="sel1">Select Speciality</label>

							<!-- using ajax ...look at this file ==> change_select.php -->
							<select class="form-control" id="sel1" name="t1" onchange="showUser(this.value)"  required>
							<option>--Specailty--</option>
								  <?php
									$sql = 'SELECT distinct(name) from specialty';
									$qury = mysqli_query($conn, $sql);
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option value='.$row["name"].'>'.$row["name"].'</option>';
										}	
									}
								  ?>
							</select>
							<label for="sel1">Select Doctor</label>
							<select class="form-control" id="txtHint" name="t2" onchange="showSlot(this.value,t1.value)" required></select>
							<label for="sel1">Select Slot</label> 
							<select class="form-control" id="txtHint1" name="t3"  required></select>							
							<input style="margin-top: 20px;width: 100px" class="btn btn-block btn-primary btn-lg" type="submit" value="register" name="register">
						
						</div>
						</div>
					</form>
					<?php
						if(isset($_SESSION["id"])){
							
							if(isset($_POST['t1']) && isset($_POST['t2'])&& isset($_POST['t3'])){
								$sub = $_POST["t1"] ;
								$Doctor = $_POST["t2"];
								$Slot = $_POST["t3"];
								$pid = $_SESSION["id"];
								$exist = "select * from pid_reg where name='$sub' and Doctor='$Doctor' and Slot='$Slot' and pid='$pid'";	
								$res = mysqli_query($conn,$exist);
								
								$exist1 = "select * from pid_reg where name='$sub' and pid='$pid'";	
								$res1 = mysqli_query($conn,$exist1);
								
								
								$exist2 = "select * from pid_reg where pid='$pid'";	
								$res2 = mysqli_query($conn,$exist2);
								
								$exist3 = "select * from pid_reg where pid='$pid' and Slot='$Slot'";	
								$res3 = mysqli_query($conn,$exist3);
								
								if(mysqli_num_rows($res) > 0){
									while($row = mysqli_fetch_assoc($res))
										echo "You  are already registered with this specailty..with Docotr name : ".$row["Doctor"];
								}
								else if(mysqli_num_rows($res1) > 0){
									while($row = mysqli_fetch_assoc($res1))
										echo "You are already registered with this Specailty..with Doctor : ".$row["Doctor"];
								}
								else if(mysqli_num_rows($res2) >= 3){
									 echo "You can't register  for more than 3 Specailty and Dcotors in week";
								}
								
								if(mysqli_num_rows($res3) > 0){
									while($row = mysqli_fetch_assoc($res3))
										echo "You are already register this Specailty..with this slot : ".$row["Slot"];
								}
								else{
									$sql = "INSERT into pid_reg(name,Doctor,pid,Slot) values ('$sub','$Doctor','$pid','$Slot')";
									if(mysqli_query($conn,$sql))
										echo "register successfull";	
									else
										echo "try again";
								}
							}
						}else{
							echo '<script> window.location="../home.php" </script>';
						}
					?>
					</div>
				</div>
			</div>
		</div>
		</section>
					
</div>
<script>

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
		document.getElementById("txtHint1").innerHTML= "";
      
		return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				document.getElementById("txtHint1").innerHTML= "";
      
				}
        }
        //xmlhttp.open("GET","getuser2.php?r="+str,true);
        //xmlhttp.send();
        
		xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
		
   }

}
function showSlot(t2, t1){

	if (t2 == "") {
       document.getElementById("txtHint1").innerHTML= "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
               document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        }
        //xmlhttp.open("GET","getuser2.php?r="+str,true);
        //xmlhttp.send();
        
		xmlhttp.open("GET","getslot.php?r="+t2 +"&s="+t1,true);
        xmlhttp.send();
		
   }



}


</script>


 </div>
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<?php include_once('footer.php'); ?>   