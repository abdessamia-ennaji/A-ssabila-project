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
                    <form action="{{ route('update.reclamation',$reclamation->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Chauffeur :</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="chauffeurId" value="{{$reclamation->chauffeurId}}">        
                                <option selected>Open this select menu</option>
                                @foreach ($chauffeur as $chauffeurs ) 
                                <option value="{{$chauffeurs->id}}" > {{ $chauffeurs->nomChfr }} </option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">reclamation :</label>
                            <input type="text" name ="reclamation" id="" class="form-control" value="{{$reclamation->reclamation}}">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Date de Reclamation :</label>
                            <input type="date" name ="dateRec" id="" class="form-control" value="{{$reclamation->dateRec}}">
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