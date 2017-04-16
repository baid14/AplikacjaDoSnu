function odliczanie()
	{
var nazwy_mies = [ 'Sty.', 'Luty', 'Mar.', 'Kwie.', 'Maj', 
    'Czer.', 'Lip.', 'Sier.', 'Wrze.', 'Paz.', 
    'Lis.', 'Gru.' ];
 
// Odczytanie bie¿¹cej daty i czasu, i rozbicie ich na sk³adowe




	try {
// statements to try
    var data = new Date(); // function could throw exception
}
catch (e) {
    data="unknown"
    logMyErrors(e) // pass exception object to error handler
}


var rok = data.getFullYear();
var mies = data.getMonth();
var dzien = data.getDate();
var godz = data.getHours();
var min = data.getMinutes();
var sec = data.getSeconds();
 
// Dodanie zera na pocz¹tku minut i sekund je¿eli trzeba
if (min < 10)
    min = '0' + min;
if (sec < 10)
    sec = '0' + sec;
 
// Utworzenie odpowiednio sformatowanej daty i czasu
document.getElementById("zegar").innerHTML = dzien + ' ' + nazwy_mies[mies] + ' ' + rok 
    + ', ' + godz + ':' + min + ':' + sec;
		 
		 setTimeout("odliczanie()",1000);
	}
	
