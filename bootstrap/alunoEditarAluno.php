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
	$codAluno = $_GET['codAluno'];
	$sql = "SELECT * FROM aluno where codAluno = $codAluno";
	$aluno= mysqli_query($con, "SELECT * FROM aluno WHERE codAluno = $codAluno");
	$alunos= mysqli_query ( $con, $sql);
	
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
		<!--Corpo do site-->


<div class="row-fluid" style="background-image:url(imagens/fundo1.png)">
<div class="container">

<div class="span12">
	<div class="containerAdm">

	<!-- CONTEÚDO DO SITE!!!-->


		<h1 align="center"><font face="cooper" color="#6699FF"> Editar Cadastro de Aluno</font></h1>





<br><br><br>
<table align="center" border="0" width="100%">
	<tr>
		<td>
		
<form action="alunoUpdateAluno.php" method="POST">
<table border="0" align="center" bgcolor="" width="80%" cellspacing="30" cellpadding="6">
	<tr>
		<td colspan="2" align="center"><br><br><br><h3><font face="cooper">Editar Dados</font></h3></td>
	</tr>
	<tr align="right">
		<td>Código:</td>
		<td><?php echo "<input readonly=\"\" type=\"text\" name=\"codigo\" value=\" ".$codAluno."\"; >"?></td>
	</tr>

	<tr align="right">
		<td>Informe o seu nome: </td>
		<td><input align="center" type="text"  name="nome" placeholder="Digite seu nome..." size="25"  maxlength="50" /></td>
	</tr>
	<tr align="right">
		<td>Login:</td>
		<td><input type="text" name="login" placeholder="Digite seu login..." maxlength="20"></td>
	</tr>

	<tr align="right">
		<td>Informe sua senha: </td>
		<td><input align="center" type="password"  name="senha" placeholder="Digite sua senha..." size="25"  maxlength="20" /></td>
		
	</tr>
	<tr align="right">
		<td>Confirme sua senha: </td>
		<td><input align="center" type="password" name="confSenha" placeholder="Digite sua senha..." size="25"  maxlength="20" /></td>
	</tr>
	<tr align="right">
		<td >Sexo: </td>
		<td><center><input type="radio" name="sexo" value="masculino"><b>&nbspM</b><!--inicia espaços em branco-->&nbsp&nbsp&nbsp&nbsp&nbsp<!--finaliza espaços em branco-->       <input type="radio" name="sexo" value="feminino"/><b>&nbspF</b></center></td>
	</tr>
	<tr align="right">
		<td>RG: </font></td>
		<td><input type="text" name="rg" placeholder="Informe seu nº de Identidade..." size="25"  maxlength="15"></td>
	</tr >
	<tr align="right">
		<td>CPF: </td>
		<td><input type="text" name="cpf" placeholder="Informe seu CPF..." size="25"  maxlength="15"></td>
	</tr>
	<tr align="right">
		<td>E-mail: </td>
		<td><input type="email" name="email" placeholder="Informe seu e-mail..." size="25"  maxlength="40"></td>
	</tr>
	<tr align="right">
		<td>Telefone: </td>
		<td><input type="text" name="telefone" placeholder="(XX) XXXXX - XXXX" size="25"  maxlength="15" ></td>
	</tr>

	<tr align="right">
		<td><input class="btn btn-success" type="submit" name="botao" value="Salvar" /></td>
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

		      
		      foreach($alunos as $aluno){ ?>

		     
		      <tr>
		      <th>Nome:</th>
		      	<td><?php echo $aluno['nome'] ?></td>
		      </tr>
		      <tr>
		      	<th>Login:</th>
		      	<td><?php echo $aluno['login'] ?></td>
		      </tr> 
			<tr>
				<th>Senha:</th>
				<td><?php echo $aluno['senha'] ?></td>
			</tr> 
			<tr>
				<th>Sexo:</th>
				<td><?php echo $aluno['sexo']?></td>
			</tr>
			<tr>
				<th>RG:</th>
				<td><?php echo $aluno['rg']?></td>
			</tr>
		    <tr>
		    	<th>CPF:</th>
		    	<td><?php echo $aluno['cpf']?></td>
		    </tr> 
		    <tr>
		    	<th>Email:</th>
		    	<td><?php echo $aluno['email']?></td>
		    </tr> 
		    <tr>
		    	<th>Telefone:</th>
		    	<td><?php echo $aluno['telefone']?></td>
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