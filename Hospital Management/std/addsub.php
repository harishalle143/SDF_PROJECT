<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>
<?php include_once('admin_aside.php'); ?>

<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Add Doctor
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="admin.php"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">Add Doctor</li>
		  </ol>
		</section>
		<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Enter details of Doctor</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<form method="post">
						<table id="example1" class="table table-bordered table-striped">
							<tr><th>Specialist Name</th><th><input type="text" name="subname" placeholder="Specailty " required /></tr>
							<tr><th>Doctor Id</th><th><input type="text" name="Doctor_name" placeholder="Doctor Id" required /></tr>
							<tr><th>Available Slot</th><th><input type="text" name="slot" placeholder="Slot" required /></tr>
							
                            <tr><th><input class="btn btn-block btn-primary btn-lg" style="width:150px;" type="submit" value="submit"></th></tr>
						</table>
					</form>
					<?php
						if(isset($_POST["subname"]) && isset($_POST["Doctor_name"]) && isset($_POST["slot"])){
							$sub = $_POST["subname"];
							$Doctor_name = $_POST["Doctor_name"];
                            $Slot = $_POST["slot"];
							$sql = "INSERT INTO specialty(name,Doctor,Slot) VALUES ('$sub','$Doctor_name','$Slot')";
							if(mysqli_query($conn,$sql)){
								echo $sub."  Data inserted successfully";
							}
							else{
								echo $sub."  Specialty not inserted ".mysqli_error($conn);
							}	
						}
					?>	
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
<?php include_once('footer.php'); ?>   