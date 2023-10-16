<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    
    public function form_login(Request $request){
        if ($request->session()->get('client')) {

            return redirect('/boutique')->with('status', 'Déconnectez-vous d\'abord !');
        }
        return view('login');
    }

    public function form_register(Request $request){
        if ($request->session()->get('client')) {

            return redirect('/boutique')->with('status', 'Déconnectez-vous d\'abord !');
        }
        return view('register');
    }

    public function form_category(){
        return view('category');

    }

    public function propos(){
        return view('apropos');
    }

    public function traitement_register(Request $request ){
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "email|required|unique:clients",
            "password" => "required|min:8",

        ]);

        $client = new Client();
        $client -> nom = $request -> input('nom');
        $client -> prenom = $request -> input('prenom');
        $client -> email = $request -> input('email');
        $client -> password = bcrypt($request -> input('password'));
        $client ->save();

        return redirect('/')->with('status', 'Votre compte a été bien créé !');

    }

    public function traitement_login(Request $request){
        $request->validate([
            "email" => "email|required",
            "password" => "required",

        ]);

        $client = Client::where('email', $request->input('email'))->first();

        if($client) {
            
            if (Hash::check($request->input('password'), $client->password)) {
                
                $request->session()->put('client', $client);

                return redirect('/boutique');

            }else {
                return back()->with('status', 'Email ou mot de passe incorrect');
            }

        }else {
            return back()->with('status', 'Désolé ! Vous n\'avez pas de compte sur cet email.');
        }
    }

    public function logouts(Request $request){
        $request->session()->forget('client');

        return redirect('/login')->with('status', 'Vous venez de vous déconnectez !');
    }
}
