@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <a href="/ajouter/escorte">
            <button type="submit" class="btn btn-outline-success">Ajouter un escorte / assistance</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="{{ route('liste.escorte') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id Escorte</th>
                                <th scope="col">Nom de Escorte</th>
                                <th scope="col">Prenom de Escorte</th>
                                <th scope="col">CIN de Escorte</th>
                                <th scope="col">Date </th>
                                <th scope="col">Actions </th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    @if(!empty($escorte) && $escorte->count())
                            @foreach ($escorte as $escortes )
                            <tr>
                                <td> {{ $escortes->id }}</td>
                                <td> {{ $escortes->nomEsc }}</td>
                                <td> {{ $escortes->prenomEsc }}</td>
                                <td> {{ $escortes->CIN }}</td>
                                <td> {{ $escortes->date }}</td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    <a href="{{ route('edit-escorte',$escortes->id) }}" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-escorte',$escortes->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                    {{$escorte->links()}} 
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