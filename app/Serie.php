<?php

namespace App;

use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
  public $timestamps = false;
  protected $fillable = ['nome'];
  
  public function temporadas()
  {
    return $this->hasMany(Temporada::class); //possui muitas temporadas

  }

} // pega em query no banco de dados e transforma em objetos
//metodos que criam series
