<?php
	
	require_once 'connection.php';
	
	$error = false;
	
	//$name, $gender, $birth, $doc, $email, $senha
	$name = (isset($_POST["nome"])) ? $_POST["nome"] : $error = 1 ;
	$gender = (isset($_POST["sexo"])) ? $_POST["sexo"] : $error = 1 ;
	$birth = (isset($_POST["nascimento"])) ? $_POST["nascimento"] : $error = 1 ;
	$doc = (isset($_POST["cpf"])) ? $_POST["cpf"] : $error = 1 ;
	$carro = (isset($_POST["carro"])) ? $_POST["carro"] : $error = 1 ;
	$placa = (isset($_POST["placa"])) ? md5($_POST["placa"]) : $error = 1 ;
	
	//echo " '$name', '$gender', '$birth', '$doc', '$carro', '$placa'";
	
	
	if($error || $doc == ''){
		header('Location: motoristas.php?error=1&');
	}
	else if( verificarMotoristaCadastrado($doc) ){
		header('Location: motoristas.php?error=2&');
	}
	else{
		adicionarMotoristas($name, $gender, $birth, $doc, $carro, $placa);
		header('Location: motoristas.php?success=1&');
	}
	
	
	
	
?>