<?php


	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
	$fmn = $_SERVER[HTTP_USER_AGENT];
		
	if ($polaczenie->query("delete from Sesja where


id = '$_COOKIE[id2]' and web = '$fmn'"))
					{
					setcookie("id2",0,time()-1);


unset($_COOKIE['id2']);
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
					
			

 			
				
					
	}				






	
	header('Location: stworzsiebie');

?>