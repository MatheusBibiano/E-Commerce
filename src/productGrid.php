<?php

    require_once "../../connection.php";

    $sql = "SELECT imagem, nome_produto, descricao, preco FROM produto;";

    try {
        $stmt = $connection->prepare($sql);
        $stmt->execute();

    } catch(PDOException $err) {
        echo "ERRO: ".$err->getMessage();
    }

    if ($stmt->rowCount() == 0) {
        echo "
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-md-auto'>
                        <h2 class='msg-home'>Desculpe! Não há produtos cadastrados!</h2>
                    </div>
                </div>
            </div>
        ";

    } else {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "
                <div class='col-md-auto border p-4 product-container'>
                    <div class='row'><h3 class='nome-produto'>".$row['nome_produto']."</h3></div>
                    <div class='row'>
                        <img src='../../../uploads/".$row['imagem']."' class='imagem'>
                    </div>
                    <div class='row'><p class='desc'>".$row['descricao']."</p></div>
                    <div class='row'><span class='preco'>R$".$row['preco']."</span></div>
                    <div class='row'>
                        <button class='buy-button'>Comprar</button>
                    </div>
                </div>
            ";
        }
    }
    
?>