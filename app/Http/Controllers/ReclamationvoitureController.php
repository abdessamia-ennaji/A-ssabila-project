<?php

namespace App\Http\Controllers;

use App\Models\Escorte;
use App\Models\Chauffeur;
use App\Models\Reclamation;
use App\Models\Transport;
use PDF;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    
    public function index()
    {
        
        $reclamation = Reclamation::all();
        $chauffeur = Chauffeur::all();
        $transport = Transport::all();
        return view('reclamation.ajouter',compact('reclamation','chauffeur','transport'));
    }

    
    

    public function store(Request $request)
    {
    $reclamation = new Reclamation();
    $reclamation->chauffeurId = $request->chauffeurId;
    $reclamation->reclamation=$request->reclamation;
    $reclamation->dateRec=$request->dateRec;
    $reclamation->lettrevoiture=$request->lettrevoiture;
    $reclamation->save();
    
    return redirect()->back()->with('success', 'Reclamation saved');
    }


    public function edit($id)
    {
        $chauffeur = Chauffeur::all();
        $reclamation = Reclamation::find($id);
        return view('reclamation.editer',compact('reclamation','chauffeur'));
    }

    public function liste(Request $request)
    {
        $query = $request->get('q');
        $chauffeur = Chauffeur::all();
        $reclamation = Reclamation::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('reclamation', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('reclamation.liste',compact('reclamation','chauffeur'));
    }


    public function generatePDF($id)
{
    $reclamation = Reclamation::find($id);
    $chauffeur = Chauffeur::find($reclamation->chauffeurId);

    $pdf = PDF::loadView('reclamation.pdf', compact('reclamation', 'chauffeur'));
    return $pdf->download('reclamation.pdf');
}




    public function show($id)
    {
        $chauffeur = Chauffeur::all();
        $reclamation = Reclamation::find($id);
        return view('reclamation.show',compact('reclamation','chauffeur'));
    }


    public function update(Request $request, $id)
    {
        $reclamation = Reclamation::find($id);
        $reclamation->chauffeurId = $request->chauffeurId;
        $reclamation->reclamation=$request->reclamation;
        $reclamation->dateRec=$request->dateRec;
        $reclamation-> update();
        return redirect()->route('liste.reclamation')->with('success','reclamation updated');
    }

    public function destroy($id)
    {
        $reclamation = Reclamation::find($id);
        $reclamation->delete();
        return back();
    }
    
    
} 