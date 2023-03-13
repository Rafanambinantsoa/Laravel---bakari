<?php

namespace App\Http\Controllers;

use App\Http\Requests\Log_add;
use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function  index(){
        return view('accueil');
    }

    public function addForm(){
        return view('Logement.add_form');
    }
    public function add(Log_add $request ,Logement $logement){
        //dd($request);
        $logement = Logement::create($request->post());

        return redirect()->back()->with('success' , 'Maison ajouté');
    }

    public function show(Logement $logement){
        $logement = Logement::all();
        //dd($logement);

        return view('Logement.show' , [
            'logement' => $logement
        ]);
    }
    //formulaire modal
    public function editForm(Logement $logement){
        //dd($logement);
        return view('Logement.show' ,[
            'log_bd' => $logement,
            'status' =>'ok'
        ]);
    }

    public  function edit(Logement $logement , Request $request){
        //dd($request);
        $logement->nom = $request->nom;
        $logement->lieu = $request->lieu;
        $logement->prix = $request->prix;
        $logement->superficie = $request->superficie;
        $logement->lit = $request->lit;
        $logement->douche = $request->douche;
        $logement->garage = $request->garage;
        $logement->description = $request->description;

        $logement->save();

        return redirect('show_logement')->with('success' , 'maison à jour');
    }

    public function delete(Logement $logement){
        $logement->delete();

        return redirect()->back()->with('success' , 'Maison retirée');
    }
}
