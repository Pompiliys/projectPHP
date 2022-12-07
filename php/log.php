<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$psw = $_POST['psw'];
	$name = $_POST['name'];
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	// Create connection
	try{
	$conn = new PDO($sql, $username, $password, $dsn_Options);
	} catch (PDOException $error) {
	  echo 'Connection error: ' . $error->getMessage();
	}

	$my_Insert_Statement = $conn->prepare("SELECT * FROM users WHERE usname= ? AND passw = ?");
	$my_Insert_Statement->bindParam(1, $name);
	$my_Insert_Statement->bindParam(2, $psw);

	if ($my_Insert_Statement->execute()) {
		while($row = $my_Insert_Statement->fetch(PDO::FETCH_ASSOC)) {
			$_SESSION['usname'] = $name;
			header('Location: ../index.php');
			exit();
		}
	} else {
		header('Location: ../login.html?log=error');
		exit();
	}
	
	header('Location: ../login.html?log=error');
	exit();
?>