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

}
