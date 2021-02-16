<?php
    require_once "./connection.php";
    
    $id_produto = $_GET['id_produto'];

    $sql = "DELETE FROM produto WHERE id_produto = '$id_produto'";

    if(mysqli_query($connection, $sql))
    {
        echo "<script> 
                alert('Produto deletado com sucesso!');
                    window.location.href='./view/admin/list.php';
                </script>";
    }
    else
    {
        echo "Erro: ".$sql."<br>".mysqli_error($connection);
    }

    mysqli_close($connection);
?>