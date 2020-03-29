<!--
    Navbar que contiene el menú de la aplicación
-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">PERIODCO AM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">INICIO</a>
      </li>

    </ul>
  </div>
  {{ Form::open(['route'=>'news', 'method' => 'GET', 'class'=>'form-inline pull-right']) }}
  <form class="form-inline" action="/action_page.php">
  {{ Form::text('title', null, ['class'=>'form-control mr-sm-2 col-md-7 col-9', 'placeholder' => 'Noticia ...']) }}

    <button type="submit" class="btn btn-default col-md-4  col-3" >
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
    </form>
  {{ Form::close() }}
</nav>

