<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Restringidos;

class RestringidosController extends Controller{
    
    public function index(){

        $restringidos = Restringidos::all();
        
        return view('restringidos.index', compact('restringidos'));
    }
    public function create() {
        
        return view('restringidos.create');
    }

    public function store(Request $request){

        $restringidos = new Restringidos();

        $restringidos->name = $request->name;
        $restringidos->description = $request->description;
        $restringidos->marca = $request->marca;
        $restringidos->medichome = $request->medichome;
        $restringidos->compuesactive = $request->compuesactive;
        $restringidos->price = $request->price;
        $restringidos->existence = $request->existence;

        $restringidos->save();

        return redirect()->route('restringidos.index');
    }

    public function edit($id){

        $restringidos = Restringidos::find($id);

        return view('restringidos.edit', compact('restringidos'));
    }

    
    public function update(Request $request, $id){

        $restringidos = Restringidos::find($id);

        $restringidos->update($request->all());

        return redirect()->route('restringidos.index');
    }
    
    
    
    public function destroy($id) {

        $restringidos = Restringidos::find($id);

        $restringidos->delete();

        return redirect()->route('restringidos.index');
    }
}