<?php
    require_once "./connection.php";
    
    $id_produto = $_GET['id_produto'];

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

    $sql = "DELETE FROM produto WHERE id_produto = '$id_produto'";

    try {
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo "<script> 
                alert('Produto deletado com sucesso!');
                window.location.href='./view/admin/list.php';
            </script>";

    } catch(PDOException $err) {
        echo "ERRO: ".$err->getMessage();
    }

    $connection = null;
?>