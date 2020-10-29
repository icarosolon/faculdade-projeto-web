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
	include("login.php"); ?>

</head>

<body vlink="white">	

	<div class="row-fluid" >
	  	
	<!--Inicia o Menu-->

	  	<div class="span12">
	  		<div class="navbar navbar-fixed-top" >
			<div class="navbar-inner">
			<a class="brand" href="#"><p align="center"><img src="imagens/procodeMenu.png"/></p></a>
				<ul class="nav">
					<li class="active"><a href="admin.php"><i class="icon-home"></i>  Início</a></li>
					<li class="inactive"><a href="consultarAlunos.php"><i class=" icon-folder-open"></i>  Consultar Alunos</a></li>
					<li class="inactive"><a href="gerenciarCursos.php"><i class="icon-book"></i>  Gerenciar Cursos</a></li>
					<li class="inactive"><a href="certificadosEmitidos.php"><i class="icon-envelope"></i>  Certificados Emitidos</a></li>
					<li class="inactive"><a href="logoff.php"><i class="icon-off"></i>  Sair</a></li>

					<!-- DROPDOWN
					<ul class="nav">
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
						Gerenciar Cursos
						<b class="caret"></b>
						</a>
							<ul class="dropdown-menu">
								<li><a href="sdfasdf" ">Cadastrar Curso</a></li>
								<li><a href="asdfasdf">Consultar Curso</li>
							</ul>

						</li>
					</ul>
					-->

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

	<h1 align="center"><font face="cooper" color="#6699FF"> Seja Bem-vindo Administrador</font></h1>

	<h4 align="center"><font face="courier new" color="#808080">Essa é a sua página inicial, onde poderá realizar alterações no site!</font></h4>

	<br><br><br>	

						<table align="center" border="0" width="80%">
                            <tr align="center">
                                <td align="center">
                                <a href="cadastrarCurso.php"><img src="imagens/cadastrarCursos.png"></a>
                                </td>
                                <td>
                                <a href="consultarCursos.php"><img src="imagens/consultarCursos.png"></a>
                                </td>
                            </tr>


                        </table>
                        















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