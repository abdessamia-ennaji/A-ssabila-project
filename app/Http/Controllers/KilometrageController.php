<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Kilometrage;
use PDF;

use App\Models\Transport;
use Illuminate\Http\Request;
// use App\Models\Parti;

class KilometrageController extends Controller
{
    
    public function index()
    {
        
        // $transport = Transport::all();
        $kilometrage = Kilometrage::all();
        return view('kilometrage.ajouter',compact('kilometrage'));
    }

    
    

    public function store(Request $request)
    {
    $kilometrage = new Kilometrage();
    $kilometrage->lettreVoiture = $request->lettreVoiture;
    $kilometrage->ancienKM = $request->ancienKM;
    $kilometrage->nouveauKM = $request->nouveauKM;
    $kilometrage->date = $request->date;
    
    $kilometrage->save();
    
    return redirect()->back()->with('success', 'kilometrage saved');
    }


    public function edit($id)
    {
        $chauffeur = Chauffeur::all();
        $transport = Transport::find($id);
        return view('transport.editer',compact('chauffeur','transport'));
    }

    public function liste(Request $request)
    {
        $query = $request->get('q');

        // $produit = Produit::all();
        
        $kilometrage = Kilometrage::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('lettrevoiture', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('kilometrage.liste',compact('kilometrage'));
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
        $transport->kilometre = $request->kilometre;
        $transport->chauffeurId = $request->chauffeurId;
        $transport-> update();
        return redirect()->route('liste.transport')->with('success','Transport updated');;
    }


    
    public function destroy($id)
    {
        $kilometrage = Kilometrage::find($id);
        $kilometrage->delete();
        return back();
    }
    
    
} 