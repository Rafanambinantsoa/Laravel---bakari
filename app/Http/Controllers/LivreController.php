<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        return view('form');
    }
    public function add(Request $request , Compte $compte){
        //dd($request);
        $compte = Compte::create($request->post());

        return redirect()->back();

    }
}
