 @extends('layout')
 @section('cabecalho')
     Séries
 @endsection
 @section('conteudo')
     <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
     <ul class="list-group">
         <?php foreach ($series as $series) : ?>
         <li class="list-group-item"><?= $serie ?>
             <?php endforeach; ?>
     </ul>
 @endsection
