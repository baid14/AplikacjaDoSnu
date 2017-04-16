


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
		<style>

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


		<div id="container">
		<form action="zaloguj.php" method="post">
			
			
			<br>
				<br>
			
			<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
			
			<input type="password" name="haslo" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
			
			<input type="submit" value="Zaloguj się">
			
		</form>
	</div>
	

<script type="text/javascript">
	document.getElementsByTagName("div")[0].style.display = "none";
  </script>
 <style type="text/css">
.cbalink {
 display:none;
}
</style> 

</body>
</html>