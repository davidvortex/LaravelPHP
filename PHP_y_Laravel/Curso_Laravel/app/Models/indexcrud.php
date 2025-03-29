<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indexcrud extends Model
{
    use HasFactory;

    // Aquí puedes especificar los campos que son asignables masivamente
    protected $fillable = [
        'nombre',
        'descripcion', // Asegúrate de que los campos de la base de datos sean correctos
    ];
}
