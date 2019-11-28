@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center">Planilha de treino</div>
                <div class="card-body">
                            <p class='text-md-center'>Exercicios</p>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover" id="exercise">
                            <tr>
                                <th class="text-md-center">Ordem</th>
                                <th class="text-md-center">Exercicio</th>
                                <th class="text-md-center">Series</th>
                                <th class="text-md-center">Repetições</th>
                                <th class="text-md-center">Peso(kg)</th>
                            </tr>

                            @foreach($exer as $exercises)
                            <tr>
                                <td class="text-md-center">{{$exercises->sequence}}</td>
                                <td class="text-md-center">{{$exercises->name}}</td>
                                <td class="text-md-center">{{$exercises->series}}</td>
                                <td class="text-md-center">{{{$exercises->reps}}}</td>
                                <td class="text-md-center">{{$exercises->weight}}</td>
                            </tr>
                                
                            @endforeach
                        </table>
                        </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection