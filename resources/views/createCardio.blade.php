@include('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center">Planilha de treino</div>
                <div class="card-body">
                    <form action="{{route('insertCardio')}}" method="post">
                        @csrf 
                        
                        <div>
                            <p class='text-md-center'>Cardio</p>
                        </div>
                        <table class="table" id="cardio">
                        <tr>
                            <th class="text-md-center">Aparelho</th>
                            <th class="text-md-center">Tempo</th>
                        </tr>
                        <tr>
                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "Esteira Hiit" >
                            </td>
                            <td>
                            <input id="time" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "1/2">
                            </td>
                        </tr>
                        </table>
                        <div>
                            <p class='text-md-center'>Exercicios</p>
                        </div>
                        <table class="table" id="exercise">
                            <tr>
                                <th class="text-md-center">Ordem</th>
                                <th class="text-md-center">Exercicio</th>
                                <th class="text-md-center">Series</th>
                                <th class="text-md-center">Repetição</th>
                                <th class="text-md-center">Peso</th>
                            </tr>
                            <tr>
                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "A1">
                            </td>

                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "Supino reto">
                            </td>

                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "3">
                            </td>

                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "15">
                            </td>

                            <td>
                            <input id="name" type="text" class="form-control text-md-center" name="name" value="" required="" placeholder = "35">
                            </td>
                            </tr>
                        </table>
        
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection