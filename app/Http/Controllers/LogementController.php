<?php

namespace App\Http\Controllers;

use App\Http\Requests\Log_add;
use App\Models\Logement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogementController extends Controller
{
    public function  index(Logement $logement, User $user)
    {
        // $logement = Logement::all();
        //listes des maisons qui sont pas encore vendus
        $kim = DB::table('logements')
            ->where('status', '=', 'envente')
            ->get();
        // dd($kim);
        $user = User::all();
        return view('accueil.accueil2', [
            'logements' => $kim,
            'users' => $user
        ]);
    }

    public function addForm(User $user)
    {
        $user = User::all();
        return view('Logement.add_form', [
            'agent' => $user
        ]);
    }
    public function add(Log_add $request, Logement $logement)
    {
        //dd($request);
        //dd($request->file('image1'));

        //$image1 = $request->file('image1')->getClientOriginalName();
        //$path1 = $request->file('image1')->storeAs('public/images' , $image1);


        $image = $request->file('image1');
        $imageName1 = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath1 = public_path('/images');
        $image->move($destinationPath1, $imageName1);

        $image = $request->file('image2');
        $imageName2 = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath2 = public_path('/images');
        $image->move($destinationPath2, $imageName2);

        $image = $request->file('image3');
        $imageName3 = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath3 = public_path('/images');
        $image->move($destinationPath3, $imageName3);



        $logement = Logement::create([
            'nom' => $request->nom,
            'lieu' => $request->lieu,
            'prix' => $request->prix,
            'superficie' => $request->superficie,
            'lit' => $request->lit,
            'douche' => $request->douche,
            'garage' => $request->garage,
            'description' => $request->description,
            'image1' => $imageName1,
            'image2' => $imageName2,
            'image3' => $imageName3,
            'path1' => $destinationPath1,
            'path2' => $destinationPath2,
            'path3' => $destinationPath3,
            'id_agent' => $request->id_agent,
            'status' => 'envente',

        ]);

        return redirect()->back()->with('success', 'Maison ajouté');
    }

    public function show(Logement $logement)
    {
        $logement = Logement::all();
        //dd($logement);

        return view('Logement.show', [
            'logement' => $logement
        ]);
    }
    //formulaire modal
    public function editForm(Logement $logement)
    {
        //dd($logement);
        return view('Logement.show', [
            'log_bd' => $logement,
            'status' => 'ok'
        ]);
    }

    public  function edit(Logement $logement, Request $request)
    {
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

        return redirect('show_logement')->with('success', 'maison à jour');
    }

    public function delete(Logement $logement)
    {
        $logement->delete();

        return redirect()->back()->with('success', 'Maison retirée');
    }

    //to show one logement en particulier
    public  function show_log(Logement $logement)
    {
        $user = User::findOrFail($logement->id_agent);

        return view("accueil.maison", [
            'logements' => $logement,
            'user' => $user
        ]);
    }

    //Affichage des maisons vendus
    public function vendus(Logement $logement)
    {
        $agent = DB::table('logements')
            ->where('status', '=', 'vendus')
            ->get();

        // dd($agent);
        return view('Logement.maison_vendus', [
            'logements' => $agent
        ]);
    }

    //affichage de tous les agents active
    public function agent()
    {
        $agent = DB::table('users')
            ->where('role', '=', 'agent')
            ->where('status', '=', 'activer')
            ->get();
        // dd($agent);

        return view('Logement.maison_vendus_agent', [
            'agents' => $agent
        ]);
    }
    //pour afficher l'information concerant l'agent en modal
    public function show_agent($id)
    {
        //affichage de tous les agents 
        $agent = DB::table('users')
            ->where('role', '=', 'agent')
            ->where('status', '=', 'activer')
            ->get();
        // echo $id
        $info = User::find($id);
        // dd($agent);

        //nombre de maison vendus par agent 
        $resultats = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->where('status', '=', 'vendus')
            ->get();

        // dd($resultats);
        $vendus = $resultats->count();
        // dd($vendus);
        //nombre de maison vendus par agent 
        $vente = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->where('status', '=', 'envente')
            ->get();

        $envente = $vente->count();

        return view('Logement.maison_vendus_agent', [
            'agents' => $agent,
            'info' => $info,
            'status' => 'tsukasa',
            'vendus' => $vendus,
            'envente' => $envente
        ]);
    }
}
