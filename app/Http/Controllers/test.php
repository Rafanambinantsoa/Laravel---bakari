<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class test extends Controller
{
    public function index()
    {
        $data = DB::table('users')
            ->select('role', DB::raw('count(*) as total'))
            ->groupBy('role')
            ->get();

        // dd($data);
        return view('Test.test', compact('data'));
    }
    public function qr()
    {
        $data = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, voluptates nisi quaerat repellendus tempora officia minus accusantium culpa, hic expedita neque corrupti officiis illo pariatur, repudiandae ipsum dolor maiores voluptas?'; // Données à encoder dans le QR code

        // Générer le QR code avec les données
        $qrCode = QrCode::size(300)->generate($data);

        // Passer le QR code généré à une vue (blade)
        return view('Test.qr', ['qrCode' => $qrCode]);
    }
    public function  ko(Logement $logement, User $user)
    {
        // Liste des maisons avec les informations de chaque agent responsable
        $maisons = DB::table('logements')
            ->join('users', 'logements.id_agent', '=', 'users.id')
            ->select('logements.*', 'users.*')
            ->where('logements.status', '=', 'envente')
            ->get();

        // Tableau pour stocker les données de chaque maison avec leur QR code correspondant
        $maisonsAvecQRCode = [];

        foreach ($maisons as $maison) {
            $data = 'Infos pour la maison  
                \n Nom : \n ' . $maison->nom . ' 
                \n Lieu : ' . $maison->lieu . '
                \n Superficie :  ' . $maison->superficie . '  m² 
                \n Nombre de lits :  ' . $maison->lit . '
                \n Douche :' . $maison->douche . '
                \n Garage  : ' . $maison->garage . '
                \n Prix : ' . $maison->prix . ' $ 
                \n  Info de l\'agent responsable    
                \n Agent : \n ' . $maison->name . ' 
                \n Email : ' . $maison->email . ' 
                \n Mobile : ' . $maison->mobile . '  
                \n  Merci pour votre visite , by Kim logements';

            // Générer le QR code avec les données
            $qrCode = QrCode::size(300)->generate($data);

            // Stocker les données de la maison et son QR code dans un tableau
            $maisonAvecQRCode = [
                'maison' => $maison,
                'qrCode' => $qrCode 
            ];
            $maisonsAvecQRCode[] = $maisonAvecQRCode;
        }
        // dd($maisonAvecQRCode);
        return view('Test.qr', compact('maisonAvecQRCode'));
    }
}
