
<?php
include_once('config.php');
$q = $_GET['q'];
$sql="SELECT * FROM specialty WHERE name = '".$q."'";
$result = mysqli_query($conn,$sql);
echo '<select class="form-control" id="sel1" required> <option>--Doctor--</option>';
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)) {
        echo '<option>'.$row["Doctor"].'</option> ';  
        
} 
}
echo "</select>";
?>
