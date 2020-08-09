<?php
	session_start();
?>

<!DOCTYPE>

<html lang="pt-br" >
	
	
	<head>
		<meta charset="utf-8" />
		<title> NeoTaxi BR: HOME </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css-personal\style.css" rel="stylesheet" />
		
		<script language="javascript" src="js-personal\form_control.js" > </script>
		
		<script language="javascript" >
			
			$(document).ready( function(){
				
				$("#sair").click( function(){
					$.ajax({
						url: 'sair.php',
						success: function(data){
							//alert(data);
						}
					});
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
						<li class="active"><a href="#">INÍCIO</a></li>
						<li><a href="#">SOBRE</a></li>
							<?php echo (isset($_SESSION['email'])) ? "<li id='sair'> <a href='inicio.php'>SAIR</a> <li> " : "<li> <a href='passageiros.php'> CADASTRE-SE </a> <li>"; ?> </li>
							<?php echo (isset($_SESSION['email'])) ? "<li> <a href='homePage.php'> HOME </a> <li>" : ""; ?>
						<li><a href="motoristas.php">TRABALHE CONOSCO</a></li>
					</ul>
				</div>
				
			</div>
		</nav>
		
		
		
		<div id="home_main">
			<div class="container" >
				
				<div >
					<img src="images\taxi-1.png" id="header_image" />
				</div>
				
				<div class="col-md-6 float" style="color: white;" >
					<h2>O que é o <span style="color: yellow;">NEO TAXI BR?</span> </h2>
					<p style="font-size: 16px;"> 
						Somos um serviço de transporte e viajens disponível a qualquer momento e com excelentes preços. <br/><br/>
						Cadastre-se, escolha o seu destino e um de nossos motoristas irá até você. 
					</p>
					
				</div>
				
				<div class="col-md-6 float-right" id="login_panel" >
					<h3>Já é cadastrado?</h3>
					<p>Acesse sua página para solicitar um motorista</p>
					
					<form action="login.php" method="post" >
						<div class="form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email cadastrado">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pass" name="pass" placeholder="Digite sua senha aqui">
						</div>
						<button id="submit" type="submit" class="btn btn-primary">Entrar</button>
					</form>
					
				</div>
				
			</div>
		</div>
		
		<!--
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pharetra ipsum leo, et posuere ligula porta sed. Sed mattis ante non risus condimentum, non dignissim risus ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce egestas ut quam nec iaculis. Pellentesque mollis tempus tempor. Maecenas vitae erat eget urna vehicula condimentum faucibus eget ex. Nullam facilisis dapibus nulla, ac fringilla elit gravida sed. Aenean vel auctor felis. Etiam scelerisque eleifend mi, id tempor turpis elementum vitae. Mauris at hendrerit felis, nec venenatis nunc. Curabitur massa risus, rutrum quis tellus ut, semper malesuada magna. Nunc id eros iaculis, maximus elit ac, eleifend sapien. Curabitur eget gravida mauris. Etiam tempor leo vel accumsan tincidunt.</p>
		<p>Morbi finibus sit amet diam sit amet iaculis. Donec vulputate aliquam mi, nec lacinia nulla laoreet eu. Duis facilisis luctus sodales. Etiam eu diam venenatis, ultricies mauris a, tempus ipsum. Fusce pharetra, est id venenatis aliquam, justo nisi pretium nisl, quis ultricies orci metus a dolor. Quisque ipsum orci, vestibulum in urna in, elementum bibendum sapien. Praesent id sem tellus. Curabitur consectetur justo eget lorem ullamcorper, sed mattis sapien vulputate. Maecenas ut ligula ante. Curabitur malesuada fringilla tincidunt. Morbi bibendum sapien ac viverra interdum.</p>
		<p>Duis ullamcorper porttitor tristique. Proin condimentum, mi sit amet ullamcorper ullamcorper, erat nunc placerat magna, vel luctus ipsum felis vel enim. Aliquam luctus lectus quis quam convallis, nec euismod ex finibus. Duis id turpis libero. Suspendisse quis aliquam diam, lobortis euismod velit. Nam feugiat dui id orci eleifend, sed scelerisque mi pellentesque. Aliquam fringilla aliquet metus, ut sollicitudin urna faucibus sed. Sed eu bibendum enim. Fusce nulla lectus, sagittis vel magna nec, maximus aliquet mauris. Vivamus risus erat, ultricies eget blandit finibus, sodales a massa. Nam at orci in quam ornare elementum. Ut ac finibus ante.</p>
		<p>Mauris condimentum enim efficitur lectus egestas, non convallis quam eleifend. Duis mi ex, feugiat non ante in, malesuada lacinia justo. Ut efficitur pellentesque velit, eu finibus turpis dignissim a. Integer pharetra nibh ac velit viverra iaculis. Cras ante libero, interdum ut porta at, vehicula ut magna. Fusce pellentesque, ligula vel mollis consequat, dolor enim interdum nibh, quis blandit quam leo interdum lorem. Phasellus a orci ut libero laoreet faucibus. Sed molestie tempus metus, quis varius massa posuere eget. Integer sodales id nunc eget scelerisque.</p>
		<p>In semper porttitor elit sed facilisis. Integer at ligula dui. Sed gravida, sapien eu mattis posuere, elit tortor auctor massa, quis laoreet mauris metus eu nulla. Quisque bibendum faucibus nulla, et vestibulum leo dictum in. Proin et porttitor justo. Donec vitae leo ut diam tempus ultrices id non justo. Praesent et volutpat urna, vel porttitor urna. Nunc viverra mi ante, eu consectetur massa laoreet sed. Nunc a tempor arcu. Sed rutrum hendrerit orci.</p>
		-->
		
		<footer >
			© 2018 Neo Taxi Technologies Inc. Av. Algum Lugar, nº 0, São Paulo/SP - CEP 06333-000
		</footer>
		
		
	</body>
	
	
	
</html>