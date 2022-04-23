@extends('layout')

@section('cabecalho')
    Episódios
@endsection
@section('conteudo')
@include('mensagem',['mensagem' =>$mensagem])

    <form action="/temporadas/{{ temporadaId }}/episodios/assistir" method="post">
        @csrf

        <ul class="list-group">
            @foreach ($temporadas as $temporada)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    { <input type="checkbox" 
                    name=episodios[] 
                    value="{{ $episodio->id }}"
                        {{ $episodio->assistido ? 'checked' : '' }}>
                    Episódio{{ $episodio->numero }}
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection

{{-- {--como um array ja parseado episodio --}}
