@extends('layouts.app')
@section ('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-header bg-danger text-white">Détails de la commande</div>
            <div class="card-body">

                <div class="row mb-3">
                    <label >Chauffeur :</label>
                    <div class="col-md-6">
                        @foreach ($chauffeur as $chauffeurs)
                            @if ($chauffeurs->id == $transport->chauffeurId)
                                <p class="form-control-static">{{ $chauffeurs->nomChfr }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>

                 <div class="form-group row">
                    <label>Numero d'immatriculation :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->numMatricule }}</p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">licence :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->licence }}</p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">La visite :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->laVisite }}</p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">carte grise :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->cartGrise }}</p>
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date debut d'assurance :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->dateDebutAssurance }}</p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date fin d'assurance :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->dateFinAssurance }}</p>
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">lettre de voiture :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->lettrevoiture }}</p>
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">lettre de voiture :</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">{{ $transport->kilometre }}</p>
                    </div>
                </div>



                
            
            

                <div class="text-center mt-4">
                    <a href="{{ route('transport.pdf', $transport->id) }}" class="btn btn-primary" target="_blank">Imprimer PDF</a>
                </div>
            </div>
        </div>
    </div>
@endsection
