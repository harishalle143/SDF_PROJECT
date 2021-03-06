<?php session_start(); ?>
<?php include_once('check_session.php'); ?>
<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
<?php include_once('config.php'); ?>
<?php include_once('sidebar.php'); ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

							
<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
        <!-- Main content -->
			<section class="content-header">
          <h1 style="text-align:center">
            Invoice
          </h1>
          <ol class="breadcrumb">
            <li><a href="../home.php"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="patient.php">Patient</a></li>
            <li class="active">Invoice</li>
          </ol>
        </section>
		
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                	<table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                         <th>Patient</th>
                        <th>Filename</th>
                        <th>description</th>
						            <th>Doctor</th>
						          </tr>
                    </thead>
                    <tbody>
						
            						<?php
            							$pid = $_SESSION['id'];
            							$query = "SELECT m.sno,m.name,m.filename,m.descr,s.Doctor from material m, pid_reg s where s.Doctor = m.Doctor and s.pid ='$pid'";
            							$result = mysqli_query($conn,$query) or die('Error, query failed'.mysqli_error($conn));
            							if(mysqli_num_rows($result) == 0)
            							{
            								echo "Database is empty <br>";
            							} 
            							else
            							{
            								while(list($id, $name, $filename, $descr, $Doctor) = mysqli_fetch_array($result))
            								{
            									?>
            									  <tr>
            										<th><?php echo $name;?></th>
            										<th><a href="download.php?id=<?php echo $id;?>"> <?php echo $filename;?> </a><br></th>
            										<th><?php echo $descr;?></th>
                                <th><?php echo $Doctor; ?></th>
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
                
	</div><!-- /.content-wrapper -->        
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    

<?php include_once('footer.php'); ?>
   
   