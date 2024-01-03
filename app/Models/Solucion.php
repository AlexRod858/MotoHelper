<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    use HasFactory;
    protected $table = 'soluciones';
    protected $fillable = [
        'descripcion',
    ];


    public function problema()
    {
        return $this->belongsTo(Problema::class);
    }
}
