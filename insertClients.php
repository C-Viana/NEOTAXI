<?php
	
	require_once 'connection.php';
	
	$error = false;
	
	//$name, $gender, $birth, $doc, $email, $senha
	$name = (isset($_POST["nome"])) ? $_POST["nome"] : $error = 1 ;
	$gender = (isset($_POST["sexo"])) ? $_POST["sexo"] : $error = 1 ;
	$birth = (isset($_POST["nascimento"])) ? $_POST["nascimento"] : $error = 1 ;
	$doc = (isset($_POST["cpf"])) ? $_POST["cpf"] : $error = 1 ;
	$email = (isset($_POST["email"])) ? $_POST["email"] : $error = 1 ;
	$senha = (isset($_POST["pass"])) ? md5($_POST["pass"]) : $error = 1 ;
	
	
	if($error || $doc == '' ){
		header('Location: passageiros.php?error=1&');
	}
	else if( verificarClienteCadastrado($email, $doc) ){
		header('Location: passageiros.php?error=2&');
	}
	else{
		adicionarClientes($name, $gender, $birth, $doc, $email, $senha);
		header('Location: passageiros.php?success=1&');
	}
	
	
	
	
?>