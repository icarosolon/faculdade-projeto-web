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
	require_once'conectar.php';
	$login = $_SESSION['login'];
	$senha = $_SESSION['senha'];
	$sql = "SELECT * FROM aluno WHERE login = '$login' ";
	$alunos = mysqli_query($con,$sql);
	$aluno = mysqli_fetch_array($alunos);
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
					<li class="active"><a href="inicio.php"><i class="icon-home"></i>  Início</a></li>
					<li class="inactive"><a href="meusCursos.php"><i class=" icon-folder-open"></i>  Meus Cursos</a></li>
					<li class="inactive"><a href="cursos.php"><i class="icon-book"></i>  Cursos</a></li>
					<li class="inactive"><a href="certificados.php"><i class="icon-envelope"></i>  Certificados</a></li>
					<li class="inactive"><a href="logoff.php"><i class="icon-off"></i>  Sair</a></li>
				</ul>
			</div>
			</div>
		</div>
		<!--Finaliza Menu -->
		</div>


<div class="row-fluid" style="background-image:url(imagens/fundo1.png)">
<div class="container">

<div class="span12">
	<div class="container1">

	<!-- CONTEÚDO DO SITE!!!-->

	<h1 align="center"><font face="cooper" color="#6699FF"> Seja Bem-vindo <?php echo $_SESSION['nome'] ?></font></h1>

<br><br><br>


				<table align="center">
					<tr align="center">
						<td>
							<form action="alterarFotoPerfil.php" method="POST" enctype="multipart/form-data" name="cadastro" >
							<input type="file" name="foto" />
							<br><br><br>
							<button class="btn btn-large  btn-info" href="alterarFotoPerfil.php" type="submit" name="alterarFoto">Alterar Imagem</button>
							</form>
						</td>
					</tr>
				</table>



	<!--Finaliza conteúdo do site-->
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