<?php

	session_start();
	
	
	
	
	
	
	if (isset($_POST['kod']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		
		
		// Sprawdź poprawność adresu kod
		$kod = $_POST['kod'];
		$kod= htmlentities($kod, ENT_QUOTES, "UTF-8");
		
		$_SESSION['fr_kod'] = $kod;

	
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy kod już istnieje?
				$rezultat = $polaczenie->query("SELECT id_aktywacja2 FROM Aktywacja2 WHERE kod='$kod'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				
				if($ile_takich_maili==0)
				{
					$wszystko_OK=false;
					$_SESSION['e_kod']="Podany kod jest zły";
				}		

				
				
				if ($wszystko_OK==true)
				{
	
												if ($polaczenie->query("DELETE FROM Aktywacja2 WHERE kod = '$kod' "))
					{
						$_SESSION['udanarejestracja']=true;
						
						
					
						
						
						
						
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
	
	
				
													$id2 = md5(rand(-10000,10000) . microtime()) . md5(crc32(microtime()) .
$_SERVER['REMOTE_ADDR']);


$aa = $_SERVER[REMOTE_ADDR];
$bb = $_SERVER[HTTP_USER_AGENT];


									if ($polaczenie->query("delete from Sesja where id_uzytkownicy = '$id7'"))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}

									if ($polaczenie->query("insert into Sesja (id_uzytkownicy, id, ip, web) values

('$id7','$id2','$aa','$bb')"))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}



						

						
						
						
						
						
					//$_SESSION['zalogowany2'] = true;
									$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['email'] = $wiersz['email'];
					setcookie("id2", $id2);
										//setcookie("zalogowany",$_SESSION['zalogowany'],time()+1000);
										header('Location: panel2/panel_administratora.php');
					
					
					
										$x = date('Y-m-d H:i:s');
					unset($_SESSION['blad']);
					$rezultat->free_result();
				
				
				
				
				
				
				
				
				
				
				
				
					
					
				$polaczenie->close();
				}
				}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Weryfikacja.</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet"> 
	
	  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400|Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style2.css" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}


		a:link 
{
color:black;
font-family: 'Shadows Into Light Two', cursive;
}

a:visited {
    color: #1D1B5E;
}

a:hover {
    color: #6D316D;
}

a:active {
    color: 1C6163;
}  
	</style>
</head>

<body>

<script type="text/javascript">
	document.getElementsByTagName("div")[0].style.display = "none";
  </script>
	
	<form method="post">
	<div id="container">

	
		
		<br /> <input type="text" placeholder="kod" onfocus="this.placeholder=''" onblur="this.placeholder='kod'" value="<?php
			if (isset($_SESSION['fr_kod']))
			{
				echo $_SESSION['fr_kod'];
				unset($_SESSION['fr_kod']);
			}
		?>" name="kod" /><br />
		
		<?php
			if (isset($_SESSION['e_kod']))
			{
				echo '<div class="error">'.$_SESSION['e_kod'].'</div>';
				unset($_SESSION['e_kod']);
			}
		?>
		
		
		
		<input type="submit" value="Przejdz!" />
		<br><br>
		<center><a href="logowanie">Wróć do logowania.</a></center>
	</form>
 <style type="text/css">
.cbalink {
 display:none;
}
</style> 
</div>
</body>
</html>