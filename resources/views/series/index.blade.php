 @extends('layout')
 @section('cabecalho')
     Séries
 @endsection
 @section('conteudo')
     @if(!empty($mensagem))
     <div class="alert alert-sucess">
         {{$mensagem}}

     </div>
     @endif
     <a href={{route('form_criar_serie')}} class="btn btn-dark mb-2">Adicionar</a>
     <ul class="list-group">
         @foreach ($series as $serie)
             <li class="list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
                 <form method="post" action="/series/remover/{{addslashes($serie->id)}}"
                 onsubmit="return confirm('Tem certeza?')">
                    @csrf
                     @method('DELETE')
                     <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                 </form></li>

         @endforeach
     </ul>
 @endsection
