@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">Ajouter un Reclamation</div>
            <div class="card-body">
                <form action="{{ route('store.reclamation') }}" method="post">
                    @csrf
                     <div class="form-group">
                        <label for="">Chauffeur :</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId">        
                            <option selected>Open this select menu</option>
                            @foreach ($chauffeur as $chauffeurs ) 
                            <option value="{{$chauffeurs->id}}" > {{ $chauffeurs->nomChfr }} {{ $chauffeurs->prenomChfr }}</option>
                            @endforeach
                            
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="">lettre de voiture:</label>
                        <select name="lettrevoiture" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">Reclamation :</label>
                        <input type="text" name="reclamation" id="" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Date de Reclamation :</label>
                        <input type="date" name="dateRec" id="" class="form-control">
                    </div>
                    
                   
                    
                    
                    
                    
                    <div class="form-group">
                        <button class="btn btn-secondary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection