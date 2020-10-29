<?php
	echo "<meta charset='UTF-8' />";
    require_once 'conectar.php';
	
	$codAluno = $_POST['codAluno'];
	$codCurso = $_POST['codCurso'];

	$sql = "DELETE FROM alunoCurso WHERE codAluno = '$codAluno' AND codCurso = '$codCurso' ";

	$cancelando = mysqli_query($con,$sql);


	mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);	
	echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=meusCursos.php">';


?>


