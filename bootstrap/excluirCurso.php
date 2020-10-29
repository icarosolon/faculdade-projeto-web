<?php
require 'conectar.php';
$codCurso = $_GET['codCurso'];
$deletar = "DELETE FROM curso WHERE codCurso=$codCurso";
$deletando = mysqli_query ( $con, $deletar);


echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=consultarCursos.php">';
//header("Location: consultarAlunos.php");
?>