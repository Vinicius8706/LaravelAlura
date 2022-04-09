<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
  public  $timestamps = false;
  protected $fillable = ['nome'];

} // pega em query no banco de dados e transforma em objetos
//metodos que criam series
