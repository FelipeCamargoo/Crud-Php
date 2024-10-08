<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Excluir Usuario</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM usuario where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
            echo "<p>";
            echo "<br><b>Codigo: </b>".$row['codigo'];
            echo "<br><b>Nome: </b>".$row['nome'];
            echo "<br><b>CPF: </b>".$row['cpf'];
            echo "<br><b>RG: </b>".$row['rg'];
            echo "<br><b>CEP: </b>".$row['cep'];
            echo "<br><b>Celular: </b>".$row['celular'];
            echo "<br><b>Email: </b>".$row['email'];
            echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirUsuario.php?id=<?php echo $row['codigo'];?>'">
		Excluir
	</button>
	
	<button onclick="window.location.href='consultaUsuario.php'">Voltar</button>

<?php
		}
?>
