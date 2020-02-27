@extends('layouts.app')
@section('content')


<div class="card col-md-6 mx-auto mt-5" style="width: 18rem;">
                
                <div class="card-header">
                        
                  Liste des commentaires de {{$clients->nom}} {{$clients->prenom}}
                </div>
                @foreach($datas as $data)
                <ul class="list-group list-group-flush">
                                
                  <li class="list-group-item">{{$data->commentaires}}</li>

                </ul>
                @endforeach
                <a href="/" class="btn btn-primary mb-2">Retour</a>

              </div>    

@endsection