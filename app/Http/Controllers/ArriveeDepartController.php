<?php

namespace App\Http\Controllers;

use App\Models\ArriveeDepart;
use PDF;

use Illuminate\Http\Request;

class ArriveeDepartController extends Controller
{
    
    public function index()
    {
        
        $arriveedepart = ArriveeDepart::all();
        // $transport = Transport::all();
        return view('arriveedepart.ajouter',compact('arriveedepart'));
    }

    
    

    public function store(Request $request)
    {
        $arriveedepart = new ArriveeDepart();
        $arriveedepart->nomEtu = $request->nomEtu;
        $arriveedepart->prenomEtu=$request->prenomEtu;
        $arriveedepart->situation=$request->situation;
        $arriveedepart->date=$request->date;
        $arriveedepart->save();
    
    return redirect()->back()->with('success', 'arriveedepart saved');
    }


    public function edit($id)
    {
        // $chauffeur = Chauffeur::all();
        $arriveedepart = ArriveeDepart::find($id);
        return view('arriveedepart.editer',compact('arriveedepart'));
    }

    public function liste(Request $request)
    {
        $query = $request->get('q');
        // $chauffeur = Chauffeur::all();
        $arriveedepart = ArriveeDepart::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('situation', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('arriveedepart.liste',compact('arriveedepart'));
    }


//     public function generatePDF($id)
// {
//     $reclamation = Reclamation::find($id);
//     $chauffeur = Chauffeur::find($reclamation->chauffeurId);

//     $pdf = PDF::loadView('reclamation.pdf', compact('reclamation', 'chauffeur'));
//     return $pdf->download('reclamation.pdf');
// }




    // public function show($id)
    // {
    //     $chauffeur = Chauffeur::all();
    //     $reclamation = Reclamation::find($id);
    //     return view('reclamation.show',compact('reclamation','chauffeur'));
    // }


    public function update(Request $request, $id)
    {
        $arriveedepart = ArriveeDepart::find($id);
        $arriveedepart->nomEtu = $request->nomEtu;
        $arriveedepart->prenomEtu=$request->prenomEtu;
        $arriveedepart->situation=$request->situation;
        $arriveedepart->date=$request->date;
        $arriveedepart-> update();
        return redirect()->route('liste.arriveedepart')->with('success','arriveedepart updated');
    }

    public function destroy($id)
    {
        $arriveedepart = ArriveeDepart::find($id);
        $arriveedepart->delete();
        return back();
    }
    
    
} 