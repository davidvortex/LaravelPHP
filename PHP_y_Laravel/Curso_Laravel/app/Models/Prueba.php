<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'pruebas'; // Asegúrate de que coincida con la tabla en la base de datos

    protected $fillable = ['nombre', 'apellidos', 'edad', 'ine'];
}
