<?php 
		session_start();
		unset($_SESSION['userid']);
    	$_SESSION['logged']=false;
   	              	
	header('Location: /Boldo/index.php');
	exit(); 
?>