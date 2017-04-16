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
					<div class="tile51">
				

<form action='wynik.php' method='post'>
  
    <h1>Chętniej...</h1>
    <label class="control control--radio">rozwiązujesz 
nowy, skomplikowany problem
      <input type="radio" name="radio" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">pracujesz nad czymś, co robiłeś wcześniej lub co znasz z przeszłości
      <input type="radio" name="radio" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Chętniej...</h1>
    <label class="control control--radio">pracujesz sam w cichym odtoczeniu
      <input type="radio" name="radio2" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">jesteś tam, gdzie coś się dzieje
      <input type="radio" name="radio2" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Przy ocenianiu innych kierujesz się raczej...</h1>
    <label class="control control--radio">stałymi zasada
mi bardziej niż chwilowymi okolicznościami
      <input type="radio" name="radio3" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">chwilowymi okolicznościami bardziej niż stałymi zasadami
      <input type="radio" name="radio3" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Masz skłonność do wybierania w sposób...</h1>
    <label class="control control--radio">raczej staranny
      <input type="radio" name="radio4" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">dość impulsywny
      <input type="radio" name="radio4" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W towarzystwie lub na imprezie zazwyczaj rozmawiasz...</h1>
    <label class="control control--radio">z niewie
lką grupą ludzi, których dobrze znasz
      <input type="radio" name="radio5" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">z wieloma osobami 
włączając tych, których znasz mało lub wcale
      <input type="radio" name="radio5" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Jako dyrektor firmy wolałbyś uzyskać od swoich podwładnych...</h1>
    <label class="control control--radio">informację o tym, że ich dział pracował na korzyść firmy jako całości
      <input type="radio" name="radio6" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">sprawozd
ania, jak dział radzi sobie oddzielnie
      <input type="radio" name="radio6" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Jako menadżer pragnący przyjąć swojego asystenta postępujesz w następujący sposób...</h1>
    <label class="control control--radio">zastanawiasz się czy wasze osobowości będą zgodne lub czy będą się uzupełniać
      <input type="radio" name="radio7" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">przeanalizujesz związek pomiędzy zakresem ob
owiązków i zdolnościami kandydatów
      <input type="radio" name="radio7" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy pracujesz nad czymś to...</h1>
    <label class="control control--radio">wolisz raczej wszystko zakończyć lub dojść do pewnego etapu
      <input type="radio" name="radio8" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">często zostawiasz niezamknięte sprawy z możliwością wprowadzenia zmian
      <input type="radio" name="radio8" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Na imprezach w towarzystwie...</h1>
    <label class="control control--radio">raczej zost
ajesz dłużej, bo tak się lepiej bawisz
      <input type="radio" name="radio9" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wychodzisz jak najprędzej, taki rodzaj rozrywki Cię wyczerpuje, jesteś tam z grzeczności
      <input type="radio" name="radio9" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>2ardziej interesuje Cię
to...</h1>
    <label class="control control--radio">co było
      <input type="radio" name="radio10" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">co może być
      <input type="radio" name="radio10" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy słuchasz, jak ktoś mówi o swoich sprawach, to zwykl
e próbujesz...</h1>
    <label class="control control--radio">odnieść to do swoich własnych doświadczeń i porównać, czy to Ci odpowiada
      <input type="radio" name="radio11" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">oceniać i analizować daną informację
      <input type="radio" name="radio11" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy nad czymś pracujesz, to...</h1>
    <label class="control control--radio">wolisz mieć orientację i kontrolę nad wszystkim
      <input type="radio" name="radio12" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">dopuszczasz możliwość sprawdzenia
wszystkich możliwości
      <input type="radio" name="radio12" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy w domu lub biurze zadzwoni telefon, to zazwyczaj...</h1>
    <label class="control control--radio">uważasz, że to przeszkadza
      <input type="radio" name="radio13" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">odbierasz, nie przeszkadza Ci to
      <input type="radio" name="radio13" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Gorsze jest...</h1>
    <label class="control control--radio">chodzenie z głową w chmurach
      <input type="radio" name="radio14" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">chodzenie twardo po ziemi
      <input type="radio" name="radio14" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W stosunku do inn
y jesteś raczej...</h1>
    <label class="control control--radio"> obiektywny
      <input type="radio" name="radio15" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">subiektywny
      <input type="radio" name="radio15" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Przeszkadza Ci, kiedy...</h1>
    <label class="control control--radio"> „rozgrzebanych” jest kilka spraw na raz
      <input type="radio" name="radio16" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wszystko już przygotowane
      <input type="radio" name="radio16" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy gdzieś telefonujesz...</h1>
    <label class="control control--radio">nie boisz się, że w trakcie rozmowy o czymś zapomnisz
      <input type="radio" name="radio17" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zawsze się pr
zygotowujesz
-
co i jak będziesz mówić
      <input type="radio" name="radio17" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy dyskutujesz z kolegami o problemach, to łatwe jest...</h1>
    <label class="control control--radio">widzieć sprawę w szerszym kontekście
      <input type="radio" name="radio18" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">spostrzec szczegóły i specyficzne cechy danej sytuacji
      <input type="radio" name="radio18" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Gdy pojawia się problem, wolisz:</h1>
    <label class="control control--radio">analizować
      <input type="radio" name="radio19" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wczuwać się
      <input type="radio" name="radio19" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Często, kiedy zaczynasz coś...</h1>
    <label class="control control--radio">najpierw wszystko spisujesz i planujesz
      <input type="radio" name="radio20" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">nie robisz planów i pozwalasz, aby sprawy biegły swoim torem
      <input type="radio" name="radio20" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W towarzystwie innych osób raczej...</h1>
    <label class="control control--radio">sam nawiązujesz rozmowę
      <input type="radio" name="radio21" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">pozostawiasz innym inicja
tywę
      <input type="radio" name="radio21" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>kiedy pracujesz nad jakimś zadaniem, to masz tendencję do...</h1>
    <label class="control control--radio">ciągłej i nieprzerwanej pracy
      <input type="radio" name="radio22" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">pracy bardzo zintensyfikowanej pracy z przerwami
      <input type="radio" name="radio22" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W jakiej sytuacji czujesz się lepiej?</h1>
    <label class="control control--radio">jasnej, o stałej strukturze i planie
      <input type="radio" name="radio23" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zmiennej, be
z struktury, z niespodziankami
      <input type="radio" name="radio23" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Gorzej jest, kiedy ktoś...</h1>
    <label class="control control--radio">jest niesprawiedliwy
      <input type="radio" name="radio52" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">nie ma litości
      <input type="radio" name="radio52" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Twoją mocną strona jest...</h1>
    <label class="control control--radio">realne podejście do życia
      <input type="radio" name="radio53" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wyobraźnia
      <input type="radio" name="radio53" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy zadzwoni telefon...</h1>
    <label class="control control--radio">biegniesz, aby odebrać
      <input type="radio" name="radio54" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">masz nadzieję, 
że odbierze ktoś inny
      <input type="radio" name="radio54" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W swoim postępowaniu kierujesz się bardziej...</h1>
    <label class="control control--radio">głową
      <input type="radio" name="radio55" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">sercem
      <input type="radio" name="radio55" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>2ardziej podziwiasz zdolność do:</h1>
    <label class="control control--radio">metodycznego planowania i organizowania spraw
      <input type="radio" name="radio56" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">szybkiego adaptowania się i korzystania z nadarzających się okazji
      <input type="radio" name="radio56" value='2'/>
      <div class="control__indicator"></div>
    </label>


			</div>

			<div style="clear:both;"></div>


		</div>	
		</div>
		<div class="square">
			<div class="tile51">
    <h1>Kiedy przyjdzie Ci do głowy nowa myśl, to zazwyczaj...</h1>
    <label class="control control--radio">podchodzisz do niej z zapałem
      <input type="radio" name="radio24" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zaczynasz na ten temat głębiej rozmyślać
      <input type="radio" name="radio24" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Powiesz o sobie, że jesteś raczej...</h1>
    <label class="control control--radio">dowcipny
      <input type="radio" name="radio25" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">praktyczny
      <input type="radio" name="radio25" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Wolisz usłyszeć...</h1>
    <label class="control control--radio">ostateczną i niezmienna opini
ę
      <input type="radio" name="radio26" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">próbną, wstępną opinię
      <input type="radio" name="radio26" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Większym błędem jest być:</h1>
    <label class="control control--radio">tolerancyjnym i zgodnym
      <input type="radio" name="radio45" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">bezkompromisowy
m
i krytyczny
m

      <input type="radio" name="radio45" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Jesteś raczej...</h1>
    <label class="control control--radio">rannym ptaszkiem
      <input type="radio" name="radio27" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">sową
      <input type="radio" name="radio27" value='2'/>
      <div class="control__indicator"></div>
    </label>
<h1>Gorszą Cię osoby, które na rozmowę przychodzą...</h1>
    <label class="control control--radio">z wieloma niejasnymi, niep
rzemyślanymi pomysłami
      <input type="radio" name="radio28" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">przedłużające rozmowę zajmując uwagę wieloma praktycznymi szczegółami
      <input type="radio" name="radio28" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Podczas pracy wolisz zajmować się...</h1>
    <label class="control control--radio">ideami, zasadami, pomysłami...
      <input type="radio" name="radio29" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">ludźmi, uczestnikami
      <input type="radio" name="radio29" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>W czasie weekendu zazwyczaj...</h1>
    <label class="control control--radio">planujesz, co będziesz 
robić
      <input type="radio" name="radio30" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">pozostawiasz sprawy własnemu biegowi, decyzje podejmujesz na bieżąco
      <input type="radio" name="radio30" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Podczas rozmów/ negocjacji, masz skłonność do...</h1>
    <label class="control control--radio">rozwijania swoich myśli w miarę tego jak mówisz
      <input type="radio" name="radio31" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zabierania głosu jedynie po wcześniejszym przemyśleniu, co chcesz pow
iedzieć
      <input type="radio" name="radio31" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Czytasz zwykle...</h1>
    <label class="control control--radio">skupiając się na tym, co jest napisane
      <input type="radio" name="radio32" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">czytasz między wierszami i wiąż
esz słowa z innymi tematami i wą
tkami
      <input type="radio" name="radio32" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Kiedy musisz zdecydować coś pośpiesznie, to...</h1>
    <label class="control control--radio">czujesz dyskomfort i 
chciałbyś mieć więcej informacji
      <input type="radio" name="radio33" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">umiesz podjąć decyzje mając tylko te dane, które są dostępne
      <input type="radio" name="radio33" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Wołałbyś pracować dla firmy, która...</h1>
    <label class="control control--radio">dałaby Ci pracę
z motywacją intelektualną
      <input type="radio" name="radio34" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zainteresowałaby Cię
przesłaniem i realizacją swoich celów
      <input type="radio" name="radio34" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Co bardziej Ci imponuje?</h1>
    <label class="control control--radio">logiczny, 
konkretny i bezsporny sposób myślenia i postępowania
      <input type="radio" name="radio35" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">dobre, ciepłe i harmonijne stosunki międzyludzkie
      <input type="radio" name="radio35" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1> W swoich pisemnych wypowiedziach wolisz styl...</h1>
    <label class="control control--radio">rzeczowy
      <input type="radio" name="radio36" value='1' checked="checked"/> 
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">obrazowy, metaforyczny
      <input type="radio" name="radio36" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	    <h1>Kiedy ktoś dzwoni do drzwi...</h1>
    <label class="control control--radio">jesteś 
rozdrażniony, że „kto
ś znowu przylazł”
      <input type="radio" name="radio37" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">cieszysz się, że ktoś przyszedł Cię odwiedzić
      <input type="radio" name="radio37" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Wolisz...</h1>
    <label class="control control--radio">żeby rzeczy „same się działy”
      <input type="radio" name="radio38" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">zapewnić, aby wszystko było wcześniej przygotowane
      <input type="radio" name="radio38" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>2ardziej charakterystyczne są dla Ciebie...</h1>
    <label class="control control--radio">liczne, powierzchowne związki z dużą
liczbą osób
      <input type="radio" name="radio39" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">stałe i długotrwałe związki z niewielką grupą ludzi
      <input type="radio" name="radio39" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Czujesz się lepiej...</h1>
    <label class="control control--radio">po podjęciu końcowej decyzji;
      <input type="radio" name="radio40" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">kiedy sprawy nie są jeszcze definitywnie zakończone
      <input type="radio" name="radio40" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Wolisz polegać na swoich...</h1>
    <label class="control control--radio">doświadczeniach
      <input type="radio" name="radio41" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">intuicji i przeczu
ciach
      <input type="radio" name="radio41" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Czujesz się pewniej...</h1>
    <label class="control control--radio">przy podejmowaniu decyzji logicznych: prawidłowe/ nieprawidłowe
      <input type="radio" name="radio42" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wydając opinie wartościującą: dobre/ złe
      <input type="radio" name="radio42" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Chętniej podejmujesz decyzje...</h1>
    <label class="control control--radio">po zasięgnięciu opinii innych
      <input type="radio" name="radio43" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">przede wszystkim według własnego zdania
      <input type="radio" name="radio43" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Zazwyczaj wybierasz...</h1>
    <label class="control control--radio">skorzystanie ze sprawdzonej metody, którą znasz
      <input type="radio" name="radio44" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">wymyślanie i próbowanie, jakby coś zrobić inaczej i na nowo
      <input type="radio" name="radio44" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Chętniej zajmujesz się...</h1>
    <label class="control control--radio">tym co jest
      <input type="radio" name="radio46" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">rozważaniem różnych możliwości
      <input type="radio" name="radio46" value='2'/>
      <div class="control__indicator"></div>
    </label>
		    <h1>Do konkluzji i wniosków d
ochodzisz na podstawie...</h1>
    <label class="control control--radio">rzeczowego uzasadnienia i logicznej analizy
      <input type="radio" name="radio47" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">tego, co według Twego odczucia jest prawidłowe, w co wierzysz, co jest ludzkie i do przyjęcia.
      <input type="radio" name="radio47" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Nie lubisz...</h1>
    <label class="control control--radio">wcześniej zaplanowanych spraw ze zobowiązującymi terminami
      <input type="radio" name="radio48" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">kie
dy sprawy nie mają rygorystycznych terminów, są niezobowiązujące
      <input type="radio" name="radio48" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1> Najpiękniejsze chwile prze
ż
ywasz...</h1>
    <label class="control control--radio">z wieloma prz
yjaciółmi, z ludźmi, z którymi 
d
orze się czujesz, choć niekoniecznie znasz ich długo
      <input type="radio" name="radio49" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">z niewielką ilością osób, które długo i dobrze
znasz
      <input type="radio" name="radio49" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Masz w zwyczaju...</h1>
    <label class="control control--radio">zapisywać w kalendarzu ważne spotkania i sprawy do załatwienia
      <input type="radio" name="radio50" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">ograniczać/ unikać tego typu zapisków
      <input type="radio" name="radio50" value='2'/>
      <div class="control__indicator"></div>
    </label>
	    <h1>Postępujesz zwykle na zasadzie...</h1>
    <label class="control control--radio">wewnętrznego przeświadczenia i poczucia, że coś jest właściwe i nie musisz te
go analizować
      <input type="radio" name="radio51" value='1' checked="checked"/>
      <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">obiektywnych i sprawdzonych wniosków
      <input type="radio" name="radio51" value='2'/>
      <div class="control__indicator"></div>
    </label>
	
	      <input type='submit' value='Kim jestem ?' />
    
</form>
 
			</div>

			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
	
	
	</div>
	
</body>
</html>