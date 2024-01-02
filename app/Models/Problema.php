<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];


    public function comentario()
    {
        return $this->hasMany(Comentario::class);
    }


    public function moto()
    {
        return $this->belongsTo(Moto::class);
    }

    public function solucion()
    {
        return $this->hasMany(Solucion::class);
    }
}
