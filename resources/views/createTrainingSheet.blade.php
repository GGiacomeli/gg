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
                    <table class="table table-hover" id="sheetName">
                        <tr>
                            <th class="text-md-center">Nome da planilha</th>
                        </tr>
                        <tr>
                            <td>
                            <input id="sheetName" type="text" class="form-control text-md-center" name="place" value=""  placeholder = "Treino ABC" >

                            </td>
                        </tr>
                    </table>
                    </div>
                        <div class="table-responsive">
                        <table class="table table-hover" id="exercise">
                            <tr>
                                <th class="text-md-center">Nome do exercicio</th>
                            </tr>

                            @for($i=1; $i< 5; $i++)
                            <tr>
                            <td>
                            <input id="exercisename[]" type="text" class="form-control text-md-center" name="exercisename[]" value=""  placeholder = "A<?php echo $i?>">
                            </td>

                            </tr>
                            @endfor
                        </table>
                        </div>
                        <div>
                        <table class="table">
                             <tr>
                                <th class="text-md-center">Essa planilha é para</th>
                            </tr>
                            <td><input id="sendto" type="number" class="form-control text-md-center" name="sendto" value=""  placeholder = "Insira o ID do usuario" ></td>
                        </table>


                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
                <button class="btn btn-primary" id="add" href='#'>+exercicio</button>
        </div>
    </div>
</div>
<footer class="text-md-center">Os exercicios devem estar previamente cadastrados</footer>

<!-- Jquery script to add one more row inside the table -->
<script>
$( "#add" ).click(function() {
 
var newElement = '<tr> <td> <input id="exercisename[]" type="text" class="form-control text-md-center" name="exercisename[]" value=""  placeholder = "A1"> </td>'
   
$( "#exercise" ).append( $(newElement) );
 
});
</script>
@endsection