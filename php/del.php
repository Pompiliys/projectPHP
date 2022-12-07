<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	$name = $_POST['name'];
	
	// Create connection
	try{
		$conn = new PDO($sql, $username, $password, $dsn_Options);
	} catch (PDOException $error) {
	}
	
		$result = $conn->prepare("DELETE FROM prod WHERE prod_name = ?");
		$result->bindParam(1, $name);
		$result->execute();			
		header('Location: ../work.php');
?>