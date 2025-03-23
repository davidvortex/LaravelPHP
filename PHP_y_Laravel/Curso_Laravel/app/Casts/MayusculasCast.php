<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class MayusculasCast implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return strtoupper($value); // Convierte a mayúsculas al obtener el dato
    }

    public function set($model, $key, $value, $attributes)
    {
        return strtolower($value); // Convierte a minúsculas al guardar en la BD
    }
}

