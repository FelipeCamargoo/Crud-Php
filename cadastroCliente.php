<?php
session_start();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bg-blue {
        background-color: blue;
      }
     
      body {
        background-color: #1c1c1c;
        color: blue;
      }
      .card {
        background-color: #333333;
        border: none;
      }
      .form-control {
        background-color: #444444;
        border: 1px solid blue;
       
      }
      .form-control::placeholder {
        color: #cccccc;
      }
      .form-label {
        color: #f8f9fa;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-purple text-light">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="">Projeto PHP</a>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow-lg">
            <div class="card-header bg-purple text-light text-center">
              <h1>Cadastro de Cliente</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" placeholder="Digite o nome" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">CPF</label>
                  <input type="text" class="form-control" name="cpf" onblur="TestaCPF(this.value);" placeholder="Digite o CPF" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">RG</label>
                  <input type="text" class="form-control" name="rg" placeholder="Digite o RG" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">CEP</label>
                  <input type="text" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);" placeholder="Digite o CEP" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Rua</label>
                  <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite a rua" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nº</label>
                  <input type="number" class="form-control" name="num" placeholder="Digite o número" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Bairro</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite a cidade" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Estado</label>
                  <input type="text" class="form-control" name="estado" id="uf" placeholder="Digite o estado" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Celular</label>
                  <input type="tel" class="form-control" name="celular" placeholder="Digite o celular" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Digite o email" required>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Cadastrar">
                  <input type="reset" class="btn btn-danger" value="Limpar">
                  <button type="button" class="btn btn-success" onclick="javascript:location.href ='menu.php';">Voltar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/buscaCEP.js"></script>
    <script type="text/javascript" src="js/validaCPF.js"></script>
  </body>
</html>

<?php


 if(!empty($_POST))
 {
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $cep = $_POST['cep'];
  $num = $_POST['num'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];

  include_once('conexao.php');

  try{
    $stmt = $conn->prepare("INSERT INTO cliente (nome, cpf, rg, cep, numero, celular, email) VALUES (:nome,:cpf,:rg,:cep,:numero,:celular,:email)");
    

    $stmt ->bindParam(':nome', $nome);
    $stmt ->bindParam(':cpf', $cpf);
    $stmt ->bindParam(':rg', $rg);
    $stmt ->bindParam(':cep', $cep);
    $stmt ->bindParam(':numero', $num);
    $stmt ->bindParam(':celular', $celular);
    $stmt ->bindParam(':email', $email);
 
   $stmt ->execute();

   echo "<script>alert('Cadastro Com Sucesso');</script>";

 } catch(PDOException $e) {
  echo "Error ao cadastrar: " . $e->getMessage();  
 }
 $conn = null;
}
?>
  