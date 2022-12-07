<?php
	try {
		session_start();
		unset($_SESSION['usname']);
				header('Location: ../index.php');
	} catch (Exception $e) {
		echo 'Error: ',  $e->getMessage(), "\n";
	}
?>