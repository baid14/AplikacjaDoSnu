<?php

$login = $_GET['user'];
$kod = $_GET['kod'];
$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$kod = htmlentities($kod, ENT_QUOTES, "UTF-8");


	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		if ($polaczenie->query(sprintf("UPDATE Aktywacja  SET aktywacja='1' WHERE kod='%s' and login = '%s'",
		mysqli_real_escape_string($polaczenie,$kod),mysqli_real_escape_string($polaczenie,$login))))
					{
						
						$_SESSION['udanawprowadzenie']=true;
					}

							else
					{
						throw new Exception($polaczenie->error);
					}	
				
						

	}
?>



<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Witamy!</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
</head>

<body>

<script type="text/javascript">
	document.getElementsByTagName("div")[0].style.display = "none";
  </script>
		<div id="container">
		Potwierdzenie udane! Konto aktywowane.<br /><br />
	
	<a href="logowanie">Zaloguj się na swoje konto!</a>
	</div>
	
>

 <style type="text/css">
.cbalink {
 display:none;
}
</style> 

</body>
</html>