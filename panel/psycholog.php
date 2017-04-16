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
						$_SESSION['udanawprowadzenie']=true;
						
						$wiersz = $rezultat3->fetch_assoc();
				
						$idd22 = $wiersz['id_uzytkownicy'];
		
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
					
			

 			
				
					
	}
					
			if (isset($_POST['wiek'])){	
			
			$wszystko_OK=true;
			
	$wiek = $_POST['wiek'];
	$temperatura = $_POST['temperatura'];	
	$wzrost = $_POST['wzrost'];
	$waga = $_POST['waga'];
	$chorobypsy = $_POST['chorobypsy'];
	$chorobynpsy = $_POST['chorobynpsy'];
	$naj1 = $_POST['naj1'];	
	$naj2 = $_POST['naj2'];
	$naj3 = $_POST['naj3'];
	$naj4 = $_POST['naj4'];
	$naj5 = $_POST['naj5'];
	$zawod = $_POST['zawod'];	
	$religia = $_POST['religia'];
	$answer2= $_POST['radioo2'];
	$answer3= $_POST['radioo3'];
	$answer4= $_POST['radioo4'];
	$answer5= $_POST['radioo5'];
	$answer6= $_POST['radioo6'];
	$answer7= $_POST['radioo7'];
	$answer8= $_POST['radioo8'];
	$answer9= $_POST['radioo9'];
	$answer10= $_POST['radioo10'];
	$answer11= $_POST['radioo11'];
	$answer12= $_POST['radioo12'];
	$answer13= $_POST['radioo13'];
	$answer14= $_POST['radioo14'];
	$answer15= $_POST['radioo15'];
	$answer16= $_POST['radioo16'];
	$answer17= $_POST['radioo17'];
	$answer18= $_POST['radioo18'];
	$answer19= $_POST['radioo19'];
	
	

	
	$chorobypsy = htmlentities($chorobypsy, ENT_QUOTES, "UTF-8");
	$chorobynpsy = htmlentities($chorobynpsy, ENT_QUOTES, "UTF-8");
	$naj1 = htmlentities($naj1, ENT_QUOTES, "UTF-8");	
	$naj2 = htmlentities($naj2, ENT_QUOTES, "UTF-8");
	$naj3 = htmlentities($naj3, ENT_QUOTES, "UTF-8");
	$naj4 = htmlentities($naj4, ENT_QUOTES, "UTF-8");
	$naj5 = htmlentities($naj5, ENT_QUOTES, "UTF-8");
	$zawod = htmlentities($zawod, ENT_QUOTES, "UTF-8");
	$religia = htmlentities($religia, ENT_QUOTES, "UTF-8");
	
	
	
	
	
	
		//Sprawdzenie długości wieka
		if (!(is_numeric($wiek)))
			
		{
			$wszystko_OK=false;
			$_SESSION['e_wiek']="Wartością musi być liczba!";
		}
				if (!(is_numeric($temperatura)))
		{
			$wszystko_OK=false;
			$_SESSION['e_temperatura']="Wartością musi być liczba!";
		}
						if (!(is_numeric($wzrost)))
		{
			$wszystko_OK=false;
			$_SESSION['e_wzrost']="Wartością musi być liczba!";
		}
								if (!(is_numeric($waga)))
		{
			$wszystko_OK=false;
			$_SESSION['e_waga']="Wartością musi być liczba!";
		}
										if ($chorobypsy==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_chorobypsy']="Nie ustawiono wartości!";
		}
										if ($zawod==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_zawod']="Nie ustawiono wartości!";
		}
												if ($religia==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_religia']="Nie ustawiono wartości!";
		}
												if ($naj5==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_naj5']="Nie ustawiono wartości!";
		}
												if ($naj4==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_naj4']="Nie ustawiono wartości!";
		}
												if ($naj3==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_naj3']="Nie ustawiono wartości!";
		}
												if ($naj2==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_naj2']="Nie ustawiono wartości!";
		}
												if ($naj1==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_naj1']="Nie ustawiono wartości!";
		}
														if ($chorobynpsy==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_chorobynpsy']="Nie ustawiono wartości!";
		}
		
if ($wszystko_OK==true){

	require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

		
	
		
		
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_profil FROM uzytkownicy,Profil WHERE Profil.id_uzytkownicy=uzytkownicy.id AND id = '%s'",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
						
				
				
				
			if ($polaczenie->query(sprintf("UPDATE Profil  SET par1='$answer2',  par2 ='$answer3', 	par4 ='$answer4', 	 par5 ='$answer5', 	 par6 ='$answer6' 	, par7='$answer7' , 	par8='$answer8' , 	par9='$answer9' , 	par10='$answer10' , 	par11='$answer11' , 	par12='$answer12' , 	par14='$answer19' , 	par15='$answer13',  	par3='$answer18' , 	par13='$answer14' , 	par16='$answer15' , 	par17='$answer16' , 	wiek='$wiek' , 	waga='$waga' , 	wzrost='$wzorst',  	temperatura='$temperatura' , 	choroby_p='%s' , 	 choroby_n_p='%s' , 	zawod='%s' , 	religia='%s' , 	naj1='%s' , 	naj2 ='%s', 	naj3 ='%s'	, naj4 ='%s', 	naj5='%s'  , 	par18='$answer17' WHERE id_uzytkownicy='$idd22'",mysqli_real_escape_string($polaczenie,$chorobypsy),mysqli_real_escape_string($polaczenie,$chorobynpsy),mysqli_real_escape_string($polaczenie,$zawod),mysqli_real_escape_string($polaczenie,$religia),mysqli_real_escape_string($polaczenie,$naj1),mysqli_real_escape_string($polaczenie,$naj2),mysqli_real_escape_string($polaczenie,$naj3),mysqli_real_escape_string($polaczenie,$naj4),mysqli_real_escape_string($polaczenie,$naj5))))
					{
						$_SESSION['udanawprowadzenie']=true;
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
			} else {

			

			
									if ($polaczenie->query(sprintf("INSERT INTO Profil(id_profil, 	par1, 	par2, 	par4, 	par5, 	par6, 	par7, 	par8, 	par9, 	par10, 	par11, 	par12, 	par14, 	par15, 	par3, 	par13, 	par16, 	par17, 	wiek, 	waga, 	wzrost, 	temperatura, 	choroby_p, 	choroby_n_p, 	zawod, 	religia, 	naj1, 	naj2, 	naj3, 	naj4, 	naj5, 	id_uzytkownicy, 	par18) VALUES (NULL,'$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10','$answer11','$answer12','$answer19','$answer13','$answer18','$answer14','$answer15','$answer16','$wiek','$waga','$wzrost','$temperatura','%s', '%s','%s','%s','%s','%s','%s','%s','%s','$idd22','$answer17')",mysqli_real_escape_string($polaczenie,$chorobypsy),mysqli_real_escape_string($polaczenie,$chorobynpsy),mysqli_real_escape_string($polaczenie,$zawod),mysqli_real_escape_string($polaczenie,$religia),mysqli_real_escape_string($polaczenie,$naj1),mysqli_real_escape_string($polaczenie,$naj2),mysqli_real_escape_string($polaczenie,$naj3),mysqli_real_escape_string($polaczenie,$naj4),mysqli_real_escape_string($polaczenie,$naj5))))
					{
						$_SESSION['udanawprowadzenie']=true;
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
		
				
			}
			
		}
		
		$polaczenie->close();
	}
		
}else{
		
		if ($wszystko_OK==false)	{
	
	
	unset($temperatura);
	unset($wiek);
	unset($waga);
	unset($wzorst);
	unset($chorobypsy);
	unset($chorobynpsy);
	unset($naj1);
	unset($naj2);
	unset($naj3);
	unset($naj4);
	unset($naj5);
	unset($zawod);
	unset($religia);
	unset($answer2);
	unset($answer3);
	unset($answer4);
	unset($answer5);
		unset($answer6);
	unset($answer7);
	unset($answer8);
	unset($answer9);
		unset($answer10);
	unset($answer11);
	unset($answer12);
	unset($answer13);
		unset($answer14);
	unset($answer15);
	unset($answer16);
	unset($answer17);
	unset($answer18);
	unset($answer19);
}	
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
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400|Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="../css/style.css">
	
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
					<div class="tile56">
				

<form method='post'>
  
    
	    <h1>Jak rozwinięty jest Twój umysł?</h1>
    <label class="control control--radio">Bardziej lewa półkula.
      <input type="radio" name="radioo2" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Bardziej prawa półkula
      <input type="radio" name="radioo2" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Wybierz płeć.</h1>
    <label class="control control--radio">Kobieta.
      <input type="radio" name="radioo3" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Mężczyzna.
      <input type="radio" name="radioo3" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
		    <h1>Zadowolenie z życia</h1>
    <label class="control control--radio">1
      <input type="radio" name="radioo4" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">2
      <input type="radio" name="radioo4" value='B'/>
      <div class="control__indicator"></div>
    </label>
	    <label class="control control--radio">3
      <input type="radio" name="radioo4" value='C'/>
      <div class="control__indicator"></div>
    </label>
	    <label class="control control--radio">4
      <input type="radio" name="radioo4" value='D'/>
      <div class="control__indicator"></div>
    </label>
	    <label class="control control--radio">5
      <input type="radio" name="radioo4" value='E'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Wykształcenie</h1>
    <label class="control control--radio">Podstawowe
      <input type="radio" name="radioo5" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Średnie
      <input type="radio" name="radioo5" value='B'/>
      <div class="control__indicator"></div>
    </label>
	    <label class="control control--radio">Wyższe
      <input type="radio" name="radioo5" value='C'/>
      <div class="control__indicator"></div>
    </label>
	
		    <h1>Kim jesteś?</h1>
    <label class="control control--radio">Uczeń
      <input type="radio" name="radioo6" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Studen
      <input type="radio" name="radioo6" value='B'/>
      <div class="control__indicator"></div>
    </label>
	    <label class="control control--radio">Osoba pracująca
      <input type="radio" name="radioo6" value='C'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Kim jesteś ?</h1>
    <label class="control control--radio">Humanista
      <input type="radio" name="radioo7" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Umysł ścisły
      <input type="radio" name="radioo7" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
		    <h1>Stały kontakt seksualny?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo8" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo8" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
		    <h1>Czy cierpisz na depresję?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo9" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo9" value='B'/>
      <div class="control__indicator"></div>
    </label>

	
		    <h1>Czy chorowałeś na depresję?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo10" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo10" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
			    <h1>Stałe zażywanie leków?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo11" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo11" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
				    <h1>Prawo jazdy?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo12" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo12" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
					    <h1>Rodzenństwo ?</h1>
    <label class="control control--radio">Jedynak
      <input type="radio" name="radioo19" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Mam rodzeństwo
      <input type="radio" name="radioo19" value='B'/>
      <div class="control__indicator"></div>
    </label>

					    
			</div>

			<div style="clear:both;"></div>


		</div>	
		</div>
		<div class="square">
			<div class="tile56">
    <h1>Czy praktykujesz jakąś religię?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo13" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo13" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
						    <h1>Czy praktykujesz jakąś religię?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo18" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo18" value='B'/>
      <div class="control__indicator"></div>
    </label>
			
			
									    <h1>Czy posiadasz potomstwo?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo14" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
										    <h1>Gdzie mieszkasz?</h1>
    <label class="control control--radio">Wieś
      <input type="radio" name="radioo15" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Miasto
      <input type="radio" name="radioo15" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
											    <h1>Nikotyna?</h1>
    <label class="control control--radio">Tak
      <input type="radio" name="radioo16" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Nie
      <input type="radio" name="radioo16" value='B'/>
      <div class="control__indicator"></div>
    </label>
	
												    <h1>Rodzaj wykonywanej pracy?</h1>
    <label class="control control--radio">Fizyczna
      <input type="radio" name="radioo17" value='A' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">Umysłowa
      <input type="radio" name="radioo17" value='B'/>
      <div class="control__indicator"></div>
    </label>
	


		
		
				<br /> <input type="text" placeholder="Wiek?" onfocus="this.placeholder=''" onblur="this.placeholder='Wiek?'" value="<?php
			if (isset($_SESSION['fr_wiek']))
			{
				echo $_SESSION['fr_wiek'];
				unset($_SESSION['fr_wiek']);
			}
		?>" name="wiek" /><br />
				<?php
			if (isset($_SESSION['e_wiek']))
			{
				echo '<div class="error">'.$_SESSION['e_wiek'].'</div>';
				unset($_SESSION['e_wiek']);
			}
		?>	
		
				 <input type="text" placeholder="Temperatura w sypialni?" onfocus="this.placeholder=''" onblur="this.placeholder='Temperatura w sypialni?'" value="<?php
			if (isset($_SESSION['fr_temperatura']))
			{
				echo $_SESSION['fr_temperatura'];
				unset($_SESSION['fr_temperatura']);
			}
		?>" name="temperatura" /><br />
				<?php
			if (isset($_SESSION['e_temperatura']))
			{
				echo '<div class="error">'.$_SESSION['e_temperatura'].'</div>';
				unset($_SESSION['e_temperatura']);
			}
		?>	
			
								 <input type="text" placeholder="Choroby psychiczne?" onfocus="this.placeholder=''" onblur="this.placeholder='Choroby psychiczne?'" value="<?php
			if (isset($_SESSION['fr_chorobypsy']))
			{
				echo $_SESSION['fr_chorobypsy'];
				unset($_SESSION['fr_chorobypsy']);
			}
		?>" name="chorobypsy" /><br />
				<?php
			if (isset($_SESSION['e_chorobypsy']))
			{
				echo '<div class="error">'.$_SESSION['e_chorobypsy'].'</div>';
				unset($_SESSION['e_chorobypsy']);
			}
		?>	
									 <input type="text" placeholder="Choroby nie na tle psychicznym" onfocus="this.placeholder=''" onblur="this.placeholder='Choroby nie na tle psychicznym'" value="<?php
			if (isset($_SESSION['fr_chorobynpsy']))
			{
				echo $_SESSION['fr_chorobynpsy'];
				unset($_SESSION['fr_chorobynpsy']);
			}
		?>" name="chorobynpsy" /><br />
				<?php
			if (isset($_SESSION['e_chorobynpsy']))
			{
				echo '<div class="error">'.$_SESSION['e_chorobynpsy'].'</div>';
				unset($_SESSION['e_chorobynpsy']);
			}
		?>	
										 <input type="text" placeholder="Waga?" onfocus="this.placeholder=''" onblur="this.placeholder='Waga?'" value="<?php
			if (isset($_SESSION['fr_waga']))
			{
				echo $_SESSION['fr_waga'];
				unset($_SESSION['fr_waga']);
			}
		?>" name="waga" /><br />
				<?php
			if (isset($_SESSION['e_waga']))
			{
				echo '<div class="error">'.$_SESSION['e_waga'].'</div>';
				unset($_SESSION['e_waga']);
			}
		?>	
											 <input type="text" placeholder="Wzrost?" onfocus="this.placeholder=''" onblur="this.placeholder='Wzrost?'" value="<?php
			if (isset($_SESSION['fr_wzrost']))
			{
				echo $_SESSION['fr_wzrost'];
				unset($_SESSION['fr_wzrost']);
			}
		?>" name="wzrost" /><br />
				<?php
			if (isset($_SESSION['e_wzrost']))
			{
				echo '<div class="error">'.$_SESSION['e_wzrost'].'</div>';
				unset($_SESSION['e_wzrost']);
			}
		?>	
												 <input type="text" placeholder="Zawod?" onfocus="this.placeholder=''" onblur="this.placeholder='Zawod?'" value="<?php
			if (isset($_SESSION['fr_zawod']))
			{
				echo $_SESSION['fr_zawod'];
				unset($_SESSION['fr_zawod']);
			}
		?>" name="zawod" /><br />
				<?php
			if (isset($_SESSION['e_zawod']))
			{
				echo '<div class="error">'.$_SESSION['e_zawod'].'</div>';
				unset($_SESSION['e_zawod']);
			}
		?>	
													 <input type="text" placeholder="Religia?" onfocus="this.placeholder=''" onblur="this.placeholder='Religia?'" value="<?php
			if (isset($_SESSION['fr_religia']))
			{
				echo $_SESSION['fr_religia'];
				unset($_SESSION['fr_religia']);
			}
		?>" name="religia" /><br />
				<?php
			if (isset($_SESSION['e_religia']))
			{
				echo '<div class="error">'.$_SESSION['e_religia'].'</div>';
				unset($_SESSION['e_religia']);
			}
		?>	
														 <input type="text" placeholder="Najważniejsza osoba 1" onfocus="this.placeholder=''" onblur="this.placeholder='Najważniejsza osoba 1'" value="<?php
			if (isset($_SESSION['fr_naj1']))
			{
				echo $_SESSION['fr_naj1'];
				unset($_SESSION['fr_naj1']);
			}
		?>" name="naj1" /><br />
				<?php
			if (isset($_SESSION['e_naj1']))
			{
				echo '<div class="error">'.$_SESSION['e_naj1'].'</div>';
				unset($_SESSION['e_naj1']);
			}
		?>	
															 <input type="text" placeholder="Najważniejsza osoba 2" onfocus="this.placeholder=''" onblur="this.placeholder='Najważniejsza osoba 2?'" value="<?php
			if (isset($_SESSION['fr_naj2']))
			{
				echo $_SESSION['fr_naj2'];
				unset($_SESSION['fr_naj2']);
			}
		?>" name="naj2" /><br />
				<?php
			if (isset($_SESSION['e_naj2']))
			{
				echo '<div class="error">'.$_SESSION['e_naj2'].'</div>';
				unset($_SESSION['e_naj2']);
			}
		?>	
						 <input type="text" placeholder="Najważniejsza osoba 3" onfocus="this.placeholder=''" onblur="this.placeholder='Najważniejsza osoba 3'" value="<?php
			if (isset($_SESSION['fr_naj3']))
			{
				echo $_SESSION['fr_naj3'];
				unset($_SESSION['fr_naj3']);
			}
		?>" name="naj3" /><br />
				<?php
			if (isset($_SESSION['e_naj3']))
			{
				echo '<div class="error">'.$_SESSION['e_naj3'].'</div>';
				unset($_SESSION['e_naj3']);
			}
		?>	
						 <input type="text" placeholder="Najważniejsza osoba 4" onfocus="this.placeholder=''" onblur="this.placeholder='Najważniejsza osoba 4'" value="<?php
			if (isset($_SESSION['fr_naj4']))
			{
				echo $_SESSION['fr_naj4'];
				unset($_SESSION['fr_naj4']);
			}
		?>" name="naj4" /><br />
				<?php
			if (isset($_SESSION['e_naj4']))
			{
				echo '<div class="error">'.$_SESSION['e_naj4'].'</div>';
				unset($_SESSION['e_naj4']);
			}
		?>	
						 <input type="text" placeholder="Najważniejsza osoba 5" onfocus="this.placeholder=''" onblur="this.placeholder='Najważniejsza osoba 5'" value="<?php
			if (isset($_SESSION['fr_naj5']))
			{
				echo $_SESSION['fr_naj5'];
				unset($_SESSION['fr_naj5']);
			}
		?>" name="naj5" /><br />
				<?php
			if (isset($_SESSION['e_naj5']))
			{
				echo '<div class="error">'.$_SESSION['e_naj5'].'</div>';
				unset($_SESSION['e_naj5']);
			}
		?>	


		
											
	
	      <input type='submit' value='Zatwierdź' />
    
</form>
 
			</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>



