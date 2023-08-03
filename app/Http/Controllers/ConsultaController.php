<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;

class ConsultaController extends Controller
{
    public function index()
    {
        $postes = Poste::all(); // Obtener todos los registros de la tabla "postes"
        return view('consulta.index', compact('postes')); // Pasar los datos a la vista "consulta.index"
    }
}
