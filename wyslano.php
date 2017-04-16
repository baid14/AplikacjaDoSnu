<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja2']))
	{
		header('Location: logowanie.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja2']);
	}

	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wiadomość wysłana.</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
</head>

<body>

<script type="text/javascript">
	document.getElementsByTagName("div")[0].style.display = "none";
  </script>
		<div id="container">
		Na podany adres wysłano wiadomość z informacją o dalszych krokach.<br /><br />
	
	<a href="logowanie">Wróć do logowania.</a>
	</div>
	
>

 <style type="text/css">
.cbalink {
 display:none;
}
</style> 

</body>
</html>