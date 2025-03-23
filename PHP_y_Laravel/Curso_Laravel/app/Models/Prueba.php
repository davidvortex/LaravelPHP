<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'pruebas';
    protected $fillable = ['nombre', 'apellidos', 'edad', 'ine'];

    protected function nombres(): Attribute
    {
        return Attribute::make(
            set:function($value){
                return strtolower($value);
            },
            get:function($value){
                return ucfirst($value);
            }
        );
    }


}
