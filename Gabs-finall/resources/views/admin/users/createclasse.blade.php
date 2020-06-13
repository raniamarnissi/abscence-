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
            <form action="{{ route('classe.store') }}" method="post">
            @csrf


                <div class="card-header">Creation d'un Module</div>

                <div class="card-body">
                <table class="table table-hover">
                <div class="panel-heading">
	            
	            </div>
	            <div class="panel-body">
	             

	                
	                <div class="form-group">
	                    <label for="class_name">Nom du classe*</label>
	                    <input class="form-control" name="class_name" placeholder="Nom du classe" type="text" value="{{ old('class_name') }}" id="class_name"  />
                        @error('class_name')<div class="text-danger">{{ $message }}</div> @enderror
            
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
