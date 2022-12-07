<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$name = $_POST['name'];
	$price = $_POST['price'];
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	// Create connection
	try{
		$conn = new PDO($sql, $username, $password, $dsn_Options);
		echo "Connectedsuccessfully";
	} catch (PDOException $error) {
		echo 'Connection error: ' . $error->getMessage();
	}

	$my_Insert_Statement = $conn->prepare("INSERT INTO prod (prod_name, prod_price) VALUES (?, ?)");
	$my_Insert_Statement->bindParam(1, $name);
	$my_Insert_Statement->bindParam(2, $price);

	if ($my_Insert_Statement->execute()) {
		echo "New record create dsuccessfully";
		header('Location: ../work.php');
	} else {
		echo "Unable to createrecord";
	}
?> 