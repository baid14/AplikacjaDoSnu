<?php

	session_start();
	
	
	
	
	
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$email= htmlentities($email, ENT_QUOTES, "UTF-8");
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		
		//Zapamiętaj wprowadzone dane
	
		$_SESSION['fr_email'] = $email;

	
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
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				
				if($ile_takich_maili==0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Podany mail nie istnieje w Naszej bazie";
				}		

				
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					
					
					
					
					
					
					if ($rezultat = @$polaczenie->query(sprintf("SELECT user FROM uzytkownicy WHERE email='%s'",
		mysqli_real_escape_string($polaczenie,$email))))
					{
						
						$wiersz = $rezultat->fetch_assoc();
					$odbior2 = $wiersz['user'];
					
	$kod=rand();
			
						$message=" http://pbdpk.y0.pl/sen/zmianapw.php?user=$odbior2&kod=$kod";
						mail($email, "Zmianahasla",$message,"Nie odpowiadaj na tego maila");
						
						
						
						if ($polaczenie->query("INSERT INTO repw (	id_repw, 	kod, 	aktywacja, login ) VALUES (NULL,'$kod', 0, '$odbior2')"))
					{

					}
					else
					{
						throw new Exception($polaczenie->error);
					}
						
						
						$_SESSION['udanarejestracja2']=true;
					
						
						
						
						
						header('Location: wyslano.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
					
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
	<title>Przypomnienie hasła1</title>
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

	
		Podaj mail, którego użyłeś podczas rejestracji.
		<br /> <input type="text" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" /><br />
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		
		
		
		<input type="submit" value="Przypomnij!" />
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