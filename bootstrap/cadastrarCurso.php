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



                        <h1 align="center"><font face="cooper" color="#6699FF"> Cadastrar Cursos</font></h1>


                        <form action="cadastroCurso.php" method="POST">
                            <table border="0" align="" bgcolor="" width="" cellspacing="30" cellpadding="20">
                                <tr>
                                    <td colspan="2"><br><br><br><br>
                                    </td>
                                </tr>

                                <tr align="right">
                                    <th ><font face="courier new" size="4" >Informe o nome do Curso:</font> </th>
                                    <td><input align="center" type="text" name="nome" placeholder="Informe o nome do curso..." size="40" maxlength="40"  required="" /></td>
                                </tr>

                                <tr>
                                    <th ><font face="courier new" size="4" > Descrição:</font> </th>
                                    <td>    <textarea rows="10" cols="40"  name="descricao" placeholder="Digite aqui a descrição do novo curso..." required="" ></textarea></td>

                                </tr>
                                
                                <tr>
                                    <td align="center"><input class= "btn btn-success"type="submit" name="botao" value="Criar Curso" onclick="return confirm('Todos os dados estão corretos?');"/></td>
                                    <td align="center"><input class="btn" type="reset" name="botao" value="Limpar" /></td>
                                </tr>

                            </table>
                        </form>












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