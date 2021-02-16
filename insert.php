<?php

require_once "./connection.php";

$imagem = $_POST['imagem'];
$nome_produto = $_POST['nome_produto'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produto(imagem, descricao, nome_produto, preco)
    	    VALUES ('$imagem', '$nome_produto', '$desc', replace('$preco','.',','));";

if(mysqli_query($connection, $sql))
{
	echo "<script> 
			alert('Produto salvo com sucesso!');
				window.location.href='./view/admin/list.php';
		  	</script>";
}
else
{
	echo "Erro: ".$sql."<br>".mysqli_error($connection);
}

mysqli_close($connection);

?>