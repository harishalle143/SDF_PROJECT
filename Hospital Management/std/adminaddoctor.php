<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>
<?php include_once('admin_aside.php');?>
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Book An Appointment
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
							<label for="sel1">Select Patient</label>

							<!-- using ajax ...look at this file ==> change_select.php -->
							<select class="form-control" id="sel1" name="t1" onchange="showUser(this.value)"  required>
							<option>--patient--</option>
								  <?php
									$sql = "SELECT distinct(p.pid) from pid_reg p,specialty s where p.Doctor = s.Doctor ";
									$qury = mysqli_query($conn, $sql);
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option value='.$row["pid"].'>'.$row["pid"].'</option>';
										}	
									}
								  ?>
							</select>
            				<label for="sel1">Select Doctor</label>
							<select class="form-control" id="txtHint" name="t2" required></select>
									
						</div>
						</div>
					
                    <br>
						<table id="example1" class="table table-bordered table-striped">
							<tr><th>Select Gender<th>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							<input type="radio" name="gender" value="other"> Other</th>
							<th>Appointment Confirmation<th><input type="text" name="conf"/></th></tr>
							<th>Token Number<th><input type="text" name="toke"/></th>
							<th>Timings<th><input type="text" name="tym"/></th></tr>
							<th>Hospital address<th><input type="text" name="address"/></th>
							<th>Hospital Phone<th><input type="text" name="std_phone"/></th></tr>	
							<th>Hospital Landline<th><input type="text" name="par_phone"/></th>
							<th>Gmail<th><input type="text" name="gmail"/></th></tr>

                            <td style="text-align: center">

                            <tr><th><input class="btn btn-block btn-primary btn-lg" style="width:150px;" type="submit" value="submit" name="submit"/></th></tr>
							</td>
                            </table>
                            </form>
							<?php
								if(isset($_POST["submit"])){ 
                                    $pid = $_POST["t1"];
                                    $doc = $_POST["t2"];
									//$name = $_POST["name"];
	                                $gender =$_POST["gender"];								 
									$conf = $_POST["conf"];
									$token = $_POST["toke"]; 
									$timi = $_POST["tym"];
									$address = $_POST["address"]; 
									$std_phone = $_POST["std_phone"]; 
									$par_phone = $_POST["par_phone"]; 
									$gmail = $_POST["gmail"]; 

								// $exist = "select * from patient where patient_name='$pid' ";	
								// $res = mysqli_query($conn,$exist);
								// if(mysqli_num_rows($res) > 0){
									// while($row = mysqli_fetch_assoc($res))
										// echo "your have already entered the details of the name: ".$row["patient_name"];
                                // }
                                
                                
                                
                                    $sqi = "select * from pid_reg where pid='$pid'and Doctor = '$doc' ";
                                    $quri = mysqli_query($conn,$sqi);
								if(mysqli_num_rows($quri)>0){
                                $sql = "insert into patient(patient_name,gender,appointmentconfirmation,token,Timings,hospital_address,std_phone,par_phone,gmail_id) values ('$pid','$gender','$conf','$token','$timi','$address','$std_phone','$par_phone','$gmail')";
									if(mysqli_query($conn,$sql)){
										echo "succussfully inserted";
                                    }
                                    
                                } else{
                                    echo "inserted values are wrong";
                                }
									//else{
										//echo "error occured while inserting data".mysqli_error($conn);
								//	}
								//}
									} 
							?>

						

					</div>
                
							
							<?php echo '<h2><u><i>Patients</i></u></h2>'; ?>
                            
                            <table  id="example1" class="table table-bordered table-striped">
                            <thead>
                      <tr>
                        <th>Patient Name</th>
                        <th>Specialty</th>
                        <th>Doctor</th>
						<th>Slot</th>
					   </tr>
                    </thead>
                    
                    <tbody> 
            				<?php
            							
							       $sql = 'select pid,name,Doctor,Slot from pid_reg order by slot desc' ; 
							       
                                   $result = mysqli_query($conn,$sql) or die('Error, query failed'.mysqli_error($conn));
            							if(mysqli_num_rows($result) == 0)
            							{
            								echo "Database is empty <br>";
            							} 
            							else
            							{
            								while(list($pid,$name,$Doctor,$Slot) = mysqli_fetch_array($result))
            								{
            									?>
                                          
            									  <tr>
            										<th><?php echo $pid;?></th>
            										<th> <?php echo $name;?> </a><br></th>
            										<th><?php echo $Doctor;?></th>
                                                    <th><?php echo $Slot;?></th>
													
                                            		</tr>
            								<?php
            								}
            							}
            						?>

                    </tbody>
                  </table>
                
				</div>
			</div>
		</div>
		</section>
					
</div>
<script>
 
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
		// document.getElementById("txtHint1").innerHTML= "";
      
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
				// document.getElementById("txtHint1").innerHTML= "";
      
				}
        }
        //xmlhttp.open("GET","getuser2.php?r="+str,true);
        //xmlhttp.send();
        
		xmlhttp.open("GET","patientuser.php?q="+str,true);
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