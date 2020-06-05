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
			Personal Details
		  </h1>
		  <ol class="breadcrumb">
			<li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Personal Details</li>
		  </ol>
		</section>
		<section class="content">
        
        
		<div class="row"> 
			<div class="col-xs-8">
				<div class="box"> 
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<form class="modal-contentl animatel" method="post">
						<div class="containerl">
						<div class="form-group">
							<!-- <label for="sel1">Select Patient</label> -->

                    
						<table id="example1" class="table table-bordered table-striped">
							<tr><th>Gmail Id<th><input type="text" name="t1"/></th></tr>
							<tr><th>Enter Age<th><input type="text" name="t2"/></th></tr>
							<tr><th>Select Gender<th>
                            <input type="radio" id="male" name="gender" value="male">
                           <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label></th></tr>
                             
							<tr><th>Enter Phone<th><input type="text" name="t3"/></th></tr> 
							<th>Select Address<th></th></tr>
                            <tr><th><textarea type="text" id="address" name="t4" rows="4" cols="50">
          </textarea></th></tr>

                            <td style="text-align: ">

                            <tr><th><input class="btn btn-block btn-primary btn-lg" style="width:150px;" type="submit" value="submit" name="submit"/></th></tr>
							</td>
                            </table>
                            </form>
								<?php
								if(isset($_POST["submit"])){ 
                                    $pid = $_SESSION['id'];
                                    $gmail = $_POST['t1'];
                                    $age = $_POST['t2'];
                                    $gender = $_POST['gender'];
                                    $phone = $_POST['t3'];
                                    $addr = $_POST['t4'];
                                $sqli = "insert into patientinfo(id,gmail,gender,mobile,age,address) values ('$pid','$gmail','$gender','$phone','$age','$addr')";
                                    if(mysqli_query($conn,$sqli))
                                    {
										echo "Successfully inserted";

                                    }
                                    
								 
								else{
                                    echo "Your Data is already inserted";
                                }

                                    }	 
							?>

					</div>
                
							                    </tbody>
                  </table>
                
				</div>
			</div>
		</div>
		</section>
					
</div>
<script>
 
</script>


 </div>
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<?php include_once('footer.php'); ?>   