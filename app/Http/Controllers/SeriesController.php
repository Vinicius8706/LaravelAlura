<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

class SeriesController extends Controller
{
  public function index()
  {
    $series = [
      'Greys Anatomy', 'Lost', 'Agents of SHIELD'
    ];
    return view('series.index', compact('series'));
  }

  public function create()
  {
    return view('series.create');
  }

  public function store(Request $request)
  {
    $nome = $request->nome;
    $serie = new Serie();
    var_dump($serie->save());
  }
}
