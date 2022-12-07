<?php
	$servername="localhost";
	$username="root";
	$password="";
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	try{
		$conn = new PDO($sql, $username, $password, $dsn_Options);
	} catch (PDOException $error) {
		echo 'Connection error: ' . $error->getMessage();
	}
	
	// gets the user IP Address
	$user_ip = $_SERVER['REMOTE_ADDR'];
	$my_Insert_Statement = $conn->prepare("SELECT userip FROM views WHERE userip = ?");
	$my_Insert_Statement->bindParam(1, $user_ip);
	$my_Insert_Statement->execute();
	
	if ($row = $my_Insert_Statement->fetch(PDO::FETCH_ASSOC)) {
		$my_Insert_Statement = $conn->prepare("update views set count = count+1 WHERE userip = ?");
		$my_Insert_Statement->bindParam(1, $user_ip);
		$my_Insert_Statement->execute();
	} else {
		$my_Insert_Statement = $conn->prepare("insert into views (userip, count) values(?, 1)");
		$my_Insert_Statement->bindParam(1, $user_ip);
		$my_Insert_Statement->execute();
	}
?>