<?php

	session_start();
	

	?>

	

	
<!DOCTYPE HTML>
<html class="no-js" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Stwórz siebie</title>
	<meta name="description" content="..." />
	<meta name="keywords" content="..." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/jquery.cookiepolicy.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
	        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.cookiepolicy.js"></script>
        <script src="js/main.js"></script>
    </body>
	<script type="text/javascript">
	document.getElementsByTagName("div")[0].style.display = "none";
  </script>
	
	<div id="container">
	
		<div id="logo">
			Stwórz Siebie
		</div>
		
		<div id="menu">
		<div class="option" onClick= "window.open('logowanie','_newtab');">
			Panel rozwoju</div>
			<div class="option" onClick="window.open('rejestracja','_newtab');">Rejestracja</div>
			
				<?php if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		echo '<div class="option2"> Witaj '.$_SESSION['user'].' !</div>';

}  ?>		
			<div style="clear:both;"></div>
		</div>
		
		<div id="topbar">
			<div id="topbarL">
				<img src="img/logo1.png" />
			</div>
			<div id="topbarR">
				<span class="bigtitle">Nasza misja:</span>
				<div style="height: 15px;"></div>
				Abc...
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
			<div class="optionL"><a href="stworzsiebie" class="tilelink">Strona głowna</a></div>			
			<div class="optionL"><a href="zeswiata" class="tilelink">Ze świata</a></div>
			<div class="optionL"><a href="psychologia" class="tilelink">Psychologia</a></div>
			<div class="optionLL"><a href="neuropsychologia" class="tilelink">Neuropsychologia</a></div>	<div class="optionL"><a href="efektywnysen" class="tilelink">Efektywny sen</a></div>		<div class="optionL"><a href="swiadomysen" class="tilelink">Świadomy sen</a></div>
		</div>
		
		<div id="content">
			<span class="bigtitle">20 lat Twojego życia o których nic nie wiesz</span>
			 
			<div class="dottedline"></div>
			
			Abc...
			
			
		</div>	
		
		<div id="footer">
			Stwórz Siebie - poskrom demony Morfeusza. 
			 Strona w sieci od 2016r. &copy; Wszelkie prawa zastrzeżone
		</div>
	
	</div>
	 <style type="text/css">
.cbalink {
 display:none;
}
</body>
</html>