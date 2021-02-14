<?php

include "connection.php";

$id = $_POST['id'];
$capa = $_POST['capa'];
$artista = $_POST['artista'];
$titulo = $_POST['titulo'];
$valor = $_POST['valor'];

if(isset($_POST['promo']))
	$promo = "1";
else
	$promo = "0";


$sql = "UPDATE disco SET capa = '$capa', titulo =  '$titulo', artista = '$artista', valor = '$valor', promo = '$promo' WHERE id_disco = '$id'";

if(mysqli_query($connection, $sql))
{
	echo "<script> 
			alert('Disco editado com sucesso!!!');
				window.location.href='listarEditarDiscos.php';
		  	</script>";
}
else
{
	echo "Erro: ".$sql."<br>".mysqli_error($connection);
}

mysqli_close($connection);

?>