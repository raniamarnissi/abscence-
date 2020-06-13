@extends('layouts.app')

@section('content')

<h1>Les abscences</h1>
    
<table class="table table-hover">
    <thead>
      <tr>
 
        <th scope="col">Nom_module</th>
        <th scope="col">abscence </th>
        <th scope="col">Détail d'abscence </th>
        <th scope="col">date_absence </th>
        
      </tr>
    </thead>
    <tbody>
        @foreach (  $abscence as $abs)            
            <tr>
            
                <td> {{ $abs->Nom_module}}</td>
                <td> {{ $abs->absente}}</td>
                <td>{{$abs->commentaire}}</td>
                <td>{{$abs->date_absence}}</td>

       
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection