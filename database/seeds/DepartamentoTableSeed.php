<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = factory(App\Models\Departamento::class,10)
        ->create()
        ->each(function ($departamento) {
            $municipio = factory(App\Models\Municipio::class)->make();
            $departamento->municipios()->save($municipio);
            $municipio->predios()->save(factory(App\Models\Predio::class)->make());
        });
    }
}
