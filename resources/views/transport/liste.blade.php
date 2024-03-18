@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <a href="/ajouter/transport">
            <button type="submit" class="btn btn-outline-success">Ajouter un transport</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des voitures</div>
                <div class ="card-body"> 
                    <form action="{{ route('liste.transport') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Numero d'immatriculation </th>
                            <th scope="col">Licence </th>
                            <th scope="col">Carte grise</th>
                            <th scope="col">lettre de voiture</th>
                            <th scope="col">Kilometre</th>
                            <th scope="col">Chauffeur</th>
                            <th scope="col">Actions</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($transport) && $transport->count())
                        @foreach ($transport as $transports )
                        <tr>
                            <td> {{ $transports->id }}</td>
                            <td> {{ $transports->numMatricule }}</td>
                            <td> {{ $transports->licence }}</td>
                            <td> {{ $transports->cartGrise }}</td>
                            <td> {{ $transports->lettrevoiture }}</td>
                            <td> {{ $transports->kilometre }}</td>
                                
                            
                            
                            @foreach ($chauffeur as $chauffeurs)
                                @if($chauffeurs->id == $transports->chauffeurId)
                                    <td value="{{ $chauffeurs->id }}" class="text-center">
                                                {{ $chauffeurs->nomChfr }}
                                @endif
                            @endforeach
                
                            </td> 
                            

                            <td> 
                                <a href="{{ route('show-transport',$transports->id) }}" class ="btn btn-info" >Details</a>
                                <a href="{{ route('edit-transport',$transports->id) }}" class ="btn btn-warning" >Editer</a>
                                <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-transport',$transports->id )}}" class ="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    @else 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    @endif
                


                    </table>
                    {{$transport->links()}}

                    
                </div>
            </div>
        </div>
    </div>
@endsection