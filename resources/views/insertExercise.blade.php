@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar exercicio</div>
                <div class="card-body">
                    <form method="POST" action="{{route('insertExercise')}}">
                    @csrf 
                        <div class="form-group row">
                            <label for="Name" class="col-md-4 col-form-label text-md-right">Nome do exercicio:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Categoria" class="col-md-4 col-form-label text-md-right">Categoria do exercicio:</label>
                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control " name="category" value="" required="">   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Breve descrição do exercicio:</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="", required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="series" class="col-md-4 col-form-label text-md-right">Numero de séries:</label>
                            <div class="col-md-6">
                                <input id="series" type="text" class="form-control" name="series" value="", required="">
                            </div>
                        </div>

                        <div class="form-group row">-
                            <label for="reps" class="col-md-4 col-form-label text-md-right">Numero de repetições por série:</label>
                            <div class="col-md-6">
                                <input id="reps" type="text" class="form-control" name="reps" value="", required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">Peso recomendado para a pratica:</label>
                            <div class="col-md-6">
                            <input id="weight" type="text" class="form-control" name="weight" value="", required="">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection