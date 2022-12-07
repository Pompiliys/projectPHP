<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$name = $_POST['name'];
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	
	// Create connection
	try{
		$conn = new PDO($sql, $username, $password, $dsn_Options);
		echo "Connectedsuccessfully";
		} catch (PDOException $error) {
		  echo 'Connection error: ' . $error->getMessage();
	}

	$my_Insert_Statement = $conn->prepare("INSERT INTO users (email, usname, passw) VALUES (?, ?, ?)");
	$my_Insert_Statement->bindParam(1, $email);
	$my_Insert_Statement->bindParam(2, $name);
	$my_Insert_Statement->bindParam(3, $psw);

	try{
		if ($my_Insert_Statement->execute()) {
			echo "User created";
			include "log.php";
		}
	}catch(Exception $e){
			header('Location: ../reg.html?reg=error');
			exit();
	}
?>