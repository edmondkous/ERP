<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientRequest;

use Barryvdh\DomPDF\Facade\Pdf;


class ClientController extends Controller
{
    public function index(){

        $clients = Client::paginate(5);
        return view('clients.index', compact('clients'));
    }

    public function create(){
        return view('clients.create');
    }

    public function edit(Client $client){
        return view('clients.edit', compact('client'));
    }

    public function store(Client $client, StoreClientRequest $request )
    {
        try{
            $client->civilite = $request->civilite;
            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->telephone = $request->telephone;
            $client->email = $request->email;
            $client->adresse = $request->adresse;

            $client->save();

            return redirect()->route('clients.create')->with('success_message', 'Le client est enregistré');
        }catch(Exception $e){
            dd($e);
        }
    }

    //PDF
    public function downloadPDF(){

        $clients = Client::orderBy('id','ASC')->get();
        $data['clients'] = $clients;
        $pdf = Pdf::loadView('clients.pdf_client', $data);
        //return $pdf->stream();
        return $pdf->download('Client.pdf');



    }
}
