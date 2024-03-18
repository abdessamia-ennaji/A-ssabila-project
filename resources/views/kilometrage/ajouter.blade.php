@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">Ajouter un Escorte</div>
            <div class="card-body">
                <form action="{{ route('store.kilometrage') }}" method="post">
                    @csrf



                    {{-- <div class="form-group">
                        <label for="">Chauffeur :</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId">        
                            <option selected>Open this select menu</option>
                            @foreach ($chauffeur as $chauffeurs ) 
                            <option value="{{$chauffeurs->id}}" > {{ $chauffeurs->nomChfr }} </option>
                            @endforeach
                            
                        </select>
                    </div> --}}
                    
                    <div class="form-group">
                        <label for="">lettre de voiture:</label>
                        <select name="lettreVoiture" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
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
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="">Ancienne KM :</label>
                        <input type="number" name="ancienKM" id="" class="form-control">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Nouveau KM :</label>
                        <input type="number" name="nouveauKM" id="" class="form-control">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="">Date :</label>
                        <input type="date" name="date" id="" class="form-control">
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <button class="btn btn-secondary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection