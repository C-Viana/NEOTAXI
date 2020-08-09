<?php
	
	require_once 'connection.php';
	
	$error = false;
	
	//$name, $gender, $birth, $doc, $email, $senha
	$o_tipo = (isset($_POST["tipo"])) ? $_POST["tipo"] : $error = 1 ;
	$o_local = (isset($_POST["local"])) ? $_POST["local"] : $error = 1 ;
	$o_numero = (isset($_POST["numero"])) ? $_POST["numero"] : $error = 1 ;
	$o_complemento = (isset($_POST["complemento"])) ? $_POST["complemento"] : '' ;
	$o_cep = (isset($_POST["cep"])) ? $_POST["cep"] : $error = 1 ;
	$o_estado = (isset($_POST["estado"])) ? $_POST["estado"] : $error = 1 ;
	
	$d_tipo = (isset($_POST["d_tipo"])) ? $_POST["d_tipo"] : $error = 1 ;
	$d_local = (isset($_POST["d_local"])) ? $_POST["d_local"] : $error = 1 ;
	$d_numero = (isset($_POST["d_numero"])) ? $_POST["d_numero"] : $error = 1 ;
	$d_complemento = (isset($_POST["d_complemento"])) ? $_POST["d_complemento"] : '' ;
	$d_cep = (isset($_POST["d_cep"])) ? $_POST["d_cep"] : $error = 1 ;
	$d_estado = (isset($_POST["d_estado"])) ? $_POST["d_estado"] : $error = 1 ;
	
	$motorista = (isset($_POST["motorista"])) ? $_POST["motorista"] : $error = 1 ;
	
	$id_motorista = buscarMotorista($motorista);
	
	$origem = $o_tipo . ' ' . $o_local . ', ' . $o_numero . ' - ' . $o_cep   . ' - ' . $o_estado ;
	$destino = $d_tipo . ' ' . $d_local . ', ' . $d_numero . ' - ' . $d_cep   . ' - ' . $d_estado ;
	
	
	
	if($error){
		header('Location: homePage.php?error=1&');
	}
	else{
		incluirRotas($_SESSION['id_usuario'], $id_motorista, $origem, $o_complemento, $destino, $d_complemento );
		header('Location: homePage.php?success=1&');
	}
	
	
	
?>