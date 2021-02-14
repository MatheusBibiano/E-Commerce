<?php

include "connection.php";

$capa = $_POST['capa'];
$artista = $_POST['artista'];
$titulo = $_POST['titulo'];
$valor = $_POST['valor'];

if(isset($_POST['promo']))
	$promo = "1";
else
	$promo = "0";


$sql = "INSERT INTO disco(capa, titulo, artista, valor, promo)
    	    VALUES ('$capa', '$artista', '$titulo', '$valor', '$promo');";

if(mysqli_query($connection, $sql))
{
	echo "<script> 
			alert('Disco cadastrado com sucesso!!!');
				window.location.href='listarEditarDiscos.php';
		  	</script>";
}
else
{
	echo "Erro: ".$sql."<br>".mysqli_error($connection);
}

mysqli_close($connection);

?>