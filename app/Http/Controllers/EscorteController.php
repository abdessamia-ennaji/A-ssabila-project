<?php

namespace App\Http\Controllers;

use App\Models\Escorte;
use PDF;

use Illuminate\Http\Request;

class EscorteController extends Controller
{
    
    public function index()
    {
        
        $escorte = Escorte::all();
        
        return view('escorte.ajouter',compact('escorte'));
    }

    
    

    public function store(Request $request)
    {
    $escorte = new Escorte();
    $escorte->nomEsc=$request->nomEsc;
    $escorte->prenomEsc=$request->prenomEsc;
    $escorte->CIN=$request->CIN;
    $escorte->date=$request->date;
    $escorte->save();
    
    return redirect()->back()->with('success', 'Escorte saved');
    }


    public function edit($id)
    {
        $escorte = Escorte::find($id);
        return view('escorte.editer',compact('escorte'));
    }

    public function liste(Request $request)
    {
        $query = $request->get('q');

        $escorte = Escorte::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('prenomEsc', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('escorte.liste',compact('escorte'));
    }


//     public function generatePDF($id)
// {
//     $transport = Transport::find($id);
//     $chauffeur = Chauffeur::find($transport->id);

//     $pdf = PDF::loadView('transport.pdf', compact('transport', 'chauffeur'));
//     return $pdf->download('transport.pdf');
// }




    public function show($id)
    {
        
        $escorte = Escorte::find($id);
        return view('escorte.show',compact('escorte'));
    }


    public function update(Request $request, $id)
    {
        $escorte = Escorte::find($id);
        $escorte->nomEsc=$request->nomEsc;
        $escorte->prenomEsc=$request->prenomEsc;
        $escorte->CIN=$request->CIN;
        $escorte->date=$request->date;
        $escorte-> update();
        return redirect()->route('liste.escorte')->with('success','Escorte updated');
    }

    public function destroy($id)
    {
        $escorte = Escorte::find($id);
        $escorte->delete();
        return back();
    }
    
    
} 