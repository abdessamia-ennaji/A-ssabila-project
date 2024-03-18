@extends('layouts.app')
@section('content')
    <div class ="container mt-3">
        <a href="/ajouter/kilometrage">
            <button type="submit" class="btn btn-outline-success">Ajouter un kilometrage</button>
        </a>
        <div class ="card">
            <div class ="card-header bg-danger text-white">liste des Chauffeurs</div>
                <div class ="card-body"> 
                    <form action="{{ route('liste.kilometrage') }}" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table table-bordered my-3 ">
                        <thead class="table-primary">
                            <tr>

                                <th scope="col">Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">lettre de voiture</th>
                                <th scope="col">Ancienne KM</th>
                                <th scope="col">Nouveau KM</th>
                                <th scope="col">kilometrage qui past</th>
                                <th scope="col">Action</th>
                                
                            
                                
                            </tr>
                        </thead>
                        <tbody>

                    @if(!empty($kilometrage) && $kilometrage->count())
                            @foreach ($kilometrage as $kilometrages )
                            <tr>
                                <td> {{ $kilometrages->id }}</td>
                                <td> {{ $kilometrages->date }}</td>
                                <td> {{ $kilometrages->lettreVoiture }}</td>
                                <td> {{ $kilometrages->ancienKM }}</td>
                                <td> {{ $kilometrages->nouveauKM }}</td>
                                <td class="text-danger"><b> {{ $kilometrages->nouveauKM - $kilometrages->ancienKM}} </b></td>
                                
                                
                                </td> 
                                    
                                <td> 
                                    {{-- <a href="{{ route('edit-escorte',$escortes->id) }}" class ="btn btn-warning" >Editer</a> --}}
                                    <a  onclick="return confirm('Do you want to delete it ');" href="{{ route('delete-kilometrage',$kilometrages->id) }}" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                    {{$kilometrage->links()}} 
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