@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <a href="/ajouter/chauffeur">
            <button type="submit" class="btn btn-outline-success">Ajouter un chauffeur</button>
        </a>
        <div class ="card">
            
            
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="{{ route('liste.chauffeur') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id Chauffeur</th>
                                <th scope="col">Nom de Chauffeur</th>
                                <th scope="col">Prenom de Chauffeur</th>
                                <th scope="col">CIN de Chauffeur</th>
                                <th scope="col">Date debut</th>
                                <th scope="col">Action</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    @if(!empty($chauffeur) && $chauffeur->count())
                            @foreach ($chauffeur as $chauffeurs )
                            <tr>
                                <td> {{ $chauffeurs->id }}</td>
                                <td> {{ $chauffeurs->nomChfr }}</td>
                                <td> {{ $chauffeurs->prenomChfr }}</td>
                                <td> {{ $chauffeurs->CIN }}</td>
                                <td> {{ $chauffeurs->date }}</td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="{{ route('edit-chauffeur',$chauffeurs->id) }}" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-chauffeur',$chauffeurs->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                    {{$chauffeur->links()}} 
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