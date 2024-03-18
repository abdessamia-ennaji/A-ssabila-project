@extends('layouts.app')
@section ('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-header bg-danger text-white">Détails de la commande</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Chauffeur :</label>
                    <div class="col-sm-9">
                        @foreach ($chauffeur as $chauffeurs)
                            @if ($chauffeurs->id == $reclamation->chauffeurId)
                                <p class="form-control-static">{{ $chauffeurs->nomChfr }} {{ $chauffeurs->prenomChfr }} </p>
                            @endif
                        @endforeach
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Reclamation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $reclamation->reclamation }}</p>
                    </div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">date de reclamation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $reclamation->dateRec }}</p>
                    </div>
                </div>

                
                
            
            </p>

                <div class="text-center mt-4">
                    <a href="{{ route('reclamation.pdf', $reclamation->id) }}" class="btn btn-primary" target="_blank">Imprimer PDF</a>
                </div>
            </div>
        </div>
    </div>
@endsection
