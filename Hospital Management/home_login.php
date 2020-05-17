<?php

session_start();
// Create connection


$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	echo "error in insert";
}
	$rno = $_POST['t1'];
	$pas = $_POST['t2'];
	$d = $_POST['t3'];


		$sql = "SELECT id,pass,dept FROM login WHERE id='$rno' AND pass=SHA1('$pas') AND dept='$d'";
		$qury=mysqli_query($conn, $sql);
		if (mysqli_num_rows($qury) > 0){
			while($row = mysqli_fetch_assoc($qury)){
				$_SESSION["id"]= $rno;
				$_SESSION["dept"]= $d;
					if($d=="Patient")
						echo '<script> window.location="std/student.php"; </script>';
					else if($d=="Doctor")		
						echo '<script> window.location="std/emp.php";</script>';
					else if($d=="Admin")
						echo '<script> window.location="std/admin.php";</script>';
			}
		}
		else{
			echo $d." ".$pas." ".$rno;
			print_r($qury);
		}
	
	mysqli_close($conn);
?>
