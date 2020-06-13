@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

@if (session('Adduser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Adduser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ route('seance.store') }}" method="post">
            @csrf


                <div class="card-header">Creation d'un seance</div>

                <div class="card-body">
                <table class="table table-hover">
                <div class="panel-heading">
	            
	            </div>
	            <div class="panel-body">
	             
 
				<div class="form-group">
	                    <label for="name">Module *</label>
	                	<select name="module" class="form-control">
						@foreach ($users->moduls as $module)
						<option >   
						
						{{ $module->modul}}
                       </option>
     
          
                    @endforeach
					</select>
					<label for="name">Classes *</label>
	                	<select name="classe" class="form-control">
						@foreach ($users->classes as $classe) 
						<option >   
						
				 {{ $classe->class_name}} 
                       </option>
           
          
                    @endforeach
					
						</select>
	                </div>

               
					<div class="form-group">
	                    <label for="date">Date *</label>
	                    <input class="form-control" name="date" placeholder="Date Seance" type="date" value="{{ old('date') }}" id="date"  />
                        @error('date')<div class="text-danger">{{ $message }}</div> @enderror
	                </div>

	                 <div class="form-group">
	                    <label for="Heure_debut">Heure debut *</label>
	                    <input class="form-control" name="Heure_debut" placeholder="Heure debut" type="time" value="{{ old('Heure_debut') }}" id="Heure_debut" />
	                    @error('date')<div class="text-danger">{{ $message }}</div> @enderror
	                </div>

	           
               <div class="form-group">
	                    <label for="Heure_fin">Heure fin *</label>
	                    <input class="form-control" name="Heure_fin" placeholder="Heure fin" type="time" value="{{ old('Heure_fin') }}" id="Heure_fin"  />
						@error('Heure_fin')<div class="text-danger">{{ $message }}</div> @enderror
	                </div>


                     <div class="form-group">
	                    <label for="type">Type *</label>
	                	<select value="{{ old('type') }}" id="type"name="type" class="form-control">
						        <option value="Cours" >Cours</option>
						        <option value="TD" >TD</option>
						        <option value="TP"  >TP</option>
						</select>
						@error('type')<div class="text-danger">{{ $message }}</div> @enderror
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
