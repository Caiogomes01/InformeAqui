@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <table class="table table-dark">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>

                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($categorias as $value)
                                <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->nome }}</td>
                                <td><a class="btn btn-primary" href="{{ url('/categoria/' . $value->nome) }}" role="button">Visualizar</a></td>
                              </tr>
                              @endforeach


                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
