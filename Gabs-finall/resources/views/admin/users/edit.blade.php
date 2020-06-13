@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">modifier utilisateur</div>
                <fieldset>
                <div class="card-body">
                <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PATCH')
           
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" name="name" value="{{ old('name') ?? $user->name }}" id="name" class="form-control" placeholder="" >
                      @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>

<div class="form-group">
                      <label for="email">email</label>
                      <input type="email" name="email" value="{{ old('email') ?? $user->email }}" id="email" class="form-control" placeholder="" >
                      @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    
            
                    <div class="form-group">
                      <label for="role">role</label>
                      <input type="text" name="role" value="{{ old('role') ?? $user->role }}" id="role" class="form-control" placeholder="" >
                      @error('role')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="text" name="phone" value="{{ old('phone') ?? $user->phone }}" id="phone" class="form-control" placeholder="" >
                      @error('phone')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" value="{{ old('address') ?? $user->address }}" id="address" class="form-control" placeholder="" >
                      @error('address')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
            <button type="submit" >mdifier teacher !</button>
            </form>
        </div>
    </div>
</div>

    </fieldset>
@endsection
