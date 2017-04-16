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
	<div class="tile53">
<?php
	$answer1= $_POST['radio'];
	$answer2= $_POST['radio2'];
	$answer3= $_POST['radio3'];
	$answer4= $_POST['radio4'];
	$answer5= $_POST['radio5'];
	$answer6= $_POST['radio6'];
	$answer7= $_POST['radio7'];
	$answer8= $_POST['radio8'];
	$answer9= $_POST['radio9'];
	$answer10= $_POST['radio10'];
	$answer11= $_POST['radio11'];
	$answer12= $_POST['radio12'];
	$answer13= $_POST['radio13'];
	$answer14= $_POST['radio14'];
	$answer15= $_POST['radio15'];
	$answer16= $_POST['radio16'];
	$answer17= $_POST['radio17'];
	$answer18= $_POST['radio18'];
	$answer19= $_POST['radio19'];
	$answer20= $_POST['radio20'];
	$answer21= $_POST['radio21'];
	$answer22= $_POST['radio22'];
	$answer23= $_POST['radio23'];
	$answer24= $_POST['radio52'];
	$answer25= $_POST['radio53'];
	$answer26= $_POST['radio54'];
	$answer27= $_POST['radio55'];
	$answer28= $_POST['radio56'];
	$answer29= $_POST['radio24'];
	$answer30= $_POST['radio25'];
	$answer31= $_POST['radio26'];
	$answer32= $_POST['radio45'];
	$answer33= $_POST['radio27'];
	$answer34= $_POST['radio28'];
	$answer35= $_POST['radio29'];
	$answer36= $_POST['radio30'];
	$answer37= $_POST['radio31'];
	$answer38= $_POST['radio32'];
	$answer39= $_POST['radio33'];
	$answer40= $_POST['radio34'];
	$answer41= $_POST['radio35'];
	$answer42= $_POST['radio36'];
	$answer43= $_POST['radio37'];
	$answer44= $_POST['radio38'];
	$answer45= $_POST['radio39'];
	$answer46= $_POST['radio40'];
	$answer47= $_POST['radio41'];
	$answer48= $_POST['radio42'];
	$answer49= $_POST['radio43'];
	$answer50= $_POST['radio44'];
	$answer51= $_POST['radio46'];
	$answer52= $_POST['radio47'];
	$answer53= $_POST['radio48'];
	$answer54= $_POST['radio49'];
	$answer55= $_POST['radio50'];
	$answer56= $_POST['radio51'];
	
	
	$I = 0;
	$E = 0;
	$T = 0;
	$F = 0;
	$S = 0;
	$N = 0;
	$J = 0;
	$P = 0;
	
	if ($answer1 == "1"){$N++;}
	if ($answer1 == "2"){$S++;}
	if ($answer2 == "1"){$I++;}
	if ($answer2 == "2"){$E++;}
	if ($answer3 == "1"){$T++;}
	if ($answer3 == "2"){$F++;}
	if ($answer4 == "1"){$J++;}
	if ($answer4 == "2"){$P++;}
		if ($answer5 == "1"){$I++;}
	if ($answer5 == "2"){$E++;}
	if ($answer6 == "1"){$N++;}
	if ($answer6 == "2"){$S++;}
	if ($answer7 == "1"){$F++;}
	if ($answer7 == "2"){$T++;}
	if ($answer8 == "1"){$J++;}
	if ($answer8 == "2"){$P++;}
		if ($answer9 == "1"){$E++;}
	if ($answer9 == "2"){$I++;}
	if ($answer10 == "1"){$S++;}
	if ($answer10 == "2"){$N++;}
	if ($answer11 == "1"){$F++;}
	if ($answer11 == "2"){$T++;}
	if ($answer12 == "1"){$J++;}
	if ($answer12 == "2"){$P++;}
		if ($answer13 == "1"){$I++;}
	if ($answer13 == "2"){$E++;}
	if ($answer14 == "1"){$S++;}
	if ($answer14 == "2"){$N++;}
	if ($answer15 == "1"){$T++;}
	if ($answer15 == "2"){$F++;}
	if ($answer16 == "1"){$J++;}
	if ($answer16 == "2"){$P++;}
		if ($answer17 == "1"){$E++;}
	if ($answer17 == "2"){$I++;}
	if ($answer18 == "1"){$N++;}
	if ($answer18 == "2"){$S++;}
	if ($answer19 == "1"){$T++;}
	if ($answer19 == "2"){$F++;}
	if ($answer20 == "1"){$J++;}
	if ($answer20 == "2"){$P++;}
		if ($answer21 == "1"){$E++;}
	if ($answer21 == "2"){$I++;}
	if ($answer22 == "1"){$S++;}
	if ($answer22 == "2"){$N++;}
	if ($answer23 == "1"){$J++;}
	if ($answer23 == "2"){$P++;}
	if ($answer24== "1"){$T++;}
	if ($answer24 == "2"){$F++;}
		if ($answer25 == "1"){$S++;}
	if ($answer25 == "2"){$N++;}
	if ($answer26 == "1"){$E++;}
	if ($answer26 == "2"){$I++;}
	if ($answer27 == "1"){$T++;}
	if ($answer27 == "2"){$F++;}
	if ($answer28 == "1"){$J++;}
	if ($answer28 == "2"){$P++;}
		if ($answer29 == "1"){$I++;}
	if ($answer29 == "2"){$E++;}
	if ($answer30 == "1"){$N++;}
	if ($answer30 == "2"){$S++;}
	if ($answer31 == "1"){$J++;}
	if ($answer31 == "2"){$P++;}
	if ($answer32 == "1"){$T++;}
	if ($answer32 == "2"){$F++;}
		if ($answer33 == "1"){$I++;}
	if ($answer33 == "2"){$E++;}
	if ($answer34 == "1"){$N++;}
	if ($answer34 == "2"){$S++;}
	if ($answer35 == "1"){$T++;}
	if ($answer35 == "2"){$F++;}
	if ($answer36 == "1"){$J++;}
	if ($answer36 == "2"){$P++;}
		if ($answer37 == "1"){$E++;}
	if ($answer37 == "2"){$I++;}
	if ($answer38 == "1"){$S++;}
	if ($answer38 == "2"){$N++;}
	if ($answer39 == "1"){$P++;}
	if ($answer39 == "2"){$J++;}
	if ($answer40 == "1"){$T++;}
	if ($answer40 == "2"){$F++;}
		if ($answer41 == "1"){$T++;}
	if ($answer41 == "2"){$F++;}
	if ($answer42 == "1"){$S++;}
	if ($answer42 == "2"){$N++;}
	if ($answer43 == "1"){$I++;}
	if ($answer43 == "2"){$E++;}
	if ($answer44 == "1"){$P++;}
	if ($answer44 == "2"){$J++;}
		if ($answer45 == "1"){$E++;}
	if ($answer45 == "2"){$I++;}
	if ($answer46 == "1"){$J++;}
	if ($answer46 == "2"){$P++;}
	if ($answer47 == "1"){$S++;}
	if ($answer47 == "2"){$N++;}
	if ($answer48 == "1"){$T++;}
	if ($answer48 == "2"){$F++;}
	if ($answer49 == "1"){$I++;}
	if ($answer49 == "2"){$E++;}
	if ($answer50 == "1"){$S++;}
	if ($answer50 == "2"){$N++;}
	if ($answer51 == "1"){$S++;}
	if ($answer51 == "2"){$N++;}
	if ($answer52 == "1"){$T++;}
	if ($answer52 == "2"){$F++;}
	if ($answer53 == "1"){$P++;}
	if ($answer53 == "2"){$J++;}
	if ($answer54 == "1"){$E++;}
	if ($answer54 == "2"){$I++;}
	if ($answer55 == "1"){$J++;}
	if ($answer55 == "2"){$P++;}
	if ($answer56 == "1"){$F++;}
	if ($answer56 == "2"){$T++;}
	
	
	if($I>=$E && $T>=$F && $S>=$N && $J>=$P)
	{
		$mbti=1;
		echo "ISTJ (ang. Introverted Sensing Thinking Judging – Introwertyk Percepcjonista Myśliciel Sędzia) – jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą introwersyjną percepcję z ekstrawersyjnym myśleniem. Przede wszystkim są skoncentrowane na wnętrzu, gdzie rozpatrują sprawy używając pięciu zmysłów; w dosłowny, konkretny sposób. Ich drugorzędny styl życia jest skierowany na zewnątrz, gdzie zajmują się sprawami racjonalnie i logicznie

ISTJ są cichymi i skrytymi osobami, lubiącymi poczucie bezpieczeństwa i spokojne życie. Mają silne wewnętrzne poczucie obowiązku, które daje im motywację do wykonywania zadań. Są zorganizowani i metodyczni, więc mają szansę powodzenia w każdym zadaniu, którego wykonania się podejmą. Zawsze dotrzymują obietnic, przez co zdarza się, że praca, którą muszą wykonać, nawarstwia się. Mogą mieć trudności z odmówieniem, kiedy zostanie na nich nałożona zbyt duża ilość pracy, ponieważ mają silne poczucie obowiązku. Z tego powodu często pracują długie godziny i mogą być nieświadomie wykorzystywani. Jeżeli ISTJ uważa, że zadanie, które ma wykonać, jest potrzebne, aby osiągnąć cel, będzie pracować przez długi czas, wkładając w to dużo energii. Będzie się jednak sprzeciwiać traceniu energii na coś, co według niego nie ma sensu. ISTJ wolą pracować samotnie i lubią być odpowiedzialni za to, co robią, ale jeżeli sytuacja tego wymaga, potrafią pracować zespołowo.

ISTJ są bardzo lojalni, wierni i niezawodni. Dużą wagę przykładają do szczerości i prawości. Są „dobrymi obywatelami”, na których można polegać w ważnych dla rodziny i wspólnoty sprawach. Są dobrymi rodzicami i poważnie traktują swoją rolę rodzica. Generalnie traktują sprawy bardzo poważnie, ale mają również niekonwencjonalne poczucie humoru i mogą lubić się bawić – szczególnie podczas rodzinnych i związanych z pracą spotkań.

ISTJ przejawiają tendencję do wierzenia w prawo i tradycje i oczekują tego samego od innych. Nie czują się komfortowo, łamiąc prawo i zasady. Uważają, że wszystko powinno być robione zgodnie z procedurami i planem, ale jeżeli zobaczą ważny powód dla wychodzenia poza ustanowiony sposób robienia czegoś, poprą ten wysiłek. Jeżeli ISTJ nie rozwinął dobrze swojej intuicyjnej strony, może stać się przesadnie obsesyjny na punkcie struktury i nalegać, żeby robić wszystko „zgodnie z podręcznikiem”.

ISTJ nie współgrają naturalnie ze swoimi uczuciami oraz uczuciami innych. Mogą czuć się niekomfortowo, wyrażając swoje emocje. Ich silne poczucie obowiązku i zdolność do zauważenia, co powinno zostać zrobione w każdej sytuacji, pozwala im jednak na pokonanie naturalnych zastrzeżeń i zwykle wspierają i troszczą się o osoby, które kochają. Jeśli zauważą emocjonalne potrzeby bliskich osób, robią wszystko, aby te potrzeby zaspokoić.

ISTJ mają zwykle wspaniałe poczucie przestrzeni i upodobania artystyczne. Ich domy często są gustownie umeblowane. Chcą być w otoczeniu, które spełnia ich potrzeby porządku i piękna.

Pod wpływem stresu ISTJ mogą wpaść w zły nastrój i skupiać się tylko na tym, co może pójść źle. Tracą wtedy swoją zdolność do rozpatrywania spraw spokojnie i rozsądnie.";
	}
	if($I>=$E && $T>=$F && $S>=$N && $J<$P)
	{
		$mbti=2;
		echo "ISTP (ang. Introverted Sensing Thinking Perceiving – Introwertyk Percepcjonista Myśliciel Obserwator) – jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą introwersyjne myślenie z ekstrawersyjną percepcją. Przede wszystkim są skoncentrowane na wnętrzu, gdzie zajmują się sprawami racjonalnie i logicznie. Ich drugorzędny styl życia jest skierowany na zewnątrz, gdzie rozpatrują sprawy używając pięciu zmysłów; w dosłowny, konkretny sposób.
Charakterystyka

ISTP lubią rozumieć sposób, w jaki wszystko działa. Są dobrzy w logicznych analizach i chętnie wykorzystują je w praktycznych sprawach. Lubią rozkładać rzeczy na części i sprawdzać jak działają.

ISTP mają duszę poszukiwacza przygód. Interesują ich motocykle, samoloty, skoki spadochronowe, surfing itp. Są całkowicie niezależni i potrzebują możliwości samodzielnego podejmowania decyzji. Nie podążają za zasadami; chcą robić wszystko „po swojemu”. Lubią być w ruchu, są spontaniczni, optymistyczni, szybko się przystosowują i szybko się nudzą. Zwykle mają dobre techniczne umiejętności i dobrą koordynację. Posiadają również naturalną zdolność koncentracji, która sprawia, że mogą być dobrymi sportowcami, tancerzami, czy muzykami. Zwykle nie mają problemów w szkole, ponieważ są introwertykami umiejącymi myśleć logicznie.

ISTP uważają, że ludzie powinni być traktowani sprawiedliwie. Są lojalni i wierni swoim przyjaciołom i nigdy nie robią niczego wbrew swoim zasadom.

Osoby o typie ISTP lubią i muszą czasami spędzać czas samotnie, ponieważ wtedy mogą „uporządkować” w swojej głowie wszystkie informacje, które zebrali ze świata zewnętrznego.

ISTP unikają osądzania na podstawie własnego systemu wartości, ponieważ uważają, że należy osądzać i podejmować decyzje na podstawie faktów. Nie zwracają uwagi na swoje uczucia i czasami ignorują je. Pod wpływem stresu mogą wybuchnąć złością lub czuć się przeładowani emocjami i uczuciami.";
	}
	if($I>=$E && $T>=$F && $S<$N && $J>=$P)
	{
		$mbti=3;
		echo "INTJ (ang. Introvert, iNtuitive, Thinking, Judging – Introwersja, Intuicja, Myślenie, Osądzanie) to czteroliterowy kod określający jedną z szesnastu typów osobowości MBTI (Myers-Briggs Type Indicator).[1] Klasyfikacja MBTI została rozwinięta przez Isabel Briggs Myers i Katherine Cook Briggs w oparciu o wcześniejszą klasyfikację zaproponowaną przez psychiatrę Carla Junga.

INTJ mają analityczny umysł. Preferują pracować samemu i z reguły są mniej towarzyscy niż inne osoby. Pomimo tego, pracując w grupie są gotowi przejąć inicjatywę, gdy nikt inny się tego nie podejmuje albo gdy dostrzegają znaczącą słabość w przywództwie innej osoby. Z reguły są osobami praktycznymi, bardzo logicznymi i kreatywnymi. Mają niską tolerancję na wybuchowy emocjonalizm. Najczęściej są odporni na wpływ różnego rodzaju sloganów reklamowych. Nie akceptują też bezkrytycznie władzy.

Cechami wyróżniającymi INTJ są ich niezależność myślowa oraz kładzenie nacisku na efektywność. Ich umysły nieustannie gromadzą i porządkują informacje. Potrafią mieć niezwykle cenne uwagi. Z reguły są w stanie bardzo szybko zrozumieć nowe dla nich koncepcje. Ich głównym celem jednak nie jest zrozumienie czegoś, ale znalezienie użytecznego zastosowania dla zdobytej wiedzy. Zawsze dążą do wyciągania wniosków. Nie pozostawiają rzeczy nieskończonych i nie lubią dezorganizacji, co sprawia, że często mogą odczuwać potrzebę wzięcia spraw w swoje ręce.

W relacjach z innymi, INTJ najczęściej odnajdują się wśród osób o podobnym charakterze i światopoglądzie. Zgodność poglądów jest dla nich bardzo ważna. Z natury INTJ potrafią być bardzo wymagający od innych i podchodzić do relacji w sposób czysto racjonalny. Z tego powodu, INTJ są zdolni oprzeć się spontanicznemu zauroczeniu i związać się z osobą, która lepiej odpowiada tym kryteriom. INTJ są zrównoważeni, niezawodni i oddani. Zgoda w relacjach rodzinnych jest dla nich niezwykle istotna. Z reguły powściągają silne emocje i nie lubią marnować czasu na nieuzasadnione zwyczaje. To może sprawiać, że inne osoby postrzegają ich jako mało serdecznych. Niemniej jednak, INTJ są często bardzo lojalnymi partnerami, którzy są gotowi poświęcić bardzo dużo energii by utrzymać zdrowe relacje.

INTJ ufają swojej intuicji wybierając przyjaciół i partnerów. Ich emocje nie są łatwe do odczytania, a INTJ mają trudności z ich wyrażaniem. Podczas gdy mogą sprawiać wrażenie oschłych i niewrażliwych, potrafią być przewrażliwieni na punkcie sygnałów świadczących o odrzuceniu przez osoby, na których im zależy. W sytuacjach społecznych potrafią być mało komunikatywni i zaniedbywać pewne zwyczaje. Na przykład, INTJ może swoją postawą sygnalizować, że dana rozmowa jest stratą czasu. Rozmówca może odnieść wrażenie, że INTJ się śpieszy, podczas gdy tak naprawdę przeszkadza mu mało konkretny charakter rozmowy.";
	}
	if($I>=$E && $T>=$F && $S<$N && $J<$P)
	{
		$mbti=4;
		echo "INTP (ang. Introverted Intuition Thinking Perceiving – Introwertyk Intuicyjny Myśliciel Obserwator) – jeden z szesnastu typów osobowości według wskaźnika MBTI. Jest jednym z najrzadszych typów osobowości, posiada go zaledwie od 1% do 5% populacji.
Cechy charakterystyczne

INTP jest typem introwertycznym z przewagą myślenia, intuicyjnym i obserwującym. Osoby z tym typem są logiczne dla wszystkiego, co je interesuje. Do spraw podchodzą w sposób analityczny. W przypadku problemów jest to ich mocna strona, ponieważ potrafią dzięki temu sprawnie wyciągać wnioski na przyszłość. INTP posiadają też umiejętność głębokiego skupienia, która także umożliwia im rozwiązywanie problemów, o ile leżą w obszarze ich zainteresowań. Jest to typ cichy, powściągliwy, elastyczny oraz potrafiący się przystosować do sytuacji. Najczęściej jest nastawiony teoretycznie i abstrakcyjnie. INTP są pomysłowi, co ułatwia im tworzenie nowych koncepcji. Są samodzielni w działaniu, zwykle mają wąskie grono znajomych, wobec którego są bardzo lojalni, ale cechują ich także niskie umiejętności społeczne, brak interakcji i czasami także brak zainteresowania drugim człowiekiem. INTP może być bardzo nieśmiały jeśli chodzi o poznawanie nowych ludzi. Z drugiej strony, INTP jest bardzo pewny siebie i towarzyski wokół osób, które dobrze zna, lub przy omawianiu teorii, które w pełni rozumie. Zdrowi INTP często znajdują równowagę pomiędzy interakcją z otoczeniem a wycofaniem się z niego, co łączy się z posiadaniem dużej wiedzy i czasami intelektualnym geniuszem.[potrzebny przypis]

Znane osoby i postacie o typie INTP:

Abraham Lincoln, Albert Einstein, Arystoteles, Blaise Pascal, Charles Darwin, Galileo Galilei, James Madison, J.K. Rowling, J.R.R. Tolkien, Maria Skłodowska-Curie, Sokrates, św. Tomasz z Akwinu i wiele innych.";
	}
	if($I>=$E && $T<$F && $S>=$N && $J>=$P)
	{
		$mbti=5;
		echo "ISFJ (ang. Introverted Sensing Feeling Judging – Introwertyk Percepcjonista Uczuciowiec Sędzia) – jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą introwersyjną percepcję z ekstrawersyjnym czuciem. Przede wszystkim są one skoncentrowane na wnętrzu, gdzie rozpatrują sprawy, używając pięciu zmysłów; w dosłowny, konkretny sposób. Ich drugorzędny styl życia jest skierowany na zewnątrz, gdzie zajmują się sprawami zgodnie ze swoimi uczuciami wobec nich i według własnego systemu wartości.

Świat, w którym żyją ISFJ, jest konkretny i miły. ISFJ cenią harmonię i współpracę; są ciepli, rozważni i wrażliwi na uczucia innych ludzi. Mają bogate życie wewnętrzne, które nie zawsze jest oczywiste dla obserwatorów. Nieustannie pochłaniają informacje na temat ludzi i sytuacji, które są dla nich ważne, i przechowują je. Są w stanie na długie lata zapamiętać ze szczegółami ważną dla nich rozmowę albo czyjś wyraz twarzy.

ISFJ cenią bezpieczeństwo i uprzejmość oraz mają szacunek dla tradycji i praw. Wierzą, że systemy istnieją dlatego, że spełniają swoją rolę. Niechętnie robią coś nowym sposobem, jeśli nikt nie wytłumaczy im konkretnie, dlaczego ten sposób jest lepszy od wcześniej ustanowionej metody.

ISFJ lepiej uczą się, robiąc coś, niż czytając o tym. Cenią praktyczne zastosowanie, więc tradycyjne metody edukacji, które wymagają teoretycznego i abstrakcyjnego podejścia, mogą być dla nich uciążliwe.

Domy ISFJ często są pięknie i funkcjonalnie umeblowane, ponieważ osoby te mają dobrze rozwinięte poczucie przestrzeni, funkcjonalności i estetyki. Umiejętności te, powiązane z ich wrażliwością na uczucia innych, sprawiają, że często są osobami, które zawsze wiedzą, jaki prezent dać, aby odbiorca był zadowolony.

ISFJ są bardziej niż inne typy świadomi swoich uczuć, ale zwykle nie wyrażają ich. Niechętnie zdradzają również, że wiedzą, co czują inni. Jeśli jednak widzą, że ktoś potrzebuje pomocy, pomagają mu zrozumieć jego własne uczucia.

ISFJ mają silne poczucie odpowiedzialności i obowiązku, przy czym stawiają potrzeby innych ponad swoimi potrzebami. Cechy te sprawiają, że zawsze można polegać na osobach o tym typie. Powinny się one jednak nauczyć odmawiać oraz wyrażać i cenić własne potrzeby, ponieważ mogą stać się przepracowani.

ISFJ potrzebują pozytywnych opinii od innych. W razie ich braku oraz w przypadku bycia krytykowanym zniechęcają się i mogą się nawet załamać. Pod wpływem stresu wyobrażają sobie wszystko, co może pójść źle, i tracą wiarę we własne zdolności.";
	}
	if($I>=$E && $T<$F && $S>=$N && $J<$P)
	{
		$mbti=6;
		echo "ISFP (ang. Introverted Sensing Feeling Perceiving – Introwertyk Percepcjonista Uczuciowiec Obserwator) – skrót stosowany przy jednym z szesnastu typów Myers-Briggs Type Indicator (MBTI).

ISFP to typ introwertywny z przewagą uczuć, doznaniowy, obserwujący.

Osoby o tym typie osobowości cechuje introwersja, kierowanie percepcji i działań na własne myśli, emocje. Podejście uczuciowe nakierowane jest na wnętrze, zaś interpretacja bodźców i wrażeń zmysłowych – na otoczenie. Ludzie o takiej osobowości są obserwatorami, słuchaczami.

Osoby o typie ISFP cechuje serdeczna natura. Są życzliwi, czuli, delikatni. Choć są silnymi wrażliwcami, a ich przymiotem jest pewna otwartość, to zarazem cechuje ich pewna skrytość i rezerwa do otoczenia.

ISFP są skromni, dość często ambitni. Preferują samodzielną pracę, najlepiej w samotności – głównie wtedy są najbardziej produktywni. Wykonując pracę samodzielną, są zadowoleni, będąc w pełni odpowiedzialnymi za jej przebieg i efekty.

W codziennych relacjach ISFP mają znaczną tendencję do stania pośrodku, gdyż nie chcą być ani najlepszymi, ani najgorszymi w grupie. Jest to powód, dla którego zwykle nie potrafią otwarcie krytykować ludzi ani nie lubią uczestniczyć w sporach. Wręcz przeciwnie – z natury są pokojowi, czasem dyplomatyczni, potrafią unikać i zakańczać konflikty. ISFP dzięki głównym cechom charakteru potrafi prawie bez trudu sprawiać, aby inni stali się szczęśliwi; ma cierpliwość do wad innych, a w każdym nietakcie stara się odnaleźć też dobrą stronę.

Osoby o tym typie starają się cieszyć, na ile to możliwe, i chcą doświadczyć w swoim życiu jak najwięcej. Czas wolny spędzają najchętniej w towarzystwie najlepszych, szczególnie zaufanych przyjaciół lub przy muzyce czy książce. Nie przepadają za spotkaniami towarzyskimi liczącymi nawet nieznacznie większą grupę osób. Zachowanie ISFP może być czasem tak niezależne, że może wprawić w zakłopotanie i zdezorientować innych ludzi.

Praca i obszary, w których ma szansę zrealizować się typ ISFP, to między innymi: artysta (malarz, poeta, muzyk...), psychiatra, psycholog, psychoterapeuta, socjolog, nauczyciel, tłumacz, doradca lub też ratownik.";
	}
	if($I>=$E && $T<$F && $S<$N  && $J>=$P)
	{
		$mbti=7;
		echo "Poszukuje znaczeń i skojarzeń w pomysłach, związkach i rzeczach materialnych. Pragnie zrozumieć motywację osób. Wnikliwie obserwuje innych. Sumienny i wierny wyznawanym wartościom. Ma jasną wizję, w jaki sposób najlepiej służyć wspólnemu dobru. W zorganizowany i zdecydowany sposób wprowadza tę wizję w życie.";
	}
	if($I>=$E && $T<$F && $S<$N && $J<$P)
	{
		$mbti=8;
		echo "INFP (ang. Introverted Intuitive Feeling Perceiving – Introwertyk Intuicyjny Uczuciowiec Obserwator) – skrót stosowany przy jednym z szesnastu typów Myers-Briggs Type Indicator (MBTI).

INFP to typ introwertywny z przewagą uczuć, intuicyjny, obserwujący. Osoby o tym typie osobowości cechuje introwersja, kierowanie percepcji i działań na własne myśli, emocje. Podejście uczuciowe nakierowane jest na wnętrze.

INFP są niezwykle lojalne i oddane wobec najbliższych im ludzi. Będące wrażliwcami szukającymi za wszelką cenę jedności z drugim człowiekiem i reagującymi na emocje innych, wykazują jednak silne pragnienie posiadania mocnego systemu wartości oraz sensu we własnym życiu. Osobowości INFP nie mogą obyć się bez życiowych priorytetów, którym mogłyby się oddać i za które mogłyby walczyć. Skrajni idealiści, przez co nie mogą szybko podjąć decyzji i często doznają rozczarowań z powodu swych zbyt dużych oczekiwań.

Kolejną cechą, którą INFP zawdzięcza intuicji i zmysłowi obserwatora, jest ogromna wyobraźnia i otwarty umysł. Są bardzo kreatywne i wyrozumiałe - wielu artystów posiada właśnie ten typ osobowości. Często bywają indywidualistami i same bez problemów tolerują inność wśród ludzi, o ile nie kłóci się ona z wyznawanymi przez nie wartościami. Na ogół wykazują szczególne talenty językowe i z reguły są bardzo dobrymi pisarzami.

Zalecane zawody dla INFP to: aktor, muzyk, pisarz, poeta, fotograf, socjolog, dziennikarz, działacz społeczny, psycholog czy producent filmowy.";
	}
	if($I<$E && $T>=$F && $S>=$N && $J>=$P)
	{
		$mbti=9;
		echo "ESTJ (ang. Extraverted Sensing Thinking Judging – Ekstrawertyk Percepcjonista Myśliciel Sędzia) – jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą ekstrawersyjne myślenie z introwersyjną percepcją. Przede wszystkim są skoncentrowane na świecie zewnętrznym, gdzie zajmują się sprawami racjonalnie i logicznie. Ich drugorzędny styl życia jest skierowany do wewnątrz, gdzie rozpatrują sprawy używając pięciu zmysłów; w dosłowny, konkretny sposób.

ESTJ żyją w świecie faktów i konkretnych potrzeb. Żyją chwilą obecną, rozglądając się nieustannie po otoczeniu, aby upewnić się, że wszystko toczy się gładko i systematycznie. Przywiązują dużą wagę do tradycji i praw, mają swój zestaw norm i przekonań i oczekują tego samego od innych. Cenią kompetencję i sprawność i lubią szybko widzieć rezultaty swoich działań.

ESTJ naturalnie obejmują rolę liderów, ponieważ mają jasną wizję sposobu, w jaki wszystko powinno wyglądać. Są pewni siebie i agresywni. Mają talent do opracowywania planów i wiedzą, jakie kroki muszą zostać podjęte, aby wykonać zadanie. Zawsze są szczerzy, a ich przekonania są silne, więc czasami mogą być krytyczni i wymagający. Poważnie traktują swoje zobowiązania; wkładają wysiłek w prawie wszystko, co robią.

ESTJ lubią się bawić i mieć kontakt z ludźmi. Mogą być bardzo żywiołowi podczas wydarzeń towarzyskich, zwłaszcza podczas tych, które są skoncentrowane na rodzinie, lokalnej społeczności lub pracy.

ESTJ powinni uważać na swoją skłonność do bycia zbyt ścisłym i zorientowanym na szczegóły. Z natury przykładają dużą wagę do swoich własnych przekonań, więc powinni pamiętać, że ważne jest cenienie również opinii innych ludzi. Jeśli zaniedbają swoją stronę Uczuciową mogą mieć problem ze spełnieniem czyichś potrzeb intymności i nieświadomie ranić czyjeś uczucia, stosując logikę tam, gdzie jest potrzebne więcej wrażliwości emocjonalnej.

Pod wpływem stresu ESTJ często czują się odizolowani od innych i niezrozumiani. Mają wtedy problem z wyrażeniem słowami swoich uczuć, mimo że normalnie nie sprawia im to kłopotów.";
	}
	if($I<$E && $T>=$F && $S>=$N && $J<$P)
	{
		$mbti=10;
		echo "ESTP (ang. Extraverted Sensing Thinking Perceiving – Ekstrawertyk Percepcjonista Myśliciel Obserwator) - jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą ekstrawersyjną percepcję z introwersyjnym myśleniem. Przede wszystkim są skoncentrowane na świecie zewnętrznym, gdzie rozpatrują sprawy używając pięciu zmysłów; w dosłowny, konkretny sposób. Ich drugorzędny styl życia jest skierowany do wewnątrz, gdzie zajmują się sprawami racjonalnie i logicznie.

ESTP są otwarci, towarzyscy i entuzjastyczni. Żyją w świecie akcji, tu i teraz, są ryzykantami";
	}
	if($I<$E && $T>=$F && $S<$N && $J>=$P)
	{
		$mbti=11;
		echo "ENTJ są bardzo rzadkie wśród innych typów – stanowią około 1-3% testowanych mężczyzn oraz około 1-2% testowanych kobiet.




Charakterystyka typu

Ludzie o tym typie osobowości są nazywani urodzonymi przywódcami, ze względu na ich motywację i ostrość działania. Są asertywni, odważni i lubią wyzwania. Skupiają się na znalezieniu najlepszego sposobu na osiągnięcie celu. Uważają, że poświęcenie odpowiedniej ilości czasu, przy odpowiednich środkach wystarcza, aby osiągnąć każdy cel.

Ze względu na ich umiejętności odnajdywania talentów w ludziach, często zajmują się biznesem, bądź innymi pracami wymagającymi logicznego i analitycznego myślenia, oraz zarządzania ludźmi. Są zdystansowani od swoich emocji, przez co mogą być odbierani za nieczułych i aroganckich.
Procesy poznawcze

W teorii Junga istnieją dwa typy postawy psychicznej: introwertyczna (i) oraz ekstrawertyczna (e) i cztery podstawowe funkcje psychiczne:

    percepcja (perception)
    intuicja (intuition)
    uczucie (feeling)
    myślenie (thinking)

Funkcje te występują w formie dwóch przeciwieństw: percepcja i intuicja, oraz uczucie i myślenie. Według wskaźnika MBTI w człowieku dominuje jedna funkcja (funkcja podstawowa), druga pozostaje stłumiona. Łącząc typ psychologiczny osoby z funkcjami (podstawową i dodatkową), można uzyskać pełny opis osobowości. Ta hierarchia reprezentuje wzorzec zachowania człowieka (jego procesy poznawcze). Procesy poznawcze dla ENTJ są następujące:
Dominujący: Ekstrawertyczne myślenie (Te)

Te jest najbardziej rozwiniętą funkcją u ENTJ. Ekstrawertyczne myślenie pomaga zorganizować swoje otoczenie przez tworzenie planów i harmonogramów. Pomaga rozwinąć umiejętności organizacyjne oraz rozumienie cudzego porządku i logiki. Ludzie z osobowością ENTJ potrafią uporządkować i pokierować swoje otoczenie do specyficznych potrzeb danej pracy.
Pomocniczy: Introwertyczna intuicja (Ni)

Ni charakteryzuje się specyficznym pojmowaniem czasu, i dzięki temu umiejętnością dobrego planowania, oraz przewidzenia czasu potrzebnego na zrobienie czegoś. ENTJ polega na swojej intuicji, nie boi się zaryzykować, w myślach jest stale zwrócony ku przyszłości. Analizuje przeszłość próbując wyciągnąć z niej znaczące wnioski.
Trzeciorzędny: Ekstrawertyczna zmysłowość (Se)

Se skupia się na odczuwaniu fizycznego świata. ENTJ ma wysoką samoświadomość, co pozwala na skuteczne działanie podczas nieoczekiwanych i stresujących sytuacji. Cecha ta sprawia, że ENTJ mają predyspozycje do bycia dobrymi liderami.
Podrzędny: Introweryczne odczuwanie (Fi)
Fi filtruje informacje pod kątem tego, co jest wartościowe i dobre, oraz w co warto wierzyć. Robi to, nadając wartość i znaczenie przeżytym sytuacjom życiowym. Pomaga to w intuicyjnej ocenie napotkanych osób, lub ocenie sytuacji. Fi jest najmniej rozwiniętą funkcją u ENTJ, lecz może dojrzewać z czasem.";
	}
	if($I<$E && $T>=$F && $S<$N && $J<$P)
	{
		$mbti=12;
		echo "ENTP (ang. Extraverted iNtuitive Thinking Perceiving – Ekstrawertyk Intuicyjny Myśliciel Obserwator) – jeden z 16 typów osobowości według wskaźnika MBTI. David Keirsey określił osoby ENTP jako Wynalazców – jeden z czterech typów należących do temperamentu określanego przez niego jako Racjonaliści. Ok. 2–5% populacji USA należy do ENTP.

    E – ekstrawersja przeważa nad introwersją – osoby ENTP czerpią energię z interakcji z ludźmi lub obiektami w otoczeniu. Mają tendencje do otaczania się szerokim gronem znajomych.
    N – intuicja przeważa nad percepcją – są to osoby raczej rozumujące abstrakcyjnie niż obiektowo. Skupiają uwagę raczej na całokształcie niż na detalach i bardziej na potencjalnych możliwościach niż na doraźnych skutkach.
    T – myślenie jest uprzywilejowane nad uczuciami. Cenią obiektywne wartości ponad osobistymi preferencjami. W procesie podejmowania decyzji kładą nacisk na logikę postępowania niż na względy towarzyskie.
    P – percepcja preferowana nad osądzaniem – osoby takie mają tendencje do wstrzymywania się z osądami i opóźniania istotnych decyzji, preferując „pozostawienie sobie furtki” na wypadek zmiany okoliczności.
";
	}
	if($I<$E && $T<$F && $S>=$N && $J>=$P)
	{
		$mbti=13;
		echo "ESFJ (ang. Extraverted Sensing Feeling Judging – Ekstrawertyk Percepcjonista Uczuciowiec Sędzia) - jeden z typów osobowości według wskaźnika MBTI. Osoby o tym typie łączą ekstrawersyjne czucie z introwersyjną percepcją. Przede wszystkim są skoncentrowane na świecie zewnętrznym, gdzie zajmują się sprawami zgodnie ze swoimi uczuciami wobec nich i własnym systemem wartości. Ich drugorzędny styl życia jest skoncentrowany na wnętrzu, gdzie rozpatrują sprawy używając pięciu zmysłów; w dosłowny, konkretny sposób.

ESFJ kochają ludzi. Ich Percepcja i Osądzanie pozwalają im na zbieranie szczegółowych informacji o ludziach i zamienianie ich na osądy, które dają ludziom wsparcie. Bardzo łatwo przychodzi im zrozumienie czyjegoś punktu widzenia. ESFJ chcą być lubiani i uprzejmi i mają dar przyciągania do siebie ludzi.

ESFJ są odpowiedzialni i godni zaufania. Cenią bezpieczeństwo i stabilność i są skoncentrowani na szczegółach życia. Zwykle jako pierwsi zauważają, co powinno zostać zrobione. Są również ciepli i energiczni. Potrzebują poparcia innych, aby dobrze się czuć. Nie rozumieją nieuprzejmości, a obojętność ich rani. Chcą być cenieni za to, kim są i za to, co dają innym. Czasami ciężko im zaakceptować trudną prawdę na temat kogoś, o kogo się troszczą.

System wartości osób o typie ESFJ jest określany zewnętrznie. Mogą posiadać twarde moralne zasady, ale powstają one dzięki społeczności, w której żyją, a nie z powodu silnych wewnętrznych wartości.

ESFJ lubią kontrolować otoczenie. Najbardziej komfortowo czują się w zorganizowanym środowisku. Zwykle nie lubią robić rzeczy, które wymagają teoretycznego i abstrakcyjnego pojęcia. Lubią tworzyć porządek i struktury i są dobrzy w zadaniach, które wymagają takich umiejętności. Powinni uważać, aby nie kontrolować ludzi, którzy sobie tego nie życzą.

ESFJ mają szacunek do praw i zasad i uważają, że inni też powinni mieć. Są tradycjonalistami i wolą robić wszystko w ustalony sposób. Zdarza się, że ślepo wierzą zasadom bez zrozumienia ich.

Zawody zalecane dla ESFJ związane są z pracą z ludźmi - nauczyciel, menedżer, pracownik socjalny, logopeda, lekarz rodzinny, pielęgniarka, opiekun, księgowy itp.";
	}
	if($I<$E && $T<$F && $S>=$N && $J<$P)
	{
		$mbti=14;
		echo "ESFP (ang. Extravert, Sensing, Feeling, Perception - Ekstrawersja, Poznanie, Odczuwanie, Obserwacja) to czteroliterowy kod określający jeden z szesnastu typów osobowości MBTI (Myers-Briggs Type Indicator).Klasyfikacja MBTI została rozwinięta przez Isabel Briggs Myers i Katherine Cook Briggs w oparciu o wcześniejszą pracę psychiatry Carla Junga.

ESFP są osobami towarzyskimi, przyjaznymi i tolerancyjnymi. Kochają ludzi i uwielbiają nowe doświadczenia. Są żywiołowi i zabawni. Lubią być w centrum zainteresowania. Żyją chwilą teraźniejszą, starając się uczynić swoje życie ciekawym i ekscytującym.

ESFP posiadają bardzo dobrze rozwinięte umiejętności interpersonalne i w sytuacjach konfliktowych często pełnią rolę rozjemców. Łatwo się solidaryzują i okazują troskę o innych ludzi. Z reguły są ludźmi szczodrymi i serdecznymi. Są bardzo spostrzegawczy w relacjach międzyludzkich i nierzadko szybciej niż inni wyczuwają, gdy coś jest nie tak. Reagują, wychodząc naprzeciw potrzebie, i w serdeczny sposób wyrażając swoją troskę. Mogą nie być najlepszymi życiowymi doradcami, ponieważ nie lubią teoretyzować i planować, ale nie zawodzą, jeżeli chodzi o okazywanie troski w praktyczny sposób.

ESFP są bez wątpienia spontanicznymi i optymistycznymi ludźmi. Lubią dobrą zabawę. Gdy osoby tego typu rozwijają swoją zdolność do podejmowania decyzji w oparciu o racjonalny proces myślowy (a nie tylko odczucia), często skutek jest taki, że zaczynają większą wagę przykładać do natychmiastowego spełnienia aniżeli powinności i zobowiązania. Mogą też unikać rozważania długoterminowych skutków swoich decyzji.

Dla ESFP, cały świat jest jedną wielką sceną teatralną. Uwielbiają być w centrum i uwielbiają występować przed innymi. Ciągle odgrywają jakąś rolę, starając się zabawiać innych. Lubią działać pobudzająco na zmysły i są w tym bardzo dobrzy. Niczego nie pragnęliby bardziej, jak tylko żeby życie było nieustającą imprezą, na której oni pełnią rolę zabawnego i kochającego gospodarza.

ESFP kochają ludzi i wszyscy kochają ESFP. Jednym z ich największych darów jest ich bezwarunkowa akceptacja i tolerancyjność wobec innych ludzi. Są osobami entuzjastycznymi i szczerze lubią niemal wszystkich. ESFP nigdy nie zawodzą w okazywaniu ciepła i wielkoduszności wobec swoich przyjaciół, a jako takich traktują niemal wszystkich. ESFP potrafią jednak wyrobić sobie bardzo silne zdanie o osobie, która stanie przeciwko nim, i są wtedy zdolni do głębokiej antypatii.

Pod wpływem stresu ESFP często czują się przytłoczeni negatywnymi myślami. Ponieważ są ludźmi optymistycznymi, którzy żyją w świecie możliwości, starają się unikać myślenia w ten sposób. Chcąc zwalczyć te negatywne myśli, ESFP często uciekają się do prostych, uniwersalnych wytłumaczeń. Te proste wytłumaczenia mogą być mniej lub bardziej zgodne z prawdą, ale spełniają swoją rolę, pozwalając ESFP zapomnieć o problemie.

ESFP są z reguły bardzo praktycznymi ludźmi, pomimo że nienawidzą struktur i nienawidzą rutyny. Lubią rzucać się w wir wydarzeń, ufając swojej zdolności do improwizowania w każdej sytuacji. Uczą się najlepiej poprzez doświadczenie zamiast studiowanie suchej teorii. Teoretyzowanie nie jest ich mocną stroną. ESFP, którzy nie rozwinęli swojej zdolności do gromadzenia informacji w sposób intuicyjny (aniżeli tylko poznawczy), mogą unikać sytuacji wymagających teoretyzowania, sytuacji bardzo złożonych albo niejednoznacznych. Z tego powodu ESFP mają często trudności w szkole. Z drugiej strony uczą się bardzo szybko, gdy pozwala im się uczyć od innych albo poprzez próbowanie wszystkiego samemu.

ESFP bardzo wysoce cenią estetykę i piękno. Mają świetne poczucie zagospodarowania przestrzennego. Jeżeli mają ku temu środki, to często wchodzą w posiadanie wielu przedmiotów o wartości estetycznej, a ich domy są pięknie umeblowane. Lubią rzeczy bardziej wyrafinowane, takie jak dobre jedzenie albo dobre wino.

ESFP świetnie sprawdzają się w zespole. Rzadko narzekają albo robią problemy, a jednocześnie wytwarzają bardzo zabawną atmosferę. Mają możliwość odniesienia największego sukcesu w pracy, która pozwala im wykorzystywać ich świetne zdolności interpersonalne i zdolność do wprowadzania pomysłów w życie. Ponieważ lubią spontaniczność i nowe doświadczenia, wybierając karierę, powinni decydować się na zajęcia oferujące dużą różnorodność i wymagające kontaktów z innymi.

ESFP lubią nawiązywać zażyłe relacje z innymi. Ich relacje z małymi dziećmi i zwierzętami często cechuje zażyłość nieosiągalna dla innych typów osobowości. Bardzo cenią też piękno przyrody.

ESFP kochają życie i wiedzą, jak się dobrze bawić. Lubią wciągać w tę zabawę innych. Z reguły wszyscy lubią z nimi przebywać. Są elastyczni, szybko dostosowują się do każdej sytuacji. Szczerze się przejmują innymi, są ciepli i serdeczni. Mają niezwykłą umiejętność czynienia ze wszystkiego dobrej zabawy, ale muszą uważać na pułapki, związane z życiem tylko i wyłącznie chwilą obecną.";
	}
		if($I<$E && $T<$F && $S<$N && $J>=$P)
	{
		$mbti=15;
		echo "Ciepły, pełen zrozumienia, odpowiedzialny i wrażliwy. Bardzo dobrze „dostrojony” do emocji, potrzeb i motywacji innych. W każdym dostrzega potencjał, pragnie im pomagać, w pełnym wykorzystaniu ich możliwości. Mozę działać jak katalizator rozwoju pojedynczych osób i grup. Lojalny, wrażliwy na aprobatę i krytykę. Towarzyski, ułatwia innym odnalezienie się w grupie. Może być inspirującym liderem.";
	}
		if($I<$E && $T<$F && $S<$N && $J<$P)
	{
		$mbti=16;
		echo "ENFP (ang. Extraverted Intuitive Feeling Perceiving – Ekstrawertyk Intuicyjny Uczuciowiec Obserwator) – skrót stosowany przy jednym z szesnastu typów Myers-Briggs Type Indicator (MBTI).

ENFP to typ ekstrawertywny z przewagą uczuć, intuicyjny, obserwujący. Osoby o tym typie osobowości cechuje ekstrawersja, kierowanie percepcji i działań na otaczający świat i ludzi. Osoby z tym typem osobowości charakteryzowane są jako ludzie kreatywni, charyzmatyczni, spontaniczni, asertywni.

Zalecane zawody dla ENFP to: aktor, dziennikarz, dyplomata, doradca prawny, psycholog, muzyk, malarz, komiksiarz czy pisarz.";
	}
	
	

			if (1){	
			
			$wszystko_OK=true;
			
		
	require_once "../connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{


	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT id_odpowiedzi FROM uzytkownicy,Odpowiedzi WHERE Odpowiedzi.id_uzytkownicy=uzytkownicy.id AND id='%s'",
		mysqli_real_escape_string($polaczenie,$idd22))))
		{
	
				
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
						$wiersz = $rezultat->fetch_assoc();
				
	
				
				
			if ($polaczenie->query("UPDATE Odpowiedzi  SET E='$E',S='$S', T='$T' ,J='$J', id_swiadomosc='$mbti',	I='$I', INTU='$N', F='$F' ,P='$P' WHERE id_uzytkownicy='$idd22'"))
					{
						$_SESSION['udanawprowadzenie']=true;
						
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
			} else {
				 

									if ($polaczenie->query("INSERT INTO Odpowiedzi(id_odpowiedzi, 	E, 	S, 	T, 	J, 	id_swiadomosc ,	id_uzytkownicy, 	I, 	INTU, 	F, 	P) VALUES (NULL,'$E','$S','$T','$J', '$mbti','$idd22','$I','$N','$F','$P')"))
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
		
}
			

?>
	

			</div>
			<div style="clear:both;"></div>
			
		</div>

		
	
	
	</div>
	
</body>
</html>