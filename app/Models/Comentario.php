<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    protected $fillable = [
        'mensaje',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function problema()
    {
        return $this->belongsTo(Problema::class);
    }
}
