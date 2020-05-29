<?php
	if(!isset($_SESSION["id"])) {
		echo '<script> window.location="../home.php" </script>';
	}
?>