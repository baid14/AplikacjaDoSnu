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
$bialko = $_POST['bialko'];
	$weglowodany = $_POST['weglowodany'];	
	$tluszcze = $_POST['tluszcze'];
	$kalorie = $_POST['kalorie'];
	$posilki = $_POST['posilki'];
	$najposilek = $_POST['najposilek'];
$najposilek = htmlentities($najposilek, ENT_QUOTES, "UTF-8");
$a = $_POST['divclicked'];
$b = $_POST['divclicked2'];
$c = $_POST['divclicked3'];
$d = $_POST['divclicked4'];
$e = $_POST['divclicked5'];
$f = $_POST['divclicked6'];
$g = $_POST['divclicked7'];
$h = $_POST['divclicked8'];

$wszystko_OK=true;





if($a==2){
	$wszystko_OK=false;
	$_SESSION['e_a']="Nie wybrano parametru A, wybierz wszystkie parametry od nowa!  !";
	
}

if($b==2){
	$wszystko_OK=false;
	$_SESSION['e_b']="Nie wybrano parametru B , wybierz wszystkie parametry od nowa! !";
}

if($c==2){
	$wszystko_OK=false;
	$_SESSION['e_c']="Nie wybrano parametru C , wybierz wszystkie parametry od nowa!!";
	
}

if($d==2){
	$wszystko_OK=false;
	$_SESSION['e_d']="Nie wybrano parametru D , wybierz wszystkie parametry od nowa! !";
}

if($e==2){
	$wszystko_OK=false;
	$_SESSION['e_e']="Nie wybrano parametru E  , wybierz wszystkie parametry od nowa!!";
	
}

if($f==2){
	$wszystko_OK=false;
	$_SESSION['e_f']="Nie wybrano parametru F  , wybierz wszystkie parametry od nowa!!";
}
if($g==2){
	$wszystko_OK=false;
	$_SESSION['e_g']="Nie wybrano parametru G  , wybierz wszystkie parametry od nowa!!";
	
}

if($h==2){
	$wszystko_OK=false;
	$_SESSION['e_h']="Nie wybrano parametru H  , wybierz wszystkie parametry od nowa!!";
}
 
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

		
		
if (!(is_numeric($bialko)))
			
		{
			$wszystko_OK=false;
			$_SESSION['e_bialko']="Wartością musi być liczba!";
		}
				if (!(is_numeric($weglowodany)))
		{
			$wszystko_OK=false;
			$_SESSION['e_weglowodany']="Wartością musi być liczba!";
		}
						if (!(is_numeric($tluszcze)))
		{
			$wszystko_OK=false;
			$_SESSION['e_tluszcze']="Wartością musi być liczba!";
		}
								if (!(is_numeric($kalorie)))
		{
			$wszystko_OK=false;
			$_SESSION['e_kalorie']="Wartością musi być liczba!";
		}
		
		if (!(is_numeric($posilki)))
		{
			$wszystko_OK=false;
			$_SESSION['e_posilki']="Wartością musi być liczba!";
		}
		
										if ($najposilek==null)
		{
			$wszystko_OK=false;
			$_SESSION['e_najposilek']="Nie ustawiono wartości!";
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

		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_dieta FROM uzytkownicy,Dieta WHERE Dieta.id_uzytkownicy=uzytkownicy.id AND uzytkownicy.id='%s' AND data='$data'",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{

				
								 	
			if ($polaczenie->query(sprintf("UPDATE Dieta  SET  par1='$a', 	par2='$b', 	par3='$c', 	par4='$d', 	par5='$e', 	par6='$f', 	par7='$g', 	par8='$h', 	bialka='$bialko', 	tluszcze='$tluszcze', 	weglowodany='$weglowodany', 	kalorie='$kalorie', 	ile_posilkow='$posilki', 	najwiekszy_posilek='%s' WHERE id_uzytkownicy='$idd22' AND data='$data'",
		mysqli_real_escape_string($polaczenie,$najposilek))))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
			} else {
 
			

			
									if ($polaczenie->query(sprintf("INSERT INTO Dieta(id_dieta, 	id_uzytkownicy, 	par1, 	par2, 	par3, 	par4, 	par5, 	par6, 	par7, 	par8, 	bialka, 	tluszcze, 	weglowodany, 	kalorie, 	ile_posilkow, 	najwiekszy_posilek, 	data) VALUES (NULL,'$idd22','$a','$b','$c','$d','$e','$f','$g','$h','$bialko','$tluszcze','$weglowodany','$kalorie','$posilki','%s','$data')",
		mysqli_real_escape_string($polaczenie,$najposilek))))
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
	
	
	unset($a);
	unset($b);
	unset($c);
	unset($d);
	unset($e);
	unset($f);
	unset($g);
	unset($h);
	unset($data);
	unset($bialko);
	unset($weglowodany);
	unset($tluszcze);
	unset($kalorie);
	unset($posilki);
	unset($najposilek);
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
			var $box = $calendar.parent().siblings('.box').show();
			var text = 'You choose date ';

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

			$box.text(text);
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
			var p1 = "success";
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
		
		<form method='post'>
		<div class="square">
			<div class="tile5">
							 <input type="text" placeholder="Ilość białka" onfocus="this.placeholder=''" onblur="this.placeholder='Ilość białka'" value="<?php
			if (isset($_SESSION['fr_bialko']))
			{
				echo $_SESSION['fr_bialko'];
				unset($_SESSION['fr_bialko']);
			}
		?>" name="bialko" />

							 <input type="text" placeholder="Ilość węglowodanów" onfocus="this.placeholder=''" onblur="this.placeholder='Ilość węglowodanów'" value="<?php
			if (isset($_SESSION['fr_weglowodany']))
			{
				echo $_SESSION['fr_weglowodany'];
				unset($_SESSION['fr_weglowodany']);
			}
		?>" name="weglowodany" />

								<input type="text" placeholder="Ilość tłuszczy" onfocus="this.placeholder=''" onblur="this.placeholder='Ilość tłuszczy'" value="<?php
			if (isset($_SESSION['fr_tluszcze']))
			{
				echo $_SESSION['fr_tluszcze'];
				unset($_SESSION['fr_tluszcze']);
			}
		?>" name="tluszcze" />
	
									 <input type="text" placeholder="Ilość kalorii" onfocus="this.placeholder=''" onblur="this.placeholder='Ilość kalorii'" value="<?php
			if (isset($_SESSION['fr_kalorie']))
			{
				echo $_SESSION['fr_kalorie'];
				unset($_SESSION['fr_kalorie']);
			}
		?>" name="kalorie" />
				
													 <input type="text" placeholder="Ilość posiłków" onfocus="this.placeholder=''" onblur="this.placeholder='Ilość posiłków'" value="<?php
			if (isset($_SESSION['fr_posilki']))
			{
				echo $_SESSION['fr_posilki'];
				unset($_SESSION['fr_posilki']);
			}
		?>" name="posilki" />

								<input type="text" placeholder="Największy posiłek" onfocus="this.placeholder=''" onblur="this.placeholder='Największy posiłek'" value="<?php
			if (isset($_SESSION['fr_najposilek']))
			{
				echo $_SESSION['fr_najposilek'];
				unset($_SESSION['fr_najposilek']);
			}
		?>" name="najposilek" />
		
		
		
		
		
		
		
		
		
		
			</div>
			<div style="clear: both;"></div>
			
			
			  <style type="text/css">
     .account{
      width: 100px;
      height: 100px;
      border: 1px solid #000;
     }
    .selected{
    background-color: #3557a2;
    }
	
	   .selected2{
    background-color: #2084c2;
    }
		   .selected3{
    background-color: #2084c2;
    }
		   .selected4{
    background-color: #c84222;
    }
		   .selected5{
    background-color: #c84222;
    }
		   .selected6{
    background-color: #3557a2;
    }
		   .selected7{
    background-color: #c83237;
    }
		   .selected8{
    background-color: #c83237;
    }
		</style>	
			
			  <script type="text/javascript">
 $(document).ready(function(){
       $(".fb").click(function(e){
		       $.ajax({
				url: 'dieta.php',
				type: 'POST',
				data: { glos: "1" }
    });
           $(".selected").removeClass("selected");
           $(this).addClass("selected");
           e.stopPropagation();
       });   

    });
	
	 $(document).ready(function(){
       $(".tw").click(function(e){
           $(".selected2").removeClass("selected2");
           $(this).addClass("selected2");
           e.stopPropagation();
       });   
 
    });
	
		
	
	 $(document).ready(function(){
       $(".tw2").click(function(e){
           $(".selected3").removeClass("selected3");
           $(this).addClass("selected3");
           e.stopPropagation();
       });   
       
    });
	
	
	 $(document).ready(function(){
       $(".gplus").click(function(e){
           $(".selected4").removeClass("selected4");
           $(this).addClass("selected4");
           e.stopPropagation();
       });   

    });
	
	
	 $(document).ready(function(){
       $(".gplus2").click(function(e){
           $(".selected5").removeClass("selected5");
           $(this).addClass("selected5");
           e.stopPropagation();
       });   

    });
	
	 $(document).ready(function(){
       $(".fb2").click(function(e){
           $(".selected6").removeClass("selected6");
           $(this).addClass("selected6");
           e.stopPropagation();
       });   

    });
	
	 $(document).ready(function(){
       $(".yt").click(function(e){
           $(".selected7").removeClass("selected7");
           $(this).addClass("selected7");
           e.stopPropagation();
       });   

    });
	
	 $(document).ready(function(){
       $(".yt2").click(function(e){
           $(".selected8").removeClass("selected8");
           $(this).addClass("selected8");
           e.stopPropagation();
       });   

    });
	

  </script>

  


  
  
  <div class="yt" onclick="document.getElementById('divclicked').value='1'"></div>
  <div class="yt" onclick="document.getElementById('divclicked').value='0'"></div>
  
  <input type="hidden" id="divclicked" name="divclicked" value="2"/>
  
  

			
  <div class="fb" onclick="document.getElementById('divclicked2').value='1'"></div>
  <div class="fb" onclick="document.getElementById('divclicked2').value='0'"></div>
  
  <input type="hidden" id="divclicked2" name="divclicked2" value="2"/>
			
			
  <div class="gplus" onclick="document.getElementById('divclicked3').value='1'"></div>
  <div class="gplus" onclick="document.getElementById('divclicked3').value='0'"></div>
  
  <input type="hidden" id="divclicked3" name="divclicked3" value="2"/>
  
  <div class="tw" onclick="document.getElementById('divclicked4').value='1'"></div>
  <div class="tw" onclick="document.getElementById('divclicked4').value='0'"></div>
  
  <input type="hidden" id="divclicked4" name="divclicked4" value="2"/>
				


			<div style="clear:both;"></div>
			
		</div>
		<div class="square">
            <div class="calendar"></div>
			<div style="clear: both;"></div>

			 <div class="yt2" onclick="document.getElementById('divclicked5').value='1'"></div>
  <div class="yt2" onclick="document.getElementById('divclicked5').value='0'"></div>
  
  <input type="hidden" id="divclicked5" name="divclicked5" value="2"/>
  
  

			
  <div class="fb2" onclick="document.getElementById('divclicked6').value='1'"></div>
  <div class="fb2" onclick="document.getElementById('divclicked6').value='0'"></div>
  
  <input type="hidden" id="divclicked6" name="divclicked6" value="2"/>
			
			
  <div class="gplus2" onclick="document.getElementById('divclicked7').value='1'"></div>
  <div class="gplus2" onclick="document.getElementById('divclicked7').value='0'"></div>
  
   <input type="hidden" id="divclicked7" name="divclicked7" value="2"/>

  
    <div class="tw2" onclick="document.getElementById('divclicked8').value='1'"></div>
  <div class="tw2" onclick="document.getElementById('divclicked8').value='0'"></div>
  
   <input type="hidden" id="divclicked8" name="divclicked8" value="2"/>
  
  
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
		
		
		
		
		
		
		
		
		
		
						<?php
			if (isset($_SESSION['e_bialko']))
			{
				echo $bialko . '<div class="error">'.$_SESSION['e_bialko'].'</div>';
				unset($_SESSION['e_bialko']);
			}
		?>	
		
		
		
						<?php
			if (isset($_SESSION['e_weglowodany']))
			{
				echo $weglowodany . '<div class="error">'.$_SESSION['e_weglowodany'].'</div>';
				unset($_SESSION['e_weglowodany']);
			}
		?>	
		
		
		
		
		
		
		
						<?php
			if (isset($_SESSION['e_tluszcze']))
			{
				echo $tluszcze . '<div class="error">'.$_SESSION['e_tluszcze'].'</div>';
				unset($_SESSION['e_tluszcze']);
			}
		?>
		
		
		
		
		
		
		<?php
			if (isset($_SESSION['e_kalorie']))
			{
				echo $kalorie . '<div class="error">'.$_SESSION['e_kalorie'].'</div>';
				unset($_SESSION['e_kalorie']);
			}
		?>	
		
		
		
						<?php
			if (isset($_SESSION['e_posilki']))
			{
				echo $posilki . '<div class="error">'.$_SESSION['e_posilki'].'</div>';
				unset($_SESSION['e_posilki']);
			}
		?>	
		
		
		
				<?php
			if (isset($_SESSION['e_najposilek']))
			{
				echo $najposilek . '<div class="error">'.$_SESSION['e_najposilek'].'</div>';
				unset($_SESSION['e_najposilek']);
			}
		?>	
		
		
		
						<?php
			if (isset($_SESSION['e_a']))
			{
				echo '<div class="error">'.$_SESSION['e_a'].'</div>';
				unset($_SESSION['e_a']);
			}
		?>	
		
								<?php
			if (isset($_SESSION['e_b']))
			{
				echo '<div class="error">'.$_SESSION['e_b'].'</div>';
				unset($_SESSION['e_b']);
			}
		?>	
		
								<?php
			if (isset($_SESSION['e_c']))
			{
				echo '<div class="error">'.$_SESSION['e_c'].'</div>';
				unset($_SESSION['e_c']);
			}
		?>	
		
								<?php
			if (isset($_SESSION['e_d']))
			{
				echo '<div class="error">'.$_SESSION['e_d'].'</div>';
				unset($_SESSION['e_d']);
			}
		?>	
		
		
								<?php
			if (isset($_SESSION['e_e']))
			{
				echo '<div class="error">'.$_SESSION['e_e'].'</div>';
				unset($_SESSION['e_e']);
			}
		?>	
		
		
								<?php
			if (isset($_SESSION['e_f']))
			{
				echo '<div class="error">'.$_SESSION['e_f'].'</div>';
				unset($_SESSION['e_f']);
			}
		?>	
		
		
								<?php
			if (isset($_SESSION['e_g']))
			{
				echo '<div class="error">'.$_SESSION['e_g'].'</div>';
				unset($_SESSION['e_g']);
			}
		?>	
		
								<?php
			if (isset($_SESSION['e_h']))
			{
				echo '<div class="error">'.$_SESSION['e_h'].'</div>';
				unset($_SESSION['e_h']);
			}
		?>	
		
		
		      <input type='submit' value='Zatwierdź' />
    </div>
</form>
</body>
</html>