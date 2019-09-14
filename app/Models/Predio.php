<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $table = 'predios';

    protected $fillable = [
        'nombre_predio',
        'direccion',
        'territorio',
        'municipio_id'
    ];

    protected $casts = [
        'territorio' => 'array',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function setNombrePredioAttribute($value)
    {
        $this->attributes['nombre_predio'] = ucwords($value);
    }


}
