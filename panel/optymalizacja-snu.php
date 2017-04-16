<?php

					if (! isset($_COOKIE['id'])){header("location:../logowanie");exit;}

$cz = $_SERVER[HTTP_USER_AGENT];
$dz = $_SERVER[REMOTE_ADDR];		 		
$ci = $_COOKIE[id]; 



	require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
	if ($rezultat3 = @$polaczenie->query("select id_uzytkownicy from Sesja where id = '$ci' and web = '$cz' AND ip = '$dz'"))
					{
												$wiersz = $rezultat3->fetch_assoc();
			
						$idd22 = $wiersz['id_uzytkownicy'];
						$_SESSION['udanawprowadzenie']=true;
						

					
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
					
			

 			
				
					
	}
			
					
						require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		
		
		
		if ($rezultat2 = @$polaczenie->query(
		sprintf("SELECT par1,par2,par3 FROM Dieta WHERE Dieta.id_uzytkownicy = '$idd22' and data = (SELECT MAX(data) FROM Dieta WHERE id_uzytkownicy = '$idd22')",
		mysqli_real_escape_string($polaczenie,$u))))
		{
	
			
		
			
						$wiersz2 = $rezultat2->fetch_assoc();
				
				$par1 = $wiersz2['par1'];
				$par2 = $wiersz2['par2'];
				$par3 = $wiersz2['par3'];
				
			}
			

			
					if ($rezultat3 = @$polaczenie->query(
		sprintf("SELECT par1,par2,par3,data FROM Analiza_dnia WHERE Analiza_dnia.id_uzytkownicy = '$idd22' and data = (SELECT MAX(data) FROM Analiza_dnia WHERE id_uzytkownicy = '$idd2')",
		mysqli_real_escape_string($polaczenie,$u))))
		{
	
			
		
			
						$wiersz3 = $rezultat3->fetch_assoc();
				
							$par11 = $wiersz3['par1'];
							$par22 = $wiersz3['par2'];
							$par32 = $wiersz3['par3'];
				
			}
	}		
	$stadium1=30;
	$stadium2=30;
	$stadium3=30;
	$stadium4=15;
	
	if($par1==0){
		$stadium1=$stadium1-1;
		$stadium2=$stadium2-1;
		$stadium3=$stadium3+1;
		$stadium4=$stadium4-1;
	}
	else{
		
		$stadium1=$stadium1-3;
		$stadium2=$stadium2+2;
		$stadium3=$stadium3;
		$stadium4=$stadium4-1;
		
	}
		if($par2==0){
			
					$stadium1=$stadium1+2;
		$stadium2=$stadium2-1;
		$stadium3=$stadium3;
		$stadium4=$stadium4-1;
		
	}
	else{
		
				$stadium1=$stadium1-1;
		$stadium2=$stadium2-1;
		$stadium3=$stadium3+1;
		$stadium4=$stadium4-1;
		
	}
		if($par3==0){
			
			
					$stadium1=$stadium1;
		$stadium2=$stadium2;
		$stadium3=$stadium3+1;
		$stadium4=$stadium4-1;
		
	}
	else{
		
				$stadium1=$stadium1;
		$stadium2=$stadium2;
		$stadium3=$stadium3;
		$stadium4=$stadium4;
		
	}
	
	
		if($par11==0){
			
							$stadium1=$stadium1;
		$stadium2=$stadium2;
		$stadium3=$stadium3;
		$stadium4=$stadium4;
		
	}
	else{
		
						$stadium1=$stadium1;
		$stadium2=$stadium2+1;
		$stadium3=$stadium3;
		$stadium4=$stadium4-1;
		
	}
		if($par22==0){
			
							$stadium1=$stadium1+2;
		$stadium2=$stadium2;
		$stadium3=$stadium3;
		$stadium4=$stadium4-2;
		
	}
	else{
		
						$stadium1=$stadium1+2;
		$stadium2=$stadium2;
		$stadium3=$stadium3-2;
		$stadium4=$stadium4;
		
	}
		if($par33==0){
			
							$stadium1=$stadium1+1;
		$stadium2=$stadium2;
		$stadium3=$stadium3;
		$stadium4=$stadium4-1;
		
	}
	else{
		
						$stadium1=$stadium1;
		$stadium2=$stadium2-2;
		$stadium3=$stadium3+2;
		$stadium4=$stadium4;
		
	}
	
?>



<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Panel rozwoju</title>

	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Bungee+Hairline&amp;subset=latin-ext,vietnamese" rel="stylesheet">

	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">


	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="panel" class="tilelinkhtml5">Panel rozwoju</a></div>
			</div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		
		
	

			
		
		<div class="square">
			<div class="tile541">
		
		
		NREM:
		<br><br><br>
		<?php echo "Stadium 1 - ".$stadium1." min."; ?>
		<br><br><br>
		<?php echo "Stadium 2 - ".$stadium2." min."; ?>
		<br><br><br>
		<?php echo "Stadium 3 - ".$stadium3." min."; ?>
		<br><br><br>
		REM:
		<br><br><br>
		<?php echo "Stadium 4 - ".$stadium4." min."; ?>
		
		
		
		
		
			</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>