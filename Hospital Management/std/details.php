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
		  <h2 style="text-align:center">
			Admin
		  </h2>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Admin</li>
		  </ol>
		</section>	
		<section class="content">

          <div class="row">
            <div class="col-md-3">
																									
              <!-- Profile Image -->
              				
							<?php echo '<h3><u><i>Patients Personal Info</i></u></h3>'; ?>
							<table id="example1" bgcolor="blue" class="table table-bordered table-striped">
                    <thead >
                      <tr>
                        <th>Patient Name</th>
                        <th>Gender</th>
                        <th>Age</th>
						<th>gmail</th>
						<th>phone</th>
						<th>Address</th>
						
					   </tr>
                    </thead>
                   
                    <tbody>
						
            						<?php
            							
							       $sql = 'select id,gender,age,gmail,mobile,address from patientinfo'; 
							       
                                   $result = mysqli_query($conn,$sql) or die('Error, query failed'.mysqli_error($conn));
            							if(mysqli_num_rows($result) == 0)
            							{
            								echo "Database is empty <br>";
            							} 
            							else
            							{
            								while(list($id,$gender,$age,$gmail,$mobile,$address) = mysqli_fetch_array($result))
            								{
            									?>
            									  <tr>
            										<th><?php echo $id;?></th>
            										<th> <?php echo $gender;?> 
            										<th><?php echo $age;?></th>
                                                    <th><?php echo $gmail;?></th>
													<th><?php echo $mobile;?></th>
													<th><?php echo $address;?></th>
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