<?php
	echo "<meta charset='UTF-8' />";
    require_once 'conectar.php';
	
	$codAluno = $_POST['codAluno'];
	$codCurso = $_POST['codCurso'];

	$checarMatricula = "SELECT * FROM alunocurso, aluno, curso WHERE alunocurso.codAluno = aluno.codAluno and curso.codCurso = alunocurso.codCurso and aluno.codAluno = '$codAluno' and curso.codCurso = '$codCurso'";


	if (mysqli_num_rows(mysqli_query($con, $checarMatricula))>0) {
		
		echo "<script>alert('Você já está matriculado neste curso!!!'); history.back();</script>";


	} else {
		$sql = "INSERT INTO alunoCurso(codAluno, codCurso) VALUES ('$codAluno', '$codCurso') ";

	mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);	
	echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=meusCursos.php">';
	}
	



	


?>