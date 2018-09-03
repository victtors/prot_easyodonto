<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
    <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <title>Easy Odonto</title>
  </head>
  <body class="cm-no-transition cm-1-navbar">
    <div id="cm-menu">
      <nav class="cm-navbar cm-navbar-primary">
        <div class="cm-flex"></div>
        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
      </nav>
      <div id="cm-menu-content">
        <div id="cm-menu-items-wrapper">
          <div id="cm-menu-scroller">
            <ul class="cm-menu-items">
              <li class="active"><a href="index.php" class="sf-house"> Início</a></li>
              <li class="active"><a href="cadastra_paciente.php" class="sf-profile"> Cadastar Paciente</a></li>
              <li class="active"><a href="buscar_paciente.php" class="sf-search"> Pesquisar Paciente</a></li>
              <li class="active"><a href="agendar_consulta.php" class="sf-notepad"> Agendar Consulta</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header id="cm-header">
      <nav class="cm-navbar cm-navbar-primary">
        <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
        <div class="cm-flex"><h1>EASY ODONTO</h1></div>
      </nav>
    </header>
    <div id="global">
      <div class="container-fluid">
        <div class="panel panel-default">
          <div class="panel-body">
	           <h2 style="margin:0">Cadastro de Paciente</h2>
             <br><br>

            <!-- Cadastro de paciente - início -->
             <form method="POST" action="cadastra.php">
             <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome" name="nome">
                <br>
                <input type="text" class="form-control" placeholder="CPF: ''Ex. 12345678912'" name="cpf">
                <br>
                <input type="text" class="form-control" placeholder="Data de Nascimento: 'Ex. 28/11/1996'" name="data_nasc">
                <br>
                <input type="radio" name="sexo" value="masculino" checked> Masculino
                <input type="radio" name="sexo" value="feminino"> Feminino
                <input type="radio" name="sexo" value="outros"> Outro
                <br><br>
                <input type="text" class="form-control" placeholder="Endereço completo: 'Ex. Rua, Número - Bairro'" name="endereco">
                <br>
                <input type="text" class="form-control" placeholder="Cidade" name="cidade">
                <br>
                <input type="text" class="form-control" placeholder="Estado" name="estado">
                <br>
                <input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade">
                <br>
                <input type="text" class="form-control" placeholder="Profissão" name="profissao">
                <br>
                <input type="text" class="form-control" placeholder="Contato: 'Ex. 68 99999-0000'" name="contato">
                <br>
                <input type="text" class="form-control" placeholder="E-Mail" name="email">
                <br>
                <div class="form-group text-right" style="margin-top:20px">
                  <button type="submit" class="btn btn-primary">Cadastrar Paciente</button>
                </div>


              </div>
              </form>
            <!--Fim-->

	        </div>
	</div>
      </div>
      <footer class="cm-footer"><span class="pull-right">&copy; EasyOdondoInc.</span></footer>
    </div>
    <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/jquery.cookie.min.js"></script>
    <script src="assets/js/fastclick.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/clearmin.min.js"></script>
  </body>
</html>