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


id = '$_COOKIE[id]' and web = '$fmn'"))
					{
					setcookie("id",0,time()-1);


unset($_COOKIE['id']);
					
					}
					else
					{
						throw new Exception($polaczenie->error);
					}		
					
			

 			
				
					
	}				






	
	header('Location: logowanie');

?>