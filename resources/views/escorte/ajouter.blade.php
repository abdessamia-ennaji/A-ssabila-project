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
                <form action="{{ route('store.escorte') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Nom :</label>
                        <input type="text" name="nomEsc" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom :</label>
                        <input type="text" name="prenomEsc" id="" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">CIN :</label>
                        <input type="text" name="CIN" id="" class="form-control">
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