@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
@if (session('updatemodul'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updatemodul') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ route('modul.store') }}" method="post">
            @csrf


                <div class="card-header">Creation d'un Module</div>

                <div class="card-body">
                <table class="table table-hover">
                <div class="panel-heading">
	            
	            </div>
	            <div class="panel-body">
	             

	                
	                <div class="form-group">
	                    <label for="modul">Nom du Module *</label>
	                    <input class="form-control" name="modul" placeholder="Nom du Module" type="text" value="{{ old('modul') }}" id="modul"  />
                        @error('modul')<div class="text-danger">{{ $message }}</div> @enderror
            
	                </div>

	                <div class="form-group">
	                    <input name="submit" type="submit" class="btn btn-primary" value="Inserer" />
	                    <input name="cancel" type="reset" class="btn btn-default" value="Cancel" />
	                </div>
	                
	            </div>
	        </div>
  </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
