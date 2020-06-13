@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                <h2> Profile</h2>
</div>

                <div class="card-body">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-10 col-md-offset-1">
                                   <img src="/uploads/images/{{ $user->avatar}}" style="width:150px; height:150px float:left; border-radius:50%; margin-right:25px;">
                                   <h2> {{$user->name}}</h2>
                                   <h2> {{$user->address}}</h2>
                                   <h2> {{$user->phone}}</h2>
                                   <form enctype="multipart/form-data" action="/profile" method="POST" >
                                       <label>Update Profile Image</labes>
                                       <input type="file" name="avatar">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="submit" class="pull-right btn btn-sm btn-primary">
                                   </form>
                               </div>
                           </div> 
                       </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
