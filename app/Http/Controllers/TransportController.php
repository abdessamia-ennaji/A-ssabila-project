<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Escorte;
use PDF;

use App\Models\Transport;
use Illuminate\Http\Request;
// use App\Models\Parti;

class TransportController extends Controller
{
    
    public function index()
    {
        $escorte = Escorte::all();
        $transport = Transport::all();
        $chauffeur = Chauffeur::all();
        return view('transport.ajouter',compact('chauffeur','escorte'));
    }

    
    

    public function store(Request $request)
    {
    $transport = new Transport();
    $transport->numMatricule = $request->numMatricule;
    $transport->licence = $request->licence;
    $transport->laVisite = $request->laVisite;
    $transport->dateDebutlaVisite = $request->dateDebutlaVisite;
    $transport->dateFinlaVisite = $request->dateFinlaVisite;
    $transport->cartGrise = $request->cartGrise;
    $transport->dateDebutcartGrise = $request->dateDebutcartGrise;
    $transport->dateFincartGrise = $request->dateFincartGrise;
    $transport->dateDebutAssurance = $request->dateDebutAssurance;
    $transport->dateFinAssurance = $request->dateFinAssurance;
    $transport->lettrevoiture = $request->lettrevoiture;
    $transport->chauffeurId = $request->chauffeurId;
    $transport->escorteId = $request->escorteId;
    $transport->trajet = $request->trajet;
    $transport->nbrChaises = $request->nbrChaises;
    $transport->save();
    
    return redirect()->back()->with('success', 'Transport saved');
    }


    public function edit($id)
    {
        $escorte = Escorte::all();
        $chauffeur = Chauffeur::all();
        $transport = Transport::find($id);
        return view('transport.editer',compact('chauffeur','transport','escorte'));
    }

    public function liste(Request $request)
    {
        $query = $request->get('q');

        // $produit = Produit::all();
        $chauffeur = Chauffeur::all();
        $transport = Transport::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('chauffeurId', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('transport.liste',compact('transport','chauffeur'));
    }


    public function generatePDF($id)
{
    $transport = Transport::find($id);
    $chauffeur = Chauffeur::find($transport->id);

    $pdf = PDF::loadView('transport.pdf', compact('transport', 'chauffeur'));
    return $pdf->download('transport.pdf');
}




    public function show($id)
    {
        
        $chauffeur = Chauffeur::all();
        $transport = Transport::find($id);
        return view('transport.show',compact('chauffeur','transport'));
    }


    public function update(Request $request, $id)
    {
        $transport = Transport::find($id);
        $transport->numMatricule = $request->numMatricule;
        $transport->licence = $request->licence;
        $transport->laVisite = $request->laVisite;
        $transport->cartGrise = $request->cartGrise;
        $transport->dateDebutAssurance = $request->dateDebutAssurance;
        $transport->dateFinAssurance = $request->dateFinAssurance;
        $transport->lettrevoiture = $request->lettrevoiture;
        $transport->chauffeurId = $request->chauffeurId;
        $transport-> update();
        return redirect()->route('liste.transport')->with('success','Transport updated');;
    }

    public function destroy($id)
    {
        $transport = Transport::find($id);
        $transport->delete();
        return back();
    }
    
    
} 