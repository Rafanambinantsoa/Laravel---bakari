<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client_val;
use App\Http\Requests\Client_val_1;
use App\Mail\DemoMail;
use App\Mail\EmailDemo;
use App\Models\Client;
use App\Models\Clients;
use App\Models\Logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function client( $id_logement ){
        //$logement = DB::table('logements')
          //  ->where('id', $id_logement)
            //->first();

        //dd($logement);
        return view('accueil.client1' , [
            'id_logement' => $id_logement
        ]);
    }

    public function  client_handle(Client_val $request , Clients $client , ){
        //echo 'yo man';
        // dd($request->card_number);
        $email = 'akutagawakarim@gmail.com';

        $logement = DB::table('logements')
            ->where('id', $request->id_logement)
            ->first();

        $agent = DB::table('users')
            ->where('id', $logement->id_agent)
            ->first();

        $mailData = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adrs' => $request->addresse,
            'num' => $request->phone,
            'nom_logement' => $logement->nom ,
            'lieu' => $logement->lieu ,
            'prix' => $logement->prix ,
            'superficie' => $logement->superficie ,
            'lit' => $logement->lit ,
            'douche' => $logement->douche ,
            'garage' => $logement->garage ,
            'nom_agent' => $agent->name ,
            'email_agent' => $agent->email ,
            'message' => '
            Vous le procédure de lancement de votre achat est lancé lancé , je vous invite à venirnotre agence pour régler les détails du paiments
            '
        ];

        Mail::to($email)->send(new EmailDemo($mailData));
        //ajout du client dans la bd
        $client::create($request->all());

        return response()->json([
            'message' => 'Email has been sent.'
        ], Response::HTTP_OK);

    }

    public function login(){
        return view('accueil.login');
    }

    public function login_handle(Client_val_1 $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('new_auth')->attempt($credentials)) {
            return redirect()->intended('/accueil');
        }

    }
}
