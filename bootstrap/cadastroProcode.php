<?php
//echo "<meta charset='UTF-8' />";

$nome = trim($_POST['nome']);
$login = trim($_POST['login']);
$senha = md5(trim($_POST['senha']));
$confSenha = trim($_POST["confSenha"]);
$sexo = trim($_POST['sexo']);
$rg = trim($_POST['rg']);
$cpf = trim($_POST['cpf']);
$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);

require_once 'conectar.php';

$checarDados =  "select * from aluno where login = '$login' or email = '$email'";


if (mysqli_num_rows(mysqli_query($con, $checarDados)) > 0) {
    echo "<script>alert('Login/Email já está em uso'); history.back();</script>";
} else {
    //$senha = md5($senha);
    $sql = "INSERT INTO aluno(nome, login, senha, sexo, rg, cpf, email, telefone) VALUES ('$nome', '$login', '$senha', '$sexo', '$rg', '$cpf', '$email', '$telefone')";

    mysqli_query($con, $sql) or trigger_error(mysqli_error() . " " . $sql);
    echo "<script>alert('Cadastro feito com sucesso');</script>";
    echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
}
