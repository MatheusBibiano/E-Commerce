<?php
    session_start();

    if (!isset($_SESSION['nome'])) {
        unset($_SESSION['nome']);
        header("Location: ../home/login.php");
    }    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../../assets/img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/adminPage/main.css" />
    <title>Loja | Produtos</title>
</head>

<body>
    <?php
        require_once "./adminHeader.php";
    ?>

    <script>
        const focus = document.getElementById("edit-menu");
        focus.style.cssText = 'border-bottom: 3px solid #ffc400;';
    </script>

    <?php

        require_once "../../connection.php";

        $sql = "SELECT * FROM produto;";

        try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();

        } catch(PDOException $err) {
            echo "ERRO: ".$err->getMessage();
        }

        if ($stmt->rowCount() == 0) {
            $_SESSION['isDBEmpty'] = true;

            echo "
                <script> 
                    function direct_to(path) {
                        window.location.href=path;
                    }
                </script>
                <div class='container'>
                    <div class='row justify-content-center'>
                        <div class='col-md-auto'>
                            <h2 class='msg-list'>Não há produtos cadastrados!</h2>
                            <p>
                                <button class='direct-button' onclick='direct_to(".'"./insert.php"'.")'>Adicionar produtos</button>
                            </p>
                        </div>
                    </div>
                </div>
            ";
            
        } else {
            $_SESSION['isDBEmpty'] = false;

            echo "
                <table class='table'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>IMAGEM</th>
                            <th scope='col'>NOME</th>
                            <th scope='col'>DESCRIÇÃO</th>
                            <th scope='col'>PREÇO</th>
                            <th scope='col'>EDITAR</th>
                            <th scope='col'>DELETAR</th>
                        </tr>
                    </thead>
                    <tbody>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <tr>
                            <th scope='row'>".$row['id_produto']."</th>
                            <td><img src='../../../uploads/".$row['imagem']."' class='img-product' alt='Imagem'/></td>
                            <td>".$row['nome_produto']."</td>
                            <td>".$row['descricao']."</td>
                            <td>R$".$row['preco']."</td>
                            <td>
                                <form action='./edit.php' method='get'>
                                    <button type='submit' class='edit-product-button' onclick='direct_to(".'"./edit.php"'.")' name='id_produto' value='".$row['id_produto']."'>
                                        <i class='fa fa-pencil'></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action='../../delete.php' method='get'>
                                    <button class='delete-product-button' name='id_produto' value='".$row['id_produto']."'>
                                        <i class='fa fa-trash'></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
                }
            echo "
                    </tbody>
                </table>
            ";
        }
    $connection = null;

    ?>

    <?php
        require_once "../home/footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>