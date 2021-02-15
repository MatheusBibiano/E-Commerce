<?php

session_start();

include "./connection.php";

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM cliente WHERE login = '$login'";

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0)
{
	while($cliente = mysqli_fetch_assoc($result))
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
			window.location.href='./view/login.php';
		  </script>";
	}
	else
	{
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		if($tipo == 1) {
		  	header("Location:./view/clientPage.php");
		}
		else if($tipo == 0){
			header("Location:./view/adminPage.php");		
		}
	}
}
else
{
	echo "<script> 
			alert('Usuário não existe!');
			window.location.href='./view/cadastro.php';
		  </script>";
}


?>