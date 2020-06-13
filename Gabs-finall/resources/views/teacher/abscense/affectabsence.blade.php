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
            <form action="{{ url('teacher/affichestudent') }}" method="post" role="search"> 
            @csrf


                <div class="card-header">Chercher d'une seance</div>

                <div class="card-body">
		<table class="choix">
			<tr>
				<td>
					<div class="form-group">
			            <label for="date_sea">Date seance</label>
			        	<input name="date_sea" class="form-control" type="date" placeholder="yyyy-mm-dd">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_deb">Heure debut</label>
			        	<input name="heure_deb"  class="form-control" type="time" placeholder="hr-mn-ss">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_fin">Heure fin</label>
			        	<input name="heure_fin"  class="form-control" type="time" placeholder="hr-mn-ss">
			        </div>
				</td>
				
				<td>
					<div class="form-group" style="margin-top:30px;">
			            <input name="submit" type="submit" name="seance" style="margin:50px;margin-left:50px;margin-botton:100px;padding:10px;width:100px;" class="btn btn-primary" value="Afficher" />
			        </div>
				</td>
			</tr>
		</table>

	</div>

			<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Info sur la Seance :</h2>
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>Module</th>
	        		    <th>Date seance</th>
	        		    <th>Heure debut</th>
	        		    <th>Heure fin</th>
                        <th>Type seance</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($details->seance as $seance) 
       

            
       <tr>

       <td>            
      
          {{ $modul->modul}}
         </td>
             <td>  {{ $seance->date}} </td>
             <td>  {{ $seance->Heure_debut}} </td>
             <td>  {{ $seance->Heure_fin}} </td>
             <td>  {{ $seance->type}} </td>
                     @endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>



			<h2>Liste des etudiants :</h2>
			<center>
			<table class="table table-striped">
		    	<thead>
		    		<tr>
		        		<th>CNE</th>
		        		<th>Nom</th>
		        		<th>Prenom</th>
		        		<th>Affecter une absence</th>
		        		<th>Absence déja affecter</th>
		      		</tr>
		    	</thead>
		    	<tbody>
				

 @foreach ($classe->classes as $classe) 
       
       
       
       
	   <tr>
			 <td>  {{ $classe->class_name}} </td>
		 
		 @foreach ($classe->users as $cls)   
		
			 <td>  {{ $cls->name}}</td>
			 @endforeach
		  
					 @endforeach
					 </select>
 
 
					 
 
		 </td>
 

				</tbody>
	  		</table>
				
			</center>
        
      


		<br>



	</div>
		<!-- footer -->
	
</body>
	


</html>
@endsection