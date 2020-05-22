
<?php
include_once('config.php');
$r = $_GET['r'];
$s =$_GET['s'];
$sql="SELECT * FROM specialty WHERE name = '".$s."' AND Doctor = '".$r."' ";
$result = mysqli_query($conn,$sql);
echo $sql;
echo $r;
echo $s;
echo '<select class="form-control" id="sel1" required> <option>--slots--</option>' ;

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)) {
        echo '<option>'.$row["Slot"].'<option>';

} 
}
echo "</select>";
?>
