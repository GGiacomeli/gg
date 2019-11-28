@extends('layouts.app')
@section('content')



<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item list-group-item-action bg-light">Visualizar exercicios cadastrados</a>
    <a href="{{route('insertExercise')}}" class="list-group-item list-group-item-action bg-light">Cadastrar Exercicio</a>
    <a href="{{route('createsheet')}}" class="list-group-item list-group-item-action bg-light">Criar planilha de treino</a>
    <a href="{{route('sheet')}}" class="list-group-item list-group-item-action bg-light">Visualizar planilha de treino</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <h1 class="mt-3 text-md-center">Bem vindo, {{{ Auth::user()->name}}}</h1>
    <h3 class="mt-3 align-text-center">Seu id: {{{ Auth::user()->id}}}</h1>

    <p>Novidades em breve!!!</p>
  </div>
</div>

<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


@endsection