<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Models\Transport;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('electeur.ajouter');

         $transport = Transport::all();

         return view('chauffeur.ajouter', compact('transport'));

        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste(Request $request)
    {
        $query = $request->get('q');

        $chauffeur = Chauffeur::where('nomChfr', 'LIKE', '%' . $query . '%')
        ->orWhere('prenomChfr', 'LIKE', '%' . $query . '%')->paginate(3);
        return view('chauffeur.liste',compact('chauffeur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chauffeur=new Chauffeur();
        $chauffeur->nomChfr = $request->nomChfr;
        $chauffeur->prenomChfr = $request->prenomChfr;
        $chauffeur->CIN = $request->CIN;
        $chauffeur->date = $request->date;
        $chauffeur->save();
        return redirect()->back()->with('success','Chauffeur saved');
    }


    public function edit($id)
    {
        $chauffeur = Chauffeur::find($id);
        return view('chauffeur.editer',compact('chauffeur'));
    }


    public function update(Request $request, $id)
    {
        $chauffeur = Chauffeur::find($id);
        $chauffeur->nomChfr = $request->nomChfr;
        $chauffeur->prenomChfr = $request->prenomChfr;
        $chauffeur->date = $request->date;
        $chauffeur-> CIN =$request->CIN;
        $chauffeur-> update();
        return redirect()->route('liste.chauffeur')->with('success','Chauffeur updated');
    }


    public function destroy($id)
    {
        $chauffeur = Chauffeur::find($id);
        $chauffeur->delete();
        return back();
    }

    


}
