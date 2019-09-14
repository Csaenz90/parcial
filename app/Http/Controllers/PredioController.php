<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Predio;

class PredioController extends Controller
{
    public function index()
    {   
        $predios = Predio::all();
        return $predios;
    }
}
