<?php
session_start();
$nome = $_SESSION['nome'];
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
   <link href="../css/clientPage/main.css" rel="stylesheet">
  <title>Loja</title>
</head>

<body>

  <?php
    require_once "../view/clientHeader.php";
  ?>

  <main role="main">

    <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Olá, <?php echo $nome?></h1>
      </div>
    </div>

    <div class="container">
      <!-- Exemplo de linha de colunas -->
      <div class="row justify-content-center">
        <div class="col-md-auto border">
          <h2 class="product-title">Conjunto social</h2>
          <p><img class="product-img" src="../img/conjunto.jpg"></p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a>
            <span class="desconto">25%</span>
            <img src="../img/cupom.png">
          </p>
        </div>
        <div class="col-md-auto border">
          <h2 class="product-title">Blusa de lã</h2>
          <p><img class="product-img" src="../img/blusa.jpg"></p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a>
            <span class="desconto">30%</span>
            <img src="../img/cupom.png">
          </p>
        </div>
        <div class="col-md-auto border">
          <h2 class="product-title">Calças Jeans</h2>
          <p><img class="product-img" src="../img/jeans.jpg"></p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a>
            <span class="desconto">10%</span>
            <img src="../img/cupom.png">
          </p>
        </div>
        <div class="col-md-auto border">
          <h2 class="product-title">Camisas</h2>
          <p><img class="product-img" src="../img/camisas.jpg"></p>
          <p>
            <a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a>
            <span class="desconto">15%</span>
            <img src="../img/cupom.png">
          </p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>

  <?php
  require_once "../view/footer.php";
  ?>
  <!-- Principal JavaScript do Bootstrap
    ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>