<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public function tempora()
    {
        return $this->belongsTo(Temporada::class);
    }
}
