@extends('layout')

@section('cabecalho')
    Episódios
@endsection
@section('conteudo')
    <form action="">

        <ul class="list-group">
            @foreach ($temporadas as $temporada)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio{{ $episodio->numero }}
                    <input type="checkbox">
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
