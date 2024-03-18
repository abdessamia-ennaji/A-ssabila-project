@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <div class ="card">
            <div class ="card-header bg-danger text-white">Quantite  des Voiture transport scolaire</div>
                <div class ="card-body"> 
                    <table class ="table">
                        <thead>
                            <tr>
                                <th scope="col">Quantite </th>        
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($commande as $commandes ) --}}
                            <tr>  
                                <td> {{ $commande->sum('totalCommande') }} </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection