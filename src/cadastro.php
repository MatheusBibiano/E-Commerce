<?php

require_once "./connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$tipo = 1;

$sql = "SELECT * FROM cliente 
			  WHERE login = '$login'";

try {
	$stmt = $connection->prepare($sql);
	$stmt->execute();

} catch(PDOException $err) {
	echo "ERRO: ".$err->getMessage();
}

if($stmt->rowCount() > 0) {
	echo "<script> 
			alert('Este login já existe!');
			window.location.href='./view/home/cadastro.php';
		  </script>";

} else {
	$sql = "INSERT INTO cliente(nome, email, login, senha, tipo)
    	    VALUES ('$nome', '$email', '$login', '$senha', '$tipo');";

	try {
		$stmt = $connection->prepare($sql);
		$stmt->execute();
		echo "<script> 
				alert('Cadastro concluido!');
				window.location.href='./view/home/login.php';
	  		</script>";

	} catch(PDOException $err) {
		echo "ERRO: ".$err->getMessage();
	}
}

$connection = null;
