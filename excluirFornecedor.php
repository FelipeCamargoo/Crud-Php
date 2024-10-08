<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Excluir Fornecedor</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM fornecedor where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['codigo'];
			echo "<br><b>Nome: </b>".$row['nome'];
			echo "<br><b>CNPJ: </b>".$row['cnpj'];
			echo "<br><b>Estado: </b>".$row['estado'];
			echo "<br><b>Contato: </b>".$row['contato'];
			echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirFornecedor.php?id=<?php echo $row['codigo'];?>'">
		Excluir
	</button>
	
	<button onclick="window.location.href='consultaFornecedor.php'">Voltar</button>

<?php
		}
?>
