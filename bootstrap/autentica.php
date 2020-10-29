<?php

//inicia a sessão
session_start();
//recupera os dados do formulário
$login = trim($_POST['login']);
$senha = md5(trim($_POST['senha']));

//conectar ao banco de dados 
require_once 'conectar.php';

//a variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = "SELECT * FROM aluno WHERE login = '$login' AND senha = '$senha'";
//logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja, se ela estiver encontrado algum registro idêntico ao seu valor, será igual a 1, se não tiver registros retornará 0. Dependendo do resultado ele redirecionará para a pagina inicio.php ou para a página do formulário de login index.html para tentar novamente.
$ab = mysqli_query($con, $result);
$nome = mysqli_fetch_array($ab);


if ($login == "admin") {

	if (mysqli_num_rows(mysqli_query($con, $result)) > 0) {
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $nome['nome'];
		$_SESSION['codAluno'] = $nome['codAluno'];
		$_SESSION['tipo'] = "admin";
		header('location:admin.php');
	} else {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		//header('location:index.html');
		echo "<script>alert('Login/Senha incorretos');</script>";
		echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
	}
} else {
	if (mysqli_num_rows(mysqli_query($con, $result)) > 0) {
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $nome['nome'];
		$_SESSION['codAluno'] = $nome['codAluno'];
		$_SESSION['tipo'] = "aluno";
		header('location:inicio.php');
	} else {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		//header('location:index.php');
		echo "<script>alert('Login/Senha incorretos'); </script>";
		//echo "<script>console.log('$senha')</script>";
		echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
	}
}
