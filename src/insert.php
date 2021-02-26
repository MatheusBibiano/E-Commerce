<?php

require_once "./connection.php";

$nome_produto = $_POST['nome_produto'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];

if (isset($_FILES['imagem']['name'])) {
	$ext = strtolower(substr($_FILES['imagem']['name'], -4));
	$novo_nome = md5(time()) . $ext;
	$dir = "../uploads/";
	move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $novo_nome);
	
	$sql = "INSERT INTO produto(imagem, nome_produto, descricao, preco)
    	    VALUES ('$novo_nome', '$nome_produto', '$desc', replace('$preco','.',','));";

	try {
		$stmt = $connection->prepare($sql);
		$stmt->execute();
		echo "<script> 
					alert('Produto salvo com sucesso!');
					window.location.href='./view/admin/list.php';
				</script>";

	} catch(PDOException $err) {
		echo "ERRO: ".$err->getMessage();
	}
}

$connection = null;
