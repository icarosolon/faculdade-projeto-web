<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv = "keywords" content = "programacao, curso, video aula, java, html, css, linguagem c, c, logica de programacao ">
<title>ProCode</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<?php include("verificaSessao.php"); 
	include("login.php");
	require_once 'conectar.php';
	$codCurso = $_GET['codCurso'];
	$sql = "SELECT * FROM curso where codCurso = $codCurso";
	$curso= mysqli_query($con, $sql);
	$cursos= mysqli_query ( $con, $sql);
	
	?>

</head>

<body vlink="white">	

	<div class="row-fluid" >
	  	
	<!--Inicia o Menu-->

	  	<div class="span12">
	  		<div class="navbar navbar-fixed-top" >
			<div class="navbar-inner">
			<a class="brand" href="#"><p align="center"><img src="imagens/procodeMenu.png"/></p></a>
				<ul class="nav">
					<li class="inactive"><a href="admin.php"><i class="icon-home"></i>  Início</a></li>
					<li class="inactive"><a href="consultarAlunos.php"><i class=" icon-folder-open"></i>  Consultar Alunos</a></li>
					<li class="active"><a href="gerenciarCursos.php"><i class="icon-book"></i>  Gerenciar Cursos</a></li>
					<li class="inactive"><a href="certificadosEmitidos.php"><i class="icon-envelope"></i>  Certificados Emitidos</a></li>
					<li class="inactive"><a href="logoff.php"><i class="icon-off"></i>  Sair</a></li>
				</ul>
			</div>
			</div>
		</div>
		<!--Finaliza Menu -->
		</div>
		<!--Corpo do site-->


<div class="row-fluid" style="background-image:url(imagens/fundo1.png)">
<div class="container">

<div class="span12">
	<div class="containerAdm">

	<!-- CONTEÚDO DO SITE!!!-->


		<h1 align="center"><font face="cooper" color="#6699FF"> Editar Cadastro de Curso</font></h1>






<table align="center" border="0" width="100%">
	<tr>
		<td>
		
<form action="updateCurso.php" method="POST">
<table border="0" align="center" bgcolor="" width="80%" cellspacing="30" cellpadding="6">
	<tr>
		<td colspan="2" align="center"><br><br><br><h3><font face="cooper">Editar Dados</font></h3></td>
	</tr>
	<tr align="right">
		<td>Código:</td>
		<td><?php echo "<input readonly=\"\" type=\"text\" name=\"codigo\" value=\" ".$codCurso."\"; >"?></td>
	</tr>

	<tr align="right">
		<td>Informe o novo nome do curso: </td>
		<td><input align="center" type="text"  name="nome" placeholder="Digite o novo nome..." size="25" /></td>
	</tr>
	<tr align="right">
      	<td >Nova descrição: </td>
        <td>    <textarea rows="10" cols="40"  name="descricao" placeholder="Digite aqui a nova descrição do curso..."></textarea></td>

    </tr>

	

	<tr align="right">
		<td><input class="btn btn-success" type="submit" name="botao" value="Salvar" /><?php  echo "</a>";?></td>
		<td align="center"><input class="btn" type="reset" name="botao" value="Limpar" /></td>
	</tr>

</table>
</form>
		</td>
		<td>

		<!--INICIA SEGUNDA COLUNA DA TABELA PRINCIPAL-->
		
<div >
		  <table class="table table-hover" >
		  <tr>
		  	<td colspan="2" align="center"><h4><font face="cooper">Dados Cadastrados</font></td>
		  </tr>	

		    <tbody>
		      <?php 

		      
		      foreach($cursos as $curso){ ?>
		      <tr>
		      	<td>Cod:</td>
		      	<td><?php echo $curso['codCurso'] ?></td>
		      </tr>
		     
		      <tr>
		      <th>Nome:</th>
		      	<td><?php echo $curso['nome'] ?></td>
		      </tr>
		      <tr>
		      	<th>Descrição:</th>
		      	<td><?php echo $curso['descricao'] ?></td>
		      </tr> 
			    
		       
		    
		      
		      <?php  } ?>
		    </tbody>
		  </table>
		  </div>

<!--FINALIZA CONSULTA DE DADOS-->
		</td>
	</tr>	
</table>

<!--FINALIZA TABELA PRINCIPAL-->


<!--FINALIZA CONTEUDO DO SITE!!-->

	</div>
</div>


	</div>	
</div>
<!--Finaliza Container e row-fluid-->

<!--Inicia o Rodapé-->
<div class = "row-fluid" align="center" >
	<div class="footer">	
		<font face="Times new roman" size="4" color="#fafafa" >
			<br><br><b>CONTATO</b><br>
			<hr align="center" width="30%" size="2" noshade=""><!-- linha -->
			Ligue (74)98817-0986<br>
			E-mail: icaro.solon.is@gmail.com<br/>
			Ícaro Solon
		</font>
	</div>
</div>		


<!--Finaliza Corpo do site-->
<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>