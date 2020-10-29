<?php 
echo "<meta charset='UTF-8' />";
    require_once 'conectar.php';

   
    $codAluno = trim($_POST['codigo']);
    $nome = trim($_POST['nome']);
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    $confSenha = trim($_POST['confSenha']);
    if (isset($_POST['sexo'])) {
    $sexo = trim($_POST['sexo']);    
    }
    $rg = trim($_POST['rg']);
    $cpf = trim($_POST['cpf']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $atualizaDados = false;

	       $checarDados =  "SELECT * FROM aluno WHERE login = '$login' OR email = '$email'";

            if(!empty($nome)){
            mysqli_query($con, "UPDATE aluno SET nome = '$nome' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;        }
        if(!empty($login)){

            if(mysqli_num_rows(mysqli_query($con, $checarDados))>0){
                echo "<script>alert('Login já está em uso'); history.back();</script>";
            }else{

            mysqli_query($con, "UPDATE aluno SET login = '$login' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
            } 
        }
        if(!empty($senha)){
            mysqli_query($con, "UPDATE aluno SET senha = '$senha' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
        }
        if(!empty($sexo)){
            mysqli_query($con, "UPDATE aluno SET sexo = '$sexo' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
        }
        if(!empty($rg)){
            mysqli_query($con, "UPDATE aluno SET rg = '$rg' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
        }
        if(!empty($cpf)){
            mysqli_query($con, "UPDATE aluno SET cpf = '$cpf' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
        }
        if(!empty($email)){

            if(mysqli_num_rows(mysqli_query($con, $checarDados))>0){
            echo "<script>alert('Email já está em uso');history.back(); </script>";
            }else{
            mysqli_query($con, "UPDATE aluno SET email = '$email' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
            }
        }
        if(!empty($telefone)){
            mysqli_query($con, "UPDATE aluno SET telefone = '$telefone' WHERE codAluno = '$codAluno'") or trigger_error(mysqli_error()." ".$sql);
            $atualizaDados = true;
        }

        if($atualizaDados){
            echo "<script>alert('Dados Atualizados!');</script>";
             echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=consultarAlunos.php">';

        }else{
            echo "<script>history.back();</script>";

        }

	
        
	       



	        
        
   		
  




?>