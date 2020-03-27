<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$nomedobanco = "test";

$conn = msqli_connect($servidor, $usuario, $pass, $nomedobanco);

$query_busca = "SELECT * FROM usuario";
$resultado = msqli_query($conn, $query_busca);

while($row_dados = msqli_fetch_assoc($resultado)){
	var_dump($row_dados);
	echo $row_dados . "<br>";
}

?>