<?php
	
	session_start();
	
	unset( $_SESSION['id_usuario'] );
	unset( $_SESSION['nome'] );
	unset( $_SESSION['email'] );
	
	header('Location: inicio.php');
	
	
?>
