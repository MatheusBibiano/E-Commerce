<?php
    require_once "./connection.php";
    
    $id_produto = $_POST['id_produto'];
    $nome_produto = $_POST['nome_produto'];
    $desc = $_POST['desc'];
    $preco = $_POST['preco'];
    $imagem = $_FILES['imagem'];

    $sql = "SELECT imagem FROM produto WHERE id_produto = '$id_produto'";

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $path = '../uploads/'.$row['imagem'];
        unlink($path);
    }

    if (isset($imagem['name'])) {
        $ext = strtolower(substr($imagem['name'], -4));
        $novo_nome = md5(time()) . $ext;
        $dir = "../uploads/";
        move_uploaded_file($imagem['tmp_name'], $dir . $novo_nome);
        
        $sql = "UPDATE produto SET imagem = '$novo_nome', nome_produto =  '$nome_produto', descricao = '$desc ', preco = '$preco' WHERE id_produto = '$id_produto'";
    
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
    } else {
        echo "<p>AAAAAAAAAAAAAAAAAA</p>";
    }
?>
