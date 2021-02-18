<?php
    
    require_once "../../connection.php";

    $sql = "SELECT imagem, nome_produto, descricao, preco FROM produto;";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 0) {
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
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <div class='col-md-auto border p-4'>
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