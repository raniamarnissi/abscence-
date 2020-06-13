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
			        	<input name="date_sea" value="{{ $seance->date}}" class="form-control" type="date" placeholder="yyyy-mm-dd">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_deb">Heure debut</label>
			        	<input name="heure_deb" value="{{ $seance->Heure_debut}}" class="form-control" type="time" placeholder="hr-mn-ss">
			        </div>
				</td>
				<td>
					<div class="form-group">
			            <label for="heure_fin">Heure fin</label>
			        	<input name="heure_fin" value="{{ $seance->Heure_fin}}" class="form-control" type="time" placeholder="hr-mn-ss">
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
	
</body>
	


</html>
@endsection