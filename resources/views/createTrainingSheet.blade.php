@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center">Planilha de treino</div>
                <div class="card-body">
                    <form action="{{route('insertsheet')}}" method="post">
                    @csrf

                        <div class="table-responsive">
                            <p class='text-md-center'>Cardio</p>
                        </div>
                        <div>
                        <table class="table table-hover" id="cardio">
                        <tr>
                            <th class="text-md-center">Aparelho</th>
                            <th class="text-md-center">Tempo</th>
                        </tr>
                        <tr>
                            <td>
                            <input id="place" type="text" class="form-control text-md-center" name="place" value=""  placeholder = "Esteira Hiit" >
                            </td>
                            <td>
                            <input id="time" type="text" class="form-control text-md-center" name="time" value=""  placeholder = "1/2">
                            </td>
                        </tr>
                        </table>
                        </div>
                        <div>
                            <p class='text-md-center'>Exercicios</p>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover" id="exercise">
                            <tr>
                                <th class="text-md-center">Ordem</th>
                                <th class="text-md-center">Exercicio</th>
                                <th class="text-md-center">Series</th>
                                <th class="text-md-center">Repetição</th>
                                <th class="text-md-center">Peso</th>
                            </tr>

                            @for($i=1; $i< 2; $i++)
                            <tr>
                            <td>
                            <input id="sequence[]" type="text" class="form-control text-md-center" name="sequence[]" value=""  placeholder = "A<?php echo $i?>">
                            </td>

                            <td>
                            <input id="name[]" type="text" class="form-control text-md-center" name="name[]" value=""  placeholder = "Supino reto">
                            </td>

                            <td>
                            <input id="series[]" type="text" class="form-control text-md-center" name="series[]" value=""  placeholder = "3">
                            </td>

                            <td>
                            <input id="reps[]" type="text" class="form-control text-md-center" name="reps[]" value=""  placeholder = "15">
                            </td>

                            <td>
                            <input id="weight[]" type="text" class="form-control text-md-center" name="weight[]" value=""  placeholder = "35">
                            </td>
                            </tr>
                            @endfor
                        </table>
                        </div>
                        <div>
                        <p class='text-md-center'>Esta planilha é para:</p>
                        <input id="sendto" type="text" class="form-control text-md-center" name="sendto" value=""  placeholder = "exemplo@hotmail.com" >
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                    </form>
                </div>
                <button class="btn btn-primary" id="add" href='#'>+exercicio</button>
            </div>
        </div>
    </div>
</div>


<!-- Jquery script to add one more row inside the table -->
<script>
$( "#add" ).click(function() {
 
var newElement = '<tr> <td> <input id="sequence[]" type="text" class="form-control text-md-center" name="sequence[]" value=""  placeholder = "A1"> </td>'
    newElement += '<td> <input id="name[]" type="text" class="form-control text-md-center" name="name[]" value=""  placeholder = "Supino reto"> </td> '
    newElement += '<td> <input id="series[]" type="text" class="form-control text-md-center" name="series[]" value=""  placeholder = "3"> </td>'
    newElement += '<td> <input id="reps[]" type="text" class="form-control text-md-center" name="reps[]" value=""  placeholder = "15"> </td>'
    newElement += '<td> <input id="weight[]" type="text" class="form-control text-md-center" name="weight[]" value=""  placeholder = "35"> </td> </tr>'
$( "#exercise" ).append( $(newElement) );
 
});
</script>
@endsection