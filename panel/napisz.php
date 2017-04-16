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
				
					
					if (isset($_POST['name'])){
$name = $_POST['name'];
$message = $_POST['message'];

$name = htmlentities($name, ENT_QUOTES, "UTF-8");
$message = htmlentities($message, ENT_QUOTES, "UTF-8");


$wszystko_OK=true;

	
			if ((strlen($name)<4) || (strlen($name)>16))
		{
			$wszystko_OK=false;
		
		}
	if (!isset($_POST['message'])){
		
		$wszystko_OK=false;
	}
	
	
	
	
if ($wszystko_OK==true)	{

	require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{

				
				if ($polaczenie->query(sprintf("SELECT szukaj2 ('$idd22','%s','%s') AS szukaj2;",
		mysqli_real_escape_string($polaczenie,$name),
		mysqli_real_escape_string($polaczenie,$message))))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				
				 
				
			
		}

		
		$polaczenie->close();
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type="text/css">

#formularz label{
    display: inline-block;
    width: 100px;
    text-align: right;
}

#submit
{
	width: 300px;
	background-color: #999;
	font-size:20px;
	color: white;
	padding: 15px 10px;
	margin-top: 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	letter-spacing: 2px;
	outline: none;
}

#submit:focus
{
	-webkit-box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
	-moz-box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
	box-shadow: 0px 0px 15px 5px rgba(204,204,204,0.9);
}

#submit:hover
{
	background-color: #3B5B98
}

input[type=text],
input[type=password]
{
	width: 300px;
	background-color: #efefef;
	color: #666;
	border: 2px solid #ddd;
	border-radius: 5px;
	font-size: 20px;
	box-sizing: border-box;
	outline: none;
	margin-top: 10px;
}

input[type=text]:focus,
input[type=password]:focus
{
	-webkit-box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	-moz-box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	border: 2px solid #3B5B98;
	background-color: #3B5B98;
	color: #efefef;
}

textarea
{
	width: 930px;
	background-color: #efefef;
	color: #666;
	border: 2px solid #ddd;
	border-radius: 5px;
	font-size: 20px;
	box-sizing: border-box;
	outline: none;
	margin-top: 10px;
}

textarea:focus
{
	-webkit-box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	-moz-box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	box-shadow: 0px 0px 10px 2px rgba(204,204,204,0.9);
	border: 2px solid #3B5B98;
	background-color: #3B5B98;
	color: #efefef;
}
input.invalid, textarea.invalid{
    border: 3px solid red;
}
 
input.valid, textarea.valid{
    border: 3px solid #D1E292;
}

.blad {
	color: red;	
	font-family: 'Lato', sans-serif;
}

.ok {
	color:  	#D1E292;
font-family: 'Lato', sans-serif;	
}

</style>

<script>
$(document).ready(function() {

	<!-- Walidacja nazwy -->
	$('#name').on('blur', function() {
		var input = $(this);
		var name_length = input.val().length;
		if(name_length >= 5 && name_length <= 15){
			input.removeClass("invalid").addClass("valid");
			input.next('.komunikat').text("").removeClass("blad").addClass("ok");
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.next('.komunikat').text("Nazwa musi mieć więcej niż 4 i mniej niż 16 znaków!").removeClass("ok").addClass("blad");
			
		}
	});
		
	
	
	<!-- Walidacja wiadomości -->
	$('#message').on('blur', function() {
		var input = $(this);
		var message = $(this).val();
		if(message){
			input.removeClass("invalid").addClass("valid");
			input.next('.komunikat').text("").removeClass("blad").addClass("ok");
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.next('.komunikat').text("").removeClass("ok").addClass("blad");
		}   
	});
	
	<!-- Po próbie wysłania formularza -->
		$('button').click(function(event){
			var name = $('#name');
			
			var message = $('#message');
			
			if(name.hasClass('valid') && message.hasClass('valid')){
				alert("Pomyślnie wysłano formularz.");	
			}
			else {
				event.preventDefault();
				alert("Uzupełnij wszystkie pola!");	
			}
			
			
		});
});
</script>
</head>

<body onload="odliczanie();">


	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="panel" class="tilelinkhtml5">Panel rozwoju</a></div>
			</div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		
		
		<div class="square">
					<div class="tile566">
				


  
    
<form id="formularz" method="post" action="">
    
    <div>
        <label for="name"></label>
        <input type="text" id="name" name="name"></input>
        <span class="komunikat"></span>
    </div>
   
	<br />                     
    
    <div>
        <label for="message"></label>
        <textarea id="message" name="message"></textarea>
        <span class="komunikat"></span>                                               
    </div>                    
  
                
        <button type="submit" id="submit">Wyślij</button>
  
</form>
 
			</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>