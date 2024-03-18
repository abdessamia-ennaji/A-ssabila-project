@extends('layouts.app')
@section ('content')
    <div class="container ">
        @if (session ('success'))
            <div class="alert alert-success mt-3 ">
                {{session('success')}}
            </div>
        @endif

        <div class= "card">
            <div class="card-header bg-danger text-white">Editer un Reclamation </div>
                <div class="card-body">
                    <form action="{{ route('update.arriveedepart',$arriveedepart->id)}}" method="post">
                        @csrf
                        

                        <div class="form-group">
                            <label for="">Nom :</label>
                            <input type="text" name ="nomEtu" id="" class="form-control" value="{{$arriveedepart->nomEtu}}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Prenom :</label>
                            <input type="text" name ="prenomEtu" id="" class="form-control" value="{{$arriveedepart->prenomEtu}}">
                        </div> 

                        <div class="form-group">
                            <label for="">Situation:</label>
                            <select name="situation" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  value="{{$arriveedepart->situation}}"  >
                                <option value="Arrivee">Arrivee</option>
                                <option value="Depart">Depart</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Date :</label>
                            <input type="date" name="date" id="" class="form-control" value="{{$arriveedepart->date}}">
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