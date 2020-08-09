<?php
	
	require_once 'connection.php';
	
	if( !isset($_SESSION['email']) ){
		header('Location: inicio.php?error=1&');
	}
	
?>

<!DOCTYPE>

<html lang="pt-br" >
	
	
	<head>
		<meta charset="utf-8" />
		<title> NeoTaxi: Bem vindo </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css-personal\style.css" rel="stylesheet" />
		
		<script language="javascript" >
			
			$(document).ready( function(){
				
				$("#submit").click( function(){
					$.ajax({
						url: 'insertRoute.php',
						success: function(data){
							//alert(data);
						}
					});
				});
				
				$("#sair").click( function(){
					$.ajax({
						url: 'sair.php',
						success: function(data){
							//alert(data);
						}
					});
				});
				
				$("#corridas").click( function(){
						$("#lista_corridas").css( "display", "block" );
				});
				
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
						<li ><a id="sair" href="inicio.php">SAIR</a></li>
						<li class="active" > <a href='homePage.php'> HOME </a> <li>
						<li ><a href="motoristas.php">TRABALHE CONOSCO</a></li>
					</ul>
				</div>
				
			</div>
		</nav>
		
		
		<div class="container " >
			<div class="row" >
				<div class="col-md-3" >
					
					<div> <?php echo "<h3>" . $_SESSION['nome'] . "</h3>"; ?> </div>
					<div> <?php echo "<small>" . $_SESSION['email'] . "</small>"; ?> </div>
					<br/>
					
				</div>
				
				<div class="col-md-9" >
					<h3>Pronto para partir?</h3>
					<form action="insertRoute.php" method="post" >
						<div class="form-group">
							<div id="origem">
								<p>ENDEREÇO DE PARTIDA</p>
								<select id="tipo" name="tipo" class="form-control" > 
									<option disabled selected value>Tipo de endereço</option> 
									<option>Rua</option> 
									<option>Avenida</option> 
									<option>Praça</option> 
								</select>
								<input type="text" class="form-control" id="local" name="local" placeholder="Nome do lugar. Ex: Francisco Morato">
								<input type="number" class="form-control" id="numero" name="numero" placeholder="Número do endereço">
								<input type="text" class="form-control" id="complemento" name="complemento" placeholder="Se houver, informe um complemento">
								<input type="CEP" class="form-control" id="cep" name="cep" placeholder="Digite o cep apenas com números">
								<select id="estado" name="estado" class="form-control" > 
									<option disabled selected value>UF</option> 
									<option>BA</option> 
									<option>PR</option> 
									<option>MG</option> 
									<option>MT</option> 
									<option>RJ</option> 
									<option>RS</option> 
									<option>SC</option> 
									<option>SP</option> 
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<div id="origem">
								<p>ENDEREÇO DE DESTINO</p>
								<select id="d_tipo" name="d_tipo" class="form-control" > 
									<option disabled selected value>Tipo de endereço</option> 
									<option>Rua</option> 
									<option>Avenida</option> 
									<option>Praça</option> 
								</select>
								<input type="text" class="form-control" id="d_local" name="d_local" placeholder="Nome do lugar. Ex: Francisco Morato">
								<input type="number" class="form-control" id="d_numero" name="d_numero" placeholder="Número do endereço">
								<input type="text" class="form-control" id="d_complemento" name="d_complemento" placeholder="Se houver, informe um complemento">
								<input type="CEP" class="form-control" id="d_cep" name="d_cep" placeholder="Digite o cep apenas com números">
								<select id="d_estado" name="d_estado" class="form-control" > 
									<option disabled selected value>UF</option> 
									<option>BA</option> 
									<option>PR</option> 
									<option>MG</option> 
									<option>MT</option> 
									<option>RJ</option> 
									<option>RS</option> 
									<option>SC</option> 
									<option>SP</option> 
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<?php
								require_once 'connection.php';
								echo "<select id='motorista' name='motorista' class='form-control' > ";
									echo "<option disabled selected value>Escolha um motorista</option> ";
									listarMotoristas();
								echo "</select>";
							?>
						</div>
						
						<button type="submit" id="submit" class="btn btn-primary float-right">Confirmar</button>
						
					</form>
					
				</div>
			</div>
		</div>
		
		<hr>
		
		<div class="container">
			<div class="row">
				<button class="btn btn-link" id="corridas" > MINHAS VIAJENS </button>
				<br/><br/><br/>
				<div class="col-sm-12" id="lista_corridas" style="display: none;">
					<?php listarCorridas(); ?>
				</div>
			</div>
		</div>
		
		
		<hr>
		<br/>
		
		<footer >
			© 2018 Neo Taxi Technologies Inc. Av. Algum Lugar, nº 0, São Paulo/SP - CEP 06333-000
		</footer>
		
		
		
	</body>
	
	
</html>