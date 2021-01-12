<?php
	session_start();
	
		require_once 'polaczenie1.php';
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
		
		if ($rezultat = @$polaczenie->query(sprintf("SELECT * FROM pytania")))
		{
			$ile = mysqli_num_rows($rezultat);

if ($ile>=1) 

	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($rezultat);
		$id = $row['id'];
		$tresc = $row['tresc'];
		$odpa = $row['odpa'];
		$odpb = $row['odpb'];
		$odpc = $row['odpc'];
		$odpd = $row['odpd'];
		$answer = $row['anwer'];
	
		
echo<<<END
$id.
$tresc<br></br>
<input type="checkbox">$odpa<br></br>
<input type="checkbox">$odpb<br></br>
<input type="checkbox">$odpc<br></br>
<input type="checkbox">$odpd<br></br>

END;
			
	}
			}
		
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>QUIZ o Oskarze!</title>
</head>
<body>
	
		
</body>
</html>