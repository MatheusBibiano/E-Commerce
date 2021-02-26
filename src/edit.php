<?php

require_once "./connection.php";

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$imagem = $_FILES['imagem'];

$sql = "SELECT imagem FROM produto WHERE id_produto = '$id_produto'";

try {
    $stmt = $connection->prepare($sql);
    $stmt->execute();

} catch(PDOException $err) {
    echo "ERRO: ".$err->getMessage();
}

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $path = '../uploads/'.$row['imagem'];
    unlink($path);
}

if (isset($imagem['name'])) {
    $ext = strtolower(substr($imagem['name'], -4));
    $novo_nome = md5(time()) . $ext;
    $dir = "../uploads/";
    move_uploaded_file($imagem['tmp_name'], $dir . $novo_nome);
    
    $sql = "UPDATE produto SET imagem = '$novo_nome', nome_produto =  '$nome_produto', descricao = '$desc ', preco = '$preco' WHERE id_produto = '$id_produto'";

    try {
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo "<script> 
                alert('Produto editado com sucesso!');
                window.location.href='./view/admin/list.php';
            </script>";

    } catch(PDOException $err) {
        echo "ERRO: ".$err->getMessage();
    }
}

$connection = null;
