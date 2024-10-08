
<?php

include_once('conexao.php');



$codigo = $_POST['codigo']; 
$nome = $_POST['nome'];
$vl = $_POST['vl'];
$destino = $_POST['destino'];


    try 
    {

        $stmt = $conn->prepare("UPDATE produto SET codigo = :codigo,
                                                    nome = :nome,
                                                    vl = :vl,
                                                    destino = :destino");

        $stmt->execute(array(':codigo' => $cod, 
                            ':nome' => $nome,
                            ':vl' => $vl,
                            ':destino' => $destino));
        
        header( "refresh:0;url=consultaProduto.php" );

        echo "<script>alert('Produto ALTERADO COM SUCESSO');</script>";


    } 

    catch(PDOException $e) 

    {

        echo 'Error: ' . $e->getMessage();

    }

    

?>

