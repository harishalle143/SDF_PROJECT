
<?php
include_once('config.php');
$r = $_GET['r'];
$sql="SELECT * FROM subject WHERE name = '".$r."'";
$result = mysqli_query($conn,$sql);
echo '<select class="form-control" id="sel1" required>';
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)) {
   		echo '<option>'.$row["Employee"].'</option>';
} 
}
echo "</select>";
?>
