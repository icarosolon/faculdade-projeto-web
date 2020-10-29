<?php 
echo "<meta charset='UTF-8' />";
    require_once 'conectar.php';

   
    $codCurso = trim($_POST['codigo']);
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
	

            if (!empty($nome)) {
                
                $sql = "update curso set nome ='$nome' where codCurso = '$codCurso' ";
                mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
            } 

            if (!empty($descricao)) {
                $sql = "update curso set descricao = '$descricao' where codCurso = '$codCurso' ";
                mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
            
            }

        
	       	
	        echo "<script>alert('Cadastro Atualizado!');</script>";
	        echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=consultarCursos.php">';
        
   		
  




?>