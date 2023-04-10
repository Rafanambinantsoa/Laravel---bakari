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
        // $kim = DB::table('logements')
        //     ->where('status', '=', 'envente')
        //     ->get();
        // dd($kim);

        //listes des maisons avec tous les infos de chaque agent responsable d'un maison , GG mec Fita
        $kim = DB::table('logements')
            ->join('users', 'logements.id_agent', '=', 'users.id')
            ->select(
                'logements.id',
                'logements.nom',
                'logements.lieu',
                'logements.prix',
                'logements.superficie',
                'logements.lit',
                'logements.douche',
                'logements.description',
                'logements.garage',
                'logements.image1',
                'users.name',
                'users.email',
                'users.skype',
                'users.mobile',
                )
            ->where('logements.status', '=', 'envente')
            ->get();
        // dd($kim);
        // $user = User::all();
        //Listes des agents accepter
        $user = DB::table('users')
            ->where('status', '=', 'activer')
            ->where('role', '=', 'agent')
            ->get();
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

        //generer 5 lettre aléatoires
        $random1= substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
        $image = $request->file('image1');
        $imageName1 = $random1 . '.' . $image->getClientOriginalExtension();
        $destinationPath1 = public_path('/images');
        $image->move($destinationPath1, $imageName1);

        $random2= substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
        $image = $request->file('image2');
        $imageName2 = $random2. '.' . $image->getClientOriginalExtension();
        $destinationPath2 = public_path('/images');
        $image->move($destinationPath2, $imageName2);

        $random3= substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 5);
        $image = $request->file('image3');
        $imageName3 = $random3. '.' . $image->getClientOriginalExtension();
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

    public function show(Logement $logement, $id)
    {
        // dd($id);
        // $logement = Logement::all();
        //Listes des logements qui appartien àl'agent connecter
        $kim = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->get();
        // dd($kim);

        return view('Logement.show', [
            'logement' => $kim
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
    public  function show_log($id)
    {
        $logement = Logement::find($id);
        // dd($logement);
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
    //Dashboard de l'agent 
    public function DashAgent($id){
        //nombre de maison en vente et vendus
        $maison = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->get();
        //nombre de maison en vente
        $vente = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->where('status', '=', 'envente')
            ->get();
        //nombre de maison vendus
        $vendus = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->where('status', '=', 'vendus')
            ->get();
        // dd($vendus);

        return view('Logement.DashboardAgent',[
            'maisons' => $maison->count(),
            'ventes' => $vente->count(),
            'vendus' => $vendus->count()
        ]);
    }

    //affichage de tous les agents vendus pour chaque agents
    public function agentMaisonVendus($id){
        $vente = DB::table('logements')
            ->where('id_agent', '=', $id)
            ->where('status', '=', 'vendus')
            ->get();
        
        // dd($vente);
        return view('Logement.vendus_par agent',[
            'logements' => $vente
        ]);

    }

    //Affihcage de tous les maisons en vente (Admin)
    public function AdminMaisonVendus(){
        $vente = DB::table('logements')
            ->where('status', '=', 'envente')
            ->get();
        
        // dd($vente);
        return view('Logement.enventeAgent',[
            'logements' => $vente
        ]);
    }
    //Affichage de Dashboard Admin
    public function DashAdmin(Logement $logement){
        //Nombre de maisons total
        $total = $logement::all();

        //Nombres des maisons en vente
        $vente = DB::table('logements')
            ->where('status', '=', 'envente')
            ->get();

        //Nombre des maisons vendus
        $vendus = DB::table('logements')
            ->where('status', '=', 'vendus')
            ->get();
        
        //Nombre des agents active
        $active = DB::table('users')
            ->where('status', '=', 'activer')
            ->get();

        //Nombre des demande en cours
        $inactive = DB::table('users')
            ->where('status', '=', 'desactiver')
            ->get();

        //test
        // dd($inactive);

        return view('Logement.DashboardAdmin',[
            'total' => $total->count(),
            'vente' => $vente->count(),
            'vendus' => $vendus->count(),
            'active' => $active->count(),
            'inactive' => $inactive->count(),
        ]);
    }

}
