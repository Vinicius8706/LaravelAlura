<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;


class SeriesController extends Controller
{
  public function index(Request $request)
  {
    $series = Serie::query()->orderBy('nome')->get();
    $mensagem = $request ->session()->get('mensagem');

    return view('series.index', compact('series'));
  }

  public function create()
  {
    return view('series.create');
  }

  public function store(Request $request)
  {
    $serie = Serie::create($request->all());
    $request->session()->flash('mensagem',"Serie {$serie->id} criada com sucesso {$serie->nome}");

    return redirect('/series'); //redirecionamento da funcao helper que realiza o redirecionamento
  }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);
    $request->session()->flash('Serie removida com sucesso');
    return redirect('/series');

  }
}
