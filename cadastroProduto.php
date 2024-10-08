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
      .text-blue {
        color: blue;
      }
      body {
        background-color: #1c1c1c;
        color: #f8f9fa;
      }
      .card {
        background-color: #333333;
        border: none;
      }
      .form-control {
        background-color: #444444;
        border: 1px solid blue;
        color: #f8f9fa;
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
              <h1>Cadastro do Produto</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                  <label class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome" placeholder="Digite o nome" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">VL</label>
                  <input type="text" class="form-control" name="vl"  placeholder="vl" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">DESTINO</label>
                  <input type="text" class="form-control" name="destino" placeholder="destino" required>
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
 $vl = $_POST['vl'];
 $destino = $_POST['destino'];

 include_once('conexao.php');

 try{
   $stmt = $conn->prepare("INSERT INTO produto(nome, vl, destino) VALUES (:nome,:vl,:destino)");

   $stmt ->bindParam(':nome', $nome);
   $stmt ->bindParam(':vl', $vl);
   $stmt ->bindParam(':destino', $destino);

  $stmt ->execute();

  echo "<script>alert('Cadastro Com Sucesso');</script>";

} catch(PDOException $e) {
 echo "Error ao cadastrar: " . $e->getMessage();  
}
$conn = null;
}

?>
