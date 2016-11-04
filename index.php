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
         <div class="col-md-4">
          <div class="alert alert-dismissible alert-info">
              <i class="material-icons">face</i>
              <h1>120 membros</h1>
              <h2>Total de Membros Comungantes</h2>
          </div>
      </div>

      <div class="col-md-4">
          <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Heads up!</strong> This
          <a href="javascript:void(0)" class="alert-link">alert needs your attention</a>, but it's not super important.
          </div>
      </div>

      <div class="col-md-4">
          <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Heads up!</strong> This
          <a href="javascript:void(0)" class="alert-link">alert needs your attention</a>, but it's not super important.
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
    Panel content
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
</body>
</html>