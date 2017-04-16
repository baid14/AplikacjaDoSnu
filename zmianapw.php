<?php

$login = $_GET['user'];
$kod = $_GET['kod'];
$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$kod = htmlentities($kod, ENT_QUOTES, "UTF-8");


	if (isset($_POST['haslo1']))

	{
$wszystko_OK=true;


$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		$haslo1 = htmlentities($haslo1, ENT_QUOTES, "UTF-8");
		$haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash2 = password_hash($haslo1, PASSWORD_DEFAULT);
		
					

if(wszystko_OK==true)
{
	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		
		
		
				if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_repw FROM repw WHERE login='%s' AND kod='%s'",
		mysqli_real_escape_string($polaczenie,$login),mysqli_real_escape_string($polaczenie,$kod))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{

		if ($polaczenie->query(sprintf("UPDATE repw  SET aktywacja='1' WHERE kod='%s' and login = '%s'",
		mysqli_real_escape_string($polaczenie,$kod),mysqli_real_escape_string($polaczenie,$login))))
					{
					$zmienna = 1;	
						$_SESSION['udanawprowadzenie']=true;
					}

							else
					{
						throw new Exception($polaczenie->error);
					}
		
		
					
			} else {

		
		
				
			}
			
		}
									else
					{
						throw new Exception($polaczenie->error);
					}
		
		
		
	
					
					if($zmienna==1){
						
						
							if ($rezultat3 = @$polaczenie->query(sprintf("SELECT email,kod FROM uzytkownicy WHERE user='%s'", mysqli_real_escape_string($polaczenie,$login))))
					{
												$wiersz = $rezultat3->fetch_assoc();
			
						$em = $wiersz['email'];
						$emk = $wiersz['kod'];
						$_SESSION['udanawprowadzenie']=true;
						

					
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
						
						
						
						
						
						
											if ($polaczenie->query("DELETE FROM uzytkownicy WHERE user = '$login' "))
					{
						$_SESSION['udanarejestracja']=true;
						
						
					
						
						
						
						
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
						
						
						
					if ($polaczenie->query("INSERT INTO uzytkownicy(id, 	prawa, 	user, 	pass, 	email,kod) VALUES (NULL, 0, '$login', '$haslo_hash2', '$em', '$emk')"))
					{
						$_SESSION['udanarejestracja']=true;
						
						
				
						
						
						
						
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				
					}
					$zmienna=0;	
													if ($polaczenie->query("DELETE FROM repw WHERE login = '$login' "))
					{
						$_SESSION['udanarejestracja']=true;
						
						
					
						
						
						
						
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
	}
					
			}	
						
	}
	
?>



<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Zmiana Hasła.</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
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
		<div id="container">
			<form method="post">
		<br /> <input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1" /><br />
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>		
		
		<br /> <input type="password" placeholder="powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='powtórz hasło'" value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" name="haslo2" /><br />
		<input type="submit" value="Zapisz" />
	
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