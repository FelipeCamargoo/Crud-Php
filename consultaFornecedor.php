<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
	
	<br>
		<div class="row">
			<div class="col"></div>
			<div class="col-6">
          <h1 class="text-center bg-primary text-white">CONSULTA FORNECEDOR</h1>
          <?php

                include_once('conexao.php');

                try
                {
                  $select = $conn -> prepare('SELECT * FROM fornecedor');
                  $select ->execute();

                  while($row = $select ->fetch())
                  {
                    echo "<p>";
                    echo "<br><b>Codigo: </b>".$row['codigo'];
                    echo "<br><b>nome: </b>".$row['nome'];
                    echo "<br><b>CNPj: </b>".$row['cnpj'];                                       
                    echo "<br><b>Estado: </b>".$row['estado'];
                    echo "<br><b>Contato: </b>".$row['contato'];
                    echo "<br>";
                    ?>
                    <button onclick="window.location.href='alterarFornecedor.php?id=<?php echo $row['codigo'];?>'">
                     Alterar
                    </button>
                  
                    <button onclick="window.location.href='excluirFornecedor.php?id=<?php echo $row['codigo'];?>'">
                     Excluir
                    </button>
                  
                    <button onclick="window.location.href='menu.php'">Voltar</button>
                    <hr>
                    
                  <?php
                    }
                  }
                catch(PDOException $e)
                {
                  echo 'ERROR:  ' . $e ->getMessage();
                }
                ?>


			</div>
			<div class="col"></div>
		</div>
		<div class="text-center">
            <br>
			<button type="button" class="btn btn-primary" onclick="javascript:location.href ='menu.php';">Voltar</button>
		</div>
	</div>
  </body>
</html>

