<?php

require_once "./connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$tipo = 1;

$sql_login = "SELECT * FROM cliente 
			  WHERE login = '$login'";

$result = mysqli_query($connection, $sql_login);

if(mysqli_num_rows($result) > 0) {
	echo "<script> 
			alert('Este login já existe!');
			window.location.href='./view/home/cadastro.php';
		  </script>";
}

else {
	$sql = "INSERT INTO cliente(nome, email, login, senha, tipo)
    	    VALUES ('$nome', '$email', '$login', '$senha', '$tipo');";

	if(mysqli_query($connection, $sql)) {
		echo "<script> 
				alert('Cadastro concluido!');
				window.location.href='./view/home/login.php';
		  	</script>";
    }
    
	else {
		echo "Erro: ".$sql."<br>".mysqli_error($connection);
	}
}

mysqli_close($connection);

?>