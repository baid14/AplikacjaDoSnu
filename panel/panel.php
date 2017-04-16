<?php

	session_start();
	

	
			//			if(!(isset($_SESSION['zalogowany'])&&isset($_COOKIE['zalogowany'])))
			//	{
	//header('Location: ../logout.php');
		//exit();
			//	}
									
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
	if ($polaczenie->query("select id_uzytkownicy from Sesja where id = '$ci' and web = '$cz' AND ip = '$dz'"))
					{
						$_SESSION['udanawprowadzenie']=true;


	if ($rezultat = @$polaczenie->query(
		sprintf("select user,email from uzytkownicy where id = (select id_uzytkownicy from Sesja where id = '$ci' and web = '$cz' AND ip = '$dz')",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
						$wiersz = $rezultat->fetch_assoc();
				
				$odbior = $wiersz['email'];

					echo $odbior;


					
			} 
			
		}
					else
					{
						throw new Exception($polaczenie->error);
					}



					
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
	
	<title>Panel rozwoju</title>

	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bungee+Hairline&amp;subset=latin-ext,vietnamese" rel="stylesheet">

	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">
<noscript>
  This page needs JavaScript activated to work. 
  <style>div { display:none; }</style>
</noscript>

	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="panel" class="tilelinkhtml5">Panel rozwoju</a></div>
			</div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		
		
		<div class="square">
			<div class="tile1">
				<a href="optymalizacja-snu" class="tilelink"><br /><i class="demo-icon icon-heartbeat"></i></a>
			</div>
			<a href="swiadomosc" class="tilelinkhtml5">
				<div class="tile2">
					<br /><i class="demo-icon icon-eye"></i></i>
				</div>
			</a>
											<div class="tile4444">
				<a href="dieta" class="tilelink"><br /><i class="demo-icon icon-fast-food"></i></a>
			</div>
			<div class="tile3">
				<a href="analiza-dnia" class="tilelink"><br /><i class="demo-icon icon-chart-area"></i></a>
			</div>
			<div class="tile7">
				<a href="swiadomy-sen" class="tilelink"><br /><i class="demo-icon icon-moon"></i></i></a>
			</div>
						
					
		
	
			<div class="tile8">
				<a href="psycholog" class="tilelink"><br /><i class="demo-icon icon-users"></i></a>
			</div>
										<div class="tile444">
				<a href="napisz" class="tilelink"><br /><i class="demo-icon icon-mail"></i></a>
			</div>
				<div class="tile6">
				<a href="../logout.php" class="tilelink"><br /><i class="demo-icon icon-power"></i></a>
			</div>
			<div style="clear:both;"></div>
			
		</div>
		<div class="square">
			<div class="tile54">
				Witaj w Panelu Rozwoju !<br /><br />
				Abc... 
			</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>