<?php


        session_start();


    session_destroy();

    if(isset($_COOKIE['loginstatus']))
	{
		setcookie('loginstatus', '', time()-1,'/');
	}
    
    header("Location: ../index.php");

?>