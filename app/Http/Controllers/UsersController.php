<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(Logement $logement, User $user)
    {
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
    public function register(Request $request, User $user)
    {
        $image = $request->file('pdp');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath3 = public_path('/images');
        $image->move($destinationPath3, $imageName);

        $user::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'skype' => $request->skype,
            'description' => $request->description,
            'password' => Hash::make($request->password),
            'photo' => $imageName,
            'role' => 'agent',
            'status' => 'desactiver'
        ]);
        return redirect()->back();
    }
    public function loginhandle(Request $request, User $user)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();
            if ($user->status == 'activer') {
                Auth::login($user);
                return redirect()->intended('/add_form');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Your account is disabled.');
            }
        } else {
            return back()->with('error', 'Invalid email or password.');
        }
        // $credentials = $request->only('email', 'password');


        // if (Auth::attempt($credentials)) {
        //     // L'authentification a réussi
        //     return redirect()->intended('/add_form');
        // }

        // // L'authentification a échoué
        // return back()->withErrors([
        //     'email' => 'Les informations d\'identification ne correspondent pas à nos enregistrements.',
        // ]);
    }

    public function activationForm(User $user)
    {
        $kim = DB::table('users')
            ->where('status', '=', 'desactiver')
            ->get();

        //dd($kim);
        return view('Logement.activation', [
            'activations' => $kim
        ]);
    }

    public function  activation(User $user)
    {
        $user->status = 'activer';
        $user->save();

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('accueil');
    }

}
