<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados en masa
    protected $fillable = ['nombre', 'apellidos'];
}
