<?php
	
	require_once 'connection.php';
	
	
	$email = $_POST['email'];
	$senha = md5($_POST['pass']);
	
	//echo " $email <br/> $senha ";
	
	checkAccount($email, $senha);
	
	
?>