<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../../assets/img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/form/main.css" />
    <title>Loja | Cadastro</title>
</head>
<body>
    <?php
        require_once "./header.php";
    ?>

    <script>
        const focus = document.getElementById("cadastro-menu");
        focus.style.cssText = 'border-bottom: 3px solid #ffc400;';
    </script>

    <form action="../../cadastro.php" method="post" class="m-5 p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-auto column">
                    <p><h3 class="title-form">Crie um novo cadastro</h3></p>
                    <p><input type="text" class="entry" name="nome" id="nome" placeholder="Nome completo" required></p>
                    <p><input type="email" class="entry" name="email" id="email" placeholder="Email" required></p>
                    <p><input type="text" class="entry" name="login" id="login" placeholder="Login" required></p>
                    <p><input type="password" class="entry" name="senha" id="senha" placeholder="Senha" required></p>
                    <p><input type="submit" class="submit m-5" value="Cadastrar"></p>
                </div>
            </div>
        </div>
    </form>

    <?php
        require_once "./footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
