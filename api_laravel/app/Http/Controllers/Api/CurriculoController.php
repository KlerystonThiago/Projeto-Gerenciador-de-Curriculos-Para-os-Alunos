<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curriculo;
use App\Http\Resources\CurriculoResource;

class CurriculoController extends Controller
{
    public function index()
    {
        return new CurriculoResource(Curriculo::find(1));
    }
}
