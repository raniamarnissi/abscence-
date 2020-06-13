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
        

	
		


		<!-- Si allAbsInfo affiche la table de allAbsInfo-->
		
		<form action="{{URL::to('/search')}}" method="GET" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search users"> <span class="input-group-btn">
					<div class="form-group">
				
				
	                <input name="submit" type="submit" class="btn btn-primary" value="Search" />
	            </div>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>

	            
	        

			<br>



			<h2>Liste des absence :</h2>
			<center>
			<table class="table table-striped">
		    	<thead>
		    		<tr>
		        		<th>module</th>
		        		<th>nom_etu</th>
		        		<th>nom_etu</th>
		        		
		        		<th>justifiee</th>
		        		<th>comm_abs</th>
		        		<th>date_seance</th>
		        		<th>heure_debut</th>
		        		<th>heure_fin</th>
		        		<th>type_seance</th>
		      		</tr>
		    	</thead>
		    	<tbody>
				@foreach($details as $user)
					


						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>

						@foreach ($user->classes as $classe) 
       
						<td>{{$classe->class_name}}</td>
					</tr>
					
                    @endforeach
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>
				</tbody>
	  		</table>
			
				<br><br>
				<button type="button" class="btn btn-default btn">
		        	<a href="http://localhost/GAbs/index.php/export/exportAllAbs">
				    <span class="glyphicon glyphicon-export" aria-hidden="true"></span>
				    Export Data</a>
				</button>
				<br><br>
		</center>

	</div>

	<!-- footer -->
	
</body>
</html>
@endsection