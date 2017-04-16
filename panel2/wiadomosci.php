<?php

				
					if (! isset($_COOKIE['id2'])){header("location:../logowanie");exit;}

$cz = $_SERVER[HTTP_USER_AGENT];
$dz = $_SERVER[REMOTE_ADDR];		 		
$ci = $_COOKIE[id2]; 



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

		
		
		
		if ($rezultat3 = @$polaczenie->query(
		"select user,wiadomosc,nazwa from Wiadomosc,uzytkownicy where uzytkownicy.id = Wiadomosc.id_uzytkownicy"))
		{
	
			$n3 = 0;
		
				$login2 = $_POST['divclicked2'];
						while($wiersz = $rezultat3->fetch_assoc()){
							
							
							
							
						
						$login3[$n3] = $wiersz['user'];
						$wiadomosc3[$n3] = $wiersz['wiadomosc'];
						
	

						
						$nazw3[$n3] = $wiersz['nazwa'];
						$n3++;
						
						
						
				}
	
			
		}
	
	
	
	
		
		$polaczenie->close();	
		}
					

	
		
		
	

	
	
					
					
					
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Panel administratora</title>

	
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
			<div id="logo"><a href="panel_administratora.php" class="tilelinkhtml5">Panel administratora</a></div>
			</div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		
		
		<div class="square">
			
			<div style="clear:both;"></div>
	
		
		</div>
		<div class="square">
			<div class="tile54">
					
	
<?php 
		$i=0;
		while($i<$n3){
		
		if($login2==$i){
			echo $wiadomosc3[$i];}
			
      $i++;
	  }
    ?> 



 

			</div>
			<div style="clear:both;"></div>
</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
	



</body>
</html>