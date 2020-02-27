@extends('layouts.app')
@section('content')
@foreach($users as $user)
<div class="container">
        <div class="row">
                <div class="col-md-6 mt-5">
<div class="card mx-auto">
        <div class="card-body">
          <h5 class="card-title">{{$user->nom}} {{$user->prenom}}</h5>
          <p class="card-text">
                {{$user->telephone}}
        </p>
       <p>
                {{$user->mail}}
        </p>
          <a href="/" class="btn btn-primary">Retour</a>
        </div>
      </div>
                </div>
        </div>
</div>

              
              
      @endforeach
@endsection