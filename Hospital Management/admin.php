<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php //include_once('sidebar.php'); ?> 
<?php include_once('config.php'); ?>
<?php include_once('admin_aside.php') ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Admin
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Admin</li>
		  </ol>
		</section>	
		<section class="content">

          <div class="row">
            <div class="col-md-3">
																									
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
				</div>
			  </div>
		   </div>
		</div>
		<div>
		</section>	
							 
							
							<?php echo '<h2><u><i>Hospital</u></i></h2>'; ?>
							<table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Doctor Name</th>
                        <th>Specailty</th>
						<th>Available</th>
					   </tr>
                    </thead>
                    <tbody>
						
            						<?php
            							
							      $sql = 'select distinct(Doctor),name,Slot from specialty ' ;
							       
                                   $result = mysqli_query($conn,$sql) or die('Error, query failed'.mysqli_error($conn));
            							if(mysqli_num_rows($result) == 0)
            							{
            								echo "Database is empty <br>";
            							} 
            							else
            							{
            								while(list($Doctor,$name,$Slot) = mysqli_fetch_array($result))
            								{
            									?>
            									  <tr>
            										<th><?php echo $Doctor;?></th>
                                            		<th><?php echo $name;?></th>
													<th><?php echo $Slot;?></th>
                                            		
													</tr>
            								<?php
            								}
            							}
            						?>

                    </tbody>
                  </table>
							 
							
							
							
							<?php echo '<h2><u><i>Patients</i></u></h2>'; ?>
							<table id="example1" class="table table-bordered table-striped">
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
            							
							       $sql = 'select pid,name,Doctor,Slot from pid_reg'; 
							       
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
	</div>	
</section>
	</div>	
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
<?php include_once('footer.php'); ?>    