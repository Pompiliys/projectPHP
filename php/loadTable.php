<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$sql = "mysql:host=$servername;dbname=products;";
	$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	
	// Create connection
	try{
		$conn = new PDO($sql, $username, $password, $dsn_Options);
	} catch (PDOException $error) {
			header('Location: ../work.php?database=notworking');
			exit();
	}

	$result = $conn->prepare("SELECT * FROM prod");
	$result->execute();			
	$fields_num = $result->rowCount();
	for($i = 0; $i < $fields_num; $i++){
		$array = $result->fetch(PDO::FETCH_ASSOC);
	echo "<tr>" .
		"<td align='center' vstyle='vertical-align:middle;'> <p>" . $array["prod_name"] . "</p></td>" .
		"<td align='center' style='padding:2px; vertical-align:middle;'><p>" . $array["prod_price"] . "</p></td>" .
		"</tr>";
	}
?>