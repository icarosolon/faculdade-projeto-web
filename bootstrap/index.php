<!DOCTYPE html>

</html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="keywords" content="programacao, curso, video aula, java, html, css, linguagem c, c, logica de programacao ">
	<title>ProCode</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<?php
	require_once 'conectar.php';

	$sql = "SELECT * FROM curso ";
	$cursos = mysqli_query($con, $sql);

	?>

</head>

<body>

	<!--Corpo do site-->

	<div class="containerIndex">
		<div class="row-fluid">
			<div class="span12">
				<br><br>
				<img src="imagens/procode.png"></div>
			<div class="span5">

				<br><br><br><br><br><br><br><br><br><br>

				<form action="autentica.php" method="POST">
					<table border="0" align="right">
						<tr>
							<th>
								<font face="courier new" color="white" size="5"> Login</font>
							</th>
							<td><input align="center" type="text" id="login" name="login" placeholder="Digite seu login..." required="" /></td>

						</tr>
						<tr>
							<th>
								<font face="courier new" color="white" size="5">Senha</font>
							</th>
							<td><input align="center" type="password" id="senha" name="senha" placeholder="Digite sua senha..." required="" /></td>
						</tr>
						<tr align="center">
							<td colspan="2"><input class="btn btn-primary" type="submit" name="botao" value="Entrar"></td>
						</tr>
						<tr align="center">
							<td colspan="2">
								<font face="courier new" size="" color="white"><a href="cadastro.php"> Cadastre-se!</a></font>
							</td>
						</tr>
					</table>
				</form>
			</div>

			<div class="span6">
				<br>
				<img align="right" src="imagens/procodeFundoIndex.png">
			</div>
			<!-- finaliza login -->

		</div>
	</div>
	<!--Finaliza Container e row-fluid-->



	<div style="height:auto;background-color: #EEE5DE;" align="center"><br><br><img src="imagens/nossosCursos1.png"><br><br><br><br></div>

	<!-- Inicia Carousel -->





	<div class="row-fluid">
		<div class="slidesCursos">
			<div class="inserirSlides">

				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 90%;; margin: 0 auto">
					<!-- Itens de carousel -->
					<div class="carousel-inner" role="listbox">

						<?php


						foreach ($cursos as $curso) { ?>


							<div class="item">
								<?php echo " <img src=\"" . $curso['foto'] . "\" > "; ?>
								<div class="carousel-caption">
									<?php echo "<h4>" . $curso['nome'] . "</h4>"; ?>
									<?php echo "<p>" . $curso['descricao'] . "</p>"; ?>
								</div>
							</div>

						<?php }
						?>


					</div>
					<!-- Navegador do carousel -->

					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">&lsaquo;</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">&rsaquo;</a>

				</div>




			</div>
		</div>
	</div>








	<!-- Finaliza Carousel -->


	<div style="height:auto;background-color: #EEE5DE;">

		<img src="imagens/cadastre-se.png" style="margin-left:100px; margin-top:50px;"><br><br><br><br>
		<center><a href="cadastro.php"><img src="imagens/cadastre-seAqui.png"></a></center>
		<br><br>
	</div>


	<!-- Inicia assunto do site! -->

	<div class="row-fluid">
		<div class="about">
			<br>

			<center>
				<hr width="80%" />
			</center>

			<br><br><br><br><br><br>

			<table border="0" width="100%" align="left" cellpadding="20">
				<tr>
					<th>
						<h1>
							<font face="courier new" color="#3A5FCD">Quem somos?</font>
						</h1>
					</th>
					<th>
						<h1>
							<font face="courier new" color="#3A5FCD">Sobre</font>
						</h1>
					</th>
					<th>
						<h1>
							<font face="courier new" color="#3A5FCD">Equipe</font>
						</h1>
					</th>
				</tr>
				<td align="center"><img width="150px" height="150px" src="imagens/quemSomos.png"></td>
				<td align="center"><img width="150px" height="150px" src="imagens/sobre1.png"></td>
				<td align="center"><img class="equipe" src="imagens/equipe1.jpg"></td>
				<tr>
					<td align="center">
						<font face="courier new" color="#104E8B" size="3"><b>
								O Procode é um site de cursos online <br>
								de linguagens de programação que une <br>
								os melhores profissionais do Brasil <br>
								em termos de educação, utilizando as <br>
								melhores metodologias para um aprendizado <br>
								mais consistente e satisfatório, além<br>
								de uma experiência única para os alunos.</b></font>
					</td>
					<td align="center">
						<font face="courier new" color="#104E8B" size="3"><b>
								O ProCode oferece para você os melhores <br>
								cursos online de linguagens de programação <br>
								através dos melhores instrutores do país<br>
								reunidos em um só site. Quando concluir <br>
								o curso, receberá um certificado do curso<br>
								realizado.</b></font>
					</td>
					<td align="center">
						<font face="courier new" color="#104E8B" size="3"><b>
								Ícaro Solon - Licenciando em Computação<br>
								Instituto Federal de Educação, Ciência <br>
								e Tecnologia do Sertão pernambucano.<br><br>
								Nossa equipe é formada no momento <br>
								de apenas um membro desenvolvedor <br>
								do site e aulas.<br>
							</b></font>
					</td>
				</tr>


			</table>


		</div>


	</div>



	<!-- Encerra assunto do site -->

	<!--Inicia Rodapé-->
	<div class="row-fluid" align="center">
		<div class="footer">
			<font face="Times new roman" size="4" color="#fafafa">
				<br><br><b>CONTATO</b><br>
				<hr align="center" width="30%" size="2" noshade=""><!-- linha -->
				Ligue (74)98817-0986<br>
				E-mail: icaro.solon.is@gmail.com<br />
				Ícaro Solon<br>
			</font>
		</div>
	</div>



	<!--Finaliza Corpo do site-->

	<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
	<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>


	<script>
		$(document).ready(function() {
			$('#myCarousel').carousel({
				interval: 3000
			})
		});
	</script>

</body>

</html>