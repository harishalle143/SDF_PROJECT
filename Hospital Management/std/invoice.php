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
			
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="doctor.php"><i class="fa fa-dashboard"></i> Doctor</a></li>
			<li class="active">Upload Invoice</li>
		  </ol>
		</section>
		<section class="content">
		<div class="row">
			<div class="col-xs-8">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">list of Patients</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<form class="modal-contentl animatel" method="post" enctype="multipart/form-data">
						<div class="containerl">
						<div class="form-group">
							<label for="sel1">Select Patient</label>
							<select class="form-control" id="sel1" name="t1" placeholder="Specialty" required>
								<?php
									$p = $_SESSION['id'];
									$sql = "SELECT distinct(pid) from pid_reg where Doctor='$p' ";
									$qury = mysqli_query($conn, $sql);
									if(mysqli_num_rows($qury) > 0){
										while($row = mysqli_fetch_assoc($qury)){
											echo '<option>'.$row["pid"].'</option>';
												}	
									}
								?>
							</select>
							
							<input style="margin-top: 20px;width: auto"  type="file" value="upload" name="u" id="u" required>
							<input style="margin-top: 20px;width: 100%;height: 50px"  type="text" placeholder="description" name="t3" required>
							<input style="margin-top: 20px;width: 100px" class="btn btn-block btn-primary btn-lg" type="submit" value="upload" name="upload">
						</div>
						</div>
					</form>
					<?php
						if(isset($_SESSION["id"])){
							
							if(isset($_POST['upload']) && isset($_POST['t1']) && $_FILES['u']['size'] > 0){
								$sub = $_POST["t1"];
								//$doc = $_POST["t2"];
								$des = $_POST["t3"];
							
								$fileName = $_FILES['u']['name'];
								$tmpName  = $_FILES['u']['tmp_name'];
								$fileSize = $_FILES['u']['size'];
								$fileType = $_FILES['u']['type'];

								$fp      = fopen($tmpName, 'r');
								$content = fread($fp, filesize($tmpName));
								$content = addslashes($content);
								fclose($fp);

								if(!get_magic_quotes_gpc())
								{
									$fileName = addslashes($fileName);
								}
								$sqli = "select * from  pid_reg where Doctor = '$p' and pid = '$sub'";
								$quri = mysqli_query($conn,$sqli);
								if(mysqli_num_rows($quri)>0)
                                {
								$query = "INSERT INTO material (name,filename,type,size,descr,content,Doctor) VALUES ('$sub','$fileName','$fileType','$fileSize','$des','$content','$p')";

								mysqli_query($conn,$query) or die('Error, query failed'.mysqli_error($conn)); 

								echo "<br>File $fileName uploaded<br>";
							}
							else{
								echo "ENTERED WRONG CREDENTIALS";
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
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<?php include_once('footer.php'); ?>   