@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
                <div class="col-md-6 mx-auto mt-5">
<div class="card mx-auto">
        <div class="card-body">
          <h5 class="card-title">Ajout d'un echange</h5>
          <form action="/users/exchanges" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Client</label>
                  <select class="form-control" id="id_clients" name="id_clients">
                      @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->prenom}} {{$client->nom}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Opérateur</label>
                        <select class="form-control" id="id_operateurs" name="id_operateurs">
                            @foreach($operateurs as $operateur)
                        <option value="{{$operateur->id}}">{{$operateur->nom}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect1">Type d'échange</label>
                          <select class="form-control" id="id_exchangesTypes" name="id_exchangesTypes">
                              @foreach($types as $type)
                              <option value="{{$type->id}}">{{$type->types}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="date_echange">Date</label>
                            <input type="date" class="form-control" id="date_echange" name="date_echange">
                        </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Commentaire</label>
                  <textarea class="form-control" id="commentaires" name="commentaires" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</a>

              </form>
        </div>
      </div>
                </div>
        </div>
</div>

@endsection