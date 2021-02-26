<?php

session_start();

require_once "./connection.php";

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM cliente WHERE login = '$login'";

try {
	$stmt = $connection->prepare($sql);
	$stmt->execute();

} catch(PDOException $err) {
	echo "ERRO: ".$err->getMessage();
}

if($stmt->rowCount() > 0) {
	while ($cliente = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$nome = $cliente['nome'];
		$senha_bd = $cliente['senha'];
		$email = $cliente['email'];
		$tipo = $cliente['tipo'];
	}
	if($senha != $senha_bd)
	{
		echo "<script> 
			alert('Senha incorreta!');
			window.location.href='./view/home/login.php';
		  </script>";
	}
	else
	{
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		if($tipo == 1) {
		  	header("Location:./view/client/clientPage.php");
		}
		else if($tipo == 0){
			header("Location:./view/admin/adminPage.php");		
		}
	}
}
else
{
	echo "<script> 
			alert('Usuário não existe!');
			window.location.href='./view/home/cadastro.php';
		  </script>";
}

$connection = null;
