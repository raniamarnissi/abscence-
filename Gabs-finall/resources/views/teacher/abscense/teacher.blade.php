
@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enseignant Page</title>
</head>
<body>

        <div >
            <div class="card">



            <center>    <div class="card-header"><b style="font-size:20px">principal page</b></div></center>

	<div class="container">
		
		<!-- header -->

		

		<h2>the Modules</h2>
        @foreach ($users->moduls as $modul)            
            <tr>
            <h3><ul><li> {{ $modul->modul}}</li></ul></h3>
            
                    @endforeach


    
    <h2>the class</h2>
<table class="table table-hover">
    <thead>
      <tr>
      <th scope="col">classe</th>
        <th scope="col">student</th>
        
        
        

      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($users->classes as $classe) 
       
       
       
       
      <tr>
            <td>  {{ $classe->class_name}} </td>
        
        @foreach ($classe->users->where('role','student') as $cls)   
       
            <td>  {{ $cls->name}}</td>
            @endforeach
         
                    @endforeach
                    </select>


                    

        </td>
      </tr>
    </tbody>
  </table>




		<h2>List of seances :</h2>
		<br>           
		<center>
		<table class="table table-striped">
	    	<thead>
	    		<tr>
         
	        	
              <th>classe</th>
              <th>Module</th>
	        		<th>Date seance</th>
	        		<th>Heure debut</th>
	        		<th>Heure fin</th>
	        		<th>Type seance</th>
	      		</tr>
	    	</thead>
	    	<tbody>
				
			</tbody>
	    	</thead>
	    	<tbody>
        
        
        @foreach ($users->seance as $classe) 
       
     
            
       <tr>
     
       <td> 
       
        {{ $classe->classe}} </td>

         
       <td>  {{ $classe->module}} </td>
             <td>  {{ $classe->date}} </td>
         
         
             <td>  {{ $classe->Heure_debut}} </td>
             <td>  {{ $classe->Heure_fin}} </td>
             <td>  {{ $classe->type}} </td>
                     @endforeach
                  
			</tbody>
  		</table>
			
			<br><br>
	</center>

	</div>


</body>
</html>
@endsection