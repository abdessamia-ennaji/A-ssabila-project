@extends('layouts.app')
@section('content')
    <div class ="container mt-3">

        <a href="/ajouter/arriveedepart">
            <button type="submit" class="btn btn-outline-success">Ajouter un arrivee,depart</button>
        </a>

        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
            
                <div class ="card-body"> 
                    <form action="{{ route('liste.arriveedepart') }}" method="GET" class="d-flex" role="search">
                        <select name="q" class="form-select me-2" aria-label="Search">
                          <option selected>Choose...</option>
                          <option value="Arrivee">Arrivee</option>
                          <option value="Depart">Depart</option>
                          
                        </select>
                        <button type="submit" class="btn btn-outline-success">Search</button>
                      </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id</th>
                                <th scope="col">Nom d'etudiant</th>
                                <th scope="col">Prenom d'etudiant</th>
                                <th scope="col">Situation</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>


                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    {{-- @if(!empty($arriveedepart) && $arriveedepart->count()) --}}

                            @foreach ($arriveedepart as $arriveedeparts )
                            <tr>
                                    
                                <td> {{ $arriveedeparts->id }}</td>
                                <td> {{ $arriveedeparts->nomEtu }}</td>
                                <td> {{ $arriveedeparts->prenomEtu }}</td>
                                <td> {{ $arriveedeparts->situation }}</td>
                                <td> {{ $arriveedeparts->date }}</td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    {{-- <a href="{{ route('show-reclamation',$reclamations->id) }}" class ="btn btn-info" >Details</a> --}}
                                    <a href="{{ route('edit-arriveedepart',$arriveedeparts->id) }}" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-arriveedepart',$arriveedeparts->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                   {{-- {{$arriveedepart->links()}}  
                    @else 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    @endif --}}
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection