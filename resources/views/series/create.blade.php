@extends('layout')
@section('cabecalho')
    Adicionar série
@endsection
@section('conteudo')
    Adicionar série

    <form method='post'>
        <label for="nome">Nome</label>
        <div class="form-group">
            <input type="text" class="form-control" name="nome" id="nome">
            <button class="btn btn-primary">Adicionar</button>
        </div>
    </form>
@endsection
