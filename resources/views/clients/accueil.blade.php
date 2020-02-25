@extends('layouts.app')
@section('content')


<div class="row">
        @foreach($clients as $client)
          <div class="card col-md-4 mx-5 mt-5">
            <div class="card-body">
              <p class="card-text">{{$client->nom}} {{$client->prenom}}</p>
              <a href="/users/{{$client->nom}}" class="btn btn-outline-info">Plus d'info</a>
            </div>
            @endforeach

        </div>
@endsection