<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

include 'config.php';
$id    = $_GET['id'];
$query = "SELECT filename, type, size,content FROM material WHERE sno = '$id'";

$result = mysqli_query($conn,$query) or die('Error, query failed'.mysqli_error($conn));
list($filename, $type, $size, $content) = mysqli_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$filename");
echo $content;

exit;
}

?>