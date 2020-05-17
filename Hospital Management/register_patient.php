<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	echo "error in insert";
}
	$rno = $_POST['t1'];
	$pas = $_POST['t2'];
	$d = "Patient"; //Admin 
	
	if(getimagesize($_FILES['i']['tmp_name'])==FALSE){
		echo "please select an image....";
	}
	else{
		$image = addslashes($_FILES['i']['tmp_name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		
		$sql = "INSERT INTO login(id,pass,dept,photo) VALUES ('$rno',SHA1('$pas'),'$d','$image')";
		if (mysqli_query($conn, $sql)){
				echo "<script> window.location = 'home.php'</script>";
		}
		else
			echo "registration unsuccessful";		
	}
	mysqli_close($conn);
?>
