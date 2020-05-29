<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>
<?php include_once('sidebar.php');?>
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Appointment 
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<!-- <li><a href="emp.php">Doctor</a></li> -->
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
								<option>--Select Doctor Name--</option>
								<?php
													
								$p = $_SESSION["id"];
									$sql = "SELECT Doctor from pid_reg where pid = '$p'  ";
									$qury = mysqli_query($conn, $sql);
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option>'.$row["Doctor"].'</option>';
												}	
									}
								?>
							</select>
							<br>
							<select class="form-control" id="sel1" name="t1" required>
							<option>--Select option--</option>
								  <?php
								  	$sql = "show columns from pid_reg like 'sl%' ";
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
                                $doc = $_POST["t3"];
                                $pid = $_SESSION["id"];
								$sql = "update pid_reg set $title='$change' where Doctor='$doc' and pid ='$pid' ";
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
	