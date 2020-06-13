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
                <form action="{{ route('modul.update', $modul) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                      <label for="modul">modul</label>
                      <input type="text" name="modul" value="{{ old('modul') ?? $modul->modul }}" id="modul" class="form-control" placeholder="" >
                      @error('modul')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>



            <button type="submit" >mdifier teacher !</button>
            </form>
        </div>
    </div>
</div>

    </fieldset>
@endsection
