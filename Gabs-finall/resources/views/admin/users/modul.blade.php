@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

@if (session('Addmodul'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Addmodul') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


  <center>    <div class="card-header"><b style="font-size:20px">list of modul</b></div></center>


                <div class="card-body">
                <table class="table table-hover">
    <thead>
      <tr>
      <tr>
       
      <th scope="col">id</th>
    
       <th scope="col">modul</th>
       <th scope="col">operation</th>
      
     </tr>
   </thead>
   <tbody>
       @foreach ($modul as $module)            
           <tr>
             
           <td> {{ $module->id}}</td>
             
               <td> {{ $module->modul }}</td>


               <td> <a href="{{ route('modul.edit', $module->id) }}" class="btn btn-outline-info">Edit</a>
 <form action="{{ route('modul.destroy', $module->id) }}" method="POST">
           
            @csrf
                @method('Delete')
                <button type="submit" class="btn btn-outline-danger"  data-toggle="modal" data-target="#confirmDeleteModal">supprimer  !</button>
                </form>
                <td>

            </tr>



           </tr>
       @endforeach


    </tbody>
  </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
