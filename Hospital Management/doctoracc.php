<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?> 
<?php include_once('config.php'); ?>
<?php include_once('admin_aside.php') ?>
	
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <h1 style="text-align:center">
			Assign Doctor Username and Password
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="admin.php"><i class="fa fa-dashboard"></i> Admin</a></li>
			<li class="active">Assign Doctor Username and Password</li>
		  </ol>
		</section>
		
		<section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Assign Doctor Username and Password</h3>
                </div>
                <form role="form" enctype="multipart/form-data" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>User Id:</label>
                      <input type="text" class="form-control" name="t1" placeholder="Enter Doctor User Id">
                    </div>
                    <div class="form-group">
                      <label>Password : </label>
                      <input type="password" class="form-control" name="t2" placeholder="Password">
                    </div>
					<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" id="sel1" name="t3" required>
							<option>Doctor</option>
						</select>
					</div>					
                    <div class="form-group">
                      <label>Upload Doctor License Id :</label>
                      <input type="file" name="i" required>
                    </div>
				   </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
                </form>
				<?php

				if(isset($_POST["submit"])){
					
					$rno = $_POST['t1'];
					$pas = $_POST['t2'];
					$d = $_POST['t3']; 
					
					if(getimagesize($_FILES['i']['tmp_name'])==FALSE){
						echo "please select an image....";
					}
					else{
						$image = addslashes($_FILES['i']['tmp_name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
						
						$sql = "INSERT INTO login(id,pass,dept,photo) VALUES ('$rno',SHA1('$pas'),'$d','$image')";
						if (mysqli_query($conn, $sql)){
							echo "Registration successful";
						}
						else
							echo "Registration unsuccessful or User Id already exists";		
					}
				}
				?>

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