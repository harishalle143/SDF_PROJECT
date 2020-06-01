<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('config.php'); ?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
       
	   <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="text-align:center">
            PATIENT
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="patient.php">PATIENT</a></li>
            <li class="active">Patient </li>
          </ol>
</section>
			<section class="content">

          <div class="row">
            <div class="col-md-11">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
				<?php
						$p = $_SESSION["id"];
						$sql = "SELECT * from login WHERE id='$p'";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo '<img class="profile-user-img img-responsive img-circle" src="data:photo;base64,'.$row["photo"].'" alt="User profile picture">
										<h3 class="profile-username text-center">'.$row["id"].'</h3>';
							}
						}
						
						$qury = "select * from patient where patient_name='$p'";
						$res=mysqli_query($conn,$qury);
						if(mysqli_num_rows($res) >0)
						{
							while($row = mysqli_fetch_assoc($res))
							{
								echo '
									<section class="content">
										<div class="row">
											<div class="col-xs-12">
												<div class="box">
													<div class="box-header">
														<h3 class="box-title">Patient information</h3>
													</div><!-- /.box-header -->
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<tr><th>Patient_ Name<th>'.$row["patient_name"].'</th></tr>
															<tr><th>Gender<th>'.$row["gender"].'</th></tr>
															<tr><th>Appointment Status<th>'.$row["appointmentconfirmation"].'</th></tr>
															<tr><th>Token Nuber<th>'.$row["token"].'</th></tr>
														    <tr><th>Timings<th>'.$row["Timings"].'</th></tr>
														    <tr><th>Hospital Address<th>'.$row["hospital_address"].'</th></tr>	
															<tr><th>Hospital phone<th>'.$row["std_phone"].'</th></tr>
															<tr><th>Landline phone<th>'.$row["par_phone"].'</th></tr>
															<tr><th>Hospital mail<th>'.$row["gmail_id"].'</th></tr>
														</table>
													</div>
												</div>
											</div>
										</div>	
									</section>';
									}
						}
						
					mysqli_close($conn);
				?>				
				 </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div>
			</div>
	</section>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
<?php include_once('footer.php'); ?>
   
   