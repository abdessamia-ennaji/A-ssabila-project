@extends('layouts.app')
@section ('content')
    <div class="container ">
        @if (session ('success'))
            <div class="alert alert-success mt-3 ">
                {{session('success')}}
            </div>
        @endif

        <div class= "card">
            <div class="card-header bg-danger text-white">Editer une Escorte </div>
                <div class="card-body ">
                    <form action="{{ route('update.escorte',$escorte->id)}}" method="post">
                        @csrf
                        
                         <div class="form-group">
                            <label for="">Nom :</label>
                            <input type="text" name ="nomEsc" id="" class="form-control"  value="{{$escorte->nomEsc}}" >
                        </div>

                        <div class="form-group">
                            <label for="">prenom :</label>
                            <input type="text" name ="prenomEsc" id="" class="form-control" value="{{$escorte->prenomEsc}}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">CIN :</label>
                            <input type="text" name ="CIN" id="" class="form-control" value="{{$escorte->CIN}}">
                        </div>

                        <div class="form-group">
                            <label for="">Date :</label>
                            <input type="date" name="date" id="" class="form-control" value="{{$escorte->date}}">
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