<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'nombre_departamento',
        'pais'
    ];

   
    protected $appends = ['nombre_pais'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function getNombrePaisAttribute()
    {
        return "{$this->nombre_departamento} {$this->pais} ";
    }

    
}
