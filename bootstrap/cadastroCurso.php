<?php
echo "<meta charset='UTF-8' />";
require_once 'conectar.php';

$nome = trim($_POST['nome']);
$descricao = trim($_POST['descricao']);

$sql = "INSERT INTO curso(nome, descricao) VALUES ('$nome', '$descricao')";

mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
	        
	        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=cadastrarCurso.php">';

?>