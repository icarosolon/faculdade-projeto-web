<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="keywords" content="programacao, curso, video aula, java, html, css, linguagem c, c, logica de programacao ">
	<title> ProCode</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body vlink="white" link="white" text="white" alink="white">
	<div class="containerIndex">

		<div class="span12">
			<br>
			<a href="index.php"><img src="imagens/procodeFundoBranco.png" /></a>

		</div>


		<br><br><br><br><br>
		<form action="cadastroProcode.php" method="POST">
			<table border="0" align="center" bgcolor="" width="35%" cellspacing="30" cellpadding="6">
				<tr>
					<td colspan="2">
						<h1 align="center">
							<font face="courier new" color="white" size="">CADASTRO</font>
						</h1><br><br><br><br>
					</td>
				</tr>

				<tr align="right">
					<td class="fonteCadastro">Informe o seu nome: </td>
					<td><input align="center" type="text" id="nome" name="nome" placeholder="Digite seu nome..." size="25" required="" /></td>
				</tr>

				<tr align="right">
					<td class="fonteCadastro">Nome para login: </td>
					<td><input align="center" type="text" id="login" name="login" placeholder="Digite um login..." size="25" required="" /></td>

				</tr>
				<tr align="right">
					<td class="fonteCadastro">Informe sua senha: </td>
					<td><input align="center" type="password" id="senha" name="senha" placeholder="Digite sua senha..." size="25" required="" /></td>

				</tr>
				<tr align="right">
					<td class="fonteCadastro">Confirme sua senha: </td>
					<td><input align="center" type="password" name="confSenha" placeholder="Digite sua senha..." size="25" required="" /></td>
				</tr>
				<tr align="right">
					<td class="fonteCadastro">Sexo: </td>
					<td class="fonteCadastro">
						<center><input type="radio" name="sexo" value="masculino"><b>&nbspM</b>
							<!--inicia espaços em branco-->&nbsp&nbsp&nbsp&nbsp&nbsp
							<!--finaliza espaços em branco--> <input type="radio" name="sexo" value="feminino" /><b>&nbspF</b></center>
					</td>
				</tr>
				<tr align="right">
					<td class="fonteCadastro">RG: </font>
					</td>
					<td><input type="text" name="rg" placeholder="Informe seu nº de Identidade..." size="25" required=""></td>
				</tr>
				<tr align="right">
					<td class="fonteCadastro">CPF: </td>
					<td><input type="text" name="cpf" placeholder="Informe seu CPF..." size="25" required=""></td>
				</tr>
				<tr align="right">
					<td class="fonteCadastro">E-mail: </td>
					<td><input type="email" name="email" placeholder="Informe seu e-mail..." size="25" required=""></td>
				</tr>
				<tr align="right">
					<td class="fonteCadastro">Telefone: </td>
					<td><input type="text" name="telefone" placeholder="(XX) XXXXX - XXXX" size="25" required=""></td>
				</tr>
				<tr align="right">
					<td><input class="btn btn-success" type="submit" name="botao" value="Salvar" /></td>
					<td align="center"><input class="btn" type="reset" name="botao" value="Limpar" /></td>
				</tr>

			</table>
		</form>

	</div>

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

	<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>