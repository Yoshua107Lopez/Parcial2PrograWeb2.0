<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Miscelanea;

class MiscelaneaController extends Controller
{
    public function index(){

        $miscelanea = Miscelanea::all();
       
        return view('miscelanea.index', compact('miscelanea'));
    }

    public function create() {
        
        return view('miscelanea.create');
    }

    public function store(Request $request){
        $miscelanea = new Miscelanea();

        $miscelanea->title = $request->title;
        $miscelanea->description = $request->description;
        $miscelanea->marca = $request->marca;
        $miscelanea->price = $request->price;
        $miscelanea->existence = $request->existence;

        $miscelanea->save();

        return redirect()->route('miscelanea.index');
    }

    public function edit($id){

        $miscelanea = Miscelanea::find($id);

        return view('miscelanea.edit', compact('miscelanea'));
    }

    public function update(Request $request, $id){

        $miscelanea = Miscelanea::find($id);

        $miscelanea->update($request->all());

        return redirect()->route('miscelanea.index');
    }

    public function destroy($id) {

        $miscelanea = Miscelanea::find($id);

        $miscelanea->delete();

        return redirect()->route('miscelanea.index');
    }
}
