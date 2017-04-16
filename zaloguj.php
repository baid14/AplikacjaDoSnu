





<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: stworzsiebie');
		exit();
	}

	
	
	
	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s' and kod = (SELECT kod FROM Aktywacja WHERE login='%s' AND aktywacja='1')",
		mysqli_real_escape_string($polaczenie,$login),mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				if (password_verify($haslo, $wiersz['pass']))
				{
					$id7 = $wiersz['id'];
					if($wiersz['prawa']==0){
						
						$id = md5(rand(-10000,10000) . microtime()) . md5(crc32(microtime()) .
$_SERVER['REMOTE_ADDR']);


$aa = $_SERVER[REMOTE_ADDR];
$bb = $_SERVER[HTTP_USER_AGENT];


									if ($polaczenie->query("delete from Sesja where id_uzytkownicy = '$id7'"))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}

									if ($polaczenie->query("insert into Sesja (id_uzytkownicy, id, ip, web) values

('$id7','$id','$aa','$bb')"))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}



						

						
						
						
						
						
						
				//	$_SESSION['zalogowany'] = true;
						//			$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['email'] = $wiersz['email'];
					setcookie("id", $id);
										//setcookie("zalogowany",$_SESSION['zalogowany'],time()+1000);
										header('Location: panel/panel');
										
															$x = date('Y-m-d H:i:s');
					unset($_SESSION['blad']);
					$rezultat->free_result();
																	
					}
					
					
					
					
					
					
					
					
					if($wiersz['prawa']==1){
						
						$kod2=rand();
						
								if ($polaczenie->query("INSERT INTO Aktywacja2(	id_aktywacja2, 	kod, 	aktywacja, login ) VALUES (NULL,'$kod2', 0, '$login')"))
					{
						
						
						
						
							   
function sms_send($params, $backup = false ) {

    static $content;

    if($backup == true){
        $url = 'https://api2.smsapi.pl/sms.do';
    }else{
        $url = 'https://api.smsapi.pl/sms.do';
    }

    $c = curl_init();
    curl_setopt( $c, CURLOPT_URL, $url );
    curl_setopt( $c, CURLOPT_POST, true );
    curl_setopt( $c, CURLOPT_POSTFIELDS, $params );
    curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );

    $content = curl_exec( $c );
    $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

    if($http_status != 200 && $backup == false){
        $backup = true;
        sms_send($params, $backup);
    }

    curl_close( $c );    
    return $content;
}

$params = array(
     'username' => 'baid@o2.pl',
     'password' => '3c5d73a596d22f8e4a1e74b833128cac',
     'to' => '537101337',
     'from' => 'Info',
     'message' => $kod2,
);

echo sms_send($params);

						
						
						

					}
					else
					{
						throw new Exception($polaczenie->error);
					}
						
						

						
						
header('Location: potlog.php');
					
					
					}
					

					
					
					
					
							
					
					
									if ($polaczenie->query("INSERT INTO log(id_log, 	timestamp, 	ip, 	przeglo) VALUES (NULL,'$x')"))
					{
						$_SESSION['udanawprowadzenie']=true;
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
					
					
					
					
					
					
					
					

				}
				else 
				{
					
					$_SESSION = '<span style="color:red"><center><br />Nieprawidłowy login lub hasło!</center></span>';
					header('Location: logowanie');
				}
				
			} else
				{
				
				$_SESSION['blad'] = '<span style="color:red"><center><br />Nieprawidłowy login lub hasło!</center></span>';
				header('Location: logowanie');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>