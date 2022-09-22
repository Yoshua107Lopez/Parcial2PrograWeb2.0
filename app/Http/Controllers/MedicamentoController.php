<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Medicamentos;

class MedicamentoController extends Controller{
    
    public function index(){

        $medicamentos = Medicamentos::all();
        
        return view('medicamentos.index', compact('medicamentos'));
    }
    public function create() {
        
        return view('medicamentos.create');
    }

    public function store(Request $request){

        $medicamentos = new Medicamentos();

        $medicamentos->name = $request->name;
        $medicamentos->description = $request->description;
        $medicamentos->marca = $request->marca;
        $medicamentos->medichome = $request->medichome;
        $medicamentos->compuesactive = $request->compuesactive;
        $medicamentos->price = $request->price;
        $medicamentos->existence = $request->existence;

        $medicamentos->save();

        return redirect()->route('medicamento.index');
    }

    public function edit($id){

        $medicamentos = Medicamentos::find($id);

        return view('medicamentos.edit', compact('medicamentos'));
    }

    
    public function update(Request $request, $id){

        $medicamentos = Medicamentos::find($id);

        $medicamentos->update($request->all());

        return redirect()->route('medicamento.index');
    }
    
    
    
    public function destroy($id) {

        $medicamentos = Medicamentos::find($id);

        $medicamentos->delete();

        return redirect()->route('medicamento.index');
    }
}
