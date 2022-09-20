<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;

class MedicamentoController extends Controller
{
    public function index(){

        $medicamentos = Medicamentos::all();
        
        return view('medicamentos.index', compact('medicamentos'));
    }
}
