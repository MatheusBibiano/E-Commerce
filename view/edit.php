<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/adminPage/main.css" />
    <title>Edição</title>
</head>
<body>
    <?php
        require_once "./adminHeader.php";
    ?>

    <script>
        const focus = document.getElementById("edit-menu");
        focus.style.cssText = 'border-bottom: 3px solid #ffc400;';

        const edit = (id) => {
            const input = document.getElementById(id);
            input.readOnly = false;
            input.focus();
        };
    </script>

    <form action="../edit.php" method="post" class="m-5 p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-auto column">
                    <?php
                    
                        echo "
                            
                        ";

                    ?>

                    <p><h3 id="title">Editar produto</h3></p>
                    <p>
                        <input type="url" class="entry" name="imagem" id="imagem" placeholder="Imagem" readonly="true" value="" required>
                        <button type="button" class="edit-button"
                        onclick="edit('imagem')">Editar</button>
                    </p>
                    <p>
                        <input type="text" class="entry" name="nome_produto" id="nome_produto" placeholder="Título" readonly="true" value="" required>
                        <button type="button" class="edit-button" onclick="edit('nome_produto')">Editar</button>
                    </p>
                    <p>
                        <input type="text" class="entry" name="desc" id="desc" placeholder="Descrição" readonly="true" value="" required>
                        <button type="button" class="edit-button" onclick="edit('desc')">Editar</button>
                    </p>
                    <p>
                        <input type="text" class="entry" name="preco" id="preco" placeholder="Preço" readonly="true" value="" required>
                        <button type="button" class="edit-button" onclick="edit('preco')">Editar</button>
                    </p>
                    <p><input type="submit" id="submit" value="Salvar"></p>
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
