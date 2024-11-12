<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'contenido',
    ];
}


//para crear un modelo
//php artisan make:model Articulo