<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
		<li><a href="doctor.php"><i class="fa fa-circle-o text-aqua"></i> <span>Doctor</span></a></li>
		<li><a href="doctor_change_details.php"><i class="fa fa-circle-o text-yellow"></i> <span>Reschedule Appointment</span></a></li>
        <li><a href="invoice.php"><i class="fa fa-circle-o text-red"></i> <span>Invoice</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Appointment 
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="doctor.php">Doctor</a></li>
			<li class="active">Update Appointment</li>
		  </ol>
		</section>
		<section class="content">
		<div class="row" align="center">
			<div class="col-xs-5">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Update Appointment Details</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<form class="modal-contentl animatel" method="post">
						<div class="containerl">
						<div class="form-group">
							
                              <select class="form-control" id="sel1" name="t3" placeholder=" " required>
								<option>--Select Name--</option>
								<?php
													
								$p = $_SESSION["id"];
									$sql = "SELECT distinct(pid) from pid_reg where Doctor = '$p'  ";
									$qury = mysqli_query($conn, $sql);
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option>'.$row["pid"].'</option>';
												}	
									}
								?>
							</select>
							</select>
							<br>
							<select class="form-control" id="sel1" name="t1" required>
							<option>--Select option--</option>
								  <?php
								  	$sql = "show columns from patient like 'a%' ";
									$qury = mysqli_query($conn, $sql) or die(mysqli_error($conn));
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option value='.$row["Field"].'>'.$row["Field"].'</option>';
										}	
									}
								  ?>
							</select>
							<br>
							<input type="text" placeholder="Enter value" name="t2" class="form-control" required>	
							<input style="margin-top: 20px;width: 100px" class="btn btn-block btn-primary btn-lg" type="submit" value="update" name="update">
						</div>
						
						<?php
							if(isset($_POST["update"]))
							{
								$title=$_POST["t1"];
								$change = $_POST["t2"];
								$pid = $_POST["t3"];
								$sql = "update patient set $title='$change' where patient_name='$pid'";
								if(mysqli_query($conn,$sql))
									{	
									echo "DETAILS UPDATED...";
									}
								 else{
									 echo mysqli_error($conn);
								 }
							}
						?>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		</section>
					
</div>
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
	