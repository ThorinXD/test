<?php
	session_start();
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	
	require_once 'polaczenie1.php';
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (1, '$imie', '$nazwisko', 9)"))
	{
		header('Location: quiz.php');
	}
	else {
		echo "Błąd";
	}
	
?>