<?php
	
	session_start();
	
	function initDB(){
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "neo_taxi";
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		return $conn;
	}
	
	function verificarClienteCadastrado($email,$doc){
		$conn = initDB();
		$query = "SELECT * FROM clientes WHERE email = '$email' OR cpf = '$doc' ";
		$resultado = mysqli_query($conn, $query);
		$registro = mysqli_fetch_array($resultado);
		
		if ($registro) {
			return true;
		} else {
			return false;
		}
	}
	
	function verificarMotoristaCadastrado($doc){
		$conn = initDB();
		$query = "SELECT * FROM clientes WHERE cpf = '$doc' ";
		$resultado = mysqli_query($conn, $query);
		$registro = mysqli_fetch_array($resultado);
		
		if ($registro) {
			return true;
		} else {
			return false;
		}
	}
	
	function adicionarClientes($name, $gender, $birth, $doc, $email, $senha){
		
			$conn = initDB();
			$query = "INSERT INTO clientes (nome, sexo, nascimento, cpf, email, senha) VALUES ('$name', '$gender', '$birth', '$doc', '$email', '$senha' )";
			if ($conn->query($query) === TRUE) {
				//echo "Pronto!";
			} else {
				echo "Error: " . $query . "<br>" . $conn->error;
			}
			$conn->close();
	}
	
	function adicionarMotoristas($name, $gender, $birth, $doc, $car, $plate){
		$conn = initDB();
		$query = "INSERT INTO motoristas (nome, sexo, nascimento, cpf, carro, placa, inicio) VALUES ('$name', '$gender', '$birth', '$doc', '$car', '$plate', NOW() )";
		if ($conn->query($query) === TRUE) {
			//echo "Pronto!<br/>";
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
		$conn->close();
	}
	
	function checkAccount($email, $senha){
		
		$conn = initDB();
		$query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha' ";
		
		$command = mysqli_query($conn, $query);
		
		if( $command ){
			$return = mysqli_fetch_array($command);
			if( isset($return['nome']) ){
				$_SESSION['id_usuario'] = $return['id'];
				$_SESSION['nome'] = $return['nome'];
				$_SESSION['email'] = $return['email'];
				header('Location: homePage.php');
			}
			else{
				header('Location: inicio.php?erro=1');
			}
		}
		else {
			echo 'Ocorreu algum problema ao consultar os dados. Contate ajuda do site.';
		}
		$conn->close();
	}
	
	function listarMotoristas(){
		$conn = initDB();
		$query = "SELECT id, nome FROM motoristas";
		
		$resultado = mysqli_query($conn, $query);
		
		while( $fetch = mysqli_fetch_array($resultado) ){
			echo "<option>";
				echo "$fetch[nome]";
			echo "</option>";
		}
		$conn->close();
	}
	
	
	function buscarMotorista($nome){
		$conn = initDB();
		$query = "SELECT id FROM motoristas WHERE nome = '$nome' ";
		
		$resultado = mysqli_query($conn, $query);
		$fetch = mysqli_fetch_array($resultado);
		
		$conn->close();
		
		return $fetch['id'];
	}
	
	
	function incluirRotas($id_cliente, $id_motorista, $origem, $complemento_origem, $destino, $complemento_destino){
		$conn = initDB();
		$query = "INSERT INTO corridas (id_cliente, id_motorista, endereco_origem, complemento_origem, endereco_destino, complemento_destino) VALUES ('$id_cliente', '$id_motorista', '$origem', '$complemento_origem', '$destino', '$complemento_destino' ) ";
		
		$resultado = mysqli_query($conn, $query);
		
		$conn->close();
	}
	
	function listarCorridas(){
		$conn = initDB();
		$query = "SELECT * FROM corridas";
		
		$resultado = mysqli_query($conn, $query);
		
		echo "	<table class='table table-bordered table-hover '> 
					<thead >
						<tr>
							<th scope='col'>Código</th>
							<th scope='col'>Origem</th>
							<th scope='col'>Complemento de origem</th>
							<th scope='col'>Destino</th>
							<th scope='col'>Complemento de destino</th>
						</tr>
					</thead>
					<tbody style='font-size: 12px;'>
				";
		while( $fetch = mysqli_fetch_array($resultado) ){
			
			echo "<tr> <td>$fetch[id]</td> <td>$fetch[endereco_origem]</td> <td>$fetch[complemento_origem]</td> <td>$fetch[endereco_destino]</td> <td>$fetch[complemento_destino]</td> </tr>";
		}
		echo "
					</tbody>
				</table>
			";
		
		$conn->close();
	}
	
	
?>