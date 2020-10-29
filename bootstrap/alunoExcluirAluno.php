<?php
require 'conectar.php';
$codAluno = $_GET['codAluno'];
$deletar = "DELETE FROM aluno WHERE codAluno='$codAluno'";
$deletando = mysqli_query ( $con, $deletar); 

require_once 'logoff.php';
echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
//header("Location: consultarAlunos.php");

?>