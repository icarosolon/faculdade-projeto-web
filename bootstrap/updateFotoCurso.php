<?php

require_once 'conectar.php';// conecta ao banco
	
	include("verificaSessao.php"); // verifica se está logado
	$codCurso = $_POST['codCurso'];

// Se o usuário clicou no botão cadastrar efetua as ações
	
		if (isset($_FILES['foto'])) { // Verifica se foi selecionada alguma foto
			
			$extensao = strtolower(substr($_FILES['foto']['name'], -4));//pega extensão do arquivo

			$novoNome =  $codCurso.$extensao; // define o nome do arquivo como o nome do login do usuario para que não hajam dois nomes iguais na mesma pasta, poderia ser também o codigo do aluno, ou código do produto

			$diretorio = "fotosCurso/";//define o diretorio(pasta) onde sera salvo o arquivo

			move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novoNome);//move para o diretório(pasta)

			$diretorioNome = $diretorio.$novoNome;//guarda o nome do diretório junto com o nome do arquivo para guardar este endereço no campo do banco de dados


			$sql = "UPDATE curso SET foto = '$diretorioNome' WHERE codCurso = ".$codCurso.""; //Insere a foto no campo do banco, não é utilizado o "inserir" pq o criaria um novo usuário e a foto ficaria associada a ele. 

			mysqli_query($con, $sql);// Conecta ao banco e utiliza o comando sql acima, efetuando as mudanças no banco.
			
				echo "<script>alert('Foto Alterada');</script>";
		        echo "<meta HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=consultarCursos.php\">";
			
		

	}


?>