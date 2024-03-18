@extends('layouts.app')
@section('content')
    <div class ="container mt-3">

        <a href="/ajouter/reclamation">
            <button type="submit" class="btn btn-outline-success">Ajouter un reclamation</button>
        </a>

        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
            
                <div class ="card-body"> 
                    <form action="{{ route('liste.reclamation') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Lettre de voiture</th>
                                <th scope="col">Nom de Chauffeur</th>
                                <th scope="col">Reclamation</th>
                                <th scope="col">Date de reclamation</th>
                                <th scope="col">Actions</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    @if(!empty($reclamation) && $reclamation->count())

                            @foreach ($reclamation as $reclamations )
                            <tr>
                                <td> {{ $reclamations->id }}</td>
                                <td> {{ $reclamations->lettrevoiture }}</td>
                                    @foreach ($chauffeur as $chauffeurs)
                                        @if($chauffeurs->id == $reclamations->chauffeurId)
                                            <td value="{{ $chauffeurs->id }}" class="text-center">
                                                        {{ $chauffeurs->nomChfr }}
                                        @endif
                                    @endforeach
                                <td> {{ $reclamations->reclamation }}</td>
                                <td> {{ $reclamations->dateRec }}</td>
                                
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="{{ route('show-reclamation',$reclamations->id) }}" class ="btn btn-info" >Details</a>
                                    <a href="{{ route('edit-reclamation',$reclamations->id) }}" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-reclamation',$reclamations->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                   {{$reclamation->links()}}  
                    @else 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection