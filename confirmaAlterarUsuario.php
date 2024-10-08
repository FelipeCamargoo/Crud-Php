<?php

include_once('conexao.php');



$codigo = $_POST['codigo']; 
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$celular = $_POST['celular'];

	try 
	{

		$stmt = $conn->prepare("UPDATE usuario SET codigo = :codigo,
                                                      nome = :nome,
													  cpf = :cpf,
													  rg = :rg,
													  cep = :cep,
                                                      email = :email,
													  celular = :celular");

		$stmt->execute(array(':codigo' => $codigo, 
							 ':nome' => $nome,
							 ':cpf' => $cpf,
							 ':rg' => $rg,
							 ':cep' => $cep,
                             ':email' => $email,
                             ':celular' => $celular));
		
		header( "refresh:0;url=consultaUsuario.php" );

		echo "<script>alert('USUARIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>

