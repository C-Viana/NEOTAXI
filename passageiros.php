<?php
	
	$success = isset( $_GET['success'] ) ? $_GET['success'] : false ;
	$error = isset( $_GET['error'] ) ? $_GET['error'] : false ;
?>

<!DOCTYPE>

<html lang="pt-br" >
	
	
	<head>
		<meta charset="utf-8" />
		<title> NeoTaxi: Cadastro </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css-personal\style.css" rel="stylesheet" />
		
		<script language="javascript" src="js-personal\form_control.js" > </script>
		
		<script language="javascript" >
			
			$(document).ready( function(){
				
				checkClientDataForm();
				
			}); //JQUERY END
			
		</script>
		
		
	</head>
	
	<body>
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="inicio.php"><img id="top_logo" src="images\letra-t-media.png" /></a>
				</div>
				
				<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					<ul class="nav navbar-nav">
						<li ><a href="inicio.php">INÍCIO</a></li>
						<li><a href="#">SOBRE</a></li>
						<li class="active" ><a href="#">CADASTRE-SE</a></li>
						<li><a href="motoristas.php">TRABALHE CONOSCO</a></li>
					</ul>
				</div>
				
			</div>
		</nav>
		
		
		<div class="container " >
			
			<h3>Seja um de nós!</h3>
			<p>Informe seus dados para solicitar nossos serviços</p>
			
			<div class="col-md-8" >
				
				<form action="insertClients.php" method="post" id="dados_usuario" >
					
					
					<div class="form-group">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo"> <span id='nome_span'></span>
					</div>
					
					<div class="form-group">
						<label for="masculino"> <input type="radio" id="masculino" name="sexo" value="Masculino" > Masculino </input > </label>
						<label for="feminino"> <input type="radio" id="feminino" name="sexo" value="Feminino" > Feminino </input > </label>
					</div> <span id='sexo_span'></span>
					
					<div class="form-group">
						<input type="date" class="form-control" id="nascimento" name="nascimento" > <span id='nasc_span'></span>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe seu CPF. Digite apenas números" > <span id='cpf_span'></span>
					</div>
					
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"> <span id='email_span'></span>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control " id="pass" name="pass" placeholder="Digite uma senha"> 
						<span id='pass_span'></span>
						<span id="notice" style="color: red; display: none;" >As senhas não estão iguais!</span>
					</div>
					<div class="form-group">
						<input type="password" class="form-control " id="pass-confirm" placeholder="Repita sua senha">
					</div>
					
					<button type="submit" class="btn btn-primary float-right" id="submit" >Cadastrar</button>
					
					
				</form>
				
				<span>
					<?php
						if($success){
							echo "<p style='color: green;'>CADASTRO REALIZADO COM SUCESSO</p>";
						}
						
						if($error == 1){
							echo "<p style='color: red;'>OCORREU ALGUM PROBLEMA AO REALIZAR SEU CADASTRO</p>";
						}
						
						if($error == 2){
							echo "<p style='color: red;'>CADASTRO NÃO REALIZADO! USUÁRIO JÁ CADASTRADO</p>";
						}
						
					?>
				</span>
				
			</div>
			
		</div>
		
		
		
		<footer >
			© 2018 Neo Taxi Technologies Inc. Av. Algum Lugar, nº 0, São Paulo/SP - CEP 06333-000
		</footer>
		
		
	</body>
	
</html>