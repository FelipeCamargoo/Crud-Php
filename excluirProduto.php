<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Excluir Produto</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM produto where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
            echo "<p>";
            echo "<br><b>Codigo: </b>".$row['codigo'];
            echo "<br><b>:Nome </b>".$row['nome'];
            echo "<br><b>VL: </b>".$row['vl'];                                        
            echo "<br><b>Destino: </b>".$row['destino'];
            echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirProduto.php?id=<?php echo $row['codigo'];?>'">
		Excluir
	</button>
	
	<button onclick="window.location.href='consultaProduto.php'">Voltar</button>

<?php
		}
?>
