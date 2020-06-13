
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
        
        @foreach ($classe->users as $cls)   
       
            <td>  {{ $cls->name}}</td>
            @endforeach
         
                    @endforeach
                    </select>


                    

        </td>
      </tr>
    </tbody>
  </table>





		<br>           
		
       
           
	</div>


</body>
</html>
@endsection