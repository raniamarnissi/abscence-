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
                <form action="{{ route('classe.update', $classe) }}" method="POST">
                @csrf
                @method('PATCH')
           
                    <div class="form-group">
                      <label for="class_name">name</label>
                      <input type="text" name="class_name" value="{{ old('class_name') ?? $classe->class_name }}" id="class_name" class="form-control" placeholder="" >
                      @error('class_name')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>


            <button type="submit" >mdifier classe !</button>
            </form>
        </div>
    </div>
</div>

    </fieldset>
@endsection
