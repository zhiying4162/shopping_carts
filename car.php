<?php
	session_start();
	$Id=$_GET['Id'];

	if(!isset($_SESSION['Name']) ){
		$_SESSION["IDA"] = array();
		$_SESSION["NameA"]= array();
		$_SESSION["PriceA"]= array();
	}
	
	$ID=$_SESSION["IDA"] ;
	$ID[]=$_SESSION["ID"];
	$_SESSION["IDA"]=$ID;

	$Name=$_SESSION["NameA"] ;
	$Name[]=$_SESSION["Name"];
	$_SESSION["NameA"]=$Name;

	$Price=$_SESSION["PriceA"] ;
	$Price[]=$_SESSION["Price"];
	$_SESSION["PriceA"]=$Price;

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