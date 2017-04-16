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
		
			function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}
					 
if (isset($_POST['data'])){
$data = $_POST['data'];
$notatka = $_POST['notatka'];
$a = $_POST['divclicked'];

$notatka = htmlentities($notatka, ENT_QUOTES, "UTF-8");


$wszystko_OK=true;

	if (!(validateDate($data)))			
		{
			$wszystko_OK=false;
			$_SESSION['e_data']="Wartością musi być datą w formacie [YYYY-MM-DD] !";
		}
		
		
		
		$dateNow = date('Y-m-d');
		
			if ($data>$dateNow)			
		{
			$wszystko_OK=false;
			$_SESSION['e_data']="Nie możesz wybrać dnia, który jeszcze nie nastąpił!";
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

		

		
		if($a==0){
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_notatka,id,notatka FROM uzytkownicy,Notatka WHERE Notatka.id_uzytkownicy=uzytkownicy.id AND uzytkownicy.id='%s' AND data='$data'",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
						$wiersz = $rezultat->fetch_assoc();
				
				$odbior = $wiersz['notatka'];
					


					
			} 
			
		}
		}
		

		

		
				
		if($a==1){
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_notatka FROM uzytkownicy,Notatka WHERE Notatka.id_uzytkownicy=uzytkownicy.id AND uzytkownicy.id='%s' AND data='$data'",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				
					if ($rezultat3 = @$polaczenie->query("SET TRANSACTION ISOLATION LEVEL READ COMMITTED;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
										if ($rezultat3 = @$polaczenie->query("START TRANSACTION;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}	
				
				
				
				
				$error = 0;
			if ($polaczenie->query(sprintf("UPDATE Notatka  SET notatka='%s' WHERE id_uzytkownicy='$idd22' AND  data='$data'",
		mysqli_real_escape_string($polaczenie,$notatka))))
					{
						
						$_SESSION['udanawprowadzenie']=true;
					}
					else
					{
						$error = 1;
																if ($rezultat3 = @$polaczenie->query("ROLLBACK;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}	
				
						
						throw new Exception($polaczenie->error);
							
					}
					
			} else {

			

					}
									if ($polaczenie->query(sprintf("INSERT INTO Notatka(id_notatka, 	id_uzytkownicy, 	data, 	notatka) VALUES (NULL,'$idd22','$data','%s')",
		mysqli_real_escape_string($polaczenie,$notatka))))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
																				if ($rezultat3 = @$polaczenie->query("ROLLBACK;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}	
						$error = 1;
						
						throw new Exception($polaczenie->error);
					
					}
		
		
		if(mysqli_error_list($polaczenie)){

																	if ($rezultat3 = @$polaczenie->query("ROLLBACK;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}	
		}else{
																	if ($rezultat3 = @$polaczenie->query("COMMIT;"))
					{
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}	
		}
				
				
				
			}
			
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

	
	<script src="timer.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="demo/css/prism.css" />
	<link rel="stylesheet" type="text/css" href="demo/css/calendar-style.css" />
	<link rel="stylesheet" type="text/css" href="src/css/pignose.calendar.css" />

	<script type="text/javascript" src="demo/js/jquery.latest.min.js"></script>
	<script type="text/javascript" src="demo/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="demo/js/prism.min.js"></script>
	<script type="text/javascript" src="vender/moment.min.js"></script>
	<script type="text/javascript" src="src/js/pignose.calendar.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(function() {
		function onClickHandler(date, obj) {
			/**
			 * @date is an array which be included dates(clicked date at first index)
			 * @obj is an object which stored calendar interal data.
			 * @obj.calendar is an element reference.
			 * @obj.storage.activeDates is all toggled data, If you use toggle type calendar.
			 */

			var $calendar = obj.calendar;
			
			var text ;

			if(date[0] !== null) {
				text += date[0].format('YYYY-MM-DD');
			}

			if(date[0] !== null && date[1] !== null) {
				text += ' ~ ';
			} else if(date[0] === null && date[1] == null) {
				text += 'nothing';
			}

			if(date[1] !== null) {
				text += date[1].format('YYYY-MM-DD');
			}

			
		}

		// Default Calendar
		$('.calendar').pignoseCalendar({
			select: onClickHandler
		});

		// Input Calendar
		$('.input-calendar').pignoseCalendar({
			buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
		});

		// Calendar modal
		var $btn = $('.btn-calendar').pignoseCalendar({
			modal: true, // It means modal will be showed when you click the target button.
			buttons: true,
			apply: function(date) {
				$btn.next().show().text('You applied date ' + date + '.');
			}
		});

		// Color theme type Calendar
		$('.calendar-dark').pignoseCalendar({
			theme: 'dark', // light, dark
			select: onClickHandler
		});

		// Multiple picker type Calendar
		$('.multi-select-calendar').pignoseCalendar({
			multiple: true,
			select: onClickHandler
		});

		// Toggle type Calendar
		$('.toggle-calendar').pignoseCalendar({
			toggle: true,
			select: function(date, obj) {

				var $target = obj.calendar.parent().next().show().html('You selected ' + 
				(date[0] === null? 'null':date[0].format('YYYY-MM-DD')) + 
				'.' +
				'<br /><br />' +
				'<strong>Active dates</strong><br /><br />' +
				'<div class="active-dates"></div>');

				for(var idx in obj.storage.activeDates) {
					var date = obj.storage.activeDates[idx];
					if(typeof date !== 'string') {
						continue;
					}
					$target.find('.active-dates').append('<span class="label label-default">' + date + '</span>');
				}
			}
		});

		// Disabled date settings.
		!(function() {
			// IIFE Closure
			var times = 30;
			var disabledDates = [];
			for(var i=0; i<times; /* Do not increase index */) {
				var year = moment().year();
				var month = 0;
				var day = parseInt(Math.random() * 364 + 1);
				var date = moment().year(year).month(month).date(day).format('YYYY-MM-DD');
				if($.inArray(date, disabledDates) === -1) {
					disabledDates.push(date);
					i++;
				}
			}

			disabledDates.sort();

			var $dates = $('.disabled-dates-calendar').siblings('.guide').find('.guide-dates');
			for (var idx in disabledDates) {
				$dates.append('<span>' + disabledDates[idx] + '</span>');
			}

			$('.disabled-dates-calendar').pignoseCalendar({
				select: onClickHandler,
				disabledDates: disabledDates
			});
		} ());

		// I18N Calendar
		$('.language-calendar').each(function() {
			var $this = $(this);
			var lang = $this.data('lang');
			$this.pignoseCalendar({
				lang: lang
			});
		});
	});
	//]]>
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
<form method='post'>
<textarea rows="10" name="notatka"><?php echo $odbior; ?>   </textarea>
         
			<div style="clear: both;"></div>
			
				<br /> <input type="text" placeholder="Data [YYYY-MM-DD]" class="input-calendar" value="<?php
			if (isset($_SESSION['fr_data']))
			{
				echo $_SESSION['fr_data'];
				unset($_SESSION['fr_data']);
			}
		?>" name="data" /><br />
				<?php
			if (isset($_SESSION['e_data']))
			{
				echo '<div class="error">'.$_SESSION['e_data'].'</div>';
				unset($_SESSION['e_data']);
			}
		?>	
		
		 <input type="hidden" id="divclicked" name="divclicked" value="2"/>
<input type='submit' value='Otwórz' onclick="document.getElementById('divclicked').value='0'"/>
<input type='submit' value='Zapisz' onclick="document.getElementById('divclicked').value='1'"/>



	</form>		

			
		</div>
		<div class="square">
		
<div class="calendar"></div>

<div class="box"></div>
			<div style="clear: both;"></div> 
<br />
									<div class="tile44">
				<i>Spis notatek
			</div>
			
			<div style="clear:both;"></div>
			
			
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>