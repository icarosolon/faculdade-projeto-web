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
	require_once 'conectar.php';
	$codAluno = $_SESSION['codAluno'];
	$sql = "SELECT curso.codCurso, curso.nome, curso.descricao, curso.foto FROM alunocurso, aluno, curso WHERE alunocurso.codAluno = aluno.codAluno and curso.codCurso = alunocurso.codCurso and aluno.codAluno = '$codAluno'";
	$cursos = mysqli_query ($con, $sql);

	//$cursos = mysqli_fetch_array($consulta); 
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
					<li class="inactive"><a href="inicio.php"><i class="icon-home"></i>  Início</a></li>
					<li class="active"><a href="meusCursos.php"><i class=" icon-folder-open"></i>  Meus Cursos</a></li>
					<li class="inactive"><a href="cursos.php"><i class="icon-book"></i>  Cursos</a></li>
					<li class="inactive"><a href="certificados.php"><i class="icon-envelope"></i>  Certificados</a></li>
					<li class="inactive"><a href="logoff.php"><i class="icon-off"></i>  Sair</a></li>
				</ul>
			</div>
			</div>
		</div>		<!--Finaliza Menu -->
		</div>

<div class="row-fluid" style="background-image:url(imagens/fundo1.png)">
<div class="container">


<div class="span12">
	<div class="container1">
	

	<!--Corpo do site-->





	<h1 align="center"><font face="cooper" color="#6699FF"> Meus Cursos</font></h1>
	<br><br><br>



<div class="table" >
		  <table class="table " >
		      <tbody>
		      <?php 
//		      echo $consulta;
		      
		      foreach($cursos as $curso){ ?>

		      <tr>
		      	<th>
				<ul class="thumbnails">
				  <li class="span4">
				    <div class="thumbnail">
				      <?php echo " <img src=\"".$curso['foto']."\" > "; ?>
				        <div class="caption">
				        <h3><?php echo $curso['nome'] ?></h3>
				        <p><?php echo $curso['descricao'] ?></p>
				        <p>
							

						

				        <form action="cancelarInscricao.php" method="POST" >
				        	<?php echo "<a class=\"btn btn-success\" href='aulasCurso.php?codAluno=".$_SESSION['codAluno']."' >Assistir Aulas</a>"; ?>
				          	<input type="hidden" name="codAluno" value="<?php echo $_SESSION['codAluno'] ?>"/>
				          	<input type="hidden" name="codCurso" value="<?php echo $curso['codCurso'] ?>"/>

				          	<button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja cancelar sua inscrição?')">Cancelar inscrição</button>
				        </form>
			          		

				          
				         
				        </p>          
				        </div>
				    </div>
				  </li>
				</ul>
		      	</th>
		    
		      </tr>
		      <?php  } ?>
		    </tbody>
		  </table>
		  </div>






	<!--Finaliza corpo do site-->

	</div>
</div>

<!--Finaliza Container e row-fluid-->
	</div>	
</div>


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