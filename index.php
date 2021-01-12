<?php
	session_start();
	
		
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>QUIZ o Oskarze!</title>
</head>
<body>
	<p>Test o Oskarze! Na ile go znasz?</p>
	<form action="uzytkownicy.php" method="post">
		Imię: <br></br>
		<input type="text" name="imie"><br></br>
		Nazwisko:<br></br>
		<input type="text" name="nazwisko"><br></br>
		<input type="submit" value="Rozwiąż test!">
		</form>
</body>
</html>