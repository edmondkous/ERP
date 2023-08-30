<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){

        $produits = Produit::paginate(5);
        return view('produits.index', compact('produits'));
    }

    public function create(){
        return view('produits.create');
    }

    public function edit(Produit $produit){
        return view('produits.edit', compact('produit'));
    }

    public function store(Request $request )
    {
        $request->validate([
            'nom'=> 'required',
            'prix'=> 'required',
            'Stock'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image|mimes:png,jpg,jpeg,svg,pdf|max:2048',

        ]);
        $input = $request->all();

        if($image=$request->file('image')){
            $destinationPath ='img/';
            $profileImage = date('YmdHis'). " . " . $image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = "$profileImage";
        }

            Produit::create($input);

            return redirect()->route('produits.create')->with('success_message', 'Le produit est enregistré');
    }
}
