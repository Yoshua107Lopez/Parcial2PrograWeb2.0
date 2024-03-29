<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } 
        else 
        {
                return redirect()->to('/');
            
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
