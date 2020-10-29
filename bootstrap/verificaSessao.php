<?php
// verificando se existe a sessão, se não houver, limpa o campo $login, limpa o campo $senha redireciona para a página index.html

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['senha'])==true)){

	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
}
$logado = $_SESSION['login'];

?>