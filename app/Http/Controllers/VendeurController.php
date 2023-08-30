<?php

namespace App\Http\Controllers;
use App\Models\Vendeur;
use App\Http\Requests\StoreVendeurRequest;

use Illuminate\Http\Request;

class VendeurController extends Controller
{
    public function index(){

        $vendeurs = Vendeur::paginate(10);
        return view('vendeurs.index', compact('vendeurs'));
    }

    public function create(){
        return view('vendeurs.create');
    }

    public function edit(Vendeur $vendeur){
        return view('vendeurs.edit', compact('vendeur'));
    }

    public function store(Vendeur $vendeur, StoreVendeurRequest $request )
    {
        try{
            $vendeur->nom = $request->nom;
            $vendeur->prenom = $request->prenom;
            $vendeur->telephone = $request->telephone;
            $vendeur->email = $request->email;
            $vendeur->adresse = $request->adresse;

            $vendeur->save();

            return redirect()->route('vendeurs.create')->with('success_message', 'Le vendeur est enregistré');
        }catch(Exception $e){
            dd($e);
        }
    }
}
