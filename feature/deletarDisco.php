<?php

include "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM disco WHERE id_disco = '$id'";

if(mysqli_query($connection, $sql))
{
	header("Location:".$_SERVER['HTTP_REFERER']."");
}

?>