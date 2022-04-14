<?php

namespace App\Services;

use App\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{
  public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $ep_por_temporada): Serie
  {
      $serie = null;
      DB::transaction(function ()use($nomeSerie,$qtdTemporadas,$ep_por_temporada){
          $serie=Serie::create(['nome'=>$nomeSerie]);
          $this->criaTemporadas($qtdTemporadas,$ep_por_temporada,$serie);
      });

    $serie = Serie::create(['nome' => $nomeSerie]);
      $this->criaTemporadas($qtdTemporadas, $serie, $ep_por_temporada);
      return $serie;
  }

    /**
     * @param int $qtdTemporadas
     * @param $serie
     * @param int $ep_por_temporada
     * @return void
     */
    public function criaTemporadas(int $qtdTemporadas, $serie, int $ep_por_temporada): void
    {
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodios($ep_por_temporada, $temporada);
        }
    }

    /**
     * @param int $ep_por_temporada
     * @param mixed $temporada
     * @return void
     */
    public function criaEpisodios(int $ep_por_temporada, mixed $temporada): void
    {
        for ($j = 1; $j <= $ep_por_temporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
