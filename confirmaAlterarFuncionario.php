
    <?php

    include_once('conexao.php');



    $cod = $_POST['codigo']; 
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $cargo = $_POST['cargo'];
    
        try 
        {

            $stmt = $conn->prepare("UPDATE funcionario SET nome = :nome,
                                                        cpf = :cpf,
                                                        cargo = :cargo,
                                                        celular = :celular WHERE codigo = :id");

            $stmt->execute(array(':id' => $cod, 
                                ':nome' => $nome,
                                ':cpf' => $cpf,
                                ':cargo' => $cargo,
                                ':celular' => $celular));
            
            header( "refresh:0;url=consultaFuncionario.php" );

            echo "<script>alert('Funcionario ALTERADO COM SUCESSO');</script>";


        } 

        catch(PDOException $e) 

        {

            echo 'Error: ' . $e->getMessage();

        }

        

    ?>

