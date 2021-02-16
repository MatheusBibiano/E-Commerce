<?php
    require_once "./connection.php";
    
    $id_produto = $_POST['id_produto'];
    $imagem = $_POST['imagem'];
    $nome_produto = $_POST['nome_produto'];
    $desc = $_POST['desc'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produto SET imagem = '$imagem', nome_produto =  '$nome_produto', descricao = '$desc ', preco = '$preco' WHERE id_produto = '$id_produto'";

    if(mysqli_query($connection, $sql))
    {
        echo "<script> 
                alert('Produto editado com sucesso!');
                    window.location.href='./view/admin/list.php';
                </script>";
    }
    else
    {
        echo "Erro: ".$sql."<br>".mysqli_error($connection);
    }

    mysqli_close($connection);
?>
