@extends('layout')
@section('cabecalho')
    Adicionar série
@endsection
@section('conteudo')
    Adicionar série

    <form method='post'>
        @csrf
        <label for="nome">Nome</label>
        <div class="form-group">
            <input type="text" class="form-control" name="nome" id="nome">

        </div>
        <button class="btn btn-primary md-2">Adicionar</button>
    </form>
@endsection
