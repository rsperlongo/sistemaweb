<!DOCTYPE html>
<html>
<head>
	 <title>Sistema Web Para Igrejas Evangélicas</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">

  <!-- Dropdown.js -->
  <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- Page style -->
  <link href="index.css" rel="stylesheet">
  
  <link href="dist/css/style.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<header>
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GERCHURCH - VERSÃO 1.0</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)"> Home</a></li>
        <li><a href="javascript:void(0)">Painel Administrativo</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Ajuda
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Documentação</a></li>
            <li><a href="#"> Tutorial Online</a></li>
            <li><a href="javascript:void(0)"> Abrir um Chamado</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Buscar">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Olá Usuário</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Login
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)"><i class="material-icons">email</i> Mensagens<span class="badge">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">person</i> Perfil</a></li>
            <li><a href="javascript:void(0)"><i class="material-icons">person_add</i> Adicionar Usuário</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)"> <i class="material-icons">exit_to_app</i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
</header>
<div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1>Resumo das Atividades</h1>
        <hr>
         <div class="col-md-6">
          <div class="alert alert-dismissible alert-info">
              <i class="material-icons">face</i>
              <h1 class="title-resume">120 membros</h1>
              <h3>Total de Membros Comungantes</h3>
          </div>
      </div>

      <div class="col-md-6">
          <div class="alert alert-dismissible alert-danger">
              <i class="material-icons">monetization_on</i>
              <h1 class="title-resume">R$120.000</h1>
              <h3>Receita no dia 04/11/2016</h3>
      </div>
    </div>
</div>
    </div>
</div>
<br>
<br>
<br>
  <!-- Membros-->
<div class="container-fluid">  
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><i class="material-icons">face</i> GESTÃO DE MEMBROS</h2>
      </div>
        <div class="panel-body">
            <a href="#" class="btn btn-raised btn-success" data-toggle="modal" data-target="#myModal"><i class="material-icons">person_add</i>Cadastrar Membro</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-success"><i class="material-icons">person_outline</i>Alterar Membro</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-success"><i class="material-icons">remove</i>Excluir Membro</a>
        </div>
      </div>    
    </div>
    
    <!-- Modal  -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Cadastro de Membros</h4>
        <form>
              <div class="checkbox">
                <label>
                    <input type="checkbox"> Membro
                 </label>
              </div>
              <div class="form-group label-floating">
                <label class="control-label" for="focusedInput1">Membro desde:</label>
                <input class="form-control" id="focusedInput1" type="date">
              </div>
              <div class="form-group label-floating">
                <label class="control-label" for="focusedInput1">Nome Completo</label>
                <input class="form-control" id="focusedInput1" type="text">
              </div>
              <div class="form-group label-floating">
                <label class="control-label" for="focusedInput1">Data de Nascimento</label>
                <input class="form-control" id="focusedInput1" type="text" placeholder="dd/mm/aaaa">
              </div>
              <div class="form-group label-floating">
                <label class="control-label" for="focusedInput1">Endereço Completo</label>
                <input class="form-control" id="focusedInput1" type="text">
              </div>
        </form>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
    
    
    
    
  <!-- EBD-->  
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="material-icons">library_books</i> Escola Bíblica Dominical (EBD)</h3>
        </div>
    <div class="panel-body">
        Panel content
  </div>
</div>
      
    </div>
  <!-- Eventos e Programação -->  
    <div class="col-md-4">
      <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="material-icons">perm_contact_calendar</i> Eventos e Programação</h3>
    </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
    </div>
</div>
<div>
<footer>
 <div class="panel panel-default">
  <div class="panel-body">
    Panel content
    <br>
    <br>
    <br>
    <br>
  </div>
  <div class="panel-footer">Sistema Web para Igrejas Evangélicas - Versão 1.0 - Weblife Brasil Solutions</div>
</div> 
    
</footer>
<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="dist/js/material.js"></script>
<script src="dist/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
</body>
</html>