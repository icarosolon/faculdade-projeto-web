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
	 $sql = "SELECT * FROM curso";
	 $cursos = mysqli_query ( $con, $sql);

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


		<h1 align="center"><font face="cooper" color="#6699FF"> Consultar Cursos</font></h1>



		<div class="table">
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Cod</th>
		        <th>Nome</th>
		        <th>Descrição</th>
		        <th>Imagem</th>
		        <th>Editar</th>
		        <th>Excluir</th>     
		      </tr>
		    </thead>
		    <tbody>
		      <?php 

		      
		      foreach($cursos as $curso){ ?>

		      <tr>
		        <th><?php echo $curso['codCurso'] ?></th>
		        <td><?php echo $curso['nome'] ?></td>
		        <td><?php echo $curso['descricao'] ?></td>
		       
		        <td><?php echo "<a href='alterarFotoCurso.php?codCurso=".$curso['codCurso']."' ><i class=icon-camera></i></i></a>"; ?></td>
		        
		        <td><?php echo "<a href='editarCurso.php?codCurso=".$curso['codCurso']."' ><i class=icon-th-list></i></i></a>"; ?></td>
		        <td><?php echo "<a href='excluirCurso.php?codCurso=".$curso['codCurso']."' onclick=\"return confirm('Tem certeza que deseja excluir este curso?');\"><i class=icon-trash></i></a>"; ?></td>
		    
		      </tr>
		      <?php  } ?>
		    </tbody>
		  </table>
		  </div>



















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