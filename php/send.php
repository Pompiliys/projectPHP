<?php
	$to = ''; //почта получателя

	$regexp = '/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/';
	$fio = $_POST['fio'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$fio = htmlspecialchars($fio);
	$email = htmlspecialchars($email);
	$message = htmlspecialchars($message);
	
	$fio = urldecode($fio);
	$email = urldecode($email);
	$message = urldecode($message);
	
	$fio = trim($fio);
	$email = trim($email);
	$message  = trim($message);
	
	if(preg_match($regexp, $email)){
		if($to == ''){
			header('Location: ../service.php?mail=notworking');
			exit();
		}else{
			try{
				//для работы почты нужен smpt сервер
				//mail($to, "Письмо с сайта", "ФИО:".$fio.". E-mail: ".$email." Сообщение: ".$message);
			} catch (Exception $e) {}
		}
	}
?>