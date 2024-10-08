
<?php

include_once('conexao.php');



$codigo = $_POST['codigo']; 
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$estado = $_POST['estado'];
$contato = $_POST['contato'];

    try 
    {

        $stmt = $conn->prepare("UPDATE fornecedor SET codigo = :codigo,
                                                    nome = :nome,
                                                    cnpj = :cnpj,
                                                    estado = :estado,
                                                    contato = :contato");

        $stmt->execute(array(':codigo' => $cod, 
                            ':nome' => $nome,
                            ':cnpj' => $cnpj,
                            ':estado' => $estado,
                            ':contato' => $contato));
        
        header( "refresh:0;url=consultaFornecedor.php" );

        echo "<script>alert('Funcionario ALTERADO COM SUCESSO');</script>";


    } 

    catch(PDOException $e) 

    {

        echo 'Error: ' . $e->getMessage();

    }

    

?>

