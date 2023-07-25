<?php
	session_start();
	$Id=$_GET['Id'];

	$_SESSION['Id']=$Id;
	switch (substr($Id,0,2)){
		case 'bo':
			header("Location:book.html");
			break;
		case 'cd':
			header("Location:cd.html");
			break;
	}

?>