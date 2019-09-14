<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    protected $fillable = [
        'nombre_municipio',
        'estado_municipal',
        'departamento_id'
    ];

    public $casts = ['estado_municipal' => 'boolean'];

    protected $appends = ['list_departamento', 'list_predio'];


    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function predios()
    {
        return $this->hasMany(Predio::class);
    }

    public function getListDepartamentoAttribute()
    {
        return $this->departamento;
    }

    public function getListPredioAttribute()
    {
        return $this->predios;
    }
}
