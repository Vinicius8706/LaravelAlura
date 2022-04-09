@extends('layout')
@section('cabecalho')
    Adicionar série
@endsection
@section('conteudo')
    @if ($errors->any()){
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        }
        <form method='post'>
            @csrf
            <label for="nome">Nome</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nome" id="nome">

            </div>
            <button class="btn btn-primary md-2">Adicionar</button>
        </form>
    @endsection
