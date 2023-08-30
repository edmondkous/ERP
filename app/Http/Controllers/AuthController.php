<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    Public function login()
    {
        return view('auth.login');
    }

    Public function register()
    {
        return view('auth.register');
    }

    Public function registerPost(Request $request)
    {

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect('login')->with('success','Utilisateur enregistrer avec succès');
    }

    Public function loginPost(Request $request)
    {

        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)){
            return redirect()->route('dashboard')->with('success', 'Vous êtes connectés');
        }
        return back()->with('error', 'Connexion echouée');

    }


}
