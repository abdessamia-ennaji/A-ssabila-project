@extends('layouts.app')
@section ('content')
    <div class="container ">
        @if (session ('success'))
            <div class="alert alert-success mt-3 ">
                {{session('success')}}
            </div>
        @endif

        <div class= "card">
            <div class="card-header bg-danger text-white">Editer un Chauffeur </div>
                <div class="card-body ">
                    <form action="{{ route('update.chauffeur',$chauffeur->id)}}" method="post">
                        @csrf
                         <div class="form-group">
                            <label for="">Nom :</label>
                            <input type="text" name ="nomChfr" id="" class="form-control"  value="{{$chauffeur->nomChfr}}" >
                        </div>

                        <div class="form-group">
                            <label for="">prenom :</label>
                            <input type="text" name ="prenomChfr" id="" class="form-control" value="{{$chauffeur->prenomChfr}}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">CIN :</label>
                            <input type="text" name ="CIN" id="" class="form-control" value="{{$chauffeur->CIN}}">
                        </div>

                        <div class="form-group">
                            <label for="">Date :</label>
                            <input type="date" name ="date" id="" class="form-control" value="{{$chauffeur->date}}">
                        </div>

                        
                        <div class="form-group">
                            <button class="btn btn-secondary">Modifier</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
   </div>
@endsection