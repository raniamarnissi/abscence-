@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
@if (session('updateteacher'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateteacher') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
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



                <div class="card-header">list of classe</div>

                <div class="card-body">
                <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4>Choix du classe</h4>
		            </div>
		            <div class="panel-body">

						

			            <div class="form-group">
			             
							<div class="card-body">

                            
                <form action="{{ url('admin/updateclasses/'.$classe->id) }}"method="POST">

                
                @csrf
                @method('PATCH')
                @foreach ($roles as $role)    
                <div >
                <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id }}" id="{{$role->id }} "  @foreach ($classe->users as $userRole)
                 @if($userRole->id == $role->id) checked      @endif   @endforeach  >
                <label for="{{$role->id }}" class="form-check-label">{{$role->name }}</label>
                <br>       <br> 
            @endforeach 
            </div>
						<br><br>
						<center>
			            <div class="form-group">
			                <input name="submit" type="submit" class="btn btn-primary" value="Affecter" />
			            </div>
			            </center>
            </form>           
			         
			          
		            </div>
		        </div>
		    </div>
		</div>

	</div>   
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
