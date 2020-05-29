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
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> HOME</a></li>
            <li class="active">PATIENT</li>
          </ol>
        </section>
		
		
			<section class="content">

          <div class="row">
            <div class="col-md-4">

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
				?>
                  
                  <a href="#" class="btn btn-primary btn-block"><b>Information</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div>
			</div>
	</section>
	
	
	<section class="content">
		<div class="row">
			<div class="col-xs-5">
				<div class="box">
					<div class="box-header">
					</div><!-- /.box-header -->
					<div class="box-body">
					<h2><u><i> Registered Appointments</u></i></h2>	
					<table id="example1" class="table table-bordered table-striped">
					<thead>
                      <tr>
                        <th>Specialty</th>
						<th>Doctor Name</th>
						<th>Slot</th>
                      </tr>
                    </thead>
						<?php
							$stdid=$_SESSION['id'];
							$sqlz = "select name,Doctor,Slot from pid_reg where pid='$stdid' order by Doctor";
							$quryz=mysqli_query($conn,$sqlz) or die(mysqli_error($conn));
							if(mysqli_num_rows($quryz) > 0){
								while($row = mysqli_fetch_assoc($quryz)){
									echo "<tr><th><i>".$row["name"]."</i></th><th><i>".$row["Doctor"]."</i></th><th><i>".$row["Slot"]."</i></th></tr>";
								}
							}
						?>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</section>

	
    </div><!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    

<?php include_once('footer.php'); ?>    

