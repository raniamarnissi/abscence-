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
            <form action="{{ route('users.store') }}" method="post">
            @csrf


                <div class="card-header">Creation d'un utilisateur</div>

                <div class="card-body">
                <table class="table table-hover">
                <div class="panel-heading">
	            
	            </div>
	            <div class="panel-body">
	             
          
                <div class="form-group">
	                    <label for="name">photo *</label>
	                    <input  name="avatar" type="file" value="{{ old('avatar') }}" id="avatar" />
                        @error('avatar')<div class="text-danger">{{ $message }}</div> @enderror
                      
	                </div>        
                <div class="form-group">
	                    <label for="name">name *</label>
	                    <input class="form-control" name="name" placeholder="Nom du Module" type="text" value="{{ old('name') }}" id="name" />
                        @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                      
	                </div>
	                
	                <div class="form-group">
	                    <label for="name">email *</label>
	                    <input class="form-control" name="email" placeholder="Nom du Module" type="text" value="{{ old('email') }}" id="email"  />
                        @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                   
	                </div>

                    <div class="form-group">
	                    <label for="name">phone *</label>
	                    <input class="form-control" name="phone" placeholder="Nom du Module" type="text" value="{{ old('phone') }}" id="phone"  />
                        @error('phone')<div class="text-danger">{{ $message }}</div> @enderror
                      
	                </div>

                    <div class="form-group">
	                    <label for="name">address *</label>
	                    <input class="form-control" name="address" placeholder="Nom du Module" type="text" value="{{ old('address') }}" id="address"  />
                        @error('address')<div class="text-danger">{{ $message }}</div> @enderror
                 
	                </div>
                    <div class="form-group">
                    <label for="role">role</label>
<select name="role" value="{{ old('role') }}" id="role" class="form-control" placeholder="">

<option>
admin

</option>
<option>
teacher

</option>
<option>
student

</option>

</select>
@error('role')<div class="text-danger">{{ $message }}</div> @enderror
</div>
                  
                    
                    <div class="form-group">
	                    <label for="name">password *</label>
	                    <input class="form-control" name="password" placeholder="Nom du Module" type="password" value="{{ old('password') }}" id="password"  />
                        @error('password')<div class="text-danger">{{ $message }}</div> @enderror
                 
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
